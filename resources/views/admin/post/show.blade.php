@extends('admin.layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content mt-3" >
            <div class="container-fluid ml-3 d-flex align-items-center" >
                <!-- Small boxes (Stat box) -->
            Пост  <a href="{{ route('admin.post.edit', $post->id) }}" class="text-success ml-3 mr-3"> <i class="fas fa-edit"></i></a>
                <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="border-0 bg-transparent">
                        <i class="fas fa-trash text-danger" role="button"></i>
                    </button>
                </form>
            </div><!-- /.container-fluid -->
            <div class="card-body">
                <div class="row-cols-3">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ $post->id }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Title</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <td>Created</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
