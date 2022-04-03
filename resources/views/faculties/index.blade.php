@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Администрирование</h3>
        <div class="row mt-3">
            @include('components/admin_nav')
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div><h5 class="">Список факультетов</h5></div>
                    <div><a href="{{ route('admin.faculties.create') }}" style="color: white" class="btn btn-sm btn-primary ">Добавить</a></div>
                </div>
                <table class="table table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Код</th>
                            <th scope="col">Название</th>
                            <th scope="col">Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faculties as $faculty)
                            <tr class="table-row" data-url="{{ route('admin.faculties.edit', $faculty->id) }}">
                                <td>{{ $faculty->id }}</td>
                                <td>{{ $faculty->name }}</td>
                                <td><a href="{{ route('admin.faculties.destroy', $faculty->id) }}">Удалить</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto">
                {{ $faculties->links() }}
            </div>
        </div>
    </div>
@endsection
