@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Создание пользователя</h3>
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">Имя <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="patronymic">Отчество</label>
                <input class="form-control" type="text" id="patronymic" name="patronymic">
            </div>
            <div class="form-group">
                <label for="login">Логин <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">Эл.почта</label>
                <input class="form-control" type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="number_phone">Номер телефона</label>
                <input class="form-control" type="text" id="number_phone" name="number_phone">
            </div>
            <div class="form-group">
                <label for="role_id">Роль <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="role_id" name="role_id" class="form-control" required>
                    <option>123</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.users.index') }}" class="btn btn-info">Назад</a>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection
