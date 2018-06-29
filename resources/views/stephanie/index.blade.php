@extends('stephanie.plantilla')

@section('content')
<div class="container">
    <div class="row">
      <div id="app">
        <div class="row">
           <div class="col-xs-12">
             <pre>@{{$data}}</pre>
           </div>
         </div>
        <div class="formBusqueda">
          <!---Se incluye el formulario de busqueda--->
          @include('stephanie.partials.borrar')
        </div>

        <div class="tablaBusqueda">
          @include('stephanie.partials.tabla')
          <!---Botones para lanzar los modales--->
          <input type="submit" class="btn btn-info" value="ver" v-on:click="ver()">
          <input type="submit" class="btn btn-info" value="Agregar" v-on:click="Agregar()">
          <input type="submit" class="btn btn-info" value="Historial" v-on:click="Historial()">
            <!---Fin de los botones--->

          <!---Se incluen los modales--->
          @include('stephanie.partials.modalVer')
          @include('stephanie.partials.modalHistorial')
          @include('stephanie.partials.modalAgregar')
          <!---fin de los modales--->
        </div>


      </div><!--FIN  DEL DIV VUE--->

    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
var app = new Vue({
el: '#app',
created: function() {
//  this.mostrar();
},
data: {
  message: 'Hello Vue!',
  elementos:[{id:'1',nombre:'omar',delegacion:'VALLES CENTRALES',curp:'ZAH09104'}],
  prueba:[],
  searchElemento:{id:'1',nombre:'omar',paterno:'zarate',materno:'hipolito'},
  idElemento:'',
  elemento:{id:'1',nombre:'omar',delegacion:'VALLES CENTRALES',curp:'ZAH09104hocrpm04',rfc:'ZAH09104',nombre:'pedrito',apellido_paterno:'sanchez',apellido_materno:'aguero',fecha_nacimiento:'23-10-208',pais:'Venezuela',nacionalidad:'Colombiana',entidad:'chalco',municipio:'vegas',ciudad:'miami',genero:'masculino',estado_civil:'soltera',reingreso:'11-11-2011',cuip:'79273939238',administrativo:'administrativo',estatus:'operativo',registra:'ruby cosme',actualiza:'adriana mendez'},
  documentacion:[],
  escolaridad:{promedio:'kinder',numero_folio_certificado:'4567',fecha_salida:'14-10-2018',promedio:'8.6',desarrollo_academico:'primaria',cedula_profesional:'9999999',escuela:'Enrique REyez',especialidad_estudio:'chef'},
  domicilio:{calle:'callejon del beso',n_ext:'-9',entidad:'yucatan',municipio:'loma bonita',colonia:'trinidad de las huertas',codigo_postal:'78000'},
  contactos:[],
  vacaciones:{ccp:'copias para',id_elemento:'1',solicitud:'1',inicio:'27-06-2018',presentarse:'28-06-2018',termino:'',reincorporacion:'',oficio:'',elemento:'Pol. Aux.',servicio:'',lugar:'',dias:''},
  vacacionesCcp:{ccp1:'',ccp2:'',ccp3:'',ccp4:'',ccp5:''},
  vacacionesHistorial:[{tipo:'1',fecha_inicial:'27-06-2018',fecha_final:'28-06-2018',oficio:'123',username:'STEPHANIE'},
                       {tipo:'2',fecha_inicial:'29-06-2018',fecha_final:'30-06-2018',oficio:'124',username:'OMAR'},
                       {tipo:'3',fecha_inicial:'29-06-2018',fecha_final:'30-06-2018',oficio:'125',username:'RUBY'}],
  diasL:'',
},
methods:{
  ver:function(){
    $('#Ver').modal('show');
  },
  Agregar:function(){
    $('#AgregarVacaciones').modal('show');
  },
  Historial:function(){
    $('#HistorialVacaciones').modal('show');
  }
}
})
</script>
@endsection
