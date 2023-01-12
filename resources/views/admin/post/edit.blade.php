@extends('admin.layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <h1>
                    Редактировать
                </h1>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
            <form action="{{ route('admin.post.update', $post->id ) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PATCH')
                    <div>
                        <div class="col-2 mt-3">
                        <input type="text" class="form-control" name="title" placeholder="Введите название" value="{{ $post->title }}">
                        @error('title')
                            {{ $message}}
                            @enderror
                        </div>
                        <div class="form-group ml-2">
                            <textarea id="summernote" name="content" placeholder="Введите текст">{{ $post->content }}</textarea>
                            @error('content')
                            {{ $message}}
                            @enderror
                        </div>
                        <div class="form-group w-50 ml-2">
                            <label for="exampleInputFile">Добавить превью изображения</label>
                            <div class="w-25 mb-2">
                                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image" >
                                    <label class="custom-file-label" >Выберите изображение</label>

                                </div>
                            </div>
                            @error('preview_image')
                            {{ $message}}
                            @enderror
                        </div>

                        <div class="form-group w-50 ml-2">
                            <label for="exampleInputFile">Добавить главное изображение</label>
                            <div class="w-25 mb-2">
                                <img src="{{ asset('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image" >
                                    <label class="custom-file-label" >Выберите изображение</label>
                                </div>
                            </div>
                            @error('main_image')
                            {{ $message}}
                            @enderror
                        </div>
                        <div class="form-group w-50 ml-2">
                            <label>Выберите категорию</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : ''}}>
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group ml-2">
                            <label>Тэги</label>
                            <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected': '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                <!-- /.card-body -->

                    <button type="submit" class="btn btn-primary ml-3 mt-3">Обновить</button>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
