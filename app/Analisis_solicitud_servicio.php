<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analisis_solicitud_servicio extends Model
{
  protected $table = 'analisis_solicitud_servicio';

protected $primaryKey='id';
 protected $fillable = [
    'fecha_solicitud',
    'fecha_atendido',
     'encargado_analisis',
     'nombre_representante',
     'cargo_represemtante',
     'nombre_empresa',
     'direccion',
     'fecha_programada',
     'hora_programada'
 ];
}
