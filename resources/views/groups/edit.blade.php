@extends('base')

@section('body')
    <div class="container" id="body">
        <h3>Редактирование группы № {{ $group->id }}</h3>
        <form action="{{ route('admin.groups.update', $group->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <input class="form-control" type="text" id="name" value="{{ $group->name }}">
            </div>
            <div class="form-group">
                <label for="departament_id">Кафедра <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="departament_id" name="departament_id" class="form-control">
                    @foreach($departaments as $departament)
                        @if($departament->id === $group->departament_id)
                            <option selected>{{ $departament->name }}</option>
                        @else
                            <option>{{ $departament->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="course_id">Курс <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="course_id" name="course_id" class="form-control">
                    @foreach($courses as $course)
                        @if($course->id === $group->course_id)
                            <option selected>{{ $course->name }}</option>
                        @else
                            <option>{{ $course->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="course_id">Учебный год <span class="required-field" title="Обязательно для заполнения">*</span></label>
                <select id="course_id" name="course_id" class="form-control">
                    @foreach($academicYears as $academicYear)
                        @if($academicYear->id === $group->academic_year_id)
                            <option selected>{{ $academicYear->name }}</option>
                        @else
                            <option>{{ $academicYear->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div style="position: relative; height: 300px;">
                <div id="grid1" style="position: absolute; left: 0px; width: 49.9%; height: 300px;"></div>
                <div id="grid2" style="position: absolute; right: 0px; width: 49.9%; height: 300px;"></div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('admin.groups.index') }}" class="btn btn-info">Назад</a>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>

            <div class="mt-3">
                <h5>История перемещений</h5>
                <table class="table table-sm text-center">
                <thead>
                    <tr>
                        <th>Код</th>
                        <th>Курс</th>
                        <th>Учебный год</th>
                        <th>Активно</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->course }}</td>
                            <td>{{ $item->academic_year }}</td>
                            <td>{{ $item->active ? 'Да' : 'Нет' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function () {
            var data = {!! $disciplines !!}

            $('#grid1').w2grid({
                name: 'grid1',
                header: 'Доступные дисциплина',
                show: { header: true },
                columns: [
                    { field: 'recid', text: 'Код', size: '50px', sortable: true, attr: 'align=center' },
                    { field: 'name', text: 'Название', size: '90%', sortable: true },
                ],
                records: data,
                onClick: function (event) {
                    var grid = this;
                    // need timer for nicer visual effect that record was selected
                    setTimeout(function () {
                        w2ui['grid2'].add( $.extend({}, grid.get(event.recid), { selected : false }) );
                        grid.selectNone();
                        grid.remove(event.recid);
                    }, 150);
                }
            });

            $('#grid2').w2grid({
                name: 'grid2',
                header: 'Выбранные дисциплины',
                show: { header: true },
                columns: [
                    { field: 'recid', text: 'Код', size: '50px', sortable: true, attr: 'align=center' },
                    { field: 'name', text: 'Название', size: '90%', sortable: true },
                ],
                onClick: function (event) {
                    var grid = this;
                    // need timer for nicer visual effect that record was selected
                    setTimeout(function () {
                        w2ui['grid1'].add( $.extend({}, grid.get(event.recid), { selected : false }) );
                        grid.selectNone();
                        grid.remove(event.recid);
                    }, 150);
                }
            });
        });
    </script>
@endpush
