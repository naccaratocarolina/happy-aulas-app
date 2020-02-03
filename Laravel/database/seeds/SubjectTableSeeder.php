<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('subjects')->insert([
        'subject_name'=>'Calculo'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Fisica'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Programacao'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Robotica'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Mecanica'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Eletrica'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Termodinamica'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Ciencia Dos Materiais'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Eletromagnetismo'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Botanica'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Quimica'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Biologia'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Microbiologia'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Genetica'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Historia'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Geografia'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Artes'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Fotografia'
      ]);
    }
}
