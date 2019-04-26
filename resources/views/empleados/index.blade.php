@extends('layouts.app')
@section('content')
<div class="container">
@if(Session::has('Mensaje'))
<div class="alert alert-success">
{{
    Session::get('Mensaje')
}}
</div>
@endif
<div class="pb-3">
<a href="{{ url('/empleados/create') }}" class="btn btn-success">Agregar Empleado</a>
</div>
<table class="table table-light table-sm">
    <thead>
         <tr>
             <th>#</th>
             <th>Foto</th>
             <th>Nombre</th>
             <th>Apellido Paterno</th>
             <th>Apellido Materno</th>
             <th>Correo</th>
             <th>Acciones</th>
         </tr>
    </thead>

    <tbody>
    @foreach($empleados as $empleado)
         <tr>
             <td>{{$loop->iteration}}</td>
             <td><img src="{{asset('storage').'/'. $empleado->Foto}}" alt="" width="200" class="img-thumbnail img-fluid"></td>
             <td>{{$empleado->Nombre}}</td>
             <td>{{$empleado->ApellidoPaterno}}</td>
             <td>{{$empleado->ApellidoMaterno}}</td>
             <td>{{$empleado->Correo}}</td>
             <td>
                 <a href="{{ url('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>
                 <form method="post" action="{{ url('/empleados/'.$empleado->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Borra?');" class="btn btn-danger">Borrar</button>
                </form>
             </td>
         </tr>
    @endforeach
    </tbody>
</table>

{{ $empleados->links() }}
</div>

@endsection