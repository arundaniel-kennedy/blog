@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
      <div class="card-header">
        <h3>Update category: {{ $category->name }}</h3>
      </div>
      <div class="card-body">
        <form  action="{{ route('category.update',[ 'id' => $category->id ]) }}" method="post">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{ $category->name }}">
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">Update Category</button>
          </div>
        </form>
      </div>
    </div>


@stop
