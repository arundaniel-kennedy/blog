@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3>Users</h3>
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <th>Avatar</th>
            <th>Name</th>
            <th>Permissions</th>
            <th>Delete</th>
          </thead>

          <tbody>
            @if($users->count()>0)
              @foreach($users as $user)
                <tr>

                  <td>
                    <img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}" width="60px"
                    style="border-radius:50%;">
                  </td>

                  <td>
                    {{ $user->name }}
                  </td>

                  <td>
                    @if($user->admin)
                      <a href="{{ route('user.not_admin',[ 'id' => $user->id ]) }}" class="btn btn-xs btn-danger">
                        Remove Permissions
                      </a>
                    @else
                      <a href="{{ route('user.admin',[ 'id' => $user->id ]) }}" class="btn btn-xs btn-success">
                        Make admin
                      </a>
                    @endif
                  </td>

                  <td>
                    <a href="" class="btn bn-xs btn-danger">
                      <span class="fa fa-trash"></span>
                    </a>
                  </td>

                </tr>
              @endforeach
            @else
                <tr>
                  <th colspan="4" class="text-centered">No Users found!!!</th>
                </tr>
            @endif
          </tbody>
        </table>
      </div>

    </div>
@stop
