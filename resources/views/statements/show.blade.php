@extends('base')

@section('body')
    <div class="container-fluid"  id="body">
        <h3>Ведомость учета успеваемости студентов № 315434</h3>

        <div class="row">
            <div class="col-md-12" style="font-size: 0.8em">
                <div class="row">
                    <div class="col-md-3">
                        <span>Преподаватель: <span>Мышов А.С.</span></span>
                    </div>
                    <div class="col-md-3">
                        <span>Курс: <span>4</span></span>

                    </div>
                    <div class="col-md-6">
                        <span>Дисциплина: <span>Компьютерные сети и телекоммуникации</span></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <span>Кафедра: <span>СКС</span></span>
                    </div>
                    <div class="col-md-3">
                        <span>Семестр: <span>7</span></span>

                    </div>
                    <div class="col-md-6">
                        <span>Количество часов: <span>72</span></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <span>Группа: <span>СКС-17</span></span>

                    </div>
                    <div class="col-md-3">
                        <span>Учебный год: <span>2020-2021</span></span>
                    </div>
                    <div class="col-md-6">
                        <span>Статус: <span><b>Закрыта</b></span></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

        <div class="mt-1">
            <h5>Зачет</h5>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="toolbar" style="padding: 2px"></div>
                <div id="grid" style="height: 600px;"></div>
            </div>
            <button class="w2ui-btn" onclick="showChanged()">Get Changed</button>
        </div>
    </div>

    @push('scripts')

        @include('statements/exam_temp')
{{--        @include('statements/credit_temp')--}}
    @endpush
@endsection
