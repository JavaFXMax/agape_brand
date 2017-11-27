@extends('layouts.ports')
@section('content')
<br/>
<div class="row">
	<div class="col-lg-12">
  <h3> Share Listing Report</h3>
<hr>
</div>
</div>
<div class="row">
	<div class="col-lg-5">
   <form method="post" action="{{URL::to('sharelisting')}}">
        <div class="form-group">
            <label for="username">Start Date </label>
            <div class="right-inner-addon ">
                <i class="glyphicon glyphicon-calendar"></i>
                <input class="form-control datepicker" placeholder=""
                 type="text" name="fromDate" id="date" value="{{date('Y-m-d')}}">
            </div>
        </div>
       <div class="form-group">
            <label for="username">End Date </label>
            <div class="right-inner-addon ">
                <i class="glyphicon glyphicon-calendar"></i>
                <input class="form-control datepicker" placeholder=""
                 type="text" name="toDate" id="date" value="{{date('Y-m-d')}}">
            </div>
        </div>
        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary btn-sm">View Report</button>
        </div>
   </form>
  </div>
</div>
@stop