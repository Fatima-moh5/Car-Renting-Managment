@extends('layouts/admin')

@section('content')
    @if(Session::has('message'))
        <p class="alert alert-info" style="font-size: larger;font-weight: bolder;background: #409aff;color:#fff">{{ Session::get('message') }}</p>
    @endif
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Make</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{url('admin/make/store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            </div>
{{--            <div class="form-group">--}}
{{--                <label>Department</label>--}}
{{--                <select name="Department" class="form-control" required>--}}
{{--                    <option value="IT Department">IT Department</option>--}}
{{--                    <option value="Accountant">Accountant</option>--}}
{{--                    <option value="HR">HR</option>--}}
{{--                    <option value="Comercial">Comercial</option>--}}
{{--                </select>--}}
{{--            </div>--}}

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection
