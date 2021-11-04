@extends('layouts.adminlte')

@section('content')
<br>
    <div class="container">
       <h4>Mis archivos compartidos</h4>

        @if($message = Session::get('mensaje'))
        <div class="alert alert-success">
          {{$message}}
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Archivos cargados
                      <a href="archivos/create" style="float: right" class="btn btn-info">
                        <i class="fa fas-envelope"></i>   Enviar archivo nuevo</a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Mis archivos</h5>
                      <?php $contador=0; ?>
                      <div class="table-responsive">
                        <table id="grid" class="table table-sm table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Archivo</center></th>
                                    <th><center>Link para compartir</center></th>
                                    <th><center>Acción</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datosArchivos as $item)
                                    <tr>
                                        <td><?php echo $contador = $contador +1;?></td>
                                        <td>{{$item->nombre}}</td>
                                        <td>
                                            <?php
                                                $extencion = $item->archivo;
                                                $extencion = pathinfo($extencion,PATHINFO_EXTENSION);
                                                if(($extencion=="JPG")||($extencion=="jpg")||
                                                   ($extencion=="JPEG")||($extencion=="jpeg")||
                                                   ($extencion=="PNG")||($extencion=="png")||
                                                   ($extencion=="GIF")||($extencion=="gif")||
                                                   ($extencion=="BMP")||($extencion=="bmp")||
                                                   ($extencion=="TIF")||($extencion=="tif")||
                                                   ($extencion=="TIFF")||($extencion=="tiff")||
                                                   ($extencion=="ZIP")||($extencion=="zip")||
                                                   ($extencion=="RAW")||($extencion=="raw")
                                                ){
                                                    ?>
                                                    <a href="{{asset('storage').'/'.$item->archivo}}">
                                                        <img src="{{asset('storage').'/'.$item->archivo}}"
                                                             width="50px" alt="">
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href=""></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                          <script>
                              $(document).ready(function() {
                                  $('#grid').DataTable( {
                                      "order": [[ 0, "desc" ]], //or asc
                                      pageLength : 5,
                                      "language": {
                                          "decimal": "",
                                          "emptyTable": "No hay información",
                                          "info": "Mostrando _START_ a _END_ de _TOTAL_ Archivos",
                                          "infoEmpty": "Mostrando 0 a 0 de 0 Archivos",
                                          "infoFiltered": "(Filtrado de _MAX_ total Archivos)",
                                          "infoPostFix": "",
                                          "thousands": ",",
                                          "lengthMenu": "Mostrar _MENU_ Archivos",
                                          "loadingRecords": "Cargando...",
                                          "processing": "Procesando...",
                                          "search": "Buscador de Archivos:",
                                          "zeroRecords": "Sin resultados encontrados",
                                          "paginate": {
                                              "first": "Primero",
                                              "last": "Ultimo",
                                              "next": "Siguiente",
                                              "previous": "Anterior"
                                          }
                                      }
                                  });
                              } );
                          </script>

                      </div>

                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection

