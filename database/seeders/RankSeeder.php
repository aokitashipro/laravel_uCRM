<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranks')->insert([
            ['rank' => 1 ],
            ['rank' => 2 ],
            ['rank' => 3 ],
            ['rank' => 4 ],
            ['rank' => 5 ],
        ]);
    }
}
