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
                'password' => '$2y$10$kldc.HZaWbpmXa6jdDLg3u9.eUfsb/jXbBoqoPfTnmadVr.4jlBqK'
            ],
            [
                'name' => 'Hoàng Trí Tâm',
                'email' => 'hoangtam704@gmail.com',
                'password' => '$2y$10$KFMAyi0Di09nXlVu0w7t8.U4vsvp/l0svNhZxwNXdjFxOoPPXb.6m'
            ]
        ];
        foreach ($data as $item)
        {
            User::create($item);
        }
    }
}
