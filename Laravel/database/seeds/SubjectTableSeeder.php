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
        'subject_name'=>'Cálculo',
        'subject_icon'=>'localIcons/1.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Física',
        'subject_icon'=>'localIcons/2.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Programação',
        'subject_icon'=>'localIcons/3.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Robótica',
        'subject_icon'=>'localIcons/4.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Mecânica',
        'subject_icon'=>'localIcons/5.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Elétrica',
        'subject_icon'=>'localIcons/6.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Termodinâmica',
        'subject_icon'=>'localIcons/7.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Eletromagnetismo',
        'subject_icon'=>'localIcons/8.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Botânica',
        'subject_icon'=>'localIcons/9.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Química',
        'subject_icon'=>'localIcons/10.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Biologia',
        'subject_icon'=>'localIcons/11.png'
      ]);
      DB::table('subjects')->insert([
        'subject_name'=>'Genética',
        'subject_icon'=>'localIcons/12.png'
      ]);
    }
}
