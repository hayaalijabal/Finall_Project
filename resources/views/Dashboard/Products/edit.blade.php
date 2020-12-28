@extends('Dashboard.Layout.Master')
@section('title')
    Edit Products
@endsection
@section('Content')
        <!-- Main content -->
        <section class="content">
            <form method="POST" action="{{route('dashboard.Products.update',$product)}} ">
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
                                    <label for="inputName">Product Name</label>
                                    <input type="text"  name="Name" value="{{$product->Name}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputDescription">Product Description</label>
                                    <textarea id="inputDescription" name="Description" class="form-control" rows="4" >
                                        {{$product->Description}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Category id</label>
                                    <select class="form-control custom-select" name="CategoryID">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                    {{$product->CategoryID == $category->id ? 'selected':''}}
                                            >{{$category->Name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Price</label>
                                    <input type="text" id="inputClientCompany" name="Price" value="{{$product->Price}}" class="form-control">
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
                        <input type="submit" value="Update Porduct" class="btn btn-success float-right">
                    </div>
                </div>


            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
