<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\CourseGroup;
use App\Models\Departament;
use App\Models\Discipline;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::on()
            ->select([
                'groups.*',
                'departaments.name as departament'
            ])
            ->join(
                'departaments',
                'groups.departament_id',
                '=',
                'departaments.id'
            )
            ->paginate(15);

        return view('groups/index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::on()
            ->select([
                'groups.*',
                'courses_groups.course_id',
                'courses_groups.academic_year_id'
            ])
            ->join(
                'courses_groups',
                'groups.id',
                '=',
                'courses_groups.group_id'
            )
            ->where('courses_groups.active', true)
            ->findOrFail($id);
        $departaments = Departament::get();
        $courses = Course::get();
        $academicYears = AcademicYear::get();
        $disciplines = Discipline::on()
            ->select([
                'id as recid',
                'name'
            ])
            ->where('semester_id', 1)
            ->where('departament_id', 1)
            ->get();

        $history = CourseGroup::on()
            ->select([
                'courses_groups.*',
                'courses.name as course',
                'academic_years.name as academic_year'
            ])
            ->join(
                'courses',
                'courses_groups.course_id',
                '=',
                'courses.id'
            )
            ->join(
                'academic_years',
                'courses_groups.academic_year_id',
                '=',
                'academic_years.id'
            )
            ->where('group_id', $id)
            ->get();

        return view('groups/edit',
            compact(
            'group',
            'departaments',
            'courses',
            'academicYears',
            'history',
            'disciplines'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
