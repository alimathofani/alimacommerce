@extends('admin.master')
@section('content')
              
       
      <section class="content-header">
      <h1>
        Product
        <small>All Description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<a href="{{ route('product.create') }}" class="btn btn-primary pull-left">Create New Post</a>

		<div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Products</h3>

                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                  @foreach($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ str_limit($product->description, 15,'..') }}</td>
                    <td>Rp {{ number_format($product->price, '0', ',', '.') }}</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->category_product() }}</td>
                    <td><a href="{{ route('product.edit', $product) }}" class=""><span class="label label-success">Edit</span></a>
                    	<form action="{{ route('product.destroy', $product) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                           <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
    </section>
@stop