@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card mt-3">
      <div class="card-header">
        <h3>Update tag: {{ $tag->tag }}</h3>
      </div>
      <div class="card-body">
        <form  action="{{ route('tag.update',[ 'id' => $tag->id ]) }}" method="post">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="tag" value="{{ $tag->tag }}">
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">Update Tag</button>
          </div>
        </form>
      </div>
    </div>


@stop
