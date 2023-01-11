@extends('admin.layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <h1>
                    Редактирование
                </h1>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
            <form action="{{ route('admin.category.update', $category->id ) }}" method="POST" >
                @csrf
                @method('PATCH')
                    <div>
                        <div class="col-2 mt-3">
                        <input type="text" class="form-control" name="title" placeholder="Name category" value="{{$category->title}}">
                        @error('title')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                <!-- /.card-body -->

                    <button type="submit" class="btn btn-primary ml-3 mt-3">Обновить</button>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
