@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Ver datos 
    </div> 

    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 

      <div class="form-group"> 
        <label for="nombre_real">Nombre real:</label> 
        <input type="text" class="form-control" name="nombre_real" value="{{ $superheroe->nombre_real }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="alias">Alias:</label> 
        <input type="text" class="form-control" name="alias" value="{{ $superheroe->alias }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="foto">Foto:</label> 
        <input type="text" class="form-control" name="foto" value="{{ $superheroe->foto }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="symptoms">Informacion:</label> 
        <textarea rows="5" columns="5" class="form-control" name="informacion" disabled>{{ $superheroe->informacion }}</textarea> 
      </div> 
      <a href="{{ route('superheroe.edit', $superheroe->id) }}" class="btn btn-primary">Editar</a> 
      <a href="{{ route('superheroe.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection 