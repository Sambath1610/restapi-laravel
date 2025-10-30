<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();

        for ($i = 0; $i < 10; $i++) {
            $event = Event::factory()->create([
                'user_id' => $user->random()->id,
            ]);
        }
    }
}
