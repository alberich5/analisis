@extends('stephanie.plantilla')
@section('css')

@endsection
@section('content')
<!--div del contenedor-->
<div class="container" id="app"  style="margin-left: 3%; width: 95%;">
  <!--div del formulario a capturar-->


  <center> <h3>Estas donde se listaran todas las solucitudes de servicios</h3></center>

  <table class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>Id</th>
      <th>Fecha Solitud</th>
      <th>Fecha Atendido</th>
      <th>Encargado Analisis</th>
      <th>Nombre del Representante</th>
      <th>Cargo Representante</th>
      <th>Nombre de la empresa</th>
      <th>Direccion</th>
      <th>Fecha programada</th>
      <th>Hora programada</th>
      <th>Opciones</th>
    </thead>
    <tbody>
      <tr v-for="(soli, index) in solicitudes">
        <td v-text="soli.id"></td>
        <td v-text="soli.fecha_solicitud"></td>
        <td v-text="soli.fecha_atendido"></td>
        <td v-text="soli.encargado_analisis"></td>
        <td v-text="soli.nombre_representante"></td>
        <td v-text="soli.cargo_represemtante"></td>
        <td v-text="soli.nombre_empresa"></td>
        <td v-text="soli.direccion"></td>
        <td v-text="soli.fecha_programada"></td>
        <td v-text="soli.hora_programada"></td>
        <td><button type="button" class="btn btn-secondary" v-on:click="mostrar()">ver</button> </td>
      </tr>
    </tbody>
  </table>

<!--Es la data que se muetra-->
  <div class="row">
     <div class="col-xs-12">
       <pre>@{{$data}}</pre>
     </div>
  </div>

</div>
@endsection

@section('js')
<script src="{{ asset('js/materialize.js') }}"></script>
<script type="text/javascript">


var app = new Vue({
el: '#app',
created: function() {
  this.prueba();
},
data: {
  solicitudes:[]
},

methods:{
  prueba:function(){
    var urlPersonal = '/mostrarsolicitudes';
    axios.get(urlPersonal).then(response => {
    this.solicitudes = response.data
  });
},
mostrar:function(){
 alert("mensaje");
  $('#myModal').modal('show');
}


}
})
</script>
@endsection
