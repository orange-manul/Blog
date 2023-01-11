@extends('admin.layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="ml-3">
                <h1>
                    Теги
                </h1>
            </div>
            <div class="container-fluid mt-2">
                <div class="row mb-2">
                    <div class="col-2">
                        <a href="{{ route('admin.tag.create') }}" class="btn btn-block btn-primary">Добавить тег</a>
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
                            <th>Title</th>
                            <th>Created</th>
                            <th colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $tags as $tag)
                        <tr data-widget="expandable-table" aria-expanded="false " align="center">
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->title }}</td>
                            <td>{{ $tag->created_at }}</td>
                            <td><a href="{{ route('admin.tag.show', $tag->id) }}"> <i class="fas fa-eye"></i></a></td>
                            <td><a href="{{ route('admin.tag.edit', $tag->id) }}" class="text-success"> <i class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
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
