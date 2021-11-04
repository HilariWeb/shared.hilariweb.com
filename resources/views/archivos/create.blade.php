@extends('archivos.app')

@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Enviar archivo
                </div>
                <div class="card-body">
                  <form action="{{ url('/archivos') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="">Nombre del archivo</label>
                          <input type="text" class="form-control" name="nombre">
                      </div>
                      <div class="form-group">
                          <label for="">Busca tu archivo</label>
                          <input type="file" class="form-control" name="archivo">
                          <input type="text" value="1" name="estado" hidden>
                      </div>
                        <input type="submit" value="Enviar" class="btn btn-info">
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

