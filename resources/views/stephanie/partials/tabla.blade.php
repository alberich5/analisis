
<!--Inicio panel de resultados-->
<div  class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <center><h3 class="panel-title">Elementos</h3></center>
  </div>
  <div class="panel-body  table-responsive">
            <table class="table table-hover table-striped table-bordered" >
          <thead class="btn-default">
            <tr >

              <th colspan="1" >
               Opciones
              </th>

              <th><center>
                  <label class="btn btn-default" style="display: block; width: 100%; height:100%">
                    <input type="checkbox"  value="Exp" style="-webkit-appearance: none;">ID
                  </label>
                </center>
              </th>

              <th><center>
                <label class="btn btn-default" style="display: block; width: 100%; height:100%">
                  <input type="checkbox" style="-webkit-appearance: none;" >Nombre
                </label>
              </center></th>


              <th><center>
                <label class="btn btn-default" style="display: block; width: 100%; height:100%">
                  <input type="checkbox" style="-webkit-appearance: none;" >Ap. Paterno
                </label>
              </center></th>

              <th><center>
                <label class="btn btn-default" style="display: block; width: 100%; height:100%">
                  <input type="checkbox" style="-webkit-appearance: none;" >Ap. Materno
                </label>
              </center></th>

              <th><center>
                <label class="btn btn-default" style="display: block; width: 100%; height:100%">
                  <input type="checkbox" style="-webkit-appearance: none;" >Delegacion
                </label>
              </center></th>

              <th><center>
                <label class="btn btn-default" style="display: block; width: 100%; height:100%">
                  <input type="checkbox" style="-webkit-appearance: none;" >F. Inicio Laboral
                </label>
              </center></th>

              <th><center>
                <label class="btn btn-default" style="display: block; width: 100%; height:100%">
                  <input type="checkbox" style="-webkit-appearance: none;" >Estatus
                </label>
              </center></th>

            </tr>
          </thead>
          <tbody>

              <tr v-for="elemento in filter" >

              <th colspan="1">

                  @can("recursos.elemento.show")
                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                  </a>
                  @endcan

                  @can("recursos.elemento.downloadModoHonesto")
                  <a  :href="downloadModoHonesto(elemento.id)" class="btn btn-default" title="Modo honesto">


                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                  </a>
                  @endcan

                  @can("recursos.elemento.downloadContrato")
                  <a :href="downloadContrato(elemento.id)" class="btn btn-default" title="Contrato">

                        <span class="glyphicon glyphicon-copy" aria-hidden="true"></span>
                  </a>
                  @endcan

                  @can("recursos.elemento.downloadOficioAlta")
                  <a class="btn btn-default" :href="downloadOficioAlta(elemento.id)" title="Oficio de alta">

                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                  </a>
                  @endcan
                  @can("recursos.elemento.downloadFichaPersonal")
                  <a class="btn btn-default" :href="downloadFichaPersonal(elemento.id)" title="Ficha Personal">

                        <span class=" glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  </a>
                  @endcan

                  @can("recursos.elemento.vacaciones.create")
                  <div v-if="elemento.vacaciones==true">
                    <a  class="btn btn-default" v-on:click="agregarVacaciones(elemento.id)"  title="Agregar vacaciones">

                          <span class=" glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                    </a>
                  </div>

                  @endcan

                  @can("recursos.elemento.vacaciones.historial")
                  <div v-if="elemento.historial==true">
                    <a  class="btn btn-default" v-on:click="historialVacaciones(elemento.id)"  title="Historial vacaciones">

                          <span class=" glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>
                  </div>

                  @endcan




                  <!--
                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Seguro de vida">

                        <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                  </a>

                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Baja RUPO">

                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                  </a>


                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                  </a>

                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                  </a>

                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class=" glyphicon glyphicon-print" aria-hidden="true"></span>
                  </a>

                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                  </a>



                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class=" glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                  </a>

                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                  </a>

                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                  </a>

                  <a href="#" class="btn btn-default" v-on:click="ver(elemento.id)" title="Ver">

                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                  </a>

                  <button type="button" class="btn btn-default" title="Kardex Laboral">
                  <span class="glyphicon glyphicon-eye-open"></span> Kardex
                  </button>

                -->

              </th>

              <th><center v-text="elemento.id ">
                </center>
              </th>

              <th><center v-text="elemento.nombre ">

              </center></th>


              <th><center v-text="elemento.apellido_paterno ">

              </center></th>

              <th><center v-text="elemento.apellido_materno ">

              </center></th>

              <th><center v-text="elemento.delegacion ">

              </center></th>

              <th><center v-text="elemento.fecha_inicio_laboral ">

              </center></th>

              <th><center v-text="elemento.estatus ">

              </center></th>

            </tr>
          </tbody>
        </table>



  </div>
</div> <!--Fin modal tabla  -->
