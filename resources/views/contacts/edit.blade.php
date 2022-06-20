@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contato</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Nome</label></br>
       <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
          <label>Telefone</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop