@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Администрирование</h3>
        <div class="row mt-3">
            @include('components/admin_nav')
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div><h5 class="">Список студентов</h5></div>
                    <div><a href="{{ route('admin.students.create') }}" style="color: white" class="btn btn-sm btn-primary ">Добавить</a></div>
                </div>
                <table class="table table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Код</th>
                            <th scope="col">ФИО</th>
                            <th scope="col">Зачетка</th>
                            <th scope="col">Группа</th>
                            <th scope="col">Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr class="table-row" data-url="{{ route('admin.students.edit', $student->id) }}">
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->last_name . ' ' . $student->first_name . ' ' . $student->patronymic }}</td>
                                <td>{{ $student->record_book_number }}</td>
                                <td>{{ $student->group }}</td>
                                <td><a href="{{ route('admin.students.destroy', $student->id) }}">Удалить</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto">
                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection
