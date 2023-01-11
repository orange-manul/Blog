@extends('admin.layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="ml-4">
                <h1>
                    Посты
                </h1>
            </div>
            <div class="container-fluid mt-2">
                <div class="row mb-2">
                    <div class="col-2">
                        <a href="{{ route('admin.post.create') }}" class="btn btn-block btn-primary ml-3">Добавить посты</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
                <div class="card-body">
                    <div class="row-cols-3">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Created</th>
                            <th>Image</th>
                            <th colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $posts as $post)
                        <tr data-widget="expandable-table" aria-expanded="false" align="center">
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><img src="{{ $post->preview_image }}"
                                     style="width: 100px; height: 100px" alt="preview_image"></td>
                            <td>
                            <td><a href="{{ route('admin.post.show', $post->id) }}"> <i class="fas fa-eye"></i></a></td>
                            <td><a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"> <i class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
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
