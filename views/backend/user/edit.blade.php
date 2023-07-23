@extends('backend.master')

@section('title', 'Add User')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Product</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</span>
                            <form action="{{route('user.update', ['id' => $user->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4">User Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">User Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" value="{{ $user->email }}"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control" value="{{ $user->password}}"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-success" value="Create" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
