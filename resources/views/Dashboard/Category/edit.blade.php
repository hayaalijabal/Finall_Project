@extends('Dashboard.Layout.Master')
@section('title')
    Edit Category
@endsection
@section('Content')
        <!-- Main content -->
        <section class="content">
            <form method="POST" action="{{route('dashboard.Category.update', $categories)}} ">
                @method('PUT')
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
                                    <label for="inputName">Category Name</label>
                                    <input type="text"  name="Name" value="{{$category->Name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Category id</label>
                                    <input type="text"  name="id" value="{{$category->id}}" class="form-control">
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
                        <input type="submit" value="Update Category" class="btn btn-success float-right">
                    </div>
                </div>


            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
