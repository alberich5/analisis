<div class="modal fade" id="HistorialVacaciones" tabindex="-1" role="dialog" aria-labelledby="Ver">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span  aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">Elemento Policial</h4></center>

      </div>
      <div class="modal-body">
      <div class="row table-responsive ">
          <div class="col-sm-7 col-sm-offset-1 without-padding">

            <table class="table">
                  <thead >
                    <th>Vacaciones</th>
                    <th>Fecha Inicial</th>
                    <th>Fecha Final</th>
                    <th>Oficio</th>
                    <th>Usuario</th>
                  </thead>
                  <tbody>
                    <tr v-for="vacacion in vacacionesHistorial">
                      <td v-text="vacacion.tipo"></td>
                      <td v-text="vacacion.fecha_inicial"></td>
                      <td v-text="vacacion.fecha_final"></td>
                      <td v-text="vacacion.oficio"></td>
                      <td v-text="vacacion.username"></td>
                      <td>
                          <a href="#"  @click="descargarVacaciones(vacacion.id)" class="btn btn-success"  title="Descargar">
                          <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                          </a>
                      </td>

                  </tbody>
                </table>
          </div>

       </div><!--row-->





    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
