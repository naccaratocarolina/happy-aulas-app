<?php

use Illuminate\Database\Seeder;

class SubjectTeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'1',
        'subject_id'=>'1'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'1',
        'subject_id'=>'2'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'1',
        'subject_id'=>'3'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'2',
        'subject_id'=>'4'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'2',
        'subject_id'=>'5'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'2',
        'subject_id'=>'6'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'4',
        'subject_id'=>'12'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'4',
        'subject_id'=>'11'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'4',
        'subject_id'=>'10'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'4',
        'subject_id'=>'9'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'5',
        'subject_id'=>'1'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'5',
        'subject_id'=>'5'
      ]);
      DB::table('subject_teacher')->insert([
        'teacher_id'=>'5',
        'subject_id'=>'12'
      ]);
    }
}
