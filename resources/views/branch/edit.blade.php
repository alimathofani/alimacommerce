@extends('master')
    @section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Update your Branch</h1>
        </div>
    </div>
    <div class="row">
        <form class="" action="{{ route('branch.update', $branch->id) }}" method="post">
            <input type="hidden" name="_method" value="PATCH">
            {{csrf_field()}}
            <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
                <input type="text" name="name" class="form-control" value="{{ $branch->name }}">
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group{{ ($errors->has('since')) ? $errors->first('since') : '' }}" >
                <div class="input-group">
                <input class="form-control" type="text" name="since" placeholder="Since" id="since" value="{{ $branch->since }}">
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


    @stop