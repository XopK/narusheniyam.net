<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Status extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            ['title_status' => 'Новое'],
            ['title_status' => 'Подтверждено'],
            ['title_status' => 'Отклонено'],
        ]);
    }
}
