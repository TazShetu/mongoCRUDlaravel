<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            0 => ["Dummy 1", "d@g.com", "123456789"],
            1 => ["Super Admin", "sg@g.com", "123456789A"],
            2 => ["Admin", "a@g.com", "123456789A"],
            3 => ["Dummy 2", "d2@g.com", "123456789"],
            4 => ["Dummy 3", "d3@g.com", "123456789"],
            5 => ["Dummy 4", "d4@g.com", "123456789"],
            6 => ["Dummy 5", "d5@g.com", "123456789"],
            7 => ["Dummy 6", "d6@g.com", "123456789"],
            8 => ["Dummy 7", "d7@g.com", "123456789"],
            9 => ["App User", "app_user@g.com", "123456789Asdf"],
            10 => ["Tanjemul", "tanjemul.twinbit@gmail.com", "123456789W"],
            11 => ["Sakib", "sakib.twinbit@gmail.com", "123456789F"],
            12 => ["Tawabul", "tawabul.twinbit@gmail.com", "123456789L"],
        ];

        foreach ($users as $u) {
            $user = new User;
            $user->name = $u[0];
            $user->email = $u[1];
            $user->password = bcrypt($u[2]);
            $user->save();
        }

    }
}
