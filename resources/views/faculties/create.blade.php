@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Создание факультета</h3>
        <form action="{{ route('admin.faculties.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="name" required>
            </div>
            <div class="form-group">
                <label for="short_name">Короткое название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="short_name" value="{{ $faculty->short_name }}" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.faculties.index') }}" class="btn btn-info">Назад</a>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection
