<div class="nav flex-column nav-pills col-md-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ request()->getPathInfo() === '/faculties' ? 'active' : '' }}" href="{{ route('admin.faculties.index') }}">Факультеты</a>
    <a class="nav-link {{ request()->getPathInfo() === '/departaments' ? 'active' : '' }}" href="{{ route('admin.departaments.index') }}">Кафедры</a>
    <a class="nav-link {{ request()->getPathInfo() === '/users' ? 'active' : '' }}" href="{{ route('admin.users.index') }}">Пользователи</a>
    <a class="nav-link {{ request()->getPathInfo() === '/groups' ? 'active' : '' }}" href="{{ route('admin.groups.index') }}">Группы</a>
    <a class="nav-link {{ request()->getPathInfo() === '/students' ? 'active' : '' }}" href="{{ route('admin.students.index') }}">Студенты</a>
    <a class="nav-link {{ request()->getPathInfo() === '/disciplines' ? 'active' : '' }}" href="{{ route('admin.disciplines.index') }}">Дисциплины</a>
</div>
