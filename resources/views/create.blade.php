@extends('layouts.base') <! Herencia -->

@section('contenido_vista')

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
        @csrf
        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Nombre del documento:</strong>
                                <input type="text" name="doc_nombre" class="form-control" id="doc_nombre" placeholder="doc_nombre">
                            </div>
                        </div>
                    </div>



                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Proceso:</strong>
                                <input type="hidden" name="doc_id_proceso" id="doc_id_proceso" class="form-control" placeholder="doc_id_proceso">
                                <select id="ids_procesos" class="form-control">
                                    @foreach ($pro_procesos as $proceso)

                                    <option value="{{ $proceso->pro_id }}" data-pro-prefijo="{{ $proceso->pro_prefijo }}">{{ $proceso->pro_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Tipo documento:</strong>
                                <input type="hidden" name="doc_id_tipo" id="doc_id_tipo" class="form-control" placeholder="doc_id_tipo" >
                                <select id="ids_tip_tipo_docs" class="form-control">
                                    @foreach ($tip_tipo_docs as $tip_tipo_doc)
                                        <option value="{{ $tip_tipo_doc->tip_id }}" data-pro-prefijo="{{ $tip_tipo_doc->tip_prefijo }}">{{ $tip_tipo_doc->tip_nombre }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Código:</strong>
                                <input type="hidden" name="doc_codigo" value="1">

                                <div id="codigoDiv" class="form-control" style="height:40px; overflow-y: auto;">
                                {{  '##'.$tip_tipo_doc->tip_prefijo . '-' .$proceso->pro_prefijo. '-' . $nuevo_codigo}}
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

<script>
    function AsignarOpcionElegida(selectId, hiddenId, divId) {
        var selectElement = document.getElementById(selectId);
        var hiddenElement = document.getElementById(hiddenId);
        var divElement = document.getElementById(divId);

        selectElement.addEventListener('change', function() {
            hiddenElement.value = this.value;
            actualizar_codigo();
        });

        hiddenElement.value = selectElement.value;


        actualizar_codigo();

        function actualizar_codigo() {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var proPrefijo = selectedOption.getAttribute('data-pro-prefijo');
            var valorSeleccionado = selectElement.value;
            divElement.textContent = proPrefijo + '-{{$tip_tipo_doc->tip_prefijo}}-' + {{$nuevo_codigo}};

        }
    }

    $var1 = AsignarOpcionElegida('ids_procesos', 'doc_id_proceso', 'codigoDiv');
    $var1 = AsignarOpcionElegida('ids_tip_tipo_docs', 'doc_id_tipo', 'codigoDiv');
</script>

@endsection
