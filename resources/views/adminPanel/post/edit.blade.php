@extends('adminPanel.layout')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-primary bg-gradient text-white py-3">
                        <h2 class="h4 mb-0 text-center"><i class="bi bi-plus-circle me-2"></i>Редактирование поста</h2>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form action="" method="post">
                            <div class="form-floating mb-4">
                                <input type="text" name="name" class="form-control form-control-lg" id="floatingInput"
                                       placeholder="name@example.com">
                                <label for="floatingInput" class="text-secondary">Название</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" name="header" class="form-control form-control-lg"
                                       id="floatingPassword"
                                       placeholder="">
                                <label for="floatingPassword" class="text-secondary">Заголовок</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select class="form-select" name="categories">
                                    <option value=""></option>
                                </select>
                                <label class="text-secondary">Категория</label>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea name="actors" class="form-control form-control-lg"
                                          placeholder="Leave a comment here"
                                          id="floatingTextarea" style="height: 150px"></textarea>
                                <label for="floatingTextarea" class="text-secondary">В главных ролях</label>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea name="content" class="form-control form-control-lg"
                                          placeholder="Leave a comment here"
                                          id="floatingTextarea" style="height: 150px"></textarea>
                                <label for="floatingTextarea" class="text-secondary">Описание фильма</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" name="image" class="form-control form-control-lg"
                                       id="floatingPassword" placeholder="">
                                <label for="floatingTextarea" class="text-secondary">Превью</label>
                            </div>

                            <div class="input-group mb-4">
                                <input type="file" name="video" class="form-control" id="inputGroupFile04"
                                       aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg py-3 fw-bold" type="submit">
                                    <i class="bi bi-send-fill me-2"></i>Редактировать
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
