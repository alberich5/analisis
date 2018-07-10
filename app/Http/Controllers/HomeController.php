<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Analisis_solicitud_servicio;
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

    //ver la vista de Solicitud
    public function solicitud()
    {
        return view('stephanie.solicitud');
    }
    //ver la vista de Solicitudes
    public function solicitudes()
    {
        return view('stephanie.solicitudes');
    }
    //funcion para mostrar todas las solicitudes y enviarselas a vue
    public function mostrarsolicitudes()
    {
      $solicitudes = DB::table('analisis_solicitud_servicio')
             ->get();
      return $solicitudes;
    }

    //Guardar una solicitud en la BD
    public function guardar(Request $request)
    {
        $encargado_analisis=$request->variable[0]['encargado_analisis'];
        $nom_representante=$request->variable[0]['nombre_representante'];
        $cargo_representante=$request->variable[0]['cargo_representante'];
        $nombre_empresa=$request->variable[0]['nombre_empresa'];
        $direccion=$request->variable[0]['direccion'];
        $fecha_programada=$request->variable[0]['fecha_programa'];
        $hora_programada=$request->variable[0]['hora_programada'];
        $fecha_solicitud=$request->variable[0]['fecha_solicitud'];

        //Se guarda en la Base de datos
        $solicitud=new Analisis_solicitud_servicio;
        $solicitud->fecha_solicitud=$fecha_solicitud;
        $solicitud->encargado_analisis=$encargado_analisis;
        $solicitud->nombre_representante=$nom_representante;
        $solicitud->cargo_represemtante=$cargo_representante;
        $solicitud->nombre_empresa=$nombre_empresa;
        $solicitud->direccion=$direccion;
        $solicitud->fecha_programada=$fecha_programada;
        $solicitud->hora_programada=$hora_programada;
        $solicitud->save();

        return "se guardo en la base";
    }
}
