@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Создание группы</h3>
        <form action="{{ route('admin.groups.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="name">
            </div>
            <div class="form-group">
                <label for="departament_id">Кафедра <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="departament_id" name="departament_id" class="form-control">
                    <option>123</option>
                </select>
            </div>
            <div class="form-group">
                <label for="course_id">Курс <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="course_id" name="course_id" class="form-control">
                    <option>123</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.groups.index') }}" class="btn btn-info">Назад</a>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection
