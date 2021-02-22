<?php

use App\Model\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['admin', 'user'];

        foreach ($data as $dt){
            Role::create([
                'name'  => $dt
            ]);
        }
    }
}
