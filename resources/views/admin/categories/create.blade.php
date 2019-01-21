@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
      <div class="card-header">
        <h3>Create a new Category</h3>
      </div>

      <div class="card-body">
        <form  action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name of Category</label>
            <input class="form-control" type="text" name="name">
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">Store Category</button>
          </div>

        </form>
      </div>
    </div>



@stop
