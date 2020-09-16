@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3>Trashed posts</h3>
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Restore</th>
            <th>Delete</th>
          </thead>

          <tbody>
            @if($posts->count()>0)
              @foreach($posts as $post)
                <tr>
                  <td>
                    <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="50px" height="50px">
                  </td>
                  <td>
                    {{ $post->title }}
                  </td>
                  <td>
                    <a href="{{ route('post.restore',[ 'id' => $post->id ]) }}" class="btn btn-xs btn-success">
                      <span class="fas fa-recycle"></span>
                    </a>
                  </td>

                  <td>
                    <a href="{{ route('post.kill',[ 'id' => $post->id ]) }}" class="btn btn-danger">
                      <span class="fa fa-trash"></span>
                    </a>
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <th colspan="4" class="text-center">No trashed post</th>
              </tr>
            @endif
          </tbody>
        </table>
      </div>

    </div>
@stop
