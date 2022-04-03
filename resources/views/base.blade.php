<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Учет онлайн</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/jstree.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/all.min.css') }}" />
</head>
<body class="bg-light" id="doc">

<header class="mb-3">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">Учет онлайн</a>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('statements.index') }}">Ведомости</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ratings.index') }}">Рейтинги</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.faculties.index') }}">Администрирование</a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Мышов А.С.</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Выход</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>

@yield('body')

<footer class="footer mt-3" style="background: #343a40">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('info.faq') }}">Помощь</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('info.about') }}">О программе</a>
                    </li>
                </ul>
            </div>

            <div>
                <span style="color: rgba(255,255,255,.5);">Дипломный проект Мышова А.С.</span>
            </div>
        </div>
    </nav>
</footer>

<script src="{{ asset('storage/js/jquery.min.js') }}"></script>
<script src="{{ asset('storage/js/jstree.min.js') }}"></script>
<script src="{{ asset('storage/js/all.js') }}"></script>
<script src="{{ asset('storage/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('storage/js/w2ui.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.table-row').click(function (e) {
            window.location = $(e.currentTarget).data('url');
        });

        $('#jstree').jstree({
          "core" : {
            "animation" : 0,
            "check_callback" : true,
            "themes" : { "stripes" : true },
            }
        });

        $('#jstree').on("changed.jstree", function (e, data) {
            let id = data.node.id;
            console.log(id);

            $.ajax({
                url: 'http://' + location.host + '/statements/getDisciplines/' + id,
                method: 'GET',
                success: function (data) {
                    data.forEach((item) => {
                        let html = "<tr class='table-row' data-url='hello'>";
                        html += "<td>"+ item.discipline +"</td>";
                        html += "<td>"+ item.type +"</td>";
                        html += "<td>"+ item.status +"</td>";
                        html += "<td>"+ item.semester +"</td>";
                        html += "<td>"+ item.last_name + ' ' + item.first_name.charAt(0)  + '. ' + item.patronymic.charAt(0) + '.' +"</td></tr>";

                        $('#table-body').append(html);
                    });
                }
            })

        });

        // $('button').on('click', function () {
        //   $('#jstree').jstree(true).select_node('child_node_1');
        //   $('#jstree').jstree('select_node', 'child_node_1');
        //   $.jstree.reference('#jstree').select_node('child_node_1');
        // });

        function printTable(){
            let body = document.getElementById('doc').innerHTML;
            document.getElementById('print-content').style.display = 'block';
            let printContent = document.getElementById('print-content').innerHTML;
            document.getElementById('doc').innerHTML = printContent;
            window.print();
            document.getElementById('doc').innerHTML = body;
            document.getElementById('print-content').style.display = 'none';
        }

        $('#body').css('min-height', $(window).height() - 140);
    });
</script>
@stack('scripts')
</body>
</html>
