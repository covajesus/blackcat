<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Detectar si hay prefijo de idioma en la URL
        $segments = $request->segments();
        $room = null;
        
        // Si la URL es /es/room/detail/family o /en/room/detail/family
        if (count($segments) >= 4 && in_array($segments[0], ['es', 'en', 'pt'])) {
            $room = $segments[3]; // room está en la posición 3
        } 
        // Si la URL es /room/detail/family (sin prefijo)
        elseif (count($segments) >= 3) {
            $room = $segments[2]; // room está en la posición 2
        }

        if ($room == 'family') {
            return view('frontend.family');
        } elseif ($room == 'superior-king') {
            return view('frontend.superior_king');
        } elseif ($room == 'twin') {
            return view('frontend.twin');
        } elseif ($room == 'king-queen') {
            return view('frontend.king-queen');
        } elseif ($room == 'reduce' || $room == 'mobility') {
            return view('frontend.reduce');
        }
        
        // Si no se encuentra la habitación, redirigir al inicio
        return redirect()->route('home');
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
        //
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
