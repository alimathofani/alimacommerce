@extends('admin.master')
@section('content')
        <section class="content-header">
        <h1>
          Create Branch
          
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
        <div class="col-md-8">
            <form class="" action="{{ route('branch.store') }}" method="post">
                {{csrf_field()}}
                <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
                    <input type="text" name="name" class="form-control" placeholder="Enter your branch name here">
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="form-group{{ ($errors->has('since')) ? $errors->first('since') : '' }}" >
                    <div class="input-group">
                    <input class="form-control" type="text" name="since" placeholder="Since" id="since">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    
                    {!! $errors->first('since', '<p class="help-block">:message</p>') !!}
                </div>
               
                <div class="form-group">
                    <input type="submit" name="" class="btn btn-primary" value="SAVE">
                </div>
            </form>
        </div>
    </div>
      <!-- /.row -->
      </section>

@stop