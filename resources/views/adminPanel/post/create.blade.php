@extends('adminPanel.layout')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-primary bg-gradient text-white py-3">
                        <h2 class="h4 mb-0 text-center"><i class="bi bi-plus-circle me-2"></i>Создание нового поста</h2>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form action="{{route('posts.store')}}" method="post">
                            @csrf
                            @error('name')
                            <strong class="text-danger">
                                {{$message}}
                            </strong>
                            @enderror
                            <div class="form-floating mb-4">
                                <input type="text" name="name" class="form-control form-control-lg" id="floatingInput"
                                       placeholder="name@example.com">
                                <label for="floatingInput" class="text-secondary">Название</label>
                            </div>
                            @error('header')
                            <strong class="text-danger">
                                {{$message}}
                            </strong>
                            @enderror
                            <div class="form-floating mb-4">
                                <input type="text" name="header" class="form-control form-control-lg"
                                       id="floatingPassword"
                                       placeholder="">
                                <label for="floatingPassword" class="text-secondary">Заголовок</label>
                            </div>
                            @error('categories')
                            <strong class="text-danger">
                                {{$message}}
                            </strong>
                            @enderror
                            <div class="form-floating mb-4">
                                <select class="form-select" name="category_id">
                                    <option value=""></option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <label class="text-secondary">Категория</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select class="form-select h-100" multiple name="tag[]">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                                <label class="form-label text-secondary">Рубрики</label>
                            </div>

                            @error('actors')
                            <strong class="text-danger">
                                {{$message}}
                            </strong>
                            @enderror
                            <div class="form-floating mb-4">
                                <textarea name="actors" class="form-control form-control-lg"
                                          placeholder="Leave a comment here"
                                          id="floatingTextarea" style="height: 150px"></textarea>
                                <label for="floatingTextarea" class="text-secondary">В главных ролях</label>
                            </div>
                            @error('content')
                            <strong class="text-danger">
                                {{$message}}
                            </strong>
                            @enderror
                            <div class="form-floating mb-4">
                                <textarea name="content" class="form-control form-control-lg"
                                          placeholder="Leave a comment here"
                                          id="floatingTextarea" style="height: 150px"></textarea>
                                <label for="floatingTextarea" class="text-secondary">Описание фильма</label>
                            </div>
                            @error('image')
                            <strong class="text-danger">
                                {{$message}}
                            </strong>
                            @enderror
                            <div class="form-floating mb-4">
                                <input type="text" name="image" class="form-control form-control-lg"
                                       id="floatingPassword" placeholder="">
                                <label for="floatingTextarea" class="text-secondary">Превью</label>
                            </div>
                            @error('video')
                            <strong class="text-danger">
                                {{$message}}
                            </strong>
                            @enderror
                            <div class="form-floating mb-4">
                                <input type="text" name="video" class="form-control form-control-lg"
                                       id="floatingPassword" placeholder="">
                                <label for="floatingTextarea" class="text-secondary">Видео</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg py-3 fw-bold" type="submit">
                                    Опубликовать
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
