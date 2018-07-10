<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.solicitud
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stephanie.index');
    }
    public function solicitud()
    {
        return view('stephanie.solicitud');
    }
    public function solicitudes()
    {
        return view('stephanie.solicitudes');
    }

    public function guardar(Request $request)
    {
        $encargado_analisis=$request->variable[0]['encargado_analisis'];
        $nom_representante=$request->variable[0]['nombre_representante'];
        $direccion=$request->variable[0]['direccion'];
        $fecha_programada=$request->variable[0]['fecha_programa'];
        $hora_programada=$request->variable[0]['hora_programada'];
        $fecha_solicitud=$request->variable[0]['fecha_solicitud'];
        return $fecha_solicitud;
    }
}
