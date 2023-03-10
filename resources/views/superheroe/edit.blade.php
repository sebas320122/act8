@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Editar datos
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
      <form method="post" action="{{ route('superheroe.update', $superheroe->id) }}"> 
        @csrf 
        @method('PATCH') 
        <div class="form-group"> 
          <label for="nombre_real">Nombre real:</label> 
          <input type="text" class="form-control" name="nombre_real" value="{{ $superheroe->nombre_real }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="alias">Alias:</label> 
          <input type="text" class="form-control" name="alias" value="{{ $superheroe->alias }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="foto">Foto:</label> 
          <input type="text" class="form-control" name="foto" value="{{ $superheroe->foto }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="symptoms">Informacion:</label> 
          <textarea rows="5" columns="5" class="form-control" name="informacion">{{ $superheroe->informacion }}</textarea> 
        </div> 
        <button type="submit" class="btn btn-primary">Guardar</button> 
        <a href="{{ route('superheroe.index') }}" class="btn btn-primary">Regresar</a> 
      </form> 
    </div> 
  </div> 
@endsection 