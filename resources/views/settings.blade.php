@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Settings<small>General settings</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Settings</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Users</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">App Settings</h3>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">App Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">App Contacts</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">App Logo</label>
                  <input type="file" id="exampleInputFile">
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>

    
    </div>
       <div class="col-md-6">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Payment Settings</h3>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">App Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">App Contacts</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>

    </div>
    </div>
   
   
@endsection
