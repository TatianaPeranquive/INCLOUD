@extends('layouts.base') <! Herencia -->

@section('contenido_vista') <! Remplaza el marcador ayield de layout base -->

<div class="row">
    <div class="col-12 text-center">
        <div>
            <h2>Actualizar Documento</h2>
        </div>
        <div>
            <a href="{{ route('CRUD_documentos.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error: solucionar antes de continuar</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('CRUD_documentos.update',$doc_documento1->doc_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Nombre del documento:</strong>
                                <input type="hidden" name="doc_id" class="form-control" value="{{ $doc_documento1->doc_id }}">
                                <input type="text" name="doc_nombre" class="form-control" value="{{ $doc_documento1->doc_nombre }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Proceso:</strong>
                                <input type="text" name="doc_id_proceso" id="doc_id_proceso" class="form-control" value="{{ $doc_documento1->doc_id_proceso }}">

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Tipo de documento:</strong>
                                <input type="text" name="doc_id_tipo" id="doc_id_tipo" class="form-control" value="{{ $doc_documento1->doc_id_tipo }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Código:</strong>
                                <input type="hidden" name="doc_codigo" value="{{ $doc_documento1->doc_codigo }}">
                                <div id="codigoDiv" class="form-control" style="height:40px; overflow-y: auto;">
                                    {{ $doc_documento1->doc_codigo }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Contenido:</strong>
                        <textarea class="form-control" style="height:150px" name="doc_contenido" placeholder="Contenido del documento...">{{ $doc_documento1->doc_contenido }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary">Actualizar</button>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection
