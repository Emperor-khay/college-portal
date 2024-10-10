<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Department;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [100, 200, 300, 400]; // Assuming 4 levels: 100, 200, 300, 400

        // Loop through each department
        $departments = Department::all();

        foreach ($departments as $department) {
            foreach ($levels as $level) {
                for ($i = 1; $i <= 2; $i++) {
                    DB::table('courses')->insert([
                        'code' => strtoupper(substr($department->name, 0, 3)) . '-' . $level . '-' . $i,
                        'name' => $department->name . ' Course ' . $i . ' Level ' . $level,
                        'description' => 'This is a course for ' . $department->name . ' level ' . $level,
                        'department_id' => $department->id,
                        'level' => $level,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
