@extends('layouts.base') <! Herencia -->

@section('contenido_vista') <! Remplaza el marcador ayield de layout base -->

<div class="row">
    <div class="col-12 text-center">
        <div>
            <h2 class="text-white">CRUD DOCUMENTOS </h2>
        </div>
        <div>
            <a href="" class="btn btn-primary"> Crear documento </a>
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
            <tr >
                <td class="fw-bold"> 001 </td>
                <td> Instructivo de desarrollo</td>
                <td> INS-ING-1 </td>
                <td> texto grande con el contenido del documento </td>
                <td> 1 </td>
                <td> 1 </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
