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
        'subject_name'=>'Calculo',
        'subject_icon'=>'localIcons/1.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Fisica',
        'subject_icon'=>'localIcons/2.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Programacao',
        'subject_icon'=>'localIcons/3.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Robotica',
        'subject_icon'=>'localIcons/4.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Mecanica',
        'subject_icon'=>'localIcons/5.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Eletrica',
        'subject_icon'=>'localIcons/6.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Termodinamica',
        'subject_icon'=>'localIcons/7.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Eletromagnetismo',
        'subject_icon'=>'localIcons/8.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Botanica',
        'subject_icon'=>'localIcons/9.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Quimica',
        'subject_icon'=>'localIcons/10.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Biologia',
        'subject_icon'=>'localIcons/11.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Genetica',
        'subject_icon'=>'localIcons/12.png'
      ]);
    }
}
