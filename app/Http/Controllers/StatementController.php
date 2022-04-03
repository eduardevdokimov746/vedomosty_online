<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\CourseGroup;
use App\Models\Departament;
use App\Models\Semester;
use App\Models\StatementStatus;
use Illuminate\Http\JsonResponse;

class StatementController extends Controller
{
    public function index()
    {
        $tree = $this->getTree();

        $this->getDisciplines(1);

        $departaments = Departament::on()->get();
        $academicYears = AcademicYear::on()->get();
        $semesters = Semester::on()->get();
        $statementStatuses = StatementStatus::on()->get();

        return view('statements/index', compact(
            'tree',
            'departaments',
            'academicYears',
            'semesters',
            'statementStatuses'
        ));
    }

    public function show()
    {
        return view('statements/show');
    }

    public function getDisciplines(int $id): JsonResponse
    {
        $result = CourseGroup::on()
            ->select([
                'groups_disciplines.id as id',
                'disciplines.name as discipline',
                'semesters.name as semester',
                'statement_statuses.name as status',
                'statement_types.name as type',
                'users.first_name',
                'users.last_name',
                'users.patronymic',
            ])
            ->join(
                'groups_disciplines',
                'courses_groups.id',
                '=',
                'groups_disciplines.course_group_id'
            )
            ->join(
                'disciplines',
                'groups_disciplines.discipline_id',
                '=',
                'disciplines.id'
            )
            ->join(
                'semesters',
                'disciplines.semester_id',
                '=',
                'semesters.id'
            )
            ->join(
                'statements',
                'statements.group_discipline_id',
                '=',
                'groups_disciplines.id'
            )
            ->join(
                'statement_statuses',
                'statements.status_id',
                '=',
                'statement_statuses.id'
            )
            ->join(
                'statement_types',
                'statements.type_id',
                '=',
                'statement_types.id'
            )
            ->join(
                'users',
                'statements.user_id',
                '=',
                'users.id'
            )
            ->where('groups_disciplines.course_group_id', $id)
            ->take(5)
            ->get();

        return response()->json($result);
    }

    protected function getTree(): array
    {
        return Departament::on()
            ->select([
                'departaments.short_name as departament_name',
                'courses.name as course_name',
                'groups.name as group_name',
                'courses_groups.id',
            ])
            ->join(
                'groups',
                'groups.departament_id',
                '=',
                'departaments.id'
            )
            ->join(
                'courses_groups',
                'groups.id',
                '=',
                'courses_groups.group_id'
            )
            ->join(
                'courses',
                'courses_groups.course_id',
                '=',
                'courses.id'
            )
            ->get()
            ->groupBy(['departament_name', 'course_name'])
            ->toArray();
    }
}
