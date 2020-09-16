@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
      <div class="card-header">
        <h3>Edit post: {{ $post->title }}</h3>
      </div>

      <div class="card-body">
        <form  action="{{ route('post.update',['id'=> $post->id]) }}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $post->title }}">
          </div>

          <div class="form-group">
            <label for="featured">Featured image</label>
            <input class="form-control-file" type="file" name="featured">
          </div>

          <div class="form-group">
            <label for="category">Select a category</label>
            <select class="custom-select" name="category_id" id="category">
              @foreach($categories as $category)
                <option value="{{ $category->id }}"
                  @if($post->category->id == $category->id)
                    selected
                  @endif>{{ $category->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <div class="row">
              @foreach($tags as $tag)
                <div class="col-lg-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="defaultCheck1"
                    @foreach($post->tags as $t)
                      @if($tag->id == $t->id)
                        checked
                      @endif
                    @endforeach >
                    <label class="form-check-label" for="defaultCheck1">
                      {{ $tag->tag }}
                    </label>
                  </div>
                </div>
              @endforeach
            </div>
          </div>

          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" rows="5" cols="5" class="form-control">
              {{ $post->content }}
            </textarea>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Update post</button>
          </div>


        </form>
      </div>
    </div>


@stop
