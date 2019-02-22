@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
      <div class="card-header">
        <h3>Edit blog settings</h3>
      </div>

      <div class="card-body">
        <form  action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Site Name:</label>
            <input class="form-control" type="text" name="site_name" value="{{ $settings->site_name }}">
          </div>

          <div class="form-group">
            <label for="email">Contact Email:</label>
            <input class="form-control" type="email" name="contact_email" value="{{ $settings->contact_email }}">
          </div>

          <div class="form-group">
            <label for="name">Contact number:</label>
            <input class="form-control" type="text" name="contact_number" value="{{ $settings->contact_number }}">
          </div>

          <div class="form-group">
            <label for="address">Address:</label>
            <input class="form-control" type="text" name="address" value="{{ $settings->address }}">
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">Update settings</button>
          </div>

        </form>
      </div>
    </div>



@stop
