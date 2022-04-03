@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Администрирование</h3>
        <div class="row mt-3">
            @include('components/admin_nav')
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div><h5 class="">Список дисциплин</h5></div>
                    <div><a href="{{ route('admin.disciplines.create') }}" style="color: white" class="btn btn-sm btn-primary ">Добавить</a></div>
                </div>
                <table class="table table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Код</th>
                            <th scope="col">Название</th>
                            <th scope="col">Кафедра</th>
                            <th scope="col">Семестр</th>
                            <th scope="col">Форма контроля</th>
                            <th scope="col">Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($disciplines as $discipline)
                            <tr class="table-row" data-url="hello">
                                <td>{{ $discipline->id }}</td>
                                <td>{{ $discipline->name }}</td>
                                <td>{{ $discipline->departament }}</td>
                                <td>{{ $discipline->semester }}</td>
                                <td>{{ $discipline->form_control }}</td>
                                <td><a href="{{ route('admin.disciplines.destroy', $discipline->id) }}">Удалить</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="m-auto">
                {{ $disciplines->links() }}
            </div>

        </div>
    </div>
@endsection
