<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Thắng Nguyễn Hữu',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123123123'),
            ]
        ];
        foreach ($data as $item)
        {
            User::create($item);
        }
    }
}
