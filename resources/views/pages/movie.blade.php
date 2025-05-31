@extends('layout')

@section('title')
    <h3 class="mt-3">Просмотр</h3>
@endsection

@section('content')

    <main>
        <div class="container">
            <div class="one-movie">
                <div class="card mb-3 mt-3 one-movie__item">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <img src="" class="img-fluid rounded one-movie__image" alt="">

                            <form action="/reviews/add" method="post" class="m-3 w-100">
                                <input type="hidden" value="" name="id">
                                <select
                                    class="form-select"
                                    name="rating"
                                    aria-label="Default select example"
                                >
                                    <option selected>Оценка</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <div id="name" class="invalid-feedback">
                                </div>
                                <div class="form-floating mt-2">
                                    <textarea
                                        class="form-control "
                                        name="comment"
                                        placeholder="Укажи свое мнение о фильме"
                                        id="floatingTextarea2"
                                        style="height: 100px"
                                    ></textarea>
                                    <label for="floatingTextarea2">Комментарий</label>
                                    <div id="name" class="invalid-feedback">
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-2">Оставить отзыв</button>
                            </form>
                            <div class="alert alert-warning m-3 w-100">
                                Для того, чтобы оставить отзыв, необходимо <a href="/login">авторизоваться</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title"></h1>
                                <p class="card-text">Оценка <span class="badge bg-warning warn__badge"></span></p>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-body-secondary">Добавлен </small></p>
                                <h4>Отзывы</h4>
                                <div class="one-movie__reviews">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
