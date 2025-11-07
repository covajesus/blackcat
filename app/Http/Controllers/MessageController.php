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

            // Para debugging - verificar si reCAPTCHA está presente
            $recaptchaResponse = $request->input('g-recaptcha-response');
            
            // Si no hay reCAPTCHA response, mostrar error específico
            if (empty($recaptchaResponse)) {
                $errorMessage = __('messages.recaptcha_error');
                
                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
                } else {
                    return redirect('/')->with('status', 0)->with('error', $errorMessage);
                }
            }

            // Verificar reCAPTCHA Enterprise con Google
            $recaptchaSecret = '6LepQOoZAAAAADnJrNlAm0Db5gT1HE_PHa7YzEUP'; // Clave secreta
            
            // Determinar la acción esperada basada en el formulario
            $expectedAction = ($request->home == 0) ? 'CONTACT_PAGE_FORM' : 'CONTACT_FORM';
            
            // Datos para la verificación
            $postData = [
                'secret' => $recaptchaSecret,
                'response' => $recaptchaResponse
            ];
            
            // Configurar contexto para la petición POST
            $context = stream_context_create([
                'http' => [
                    'method' => 'POST',
                    'header' => 'Content-Type: application/x-www-form-urlencoded',
                    'content' => http_build_query($postData)
                ]
            ]);
            
            // Realizar verificación
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
            $responseKeys = json_decode($response, true);

            // Log para debugging del reCAPTCHA
            \Log::info('reCAPTCHA Enterprise Response', $responseKeys);

            // Verificar el resultado
            if (!isset($responseKeys['success']) || $responseKeys['success'] !== true) {
                $errorMessage = __('messages.recaptcha_error');
                
                // Log para debugging
                \Log::warning('reCAPTCHA Enterprise failed', ['response' => $responseKeys]);
                
                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 0)->with('error', $errorMessage);
                } else {
                    return redirect('/')->with('status', 0)->with('error', $errorMessage);
                }
            }
            
            // Verificar score (opcional - reCAPTCHA v3 proporciona un score de 0.0 a 1.0)
            if (isset($responseKeys['score']) && $responseKeys['score'] < 0.5) {
                \Log::warning('reCAPTCHA score too low', ['score' => $responseKeys['score']]);
                // Opcionalmente puedes rechazar si el score es muy bajo
                // Por ahora lo permitiremos pero con log
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
