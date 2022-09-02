<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Purchase;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ItemSeeder::class,
            RankSeeder::class
        ]);
        
        \App\Models\Customer::factory(1000)->create();

        $items = \App\Models\Item::all();

        Purchase::factory(30000)->create()
        ->each(function(Purchase $purchase) use ($items) {
            $purchase->items()->attach(
                $items->random(rand(1,3))->pluck('id')->toArray(),
                [ 'quantity' => rand(1, 5) ]
            );
        });

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
