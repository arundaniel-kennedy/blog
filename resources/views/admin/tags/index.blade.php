@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3>Tags</h3>
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <th>Tags name</th>
            <th>Editing</th>
            <th>Deleting</th>
          </thead>

          <tbody>
            @if($tags->count()>0)
            @foreach($tags as $tag)
              <tr>
                <td>
                  {{ $tag->tag }}
                </td>
                <td>
                  <a href="{{ route('tag.edit',[ 'id' => $tag->id ]) }}" class="btn btn-xs btn-info">
                    <span class="fas fa-pencil-alt"></span>
                  </a>
                </td>

                <td>
                  <a href="{{ route('tag.delete',[ 'id' => $tag->id ]) }}" class="btn btn-danger">
                    <span class="fa fa-trash"></span>
                  </a>
                </td>
              </tr>
            @endforeach
            @else
              <tr>
                <th colspan="3" class="text-center">No tags created! Yet!!</th>
              </tr>
            @endif
          </tbody>
        </table>
      </div>

    </div>
@stop
