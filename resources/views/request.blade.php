@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Requests<small>Showing all requests</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">requests</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Requests</div>
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
                  <th>Rider Name</th>
                  <th>Driver Name</th>
                  <th>Date/Time</th>
                  <th>Ride status</th>
                  <th>Cost Amount</th>
                  <th>Payment Type</th>
                  <th>Paid?</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>12221</td>
                  <td>Vincent Chacha</td>
                  <td>Victor rotich</td>
                  <td>1/1/2017</td>
                  <td>completed</td>
                  <td>3.5</td>
                  <td>Cash</td>
                  <td><span class="label label-warning">Not completed</span></td>
                </tr>
                @foreach($req as $request)
                <tr>
                  <td>{{$request->id}}</td>
                  <td>{{$request->owner->first_name }} {{$request->owner->last_name}} </td>
                  <td>{{$request->provider->first_name }} 
                  {{$request->provider->last_name}} </td>
                  <td>{{$request->date_time}}</td>
                  <td><?php
                        if ($request->ride_status == 1) {

                            echo "<span class='badge bg-green'>completed</span>";
                        } elseif ($request->ride_status == 0) {
                            echo "<span class='badge bg-red'>Not completed</span>";
                        }
                        ?></td>
                  <td>{{$request->cost_amount}}</td>
                  <td><?php
                        if ($request->payment_type == 1) {

                            echo "<span class='badge bg-yellow'>Cash</span>";
                        } elseif ($request->payment_type == 2) {
                            echo "<span class='badge bg-blue'>card</span>";
                        }
                        ?></td>
                  <td><?php
                        if ($request->is_paid == 1) {

                            echo "<span class='badge bg-green'>paid</span>";
                        } elseif ($request->is_paid == 0) {
                            echo "<span class='badge bg-red'Not paid</span>";
                        }
                        ?></td>
                </tr>
                @endforeach
               </tbody>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
           
          </div>
@endsection
