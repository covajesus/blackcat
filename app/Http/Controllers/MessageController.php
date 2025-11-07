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
        $inputs = request()->all();

        if($inputs['g-recaptcha-response'] != '') {
            $to_name = 'Reservas Black Cat Hostal';
            $to_email = 'reservas@blackcathostal.com';
            $data = array('name'=> $request->name, 'phone'=> $request->phone, 'email'=> $request->email, 'body'=> $request->body);
            Mail::send(['html' => 'email'], $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)->subject('Nuevo mensaje de la web');
                $message->from('no-reply@blackcathostal.com','Black Cat Hostal');
            });

            if($request->home == 0) {
                return redirect('contactus')->with('status', 1);
            } else {
                return redirect('/')->with('status', 1);
            }
        } else {
            if($request->home == 0) {
                return redirect('contactus')->with('status', 0)->with('error', __('messages.recaptcha_error'));
            } else {
                return redirect('/')->with('status', 0)->with('error', __('messages.recaptcha_error'));
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
