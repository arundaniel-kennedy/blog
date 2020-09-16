@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card mt-3">
      <div class="card-header">
        <h3>Create a new Tag</h3>
      </div>

      <div class="card-body">
        <form  action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name of Tag:</label>
            <input class="form-control" type="text" name="tag">
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">Store Tag</button>
          </div>

        </form>
      </div>
    </div>



@stop
