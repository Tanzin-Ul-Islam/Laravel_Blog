@extends('layouts.website')
@section('content')

<div class="card card-primary card-outline">
    <div class="card-body">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Welcome {{$user->name}}</h3>
        </div>
        @include('inc.messages')
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody>

              <tr>
                <th>Image</th>
                <td>
                  @if($user->image == 'noimage')
                  <img src="/storage/user_image/noimage.jpg" width="250px" height="200px"><br> 
                  @else
                  <img src="/storage/user_image/{{$user->image}}" width="250px" height="200px"><br>
                  @endif
                </td>
              </tr>

              <tr>
                <th>Name</th>
                <td>{{$user->name}}</td>
              </tr>
              
              <tr>
                <th>Email</th>
                <td>{{$user->email}}</td>
              </tr>

              <tr>
                <th>Description</th>
                <td>{{$user->description}}</td>
              </tr>

              <tr>
                <th>Created Date</th>
                <td>{{$user->created_at->format('M d, Y')}}</td>
              </tr>
            </tbody>
          </table>
          <a href="{{route('edit_myprofile', [$user->id])}}" class="btn btn-success">Update Profile</a>
        </div>     
      </div>
    </div>
  </div>
@endsection