@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0 text-dark">User</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('adminpanel')}}">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
            <div class="box-header">
                <h5 class="box-title">User List 
                <a href="{{route('user.create')}}" style="float:right;" 
                        class="btn btn-primary btn-sm">Create User</a></h5>
              </div>
            @include('inc.messages')
            <div class="box-body no-padding">
                <table class="table table-striped">
                  <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Image</th>
                    <th>Description</th> 
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                  @if(count($users)>0)
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>image</td>
                    <td>{{$user->description}}</td>
                    <td>{{$user->created_at->format('M d, Y')}}</td>
                    <td class="d-flex">
                      <a href="#" class="btn btn-sm btn-success mr-1">
                        <i class="fas fa-edit"></i></a>
    
                        <form action="#" method="POST" class="mr-1">
                         @method('DELETE')
                         @csrf
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                 </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan="6"><h4 class="text-center" style="color:red;">No User found!!</h4></td>
                  </tr>
                @endif

                </tbody></table>
              </div>
        </div>
      </div>
    </div>
</div>
@endsection