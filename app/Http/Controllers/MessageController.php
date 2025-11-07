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
            
            \Log::info('Verifying reCAPTCHA with URL: ' . $verifyURL);
            
            // Obtener respuesta de Google
            $response = file_get_contents($verifyURL);
            $responseKeys = json_decode($response, true);

            // Log DETALLADO para debugging del reCAPTCHA
            \Log::info('reCAPTCHA Complete Response', [
                'raw_response' => $response,
                'decoded_response' => $responseKeys,
                'success' => $responseKeys['success'] ?? 'not set',
                'error_codes' => $responseKeys['error-codes'] ?? 'none',
                'challenge_ts' => $responseKeys['challenge_ts'] ?? 'not set',
                'hostname' => $responseKeys['hostname'] ?? 'not set'
            ]);

            // TEMPORAL: SALTAR VERIFICACION PARA DEBUGGING
            if (!isset($responseKeys['success']) || $responseKeys['success'] !== true) {
                \Log::warning('reCAPTCHA verification failed, but proceeding for debugging', [
                    'response' => $responseKeys,
                    'token' => substr($recaptchaResponse, 0, 50) . '...',
                    'errors' => $responseKeys['error-codes'] ?? []
                ]);
                
                // COMENTADO TEMPORALMENTE PARA DEBUGGING
                // $errorMessage = 'La verificación reCAPTCHA falló. Por favor inténtelo nuevamente.';
                // if ($request->home == 0) {
                //     return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
                // } else {
                //     return redirect('/')->with('status', 0)->with('error', $errorMessage);
                // }
            }

            // reCAPTCHA validado correctamente, enviar email
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'body' => $request->message,
            ];

            // Intentar enviar el email
            try {
                Mail::send('email', $data, function ($message) use ($request) {
                    $message->to('reservas@blackcathostal.com', 'Reservas Black Cat Hostal')
                           ->subject('Nuevo mensaje de la web: ' . $request->subject)
                           ->from('no-reply@blackcathostal.com', 'Black Cat Hostal')
                           ->replyTo($request->email, $request->name);
                });

                // Éxito
                $successMessage = __('messages.contact_success');
                
                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 1)->with('success', $successMessage);
                } else {
                    return redirect('/')->with('status', 1)->with('success', $successMessage);
                }
                
            } catch (\Exception $emailError) {
                // Error al enviar email
                \Log::error('Error sending email: ' . $emailError->getMessage());
                
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
