@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Редактирование студента № {{ $student->id }}</h3>
        <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">Имя <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="first_name" name="first_name" required value="{{ $student->first_name }}">
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="last_name" name="last_name" required value="{{ $student->last_name }}">
            </div>
            <div class="form-group">
                <label for="patronymic">Отчество</label>
                <input class="form-control" type="text" id="patronymic" name="patronymic" value="{{ $student->patronymic }}">
            </div>
            <div class="form-group">
                <label for="birth_date">Дата рождения</label>
                <input class="form-control" type="date" id="birth_date" name="birth_date" value="{{ $student->birth_date }}">
            </div>
            <div class="form-group">
                <label for="record_book_number">Номер зачетной книжки</label>
                <input class="form-control" type="text" id="record_book_number" name="record_book_number" required value="{{ $student->record_book_number }}">
            </div>
            <div class="form-group">
                <label for="group_id">Группа <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="group_id" name="group_id" class="form-control" required>
                    @foreach($groups as $group)
                        @if($group->id === $student->group_id)
                            <option selected>{{ $group->name }}</option>
                        @else
                            <option>{{ $group->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.students.index') }}" class="btn btn-info">Назад</a>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
