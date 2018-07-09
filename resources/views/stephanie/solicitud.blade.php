@extends('stephanie.plantilla')
@section('css')
  <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
@endsection
@section('content')
<!--div del contenedor-->
<div class="container" id="app"  style="margin-left: 3%; width: 95%;">
  <!--div del formulario a capturar-->
  <div style="width: 55%;float: left;">
    <form action="" method="post" enctype="text/plain">
        <fieldset><legend>SOLICITUD PARA ANALISIS DE RIESGOS</legend>
          <p><input type="text" v-model="bienvenida"  placeholder="Buenas tardes Subofil. Nombre apellidos"></p>
          <p>Por este medio y en atención ala peticion del: <input type="text" name="nombre" size="40" maxlength="80" placeholder="nombre del representante y cargo" v-model="nomrepresentante">;de contractar el servicio de seguridad de vigilancia que promociona la PABIC, solicito su valioso apoyo para realizacion del Analisis de Riesgos en el inmueble ubicacdo en <input type="text" name="nombre" size="40" maxlength="80" placeholder="Ubicacion calle y numero" v-model="direccion">, el cual fue agendado para el dia <input type="date"  v-model="fecha_programada"> en un horario de:
             <input type="time"  v-model="hora_programada">
        </p>
            <p>Lo anterior, para asu atención y medidas pertinentes.</p>
            <p>Sin Otro particular, agradeciendo su compresión y apoyo, envío un cordial saludo.</p>
            <p>Agradeceré confirme de recibido.</p>
      </p>

        <input type="hidden" name="datosformulario">
      </fieldset><br />
        <input type="reset" value="Mostrar" v-on:click="mostrar()">
      </form>
  </div>
  <!-- fin del formulrio para la captura de informacion--->

  <!--div para mostrar el contenido-->
  <div style="width: 45%;float: left;">
    <p>@{{ textocompleto }}</p>
    <p v-if="statusenviar!=0"><input type="reset" value="Enviar" v-on:click="btnenviar()"></p>
  </div>
  <!-- fin del div para mostrar el contenido--->
  <!--div para ver la data-->
  <div class="row">
     <div class="col-xs-12">
       <pre>@{{$data}}</pre>
     </div>
   </div>
   <!-- fin del div de data--->

</div>
@endsection

@section('js')
<script src="{{ asset('js/materialize.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.datepicker').datepicker();
  });

var app = new Vue({
el: '#app',
created: function() {

},
data: {
  bienvenida: '',
  nomrepresentante: '',
  fecha_programada:'',
  hora_programada:'',
  direccion: '',
  dia: '',
  numdia: '',
  mes: '',
  fechasolicitada: '',
  textocompleto:'',
  statusenviar:'0',
  dias:[{'nombre':'Lunes'},{'nombre':'Martes'},{'nombre':'Miercoles'},{'nombre':'Jueves'},{'nombre':'Viernes'},{'nombre':'Sabado'}],
  numeros:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17],
  meses:['enero','febrero','marzo','abril','junio','julio','Agosto'],
},
methods:{

  mostrar:function(){
    this.textocompleto="Por este medio y en atención ala peticion del "+this.nomrepresentante+"; de contratar el servicio de seguridad vigilancia que proporciona la PABIC, solicito su valiso apoyo para la realización del Análisis de Riesgos en el inmueble ubicado en"+this.direccion+", el cual fue agendado para el dia"+this.fecha_programada+" a las"+this.hora_programada+" horas.";
    this.statusenviar="1";
  },
  btnenviar:function(){
    this.textocompleto="";
    this.statusenviar="0";
  }
}
})
</script>
@endsection
