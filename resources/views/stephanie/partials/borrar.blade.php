<form method="POST" v-on:submit.prevent="busqueda">
   <div class="panel panel-default col-md-10 col-md-offset-1">
    <div class="panel-heading">
      <center><h3 class="panel-title">BUSQUEDA</h3></center>
    </div>
    <div class="panel-body ">

      <div class="row">
        <div class="col-sm-3 col-sm-offset-1">
          <div class="form-group">
            <label for="">ID</label>
            <input type="number" name="" value="" class="form-control" style="text-transform:uppercase;" v-model="searchElemento.id">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3 col-sm-offset-1">
          <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="" value="" class="form-control" style="text-transform:uppercase;" v-model="searchElemento.nombre">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3 col-sm-offset-1">
          <div class="form-group">
            <label for="">Apellido Paterno</label>
            <input type="text" name="" value="" class="form-control" style="text-transform:uppercase;" v-model="searchElemento.paterno">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3 col-sm-offset-1">
          <div class="form-group">
            <label for="">Apellido Materno</label>
            <input type="text" name="" value="" class="form-control" style="text-transform:uppercase;" v-model="searchElemento.materno">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-3 col-sm-offset-1">
          <button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span> Buscar
          </button>
          <button type="button" class="btn btn-default" v-on:click="limpiar()" title="Borra los campos de busqueda">
           Limpiar
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
