@extends('personal.layouts.main')
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
                <div class="row">
                    <div class="col-12"><!-- /.container-fluid -->
                        <form action="{{ route('personal.comment.update', $comment->id ) }}" method="POST" class="w-50">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <textarea class="form-control" name="message">{{ $comment->message }}</textarea>
                                @error('message')
                                {{ $message }}
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary ml-3 mt-3">Обновить</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
