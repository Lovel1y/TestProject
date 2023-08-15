<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'Иванов',
             'email' => 'info@datainlife.ru',
         ]);

        User::factory()->create([
            'name' => 'Петров',
            'email' => 'job@datainlife.ru',
        ]);

        Group::factory()->create([
            'name' => 'Группа1',
            'expire_hours' => 1
        ]);

        Group::factory()->create([
            'name' => 'Группа2',
            'expire_hours' => 2
        ]);
    }
}
