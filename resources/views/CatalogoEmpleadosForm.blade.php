
@extends('layouts.app')
@section('title','Catalogo de empleados')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de empleados') }}</div>

                <div class="card-body">
                    <form action="{{ route('empleado.registrar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{empty($entity->id) ? '' : $entity->id}}">


                        <div class="form-group row">
                            <label for="codigo_empleado" class="col-md-4 col-form-label text-md-right">{{ __('Codigo del empleado') }}</label>
                            <div class="col-md-6">
                                <input name="codigo_empleado" value="{{empty($entity->id) ? '' : $entity->codigo_empleado}}" id="codigo_empleado" type="text" class="form-control @error('codigo_empleado') is-invalid @enderror" required autocomplete="codigo_empleado" autofocus>
                                @error('codigo_empleado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input name="nombre" value="{{empty($entity->id) ? '' : $entity->nombre}}" id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" required autocomplete="nombre">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido_paterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>
                            <div class="col-md-6">
                                <input name="apellido_paterno" value="{{empty($entity->id) ? '' : $entity->apellido_paterno}}" id="apellido_paterno" type="text" class="form-control @error('apellido_paterno') is-invalid @enderror" required autocomplete="apellido_paterno">
                                @error('apellido_paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido_materno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno') }}</label>
                            <div class="col-md-6">
                                <input name="apellido_materno" value="{{empty($entity->id) ? '' : $entity->apellido_materno}}" id="apellido_materno" type="text" class="form-control @error('apellido_materno') is-invalid @enderror" required autocomplete="apellido_materno">
                                @error('apellido_materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="puesto" class="col-md-4 col-form-label text-md-right">{{ __('puesto') }}</label>
                            <div class="col-md-6">
                                <input name="puesto" value="{{empty($entity->id) ? '' : $entity->puesto}}" id="puesto" type="text" class="form-control @error('puesto') is-invalid @enderror" required autocomplete="puesto">
                                @error('puesto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sueldo" class="col-md-4 col-form-label text-md-right">{{ __('sueldo') }}</label>
                            <div class="col-md-6">
                                <input name="sueldo" value="{{empty($entity->id) ? '' : $entity->sueldo}}" id="sueldo" type="text" class="form-control @error('sueldo') is-invalid @enderror" required autocomplete="sueldo">
                                @error('sueldo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_moneda_sueldo" class="col-md-4 col-form-label text-md-right">{{ __('tipo_moneda_sueldo') }}</label>
                            <div class="col-md-6">
                                <input name="tipo_moneda_sueldo" value="{{empty($entity->id) ? '' : $entity->tipo_moneda_sueldo}}" id="tipo_moneda_sueldo" type="text" class="form-control @error('tipo_moneda_sueldo') is-invalid @enderror" required autocomplete="tipo_moneda_sueldo">
                                @error('tipo_moneda_sueldo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="correo" class="col-md-4 col-form-label text-md-right">{{ __('correo') }}</label>
                            <div class="col-md-6">
                                <input name="correo" value="{{empty($entity->id) ? '' : $entity->correo}}" id="correo" type="text" class="form-control @error('correo') is-invalid @enderror" required autocomplete="correo">
                                @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="activo" class="col-md-4 col-form-label text-md-right">{{ __('activo') }}</label>
                            <div class="col-md-6">
                                <input name="activo" value="{{empty($entity->id) ? '' : $entity->activo}}" id="activo" type="text" class="form-control @error('activo') is-invalid @enderror" required autocomplete="activo">
                                @error('activo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <a href="{{ route('empleado.index') }}" class="btn btn-primary">Regresar</a>
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection