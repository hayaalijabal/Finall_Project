@extends('Dashboard.Layout.Master')
@section('title')
    Add Products
@endsection
@section('Content')
        <!-- Main content -->
        <section class="content">
            @include('dashboard.Layout.massages')
            <form method="POST" action="{{route('dashboard.Products.store')}}" enctype="multipart/form-data">
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
                                    <label for="inputName">Product Name</label>
                                    <input type="text" value="{{old('Name')}}" name="Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputDescription">Product Description</label>
                                    <textarea id="inputDescription"  name="Description" class="form-control" rows="4" >
                                        {{old('Description')}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Category id</label>
                                    <select class="form-control custom-select" name="CategoryID">
                                        <option selected disabled>Select one</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="Image"  class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Price</label>
                                    <input type="text" id="inputClientCompany" value="{{old('Price')}}" name="Price" class="form-control">
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
                        <input type="submit" value="Create new Porduct" class="btn btn-success float-right">
                    </div>
                </div>


            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
