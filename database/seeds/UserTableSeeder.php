<?php

use CodeDelivery\Models\Client;
use CodeDelivery\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'User',
            'email' => 'user@user.com.br',
            'password' => bcrypt('123'),
            'remember_token' => str_random(10),
        ]);
        factory(User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@user.com.br',
            'role' => 'admin',
            'password' => bcrypt('123'),
            'remember_token' => str_random(10),
        ]);

        factory(User::class, 10)->create()->each(function($u){
            $u->client()->save( factory(Client::class)->make() );
        });


        factory(User::class,3)->create([
            'role' => 'deliveryman'
        ]);
    }
}
