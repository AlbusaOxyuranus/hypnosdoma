<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'Admin12345@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Igbaf1UpL7qFGdaDtT.CUO9DAW2FijhlUsW7Hbd3Cxx31NrDct1wq',
                'remember_token' => NULL,
                'created_at' => '2019-10-15 20:05:44',
                'updated_at' => '2019-10-15 20:05:44',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Антон Марков',
                'email' => 'nicile@antonmarkov.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CAuDmZjBM7A.TT9B1cNt4uxtr3VJull3vfv1KLZqjwSHypPNderTi',
                'remember_token' => NULL,
                'created_at' => '2019-10-21 19:33:41',
                'updated_at' => '2019-10-21 19:33:41',
            ),
            1 =>
            array (
                'id' => 3,
                'name' => 'Denis Prokhorchik',
                'email' => 'denisprokhorchik@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CAuDmZjBM7A.TT9B1cNt4uxtr3VJull3vfv1KLZqjwSHypPNderTi',
                'remember_token' => NULL,
                'created_at' => '2019-10-21 19:33:41',
                'updated_at' => '2019-10-21 19:33:41',
            ),
        ));


    }
}
