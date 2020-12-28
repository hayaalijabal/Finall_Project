@extends('Dashboard.Layout.Master')
@section('title')
    List Users
@endsection
@section('Content')
    <!-- Main content -->
    <section class="content">
    @include('Dashboard.Layout.massages')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>

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
                            Name
                        </th>
                        <th style="width: 30%">
                            Email
                        </th>
                        <th style="width: 30%">
                            Password
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $users)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>

                            <td>
                                <a>
                                    {{$users->name}}
                                </a>
                                <br/>
                                <small>
                                    {{$users->created_at}}
                                </small>
                            </td>

                            <td>
                                <a>
                                    {{$users->email}}
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{$users->password}}
                                </a>
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
                                <form action="{{route('dashboard.User.destroy',$user)}}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{route('dashboard.User.show',$user)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('dashboard.User.edit',$user)}}">
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
        {{ $user->links() }}
    </section>
    <!-- /.content -->

@endsection
