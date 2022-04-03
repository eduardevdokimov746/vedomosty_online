@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Создание дисциплины</h3>
        <form action="{{ route('admin.disciplines.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="name" required>
            </div>
            <div class="form-group">
                <label for="departament_id">Кафедра <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="departament_id" name="departament_id" class="form-control" required>
                    <option>123</option>
                </select>
            </div>
            <div class="form-group">
                <label for="course_id">Курс <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="course_id" name="course_id" class="form-control" required>
                    <option>123</option>
                </select>
            </div>
            <div class="form-group">
                <label for="count_credits">Количество кредитов</label>
                <input type="number" id="count_credits" class="form-control" name="count_credits">
            </div>
            <div class="form-group">
                <label for="total_hours">Количество часов <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input type="number" id="total_hours" class="form-control" name="total_hours" required>
            </div>
            <div class="form-group">
                <label for="lecture_hours">Лекционных часов</label>
                <input type="number" id="lecture_hours" class="form-control" name="lecture_hours">
            </div>
            <div class="form-group">
                <label for="lab_hours">Лабораторных часов</label>
                <input type="number" id="lab_hours" class="form-control" name="lab_hours">
            </div>
            <div class="form-group">
                <label for="practice_hours">Практических часов</label>
                <input type="number" id="practice_hours" class="form-control" name="practice_hours">
            </div>
            <div class="form-group">
                <label for="form_control">Курс <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="form_control" name="form_control" class="form-control" class="form-control" required>
                    <option>123</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.disciplines.index') }}" class="btn btn-info">Назад</a>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection
