@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Создание кафедры</h3>
        <form action="{{ route('admin.departaments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="name" required>
            </div>
            <div class="form-group">
                <label for="short_name">Короткое название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="short_name" required>
            </div>
            <div class="form-group">
                <label for="faculty_id">Факультет <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="faculty_id" name="faculty_id" class="form-control">
                    <option>123</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.departaments.index') }}" class="btn btn-info">Назад</a>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection
