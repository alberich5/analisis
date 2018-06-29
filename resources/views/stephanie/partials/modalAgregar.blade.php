<div class="modal fade" id="AgregarVacaciones" tabindex="-1" role="dialog" aria-labelledby="Ver">
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
                    <th colspan="2">Mostrar Elemento Policial</th>

                  </thead>
                  <tbody>
                    <tr> <td>Id</td>  <td v-text="elemento.id"></td> </tr>

                    <tr> <td>Delegacion</td>  <td v-text="elemento.delegacion"></td> </tr>

                    <tr> <td>CURP</td>  <td v-text="elemento.curp"></td> </tr>

                    <tr> <td>RFC</td>  <td v-text="elemento.rfc"></td> </tr>

                    <tr> <td>Nombre</td>  <td v-text="elemento.nombre"></td> </tr>

                    <tr> <td>Apellido Paterno</td>  <td v-text="elemento.apellido_paterno"></td> </tr>

                    <tr> <td>Apellido Materno</td>  <td v-text="elemento.apellido_materno"></td> </tr>

                    <tr> <td>Fecha de Nacimiento</td>  <td v-text="elemento.fecha_nacimiento"></td> </tr>

                    <tr> <td>Genero</td>  <td v-text="elemento.genero"></td> </tr>

                    <tr> <td>Administrativo</td>  <td v-text="elemento.administrativo"></td> </tr>

                    <tr> <td>Estatus</td>  <td v-text="elemento.estatus"></td> </tr>

                    <tr> <td>Estado Civil</td>  <td v-text="elemento.estado_civil"></td> </tr>

                  </tbody>
                </table>

                <table class="table">
                      <thead >
                        <th colspan="2">Agregar Vacaciones</th>

                      </thead>
                      <tbody>
                        <tr><td colspan="2"><p>Los campos marcados con (*) son obligatorios</p></td></tr>
                        <tr> <td>*Dias</td>
                          <td>


                            <input v-model="vacaciones.dias" id="dias"  class="form-control" name="dias" type="number" @change="calcularFechaTR()"  autofocus placeholder="" aria-describedby="basic-addon1" min="1" :max="diasL"  ></td> </tr>

                        <tr> <td>*Oficio</td>  <td><input v-model="vacaciones.oficio" id="oficio"  class="form-control required" name="oficio" value="" autofocus placeholder="No de oficio" aria-describedby="basic-addon1" ></td> </tr>

                        <tr> <td>*Fecha de solicitud</td>  <td><input v-model="vacaciones.solicitud" type="date"  class="form-control required" id="fecha_solicitud" name="fecha_solicitud"></td> </tr>

                        <tr> <td>*Fecha inicial</td>  <td><input v-model="vacaciones.inicio" type="date" class="form-control required" id="fecha_inicial" name="fecha_inicial" @change="calcularFechaTR()" ></td> </tr>

                        <tr> <td>Fecha final</td>  <td><input  v-model="vacaciones.termino"type="date"  class="form-control required" id="fecha_final" name="fecha_final" readonly></td> </tr>

                        <tr> <td>Fecha reincorporación</td>  <td><input v-model="vacaciones.reincorporacion" type="date" class="form-control required"  id="fecha_reincorporacion" name="fecha_reincorporacion" readonly></td> </tr>

                        <!---<tr> <td>Presentarse en:</td>  <td><input  v-model="vacaciones.presentarse" id="elemento_temporal"  class="form-control required" name="presentarse" value="" autofocus placeholder="Presentarse en" aria-describedby="basic-addon1" ></td> </tr>-->

                        <tr> <td>Elemento temporal</td>  <td><input  v-model="vacaciones.elemento" id="elemento_temporal"  class="form-control" name="elemento_temporal" value="" autofocus placeholder="Nombre del elemento" aria-describedby="basic-addon1" >
                        <p>Cubriendo el servicio durante su periodo vacacional el C. @{{vacaciones.elemento}} </p>
                        <p>Ejemplo:Suboficial Jxxx Dxxx</p>
                        </td> </tr>

                        <tr> <td>Servicio</td>  <td><input v-model="vacaciones.servicio" id="servicio"  class="form-control" name="servicio" value="" autofocus placeholder="Servicio actual" aria-describedby="basic-addon1" >
                         <p>En caso de estar de servicio en @{{vacaciones.servicio}}, en el horario establecido.</p>
                        </td> </tr>

                        <tr> <td>Lugar de vacaciones</td>  <td><input v-model="vacaciones.lugar" id="lugar_vacaciones" class="form-control" name="lugar_vacaciones" value="" autofocus placeholder="Lugar de descanso" aria-describedby="basic-addon1" >
                        <p>Los cuales disfrutará en @{{vacaciones.lugar}} </p>
                        </td> </tr>

                        <tr> <td>Con copia para</td>
					  <td>
						<input v-model="vacacionesCcp.ccp1"  class="form-control required" autofocus placeholder="ccp" aria-describedby="basic-addon1" >
						<input v-model="vacacionesCcp.ccp2"  class="form-control required" autofocus placeholder="ccp" aria-describedby="basic-addon1" >
						<input v-model="vacacionesCcp.ccp3"  class="form-control required" autofocus placeholder="ccp" aria-describedby="basic-addon1" >
						<input v-model="vacacionesCcp.ccp4"  class="form-control required" autofocus placeholder="ccp" aria-describedby="basic-addon1" >
						<input v-model="vacacionesCcp.ccp5"  class="form-control required" autofocus placeholder="ccp" aria-describedby="basic-addon1" >

                        <p>En el oficio de vacaciones: C.C.P………………………………………Recursos Humanos</br>Ejemplo: Recursos Humanos -- No es necesario poner C.C.P.</p>
                      </td> </tr>



                      </tbody>
                    </table>

          </div>

       </div><!--row-->
