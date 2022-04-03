<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentCreditSeeder extends Seeder
{
    protected const STATEMENT_OPEN = 1;

    public function run($statementStatus, $groupId, $academicYear, $semester): array
    {
        $students = Student::on()
            ->where('group_id', $groupId)
            ->pluck('id');

        $years = explode('-', $academicYear);

        $year = $semester % 2 === 0 ? $years[1] : $years[0];
        $month1 = $semester % 2 === 0 ? 3 : 10;
        $month2 = $semester % 2 === 0 ? 6 : 12;
        $date1 = Carbon::create($year, $month1, mt_rand(1, 30))->toDateString();
        $date2 = Carbon::create($year, $month2, mt_rand(1, 30))->toDateString();

        if ($statementStatus === self::STATEMENT_OPEN) {
            foreach ($students as $student) {
                $res[] = [
                    'student_id' => $student,
                    'first_checkout_date' => $date1,
                    'second_checkout_date' => $date2
                ];
            }
        } else {
            foreach ($students as $student) {
                $lec1 = mt_rand(60, 100);
                $pr1 = mt_rand(60, 100);
                $lab1 = mt_rand(60, 100);
                $total1 = round(($lec1 + $pr1 + $lab1) / 3);

                $lec2 = mt_rand(60, 100);
                $pr2 = mt_rand(60, 100);
                $lab2 = mt_rand(60, 100);
                $total2 = round(($lec2 + $pr2 + $lab2) / 3);

                $finalTotal = round(($total1 + $total2) / 2);

                $res[] = [
                    'first_checkout_lecture_percent' => $lec1,
                    'first_checkout_practice_percent' => $pr1,
                    'first_checkout_lab_percent' => $lab1,
                    'first_checkout_total_percent' => $total1,
                    'second_checkout_lecture_percent' => $lec2,
                    'second_checkout_practice_percent' => $pr2,
                    'second_checkout_lab_percent' => $lab2,
                    'second_checkout_total_percent' => $total2,
                    'total_id' => $this->getTotalId($finalTotal),
                    'is_credit' => true,
                    'student_id' => $student,
                    'first_checkout_date' => $date1,
                    'second_checkout_date' => $date2
                ];
            }
        }

        return $res;
    }

    protected function getTotalId($score): int
    {
        return match(true) {
            $score < 60 => 4,
            $score >= 60 && $score < 74 => 3,
            $score >= 74 && $score < 90 => 2,
            $score >= 90 => 1
        };
    }
}
