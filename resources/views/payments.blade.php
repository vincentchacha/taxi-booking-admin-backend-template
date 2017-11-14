@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Payments<small>Showing all payments</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Payments</li>
        
      </ol>

    </section>
@endsection


@section('content')
                <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>USD 150</h3>

              <p>Total Payments</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>USD 53<sup style="font-size: 20px"></sup></h3>

              <p>Cash Payments</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>USD 44</h3>

              <p>Card Payments</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>USD 0</h3>

              <p>Other Payments</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Payments</div>
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
                  <th>Request #id</th>
                  <th>User Name</th>
                  <th>Provider Name</th>
                  <th>Status</th>
                  <th>Amount</th>
                  <th>Payment status</th>
                  <th>Payment mode</th>
                    <th>Discount(Promo)</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Vincent Koech</td>
                  <td>victor koech</td>
                  
                  <td><span class="label label-success">complete</span></td>
                  <td>6.0</td>
                  <td><span class="label label-success">paid</span></td>
                  <td>cash</td>
                  <td><span class="label label-danger">N/A</span></td>
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
           
          </div>
@endsection
