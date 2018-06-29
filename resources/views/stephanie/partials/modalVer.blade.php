<div class="modal fade" id="Ver" tabindex="-1" role="dialog" aria-labelledby="Ver">
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

                    <tr> <td>Registro LOC</td>  <td v-if="elemento.fecha_aprobacion_loc==='SIN FECHA DE APROBACION_LOC'">NO</td> <td v-else>SI</td> </tr>

                    <tr> <td>Reingreso</td>  <td v-text="elemento.reingreso">-</td> </tr>

                    <tr> <td>Registro CUIP</td>  <td v-text="elemento.cuip"></td> </tr>

                    <tr> <td>Archivo CUIP</td>  <td>-</td> </tr>

                    <tr> <td>Administrativo</td>  <td v-text="elemento.administrativo"></td> </tr>

                    <tr> <td>Estatus</td>  <td v-text="elemento.estatus"></td> </tr>

                    <tr> <td>Estatus Operativo</td>  <td v-text="elemento.status">-</td> </tr>

                    <tr> <td>Usuario que Registra</td>  <td v-text="elemento.registra">-</td> </tr>

                    <tr> <td>Usuario que Actualizó</td>  <td v-text="elemento.actualiza">-</td> </tr>

                    <tr> <td>Firma</td>  <td> <img src="{{ asset('img/firma.png') }}" alt=""> </td> </tr>

                  </tbody>
                </table>
          </div>

       </div><!--row-->



      <div class="row table-responsive ">
          <div class="col-sm-7 col-sm-offset-1 without-padding">

            <table class="table">
                  <thead >
                    <th colspan="2">Datos Personales</th>

                  </thead>
                  <tbody>
                    <tr> <td>CURP</td>  <td v-text="elemento.curp"></td> </tr>

                    <tr> <td>RFC</td>  <td v-text="elemento.rfc"></td> </tr>

                    <tr> <td>Nombre</td>  <td v-text="elemento.nombre"></td> </tr>

                    <tr> <td>Apellido Paterno</td>  <td v-text="elemento.apellido_paterno"></td> </tr>

                    <tr> <td>Apellido Materno</td>  <td v-text="elemento.apellido_materno"></td> </tr>

                    <tr> <td>Fecha de Nacimiento</td>  <td v-text="elemento.fecha_nacimiento"></td> </tr>

                    <tr> <td>Pais de Nacimiento</td>  <td v-text="elemento.pais">-</td> </tr>

                    <tr> <td>Nacionalidad</td>  <td v-text="elemento.nacionalidad">-</td> </tr>

                    <tr> <td>Entidad de Nacimiento</td>  <td v-text="elemento.entidad">-</td> </tr>

                    <tr> <td>Municipio de Nacimiento</td>  <td v-text="elemento.municipio">-</td> </tr>

                    <tr> <td>Ciudad de Nacimiento</td>  <td v-text="elemento.ciudad">-</td> </tr>

                    <tr> <td>Genero</td>  <td v-text="elemento.genero "></td> </tr>

                    <tr> <td>Estado Civil</td>  <td v-text="elemento.estado_civil"></td> </tr>

                  </tbody>
                </table>
          </div>

       </div><!--row-->



       <div class="row table-responsive ">
          <div class="col-sm-7 col-sm-offset-1 without-padding">

            <table class="table">
                  <thead >
                    <th colspan="2">Escolaridad</th>

                  </thead>
                  <tbody>
                    <tr> <td>Desarrollo Academico</td>  <td v-text="escolaridad.desarrollo_academico"></td> </tr>

                    <tr v-show="escolaridad.cedula_profesional!==''"> <td>Cedula profesional</td>  <td  v-text="escolaridad.cedula_profesional"></td> </tr>

                    <tr> <td>Escuela</td>  <td v-text="escolaridad.escuela"></td> </tr>

                    <tr> <td>Especialidad o Estudio</td>  <td v-text="escolaridad.especialidad_estudio"></td> </tr>

                    <tr> <td>Fecha de Salida</td>  <td v-text="escolaridad.fecha_salida"></td> </tr>

                    <tr> <td>Numero de folio o certificacion</td>  <td v-text="escolaridad.numero_folio_certificado"></td> </tr>

                    <tr> <td>Promedio</td>  <td v-text="escolaridad.promedio"></td> </tr>

                    <tr> <td>Registro SEP</td>  <td v-if="escolaridad.registro_sep===true">SI</td>
                                                <td v-else>NO</td>
                    </tr>

                  </tbody>
                </table>
          </div>

       </div><!--row-->


       <div class="row table-responsive ">
          <div class="col-sm-7 col-sm-offset-1 without-padding">

            <table class="table">
                  <thead >
                    <th colspan="2">Domicilio</th>

                  </thead>
                  <tbody>
                    <tr> <td>Calle</td>  <td v-text="domicilio.calle"></td> </tr>

                    <tr> <td>Numero Exterior</td>  <td  v-text="domicilio.n_ext"></td> </tr>

                    <tr> <td>Estado</td>  <td  v-text="domicilio.entidad "></td> </tr>

                    <tr> <td>Municipio</td>  <td  v-text="domicilio.municipio"></td> </tr>

                    <tr> <td>Colonia</td>  <td  v-text="domicilio.colonia"></td> </tr>

                    <tr> <td>Codigo Postal</td>  <td  v-text="domicilio.codigo_postal"></td> </tr>

                  </tbody>
                </table>
          </div>

       </div><!--row-->


      <div class="row table-responsive ">
          <div class="col-sm-7 col-sm-offset-1 without-padding">

            <table class="table">
                  <thead >
                    <th colspan="2">Contacto</th>

                  </thead>
                  <tbody>
                    <tr v-for="contacto in contactos"> <td v-text="contacto.tipo"></td>  <td v-text="contacto.dato"></td> </tr>

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
