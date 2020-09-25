@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0 text-dark">Create User</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('adminpanel')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">User List</a></li>
            <li class="breadcrumb-item active">Create User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

    <div class="box-body no-padding">
        <div class="row" style="margin-left:300px; ">
            <div class="col-lg-6" >
                <div class="box-header">
                    <h5 class="box-title">Add to User</h5>
                </div>
                <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                    @include('inc.messages')
                      <div class="form-group">
                        <label>User Name</label>
                        <input name="user_name" class="form-control" type="text" placeholder="name">
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input name="user_email" class="form-control" type="email" placeholder="email">
                      </div>

                      <div class="form-group">
                        <label>Password</label>
                        <input name="user_pass" class="form-control" type="password" placeholder="password">
                      </div>

                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input name="user_con_pass" class="form-control" type="password" placeholder="confirm password">
                      </div>

                      <div class="form-group">
                        <label>select Image</label> 
                        <input type="file"  name="cover_pic" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" placeholder="description"></textarea>
                      </div>
                  </div>
                  <!-- /.box-body -->
      
                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Create</button>
                  </div>
                </form>
            </div>
        </div>
    
    </div>
        </div>
      </div>
    </div>
</div>

@endsection