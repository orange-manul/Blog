@extends('admin.layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <h1>
                    Добавить пользователя
                </h1>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
            <form action="{{ route('admin.user.store')}}" method="POST">
                @csrf
                <div>
                    <div class="col-2 mt-3">
                        <input type="text" class="form-control" name="name" placeholder="Введите имя пользователя">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="col-2 mt-3">
                        <input type="text" class="form-control" name="email" placeholder="Введите почту">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group w-25 ml-2 mt-2">
                    <label>Выберите роль</label>
                    <select name="role" class="form-control">
                        @foreach($roles as $id => $role)
                            <option value="{{ $id }}" {{ $id == old('role') ? 'selected' : ''}}>
                                {{ $role }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    {{ $message }}
                    @enderror
                </div>

                <!-- /.card-body -->

                <button type="submit" class="btn btn-primary ml-3 mt-3">Добавить</button>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
