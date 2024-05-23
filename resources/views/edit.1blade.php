@extends('layouts.base') <! Herencia -->

@section('contenido_vista')


<div class="row">
    <div class="col-12 text-center">
        <div>
            <h2>Actualizar doc_documento</h2>
        </div>
        <div>
            <a href="{{route('CRUD_documentos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error: solucionar antes de continuar </strong> <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('CRUD_documentos.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Nombre del doc_documento:</strong>
                                <input type="text" name="doc_nombre" class="form-control" value="{{$doc_documento->doc_nombre}}">
                            </div>
                        </div>
                    </div>



                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Proceso:</strong>
                                <input type="hidden" name="doc_id_proceso" id="doc_id_proceso" class="form-control" placeholder="doc_id_proceso"  value = "{{$doc_documento->doc_id_proceso}}">
                                <select id="ids_procesos" class="form-control">
                                    <option value="7" data-pro-prefijo=""></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Tipo doc_documento:</strong>
                                <input type="hidden" name="doc_id_tipo" id="doc_id_tipo" class="form-control" placeholder="doc_id_tipo" >
                                <select id="ids_tip_tipo_docs" class="form-control">
                                        <option value="4" @selected(true)></option>

                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Código:</strong>
                                <input type="hidden" name="doc_codigo" value = "{{$doc_documento->doc_codigo}}">

                                <div id="codigoDiv" class="form-control" style="height:40px; overflow-y: auto;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Contenido:</strong>
                    <textarea class="form-control" style="height:150px" name="doc_contenido" placeholder="doc_contenido...">{{$doc_documento->doc_contenido}}</textarea>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>


    </form>
</div>
@endsection
