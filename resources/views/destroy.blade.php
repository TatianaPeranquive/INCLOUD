@extends('layouts.base') <! Herencia -->

@section('contenido_vista') <! Remplaza el marcador ayield de layout base -->

<div class="row">
    <div class="col-12 text-center">
        <div>
            <h2 class="text-white">CRUD DOCUMENTOS </h2>
        </div>
        <div>
            <a href="" class="btn btn-primary"> Eliminar documento </a>
        </div>
    </div>

 @if (Session::get('success'))

<div class="alert alert-success mt -2">
    <strong>{{Session::get('success')}}</strong>
</div>
 @endif

    <div class="col-12 mt-4 text-center">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>DOC_ID</th>
                <th>DOC_NOMBRE</th>
                <th>DOC_CODIGO</th>
                <th>DOC_CONTENIDO</th>
                <th>DOC_ID_TIPO</th>
                <th>DOC_ID_PROCESO</th>
                <th>ACCIÓN</th>
            </tr>
            @foreach ($lista_documentos as $documento)
            <tr >
                <td class="fw-bold"> {{$documento->doc_id}} </td>
                <td> {{$documento->doc_nombre}} </td>
                <td> {{$documento->doc_codigo}}  </td>
                <td> {{$documento->doc_contenido}}  </td>
                <td> {{$documento->doc_id_proceso}}  </td>
                <td> {{$documento->doc_id_tipo}}  </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="{{route('doc_documento.destroy', $doc_documento)}}" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>

@endsection
