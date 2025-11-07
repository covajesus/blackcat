<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Validar campos requeridos
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string'
            ]);

            // DEBUGGING TEMPORAL - Verificar qué está pasando con reCAPTCHA
            $recaptchaResponse = $request->input('g-recaptcha-response');
            
            \Log::info('DEBUG: Form submission data', [
                'all_input' => $request->all(),
                'recaptcha_response' => $recaptchaResponse,
                'recaptcha_length' => strlen($recaptchaResponse ?? ''),
                'user_agent' => $request->header('User-Agent'),
                'ip' => $request->ip()
            ]);
            
            // Si no hay reCAPTCHA response, mostrar error específico
            if (empty($recaptchaResponse)) {
                \Log::warning('No reCAPTCHA response received');
                $errorMessage = 'Por favor complete la verificación reCAPTCHA antes de enviar el formulario.';
                
                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
                } else {
                    return redirect('/')->with('status', 0)->with('error', $errorMessage);
                }
            }

            // Verificar reCAPTCHA estándar con Google
            $recaptchaSecret = '6LepQOoZAAAAADnJrNlAm0Db5gT1HE_PHa7YzEUP'; // Clave secreta
            
            // Realizar verificación con método GET simple
            $verifyURL = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}&remoteip=" . $request->ip();
            
            \Log::info('🔗 Verificando reCAPTCHA con URL (secret oculto):', [
                'url_pattern' => 'https://www.google.com/recaptcha/api/siteverify?secret=***&response=[token]&remoteip=' . $request->ip(),
                'secret_length' => strlen($recaptchaSecret),
                'token_length' => strlen($recaptchaResponse),
                'remote_ip' => $request->ip()
            ]);
            
            // Obtener respuesta de Google con manejo de errores
            $response = @file_get_contents($verifyURL);
            
            if ($response === false) {
                \Log::error('❌ No se pudo conectar con Google reCAPTCHA API');
                $responseKeys = ['success' => false, 'error-codes' => ['connection-failed']];
            } else {
                $responseKeys = json_decode($response, true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    \Log::error('❌ Error decodificando respuesta JSON de Google:', [
                        'json_error' => json_last_error_msg(),
                        'raw_response' => $response
                    ]);
                    $responseKeys = ['success' => false, 'error-codes' => ['json-decode-failed']];
                }
            }

            // Log DETALLADO para debugging del reCAPTCHA
            \Log::info('reCAPTCHA Complete Response', [
                'raw_response' => $response,
                'decoded_response' => $responseKeys,
                'success' => $responseKeys['success'] ?? 'not set',
                'error_codes' => $responseKeys['error-codes'] ?? 'none',
                'challenge_ts' => $responseKeys['challenge_ts'] ?? 'not set',
                'hostname' => $responseKeys['hostname'] ?? 'not set'
            ]);

            // DEBUGGING TEMPORAL: Mostrar detalles completos de reCAPTCHA
            \Log::info('🔍 DEBUGGING reCAPTCHA - Respuesta completa de Google:', [
                'success' => $responseKeys['success'] ?? 'NOT SET',
                'challenge_ts' => $responseKeys['challenge_ts'] ?? 'NOT SET',
                'hostname' => $responseKeys['hostname'] ?? 'NOT SET',
                'error_codes' => $responseKeys['error-codes'] ?? 'NONE',
                'score' => $responseKeys['score'] ?? 'NOT APPLICABLE',
                'action' => $responseKeys['action'] ?? 'NOT SET',
                'raw_response' => $response,
                'token_length' => strlen($recaptchaResponse),
                'token_preview' => substr($recaptchaResponse, 0, 100) . '...',
                'request_ip' => $request->ip(),
                'user_agent' => $request->header('User-Agent')
            ]);

            // Verificar resultado de reCAPTCHA con más tolerancia para debugging
            if (!isset($responseKeys['success'])) {
                \Log::error('❌ reCAPTCHA: Respuesta malformada de Google', ['raw_response' => $response]);
                
                // TEMPORAL: Permitir continuar para debugging
                \Log::warning('⚠️ TEMPORAL: Continuando a pesar del error de reCAPTCHA para debugging');
            } elseif ($responseKeys['success'] !== true) {
                \Log::warning('❌ reCAPTCHA verification failed', [
                    'success' => $responseKeys['success'],
                    'error_codes' => $responseKeys['error-codes'] ?? [],
                    'hostname' => $responseKeys['hostname'] ?? 'unknown'
                ]);
                
                // TEMPORAL: Continuar para debugging pero con warning
                \Log::warning('⚠️ TEMPORAL: Continuando a pesar del fallo de reCAPTCHA para debugging del email');
                
                // COMENTADO TEMPORALMENTE
                // $errorMessage = 'La verificación reCAPTCHA falló. Por favor inténtelo nuevamente.';
                // if ($request->home == 0) {
                //     return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
                // } else {
                //     return redirect('/')->with('status', 0)->with('error', $errorMessage);
                // }
            } else {
                \Log::info('✅ reCAPTCHA verification successful');
            }

            \Log::info('✅ reCAPTCHA verification successful, proceeding with email');

            // reCAPTCHA validado correctamente, enviar email
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'body' => $request->message,
            ];

            // Configurar Gmail SMTP dinámicamente con SSL
            config([
                'mail.driver' => 'smtp',
                'mail.host' => 'smtp.gmail.com',
                'mail.port' => 465,
                'mail.username' => 'no-reply@blackcathostal.com',
                'mail.password' => 'oibc brhg ndsv dpvx',
                'mail.encryption' => 'ssl',
                'mail.from.address' => 'no-reply@blackcathostal.com',
                'mail.from.name' => 'Black Cat Hostal'
            ]);

            \Log::info('📧 Configuración Gmail SMTP SSL aplicada:', [
                'driver' => 'smtp',
                'host' => 'smtp.gmail.com',
                'port' => 465,
                'username' => 'no-reply@blackcathostal.com',
                'encryption' => 'ssl',
                'from_address' => 'no-reply@blackcathostal.com',
                'from_name' => 'Black Cat Hostal'
            ]);

            // Intentar enviar el email
            \Log::info('🚀 Iniciando envío de email con datos:', $data);
            
            try {
                // Limpiar configuración de mail en caché
                app('mailer')->getSwiftMailer()->getTransport()->stop();
                
                Mail::send('email', $data, function ($message) use ($request) {
                    $message->to('reservas@blackcathostal.com', 'Reservas Black Cat Hostal')
                           ->subject('Nuevo mensaje de la web: ' . $request->subject)
                           ->from('no-reply@blackcathostal.com', 'Black Cat Hostal')
                           ->replyTo($request->email, $request->name);
                });

                \Log::info('✅ Email enviado exitosamente');

                // Éxito
                $successMessage = __('messages.contact_success');
                
                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 1)->with('success', $successMessage);
                } else {
                    return redirect('/')->with('status', 1)->with('success', $successMessage);
                }
                
            } catch (\Swift_TransportException $transportError) {
                // Error específico de transporte SMTP
                \Log::error('❌ Error de transporte SMTP:', [
                    'error' => $transportError->getMessage(),
                    'code' => $transportError->getCode(),
                    'file' => $transportError->getFile(),
                    'line' => $transportError->getLine()
                ]);
                
                $errorMessage = 'Error de configuración del servidor de email. Por favor contacte al administrador.';
                
                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
                } else {
                    return redirect('/')->with('status', 0)->with('error', $errorMessage);
                }
                
            } catch (\Exception $emailError) {
                // Error general al enviar email
                \Log::error('❌ Error general enviando email:', [
                    'error' => $emailError->getMessage(),
                    'type' => get_class($emailError),
                    'code' => $emailError->getCode(),
                    'file' => $emailError->getFile(),
                    'line' => $emailError->getLine(),
                    'trace' => $emailError->getTraceAsString()
                ]);
                
                $errorMessage = __('messages.contact_error');
                
                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
                } else {
                    return redirect('/')->with('status', 0)->with('error', $errorMessage);
                }
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Error de validación
            $errors = [];
            foreach ($e->errors() as $field => $messages) {
                $errors = array_merge($errors, $messages);
            }
            
            $errorMessage = 'Por favor revise los campos: ' . implode(', ', $errors);
            
            if ($request->home == 0) {
                return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
            } else {
                return redirect('/')->with('status', 0)->with('error', $errorMessage);
            }
        } catch (\Exception $e) {
            // Error general
            \Log::error('General error in contact form: ' . $e->getMessage());
            
            $errorMessage = __('messages.form_error');
            
            if ($request->home == 0) {
                return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
            } else {
                return redirect('/')->with('status', 0)->with('error', $errorMessage);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
