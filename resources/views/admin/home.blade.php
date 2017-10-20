@extends('admin.master')
@section('content')
              
          
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Branches
          <small>Last Update 12 minute ago</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>
      <section class="content">
      <!-- Main content -->
      <div class="row">
        
        @foreach($branches as $branch)
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ $branch->name }}</h3>

                <p>{{ $branch->ptname }}</p>
              </div>
              <div class="icon">
                <i class="ion ion-ribbon-a"></i>
              </div>
               <a href="{{ url($branch->slug) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        @endforeach


      </div>
      <!-- /.row -->
      </section>
@stop