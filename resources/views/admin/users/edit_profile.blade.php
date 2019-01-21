@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
      <div class="card-header">
        <h3>Edit User</h3>
      </div>

      <div class="card-body">
        <form  action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data" autocomplete="on">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name of User</label>
            <input class="form-control" type="text" name="name" autocomplete="name" value="{{ $user->name }}">
          </div>

          <div class="form-group">
            <label for="email">User email:</label>
            <input class="form-control" type="email" name="email" autocomplete="email" value="{{ $user->email }}">
          </div>

          <div class="form-group">
            <label for="password">New Password:</label>
            <input class="form-control" type="password" name="password" autocomplete="new-password">
          </div>

          <div class="form-group">
            <label for="avatar">Upload new Avatar:</label>
            <input class="form-control-file" type="file" name="avatar">
          </div>

          <div class="form-group">
            <label for="facebook">Facebook:</label>
            <input class="form-control-file" type="text" name="facebook" value="{{ $user->profile->facebook }}">
          </div>

          <div class="form-group">
            <label for="youtube">Youtube:</label>
            <input class="form-control" type="text" name="youtube" value="{{ $user->profile->youtube }}">
          </div>

          <div class="form-group">
            <label for="about">Something About you:</label>
            <textarea name="about" id="about" rows="5" cols="5" class="form-control"
            value="{{ $user->profile->about }}"></textarea>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">Update profile</button>
          </div>

        </form>
      </div>
    </div>



@stop
