<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HalfYear;
use Carbon\Carbon;

class HalfYearSeeder extends Seeder
{
    public function run()
    {
        $halfYears = [];

        for ($i = 0; $i < 10; $i++) {
            $now = Carbon::now(); // Reset $now for each iteration
            $year = $now->year - $i;

            $halfYears[] = [
                'name' => "Half 1 $year",
                'start_date' => $now->setDate($year, 1, 1)->toDateString(),
                'end_date' => $now->setDate($year, 7, 1)->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $halfYears[] = [
                'name' => "Half 2 $year",
                'start_date' => $now->setDate($year, 7, 1)->toDateString(),
                'end_date' => $now->setDate($year + 1, 1, 1)->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert unique half years
        foreach ($halfYears as $halfYear) {
            HalfYear::updateOrCreate(
                ['name' => $halfYear['name']],
                $halfYear
            );
        }
    }
}
