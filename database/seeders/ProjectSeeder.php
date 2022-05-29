<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = array();
        for ($i = 0; $i < 10; $i++) {
            $projects[] = [
                'name' => 'Project ' . $i,
                'message' => 'Project ' . $i . ' message that has to be long enough to test the website and describing the project.',
                'email' => 'project' . $i,
            ];
        }
        ProjectSeeder::insert($projects);
    }
}