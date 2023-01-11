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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
            <form action="{{ route('admin.user.update', $user->id ) }}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <div class="col-2 mt-3">
                        <input type="text" class="form-control" name="name" placeholder="Введите имя"
                               value="{{$user->name}}">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="col-2 mt-3">
                        <input type="text" class="form-control" name="email" placeholder="Введите почту"
                               value="{{ $user->email }}">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group w-25 ml-2 mt-2">
                        <label>Выберите роль</label>
                        <select name="role" class="form-control">
                            @foreach($roles as $id => $role)
                                <option value="{{ $id }}" {{ $id == $user->role ? 'selected' : ''}}>
                                    {{ $role }}</option>
                            @endforeach
                        </select>
                        @error('role')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group w-25 ml-2 mt-2">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3 mt-3">Обновить</button>

            </form>
        </section>
    </div>
@endsection
