@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Администрирование</h3>
        <div class="row mt-3">
            @include('components/admin_nav')
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div><h5 class="">Список групп</h5></div>
                    <div><a href="{{ route('admin.groups.create') }}" style="color: white" class="btn btn-sm btn-primary ">Добавить</a></div>
                </div>
                <table class="table table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Код</th>
                            <th scope="col">Название</th>
                            <th scope="col">Кафедра</th>
                            <th scope="col">Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groups as $group)
                            <tr class="table-row" data-url="{{ route('admin.groups.edit', $group->id) }}">
                                <td>{{ $group->id }}</td>
                                <td>{{ $group->name }}</td>
                                <td>{{ $group->departament }}</td>
                                <td><a href="{{ route('admin.groups.destroy', $group->id) }}">Удалить</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto">
                {{ $groups->links() }}
            </div>
        </div>
    </div>
@endsection
