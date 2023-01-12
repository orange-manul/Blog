@extends('admin.layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <h1>
                    Добавление постов
                </h1>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
            <form action="{{ route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="col-2 mt-3 mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Введите название"
                               value="{{ old('title') }}">
                        @error('title')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group ml-2">
                        <textarea id="summernote" name="content"
                                  placeholder="Send to content">{{ old('content') }}</textarea>
                        @error('content')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group w-50 ml-2">
                        <label for="exampleInputFile">Добавить превью изображения</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="preview_image">
                                <label class="custom-file-label">Выберите файлы</label>

                            </div>
                        </div>
                        @error('preview_image')
                        {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group w-50 ml-2">
                        <label for="exampleInputFile">Добавить главное изображение</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="main_image">
                                <label class="custom-file-label">Выберите файлы</label>
                            </div>
                        </div>
                        @error('main_image')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group w-50 ml-2">
                        <label>Выберите категорию</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option
                                    value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : ''}}>
                                    {{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Теги</label>
                        <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите тег"
                                style="width: 100%;">
                            @foreach($tags as $tag)
                                <option
                                    {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected': '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3 mt-3">Добавить</button>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
