@extends('Dashboard.Layout.Master')
@section('title')
    List Products
@endsection
@section('Content')
    <!-- Main content -->
    <section class="content">
    @include('Dashboard.Layout.massages')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Product Name
                        </th>
                        <th style="width: 20%">
                            Product Image
                        </th>
                        <th style="width: 30%">
                            CategoryID
                        </th>
                        <th>
                            Price
                        </th>
                        <th style="width: 8%" class="text-center">
                            Description
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $products)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <a>
                                {{$products->Name}}
                            </a>
                            <br/>
                            <small>
                                {{$products->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('Product_images/'.$products->Imaqe)}}">
                                </li>
                            </ul>
                        </td>
                        <td>
                            <a>
                                {{$products->CategoryID}}

                            </a>
                        </td>
                        <td class="list_inline">
                            <a>
                                {{$products->Price}}
                            </a>
                            <!--<div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                                </div>
                            </div>
                            <small>
                                57% Complete
                            </small>-->
                        </td>
                        <td class="project-state">
                            <a>
                                {{$products->Description}}
                            </a>

                        <!--<span class="badge badge-success">Success</span>-->
                        </td>
                        <td class="project-actions text-right">
                            <form action="{{route('dashboard.Products.destroy',$products)}}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{route('dashboard.Products.show',$products)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('dashboard.Products.edit',$products)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{ $product->links() }}
    </section>
    <!-- /.content -->

@endsection
