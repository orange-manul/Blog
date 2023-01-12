@extends('admin.layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="ml-3">
                <h1>
                    Пользователи
                </h1>
            </div>
            <div class="container-fluid mt-2">
                <div class="row mb-2">
                    <div class="col-2">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-primary ml-2">Добавить пользователя</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
            </div><!-- /.container-fluid -->
                <div class="card-body">
                    <div class="row-cols-3">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $users as $user)
                        <tr data-widget="expandable-table" aria-expanded="false " align="center">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><a href="{{ route('admin.user.show', $user->id) }}"> <i class="fas fa-eye"></i></a></td>
                            <td><a href="{{ route('admin.user.edit', $user->id) }}" class="text-success"> <i class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash text-danger" role="button"></i>
                                    </button>
                                </form>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
