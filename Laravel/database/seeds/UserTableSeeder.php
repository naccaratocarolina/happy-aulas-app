<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Igor Delfino',
        'email' => 'igordelfino@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/3.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Stefane Moraes',
        'email' => 'stefanemoraes@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/7.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Carolina Naccarato',
        'email' => 'carolinanaccarato@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/6.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Gabriela Mattos',
        'email' => 'gabrielamattos@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/9.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Gabriel Batata',
        'email' => 'gabrielbatata@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/2.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Luciana Merege',
        'email' => 'lucianamerege@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/5.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Vini Pavani',
        'email' => 'vinipavani@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/1.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Paulo Renato Mendes',
        'email' => 'paulorenato@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/8.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Gabriel Conde',
        'email' => 'gabrielconde@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/4.jpg',
      ]);
      DB::table('users')->insert([
        'name' => 'Milton Quillinan',
        'email' => 'miltonarthurquillinan@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'c_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'profile_picture' => 'profilePictures/10.jpg',
      ]);
    }
}
