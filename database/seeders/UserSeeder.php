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
        $adminRole->display_name = "Admin Larapus";
        $adminRole->save();

        $memberRole = new Role;
        $memberRole->name = "member";
        $memberRole->display_name = "Member Larapus";
        $memberRole->save();

        //membuat sample admin
        $admin = new User;
        $admin->name = "Admin Larapus";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->save();
        $admin->attachRole($adminRole);

         //membuat sample admin kedua (Bisa di custom Sendiri)
         $admin = new User;
         $admin->name = "Arno";
         $admin->email = "cellestinocasso20@gmail.com";
         $admin->password = bcrypt("yareyare");
         $admin->save();
         $admin->attachRole($adminRole);

        //membuat sample member
        $member = new User;
        $member->name = "Member Larapus";
        $member->email = "member@gmail.com";
        $member->password = bcrypt("rahasia");
        $member->save();
        $member->attachRole($memberRole);

         //membuat sample member kedua (Bisa di custom Sendiri)
         $member = new User;
         $member->name = "Arno";
         $member->email = "cellestinocasso@gmail.com";
         $member->password = bcrypt("yareyare");
         $member->save();
         $member->attachRole($memberRole);

    }
}