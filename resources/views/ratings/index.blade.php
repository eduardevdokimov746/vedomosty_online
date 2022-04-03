@extends('base')

@section('body')
    <div class="container" id="body">
    <h3>Рейтинги</h3>
    <div class="row">
        <div class="col-3">
            <div id="jstree">
                <ul>
                    <li>СКС
                        <ul id="child_node_1">
                            <li>1 Курс
                                <ul>
                                    <li>СКС-18</li>
                                    <li>СКС-18-з</li>
                                </ul>
                            </li>
                            <li>2 Курс
                                <ul>
                                    <li>СКС-18</li>
                                    <li>СКС-18-з</li>
                                </ul>
                            </li>
                            <li>3 Курс
                                <ul>
                                    <li>СКС-18</li>
                                    <li>СКС-18-з</li>
                                </ul>
                            </li>
                            <li>4 Курс
                                <ul>
                                    <li>СКС-18</li>
                                    <li>СКС-18-з</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>ЭМА
                        <ul id="child_node_1">
                            <li>1 Курс
                                <ul>
                                    <li>ЭМА-18</li>
                                    <li>ЭМА-18-з</li>
                                </ul>
                            </li>
                            <li>2 Курс
                                <ul>
                                    <li>ЭМА-18</li>
                                    <li>ЭМА-18-з</li>
                                </ul>
                            </li>
                            <li>3 Курс
                                <ul>
                                    <li>ЭМА-18</li>
                                    <li>ЭМА-18-з</li>
                                </ul>
                            </li>
                            <li>4 Курс
                                <ul>
                                    <li>ЭМА-18</li>
                                    <li>ЭМА-18-з</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
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
                                <option value="2016-2018">2016-2018</option>
                                <option value="2018-2018">2018-2018</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <div class="row">
                            <label class="col-sm-5 col-form-label">Группы</label>
                            <select class="col-sm-7 form-control form-control-sm" name="semestr">
                                <option value="0">Выбрать</option>
                                <option value="0">CКС-18</option>
                                <option value="0">CКС-18-з</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row d-flex flex-row-reverse">
                    <button class="btn btn-primary btn-sm">Найти</button>
                </div>
            </div>

            <div>
                <h5 class="d-flex justify-content-between">
                    <span>Рейтинги студентов группы <b>СКС-18</b> за <b>2021-2022</b> учебный год</span>
                    <button class="btn btn-sm btn-primary" onclick="printTable()">Печать</button>
                </h5>
                <table class="table table-sm table-bordered text-center">
              <thead>
                <tr>
                  <th scope="col">№</th>
                  <th scope="col">ФИО</th>
                  <th scope="col">Средний балл</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Мышов Алексей Сергеевич</td>
                  <td>7,4</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Мышов Алексей Сергеевич</td>
                  <td>7,4</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Мышов Алексей Сергеевич</td>
                  <td>7,4</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Мышов Алексей Сергеевич</td>
                  <td>7,4</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Мышов Алексей Сергеевич</td>
                  <td>7,4</td>
                </tr>

              </tbody>
            </table>
            </div>
        </div>
    </div>
</div>


<div id="print-content" style="display: none">
    <h4 class="text-center">
        Рейтинги студентов группы <b>СКС-18</b> за <b>2021-2022</b> учебный год
    </h4>
    <table class="table table-sm table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">ФИО</th>
                <th scope="col">Средний балл</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Мышов Алексей Сергеевич</td>
                <td>7,4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Мышов Алексей Сергеевич</td>
                <td>7,4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Мышов Алексей Сергеевич</td>
                <td>7,4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Мышов Алексей Сергеевич</td>
                <td>7,4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Мышов Алексей Сергеевич</td>
                <td>7,4</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
    <script>

    </script>

@endpush
