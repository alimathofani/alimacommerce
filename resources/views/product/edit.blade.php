@extends('admin.master')

@section('css')
  
@stop

@section('content')
        <section class="content-header">
        <h1>
          Product Edit
          
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
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('product.update', $product) }}" method="post">
              {{csrf_field()}}
              {{ method_field('PATCH') }}
              <div class="box-body">

                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $product->name }}">
                    @if($errors->has('name'))
                      <span class="help-block">
                        <p>{{ $errors->first('name') }}</p>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group has-feedback{{ $errors->has('description') ? ' has-error' : '' }}">
                  <label for="description" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="description" id="" rows="5" class="form-control" placeholder="Description" >{{ $product->description }}</textarea>
                    @if($errors->has('description'))
                      <span class="help-block">
                        <p>{{ $errors->first('description') }}</p>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group has-feedback{{ $errors->has('price') ? ' has-error' : '' }}">
                  <label for="price" class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" placeholder="Price" name="price" value="{{ $product->price }}">
                    @if($errors->has('price'))
                      <span class="help-block">
                        <p>{{ $errors->first('price') }}</p>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group has-feedback{{ $errors->has('discount') ? ' has-error' : '' }}">
                  <label for="discount" class="col-sm-2 control-label">Discount</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="discount" placeholder="Discount" name="discount" value="{{ $product->discount }}">
                    @if($errors->has('discount'))
                      <span class="help-block">
                        <p>{{ $errors->first('discount') }}</p>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group has-feedback{{ $errors->has('quantity') ? ' has-error' : '' }}">
                  <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="quantity" placeholder="Name of Product" name="quantity" value="{{ $product->quantity }}">
                    @if($errors->has('quantity'))
                      <span class="help-block">
                        <p>{{ $errors->first('quantity') }}</p>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group has-feedback{{ $errors->has('category') ? ' has-error' : '' }}">
                  <label for="category" class="col-sm-2 control-label">Category</label>
                  <div class="col-sm-10">
                    <select name="category_product_id" id="" class="form-control">
                      @foreach ($category_products as $category_product )
                        <option value="{{ $category_product->id }}"
                            @if($category_product->id === $product->category_id)
                              selected
                            @endif
                          >
                          {{ $category_product->name }}
                        </option>
                      @endforeach
                    </select>
                    @if($errors->has('category'))
                      <span class="help-block">
                        <p>{{ $errors->first('category') }}</p>
                      </span>
                    @endif
                  </div>
                </div>

                <input type="submit" class="btn btn-info pull-right" value="Save">
              </div>

            </form>
          </div>
        </div>
    </div>

      <!-- /.row -->
      </section>

@stop

@section('javascript')
  

@stop