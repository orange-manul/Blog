@extends('personal.layouts.main')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная страница</h1>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- ./col -->

                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $likedUser->count() }}</h3>

                                <p>Понравившиеся посты</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-heart"></i>
                            </div>
                            <a href="{{ route('personal.liked.index') }}" class="small-box-footer">Узнать больше <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $comment->count() }}</h3>

                                <p>Комментарии</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-comments"></i>
                            </div>
                            <a href="{{ route('personal.comment.index') }}" class="small-box-footer">Узнать больше <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
