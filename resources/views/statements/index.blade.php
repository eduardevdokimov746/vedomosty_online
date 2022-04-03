@extends('base')

@section('body')
<div class="container" id="body">
    <h3>Ведомости</h3>
    <div class="row">
        <div class="col-3">
            <div id="jstree">
                <ul>
                    @foreach($tree as $key => $item)
                        <li>{{ $key }}
                            <ul id="child_node_1">
                                @foreach($item as $key1 => $item1)
                                    <li>{{ $key1 }}
                                        <ul>
                                            @foreach($item1 as $item2)
                                                <li id="{{ $item2['id'] }}">{{ $item2['group_name'] }}</li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-9">
            <div class="filter" style="border: 1px solid silver; border-radius: 0.25rem; background-color: #ebe9e9; padding: 5px 20px; margin-bottom: 20px;">
                <div class="row indent">
                    <div class="form-group col-sm-6">
                        <div class="row">
                            <label class="col-sm-5 col-form-label">Учебный год</label>
                            <select class="col-sm-7 form-control form-control-sm" name="year">
                                @foreach($academicYears as $academicYear)
                                    <option value="{{ $academicYear->id }}">{{ $academicYear->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <div class="row">
                            <label class="col-sm-5 col-form-label">Кафедра</label>
                            <select class="col-sm-7 form-control form-control-sm" name="departament">
                                <option value="0">Все кафедры</option>
                                @foreach($departaments as $departament)
                                    <option value="{{ $departament->id }}">{{ $departament->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row indent">
                    <div class="form-group col-sm-6">
                        <div class="row">
                            <label class="col-sm-5 col-form-label">Семестр</label>
                            <select class="col-sm-7 form-control form-control-sm" name="year">
                                @foreach($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <div class="row">
                            <label class="col-sm-5 col-form-label">Статус</label>
                            <select class="col-sm-7 form-control form-control-sm" name="semestr">
                                @foreach($statementStatuses as $statementStatus)
                                    <option value="{{ $statementStatus->id }}">{{ $statementStatus->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row d-flex flex-row-reverse">
                    <button class="btn btn-primary btn-sm">Найти</button>
                </div>
            </div>

            <h5>Ведомости группы СКС-18</h5>
            <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col">Дисциплина</th>
                  <th scope="col">Тип</th>
                  <th scope="col">Статус</th>
                  <th scope="col">Семестр</th>
                  <th scope="col">Преподаватель</th>
                </tr>
              </thead>
              <tbody id="table-body">

              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
