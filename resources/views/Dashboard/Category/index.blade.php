@extends('Dashboard.Layout.Master')
@section('title')
    List Category
@endsection
@section('Content')
    <!-- Main content -->
    <section class="content">
    @include('Dashboard.Layout.massages')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category</h3>

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
                            Category ID
                        </th>
                        <th style="width: 30%">
                            Category Name
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $categories)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>

                            <td>
                                <a>
                                    {{$categories->id}}
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{$categories->Name}}
                                </a>
                                <br/>
                                <small>
                                    {{$categories->created_at}}
                                </small>
                            </td>
                        <!--<ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('../../dist/img/avatar.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('../../dist/img/avatar2.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('../../dist/img/avatar3.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('../../dist/img/avatar04.png')}}">
                                </li>
                            </ul>-->
                            <td class="project-actions text-right">
                                <form action="{{route('dashboard.Category.destroy',$categories)}}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{route('dashboard.Category.show',$categories)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('dashboard.Category.edit',$categories)}}">
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
        {{ $category->links() }}
    </section>
    <!-- /.content -->

@endsection
