
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" class="form-control {{$errors->has('Nombre')? 'is-invalid':''}}" value=" {{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}} ">
{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="ApellidoPaterno" class="control-label">{{'Apellido Paterno'}}</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-control {{$errors->has('ApellidoPaterno')? 'is-invalid':''}}"
value=" {{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
{!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
<label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control {{$errors->has('ApellidoMaterno')? 'is-invalid':''}}" 
value=" {{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
{!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
<label for="Correo" class="control-label">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" class="form-control {{$errors->has('Correo')? 'is-invalid':''}}"
value=" {{isset($empleado->Correo)?$empleado->Correo:old('Correo')}} ">
{!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
@if(isset($empleado->Foto))

<img src="{{asset('storage').'/'. $empleado->Foto}}" alt="" width="200">

@endif
</div>
<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
<input  class="form-control {{$errors->has('Foto')? 'is-invalid':''}}" type="file" name="Foto" id="Foto" value="" class="img-thumbnail img-fluid">
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
</div>
<input type="submit" class="btn btn-success" value="{{ $Modo == 'crear'? 'Agregar empleado':'Modificar'}}">
<a href="{{ url('/empleados') }}" class="btn btn-primary">Regresar</a>