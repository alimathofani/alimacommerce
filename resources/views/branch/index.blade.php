@extends('master')
    @section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>List of Branches</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Cabang</th>
                    <th>Sejak</th>
                    <th>Action</th>
                </tr>
                <a href="{{ route('branch.create') }}" class="btn btn-info pull-left">CREATE</a> <br>
                <?php $no=1; ?>

                @foreach($branches as $branch)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $branch->name }}</td>
                    <td>{{ $branch->since }}</td>
                    <td>
                        <form class="" action="{{ route('branch.destroy', $branch->id) }}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('branch.edit', $branch->id) }}" class="btn btn-primary">EDIT</a>
                            <input type="submit" class="btn btn-danger" onClick="return confirm('Are you sure to delete this data?'); " name="name" value="DELETE">

                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>


    @stop