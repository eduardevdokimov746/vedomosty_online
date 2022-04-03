@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Редактирование кафедры № {{ $departament->id }}</h3>
        <form action="{{ route('admin.departaments.update', $departament->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="name" value="{{ $departament->name }}" required>
            </div>
            <div class="form-group">
                <label for="short_name">Короткое название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="short_name" value="{{ $departament->short_name }}" required>
            </div>
            <div class="form-group">
                <label for="faculty_id">Факультет <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="faculty_id" name="faculty_id" class="form-control">
                    @foreach($faculties as $faculty)
                        @if($faculty->id === $departament->faculty_id)
                            <option selected>{{ $faculty->name }}</option>
                        @else
                            <option>{{ $faculty->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.departaments.index') }}" class="btn btn-info">Назад</a>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
