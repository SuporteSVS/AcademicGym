<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      =>  'Gerente',
            'email'     =>  'gerente@email.com',
            'password'  =>  bcrypt('svs123456'),
            'Tipos'     =>  'Gerente',
        ]);
        DB::table('users')->insert([
            'name'      =>  'Recepcionista',
            'email'     =>  'recepcionista@email.com',
            'password'  =>  bcrypt('svs123456'),
            'Tipos'     =>  'Recepcionista',
        ]);
        DB::table('users')->insert([
            'name'      =>  'Instrutor',
            'email'     =>  'instrutor@email.com',
            'password'  =>  bcrypt('svs123456'),
            'Tipos'     =>  'Instrutor',
        ]);
        DB::table('users')->insert([
            'name'      =>  'Aluno',
            'email'     =>  'aluno@email.com',
            'password'  =>  bcrypt('svs123456'),
            'Tipos'     =>  'Aluno',
        ]);
    }
}
