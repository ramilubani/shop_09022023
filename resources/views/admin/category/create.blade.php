@extends('layouts.admin')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm text-white  float-end">BACK</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}"  method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">




                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name') <small class="text-danger">{{$message}}</small>
                            @enderror

                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type ="submit" class="btn btn-primary float-end">Save</button>
                        </div>

                    </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    @endsection
