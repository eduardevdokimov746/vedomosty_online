@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Администрирование</h3>
        <div class="row mt-3">
            @include('components/admin_nav')
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div><h5 class="">Список пользователей</h5></div>
                    <div><a href="{{ route('admin.users.create') }}" style="color: white" class="btn btn-sm btn-primary ">Добавить</a></div>
                </div>
                <table class="table table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Код</th>
                            <th scope="col">ФИО</th>
                            <th scope="col">Логин</th>
                            <th scope="col">Роль</th>
                            <th scope="col">Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr class="table-row" data-url="{{ route('admin.users.edit', $user->id) }}">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->last_name . ' ' . $user->first_name . ' ' . $user->patronymic }}</td>
                                <td>{{ $user->login }}</td>
                                <td>{{ $user->role }}</td>
                                <td><a href="{{ route('admin.users.destroy', $user->id) }}">Удалить</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
