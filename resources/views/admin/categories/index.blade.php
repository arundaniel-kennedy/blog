@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3>Categories</h3>
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <th>Category name</th>
            <th>Editing</th>
            <th>Deleting</th>
          </thead>

          <tbody>
            @if($categories->count()>0)
            @foreach($categories as $category)
              <tr>
                <td>
                  {{ $category->name }}
                </td>
                <td>
                  <a href="{{ route('category.edit',[ 'id' => $category->id ]) }}" class="btn btn-xs btn-info">
                    <span class="fas fa-pencil-alt"></span>
                  </a>
                </td>

                <td>
                  <a href="{{ route('category.delete',[ 'id' => $category->id ]) }}" class="btn btn-danger">
                    <span class="fa fa-trash"></span>
                  </a>
                </td>
              </tr>
            @endforeach
            @else
              <tr>
                <th colspan="3" class="text-center">No categories created! Yet!!</th>
              </tr>
            @endif
          </tbody>
        </table>
      </div>

    </div>
@stop
