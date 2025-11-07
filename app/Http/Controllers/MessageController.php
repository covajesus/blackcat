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
            // Log para debugging
            \Log::info('Form submission started', $request->all());
            
            $inputs = request()->all();

            // Validar campos requeridos (sin reCAPTCHA por ahora para debugging)
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string'
            ]);

            \Log::info('Validation passed');

            // Verificar reCAPTCHA
            if (isset($inputs['g-recaptcha-response']) && !empty($inputs['g-recaptcha-response'])) {
                \Log::info('reCAPTCHA verified');
                
                $to_name = 'Reservas Black Cat Hostal';
                $to_email = 'reservas@blackcathostal.com';
                $data = [
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'body' => $request->message,
                ];
                
                \Log::info('About to send email', $data);
                
                Mail::send(['html' => 'email'], $data, function ($message) use ($to_name, $to_email, $request) {
                    $message->to($to_email, $to_name)->subject('Nuevo mensaje de la web: ' . $request->subject);
                    $message->from('no-reply@blackcathostal.com', 'Black Cat Hostal');
                    $message->replyTo($request->email, $request->name);
                });

                \Log::info('Email sent successfully');

                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 1);
                } else {
                    return redirect('/')->with('status', 1);
                }
            } else {
                \Log::warning('reCAPTCHA failed or missing');
                if ($request->home == 0) {
                    return redirect('contactus')->with('status', 0)->with('error', __('messages.recaptcha_error'));
                } else {
                    return redirect('/')->with('status', 0)->with('error', __('messages.recaptcha_error'));
                }
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Error de validación
            \Log::error('Validation error: ' . json_encode($e->errors()));
            
            if ($request->home == 0) {
                return redirect('contactus')->with('status', 0)->with('error', 'Por favor revise todos los campos del formulario.');
            } else {
                return redirect('/')->with('status', 0)->with('error', 'Por favor revise todos los campos del formulario.');
            }
        } catch (\Exception $e) {
            // Log del error para debugging
            \Log::error('Error sending email: ' . $e->getMessage() . ' - Line: ' . $e->getLine() . ' - File: ' . $e->getFile());
            
            if ($request->home == 0) {
                return redirect('contactus')->with('status', 0)->with('error', __('messages.form_error'));
            } else {
                return redirect('/')->with('status', 0)->with('error', __('messages.form_error'));
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
