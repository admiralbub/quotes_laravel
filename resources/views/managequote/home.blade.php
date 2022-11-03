@extends('layouts.app')
@section('title_block')
  Manage quotes
@endsection
@section('content')
<div class="container">
<h4  style="padding-top: 10px;">Manage quotes</h4>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add quote
</button>
<hr>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Quote</th>
            <th scope="col"></th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($quotes_one as $quote_one)
        <tr>
            <th scope="row">{{ $quote_one->id }}</th>
            <td>{{ $quote_one->quotes }}</td>
           
            <td><a href="{{ route('managequote.edit',$quote_one->id)}}">Edit</a></td>
          
          </tr>
        @endforeach
    </tbody>
</table>



</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add quotes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="alert alert-danger" role="alert" style="display: none;">
        
      </div>

      <input type="text"  id="csrf-token" value="{{ csrf_token() }}" hidden>

      <div class="modal-body">
        <div class="form-group">
            <label for="title">Quotes</label>
            <textarea class="form-control" id="quote"></textarea>
        </div>
         @if ($errors->has('quotes'))
                    <span class="text-danger">{{ $errors->first('quotes') }}</span>
                @endif

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="add_quote">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endsection
