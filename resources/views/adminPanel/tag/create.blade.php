@extends('adminPanel.layout')

@section('content')
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <button class="accordion-button collapsed bg-black bg-gradient text-white py-3" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <span class="h4 mb-0 text-center w-100">
                    Добавить тег
                </span>
            </button>
            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                 data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <form action="{{route('tags.store')}}" method="post">
                        @csrf
                        @error('name')
                        <div class="d-block text-danger">
                            {{$message}}
                        </div>
                        @enderror
                        <label for="inputPassword5" class="form-label">Тег</label>
                        <input type="text" name="name" class="form-control mb-3" value="{{old('name')}}">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="mt-5">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-black bg-gradient text-white py-3">
                    <h2 class="h4 mb-0 text-center"><i class="bi bi-plus-circle me-2"></i>Список категорий</h2>
                </div>
                <div class="card-body p-4 p-md-5">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Название</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        @foreach($tags as $tag)
                            <tbody>
                            <tr>
                                <th scope="row">{{$tag->id}}</th>
                                <td></td>
                                <td>{{$tag->name}}</td>
                                <td></td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
