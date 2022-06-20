@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contato</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Nome</label></br>
         <input type="text" name="name" id="name" class="form-control"></br>
         <label>Telefone</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop