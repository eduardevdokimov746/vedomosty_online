<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentExamSeeder extends Seeder
{
    protected const STATEMENT_OPEN = 1;

    public function run($statementStatus, $groupId, $academicYear, $semester): array
    {
        $students = Student::on()
            ->where('group_id', $groupId)
            ->pluck('id');

        $years = explode('-', $academicYear);

        $year = $semester % 2 === 0 ? $years[1] : $years[0];

        if ($statementStatus === self::STATEMENT_OPEN) {
            foreach ($students as $student) {
                $res[] = [
                    'student_id' => $student
                ];
            }
        } else {
            $month = array_rand([6, 1]);

            foreach ($students as $student) {
                $score = mt_rand(40, 100);
                $day = mt_rand(1, 27);

                $data = [
                    'student_id' => $student,
                    'score_date' => Carbon::create($year, $month, $day)->toDateString(),
                    'percent_score' => $score,
                    'start_total_id' => $this->getTotalId($score)
                ];

                if($score < 60 || ($score % 2 === 0 && $score <= 85)) {
                    $score = $score < 60 ? mt_rand(45, 90) : mt_rand($score, 100);

                    $data['additional_retake_score'] = $score;
                    $data['additional_retake_date'] = Carbon::create($year, $month, mt_rand($day++, 28))->toDateString();

                    if ($score < 60) {
                        $score = mt_rand(55, 80);

                        $data['first_retake_score'] = $score;
                        $data['first_retake_date'] = Carbon::create($year, $month, mt_rand($day++, 29))->toDateString();

                        if ($score < 60) {
                            $score = mt_rand(60, 70);
                            $data['second_retake_score'] = $score;
                            $data['second_retake_date'] = Carbon::create($year, $month, mt_rand($day, 30))->toDateString();
                        }
                    }
                }

                $data['final_total_id'] = $this->getTotalId($score);

                $res[] = $data;
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
