@extends('layouts.base') <! Herencia -->

@section('contenido_vista')


<div class="row">
    <div class="col-12 text-center">
        <div>
            <h2>Crear Documento</h2>
        </div>
        <div>
            <a href="{{route('CRUD_documentos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('CRUD_documentos.store')}}" method="POST">
        <div class="row">

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Nombre del documento:</strong>
                                <input type="text" name="doc_nombre" class="form-control" id="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Id_tipo:</strong>
                                <input type="text" name="doc_id_tipo" class="form-control" placeholder="doc_id_tipo" >
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Id_proceso:</strong>
                    <input type="text" name="doc_id_proceso" class="form-control" placeholder="doc_id_proceso" >
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Código:</strong>
                                <div class="form-control" style="height:40px; overflow-y: auto;">
                                    Este es el código generado
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Contenido:</strong>
                    <textarea class="form-control" style="height:150px" name="doc_contenido" placeholder="doc_contenido..."></textarea>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection
