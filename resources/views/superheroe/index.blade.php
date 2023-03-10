@extends('layouts.app') 
@section('content') 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
   
      <a class="btn btn-primary" href="{{ route('superheroe.create') }}">Registrar</a> 
   

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>Id</th> 
          <th>Nombre real</th> 
          <th>Alias</th> 
          <th>Foto</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($superheroes as $superheroe) 
          <tr> 
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->id }}</a></td> 
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->nombre_real }}</a></td> 
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->alias }}</a></td>
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->foto }}</a></td>  
            <td><a href="{{ route('superheroe.edit', $superheroe->id) }}" class="btn btn-primary">Editar</a></td> 
            <td> 
              <form action="{{ route('superheroe.destroy', $superheroe->id) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Eliminar</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  <div> 
@endsection 