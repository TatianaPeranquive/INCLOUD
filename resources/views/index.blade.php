@extends('layouts.base') //remplaza el marcador @yield de layout base

@section('contenido_vista') //remplaza el marcador @yield de layout base

<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Tareas</h2>
        </div>
        <div>
            <a href="" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>DOC_ID</th>
                <th>DOC_NOMBRE</th>
                <th>DOC_CODIGO</th>
                <th>DOC_CONTENIDO</th>
                <th>DOC_ID_TIPO</th>
                <th>DOC_ID_PROCESO</th>
            </tr>
            <tr>
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
