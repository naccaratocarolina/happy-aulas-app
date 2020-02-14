<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('teachers')->insert([
        'bio' => 'Olá! Sou formado em Ciência da Computação e tenho muita experiência atuando como professor particular. Vamos agendar uma aula, tenho certeza que você não vai se arrepender!',
        'user_id' => '1',
      ]);
      DB::table('teachers')->insert([
        'bio' => 'Bom dia, boa tarde, boa noite, seja la a hora que você estiver vendo isso! Sou formada em Engenharia Eletrônica e ja atuei como monitora de diversas matérias ao longo da minha graduação. Tenho muita didática e tenho muita paciência. Bora marcar uma aula!',
        'user_id' => '2',
      ]);
      DB::table('teachers')->insert([
        'bio' => 'Bom dia!',
        'user_id' => '3',
      ]);
      DB::table('teachers')->insert([
        'bio' => 'Boa tarde!',
        'user_id' => '4',
      ]);
      DB::table('teachers')->insert([
        'bio' => 'Boa noite!',
        'user_id' => '5',
      ]);
    }
}
