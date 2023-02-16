<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        $memberRole = new Role;
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //membuat sample admin
        $admin = new User;
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->save();
        $admin->attachRole($adminRole);

         //membuat sample admin kedua (Bisa di custom Sendiri)
         $admin = new User;
         $admin->name = "namakamu";
         $admin->email = "namamuadmin@gmail.com";
         $admin->password = bcrypt("rahasia");
         $admin->save();
         $admin->attachRole($adminRole);

        //membuat sample member
        $member = new User;
        $member->name = "Member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt("rahasia");
        $member->save();
        $member->attachRole($memberRole);

         //membuat sample member kedua (Bisa di custom Sendiri)
         $member = new User;
         $member->name = "namakamu";
         $member->email = "namamumember@gmail.com";
         $member->password = bcrypt("rahasia");
         $member->save();
         $member->attachRole($memberRole);

    }
}