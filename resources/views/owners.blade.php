@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        users<small>Showing all users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Users</li>
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
    <div class="box">
        <div class="box-header">
              <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>User#id</th>
                  <th>Names</th>
                  <th>Email Address</th>
                  <th>Contacts</th>
                   <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>2</td>
                  <td>Christine Gates</td>
                  <td>chrisgates@gmail.com</td>
                  <td>+1245896547</td>
                   <td> <div class="input-group-btn">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Actions
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">History</a></li>
                    <li><a href="#">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Delete</a></li>
                  </ul>
                </div>
                </td>
                </tr>
                <tr>
                   <td>12</td>
                  <td>Ben Kirui</td>
                  <td>ben@gmail.com</td>
                  <td>+254785698547</td>
                   <td> <div class="input-group-btn">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Actions
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">History</a></li>
                    <li><a href="#">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Delete</a></li>
                  </ul>
                </div>
                </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Mike Zukeerberg</td>
                  <td>berg@gmail.com</td>
                  <td>+125874547</td>
                   <td> <div class="input-group-btn">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Actions
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">History</a></li>
                    <li><a href="#">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Delete</a></li>
                  </ul>
                </div>
                </td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Ben Munya</td>
                  <td>munya@gmail.com</td>
                  <td>+257485698547</td>
                   <td> <div class="input-group-btn">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Actions
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">History</a></li>
                    <li><a href="#">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Delete</a></li>
                  </ul>
                </div>
                </td>
                </tr>
               </tbody>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             {!! $users->render() !!}
            </div>
          </div>
@endsection
