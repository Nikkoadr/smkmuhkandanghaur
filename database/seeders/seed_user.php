<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class seed_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([]);
        $users->push([
            'name' => 'Administrator',
            'email' => 'admin@smkmuhkandanghaur.sch.id',
            'password' => 'P4ssw0rd',
            'level' => 99
        ], [
            'name' => 'Nikko Adrian',
            'email' => 'nikko@smkmuhkandanghaur.sch.id',
            'password' => '1234567800',
            'level' => 1
        ]);
        foreach ($users as $user) {
            $check = User::where('email', $user['email'])->get();
            if ($check->count() === 0) {
                $data = new User();
                $data->name = $user['name'];
                $data->email = $user['email'];
                $data->password = Hash::make($user['password']);
                $data->level = $user['level'];
                $data->saveOrFail();
            }
        }
    }
}
