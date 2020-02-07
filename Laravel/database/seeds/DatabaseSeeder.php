<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        //$this->call(Teacher_SubjectTableSeeder::class);
        $this->call(SessionTableSeeder::class);
        $this->call(SubjectTableSeeder::class);

        //$this->call(Subject_TeacherTableSeeder::class);


    }
}
