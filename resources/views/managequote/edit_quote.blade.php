@extends('layouts.app')
@section('title_block')
  Edit quote
@endsection

@section('content')
  <h4>Edit quote</h4>

  <hr>
  <div class="alert alert-danger" role="alert" style="display: none;"></div>
  <input type="text"  id="csrf-token" value="{{ csrf_token() }}" hidden>
   
  <div class="form-group" style="padding-bottom: 10px;">
      <label for="title">Quote</label>
      <textarea class="form-control" id="quotes" >{{$quotes_one->quotes}}</textarea>
  </div>
  <input type="text" hidden value="{{$quotes_one->id}}" id="id_quote">
  <div class="form-group" style="padding-bottom: 10px;">
      <button type="button" class="btn btn-primary" id="edit_quote">Edit</button>
  </div>  

@endsection