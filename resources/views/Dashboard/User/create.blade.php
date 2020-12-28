@extends('Dashboard.Layout.Master')
@section('title')
    Create Users
@endsection
@section('Content')
    <!-- Main content -->
    <section class="content">
        @include('dashboard.Layout.massages')
        <form method="POST" action="{{route('dashboard.User.store')}} ">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">User Name</label>
                                <input type="text" value="{{old('name')}}" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Email</label>
                                <input type="email"  value="{{old('email')}}" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputStatus">Password</label>
                                <input type="password" id="inputDescription" value="{{old('password')}}" name="password" class="form-control">
                            </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new User" class="btn btn-success float-right">
                </div>
            </div>


        </form>
    </section>
    <!-- /.content -->
    </div>
@endsection
