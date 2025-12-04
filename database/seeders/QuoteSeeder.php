<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $quotes = [
            "Believe in yourself and all that you are.",
            "Success doesn’t come to you — you go to it.",
            "Every moment is a fresh beginning.",
            "Small steps every day lead to big success.",
            "Dream it. Wish it. Do it.",
            "Focus on progress, not perfection.",
            "You are stronger than you think.",
            "Stay positive, work hard, make it happen.",
            "The best time for new beginnings is now.",
            "Don’t stop until you’re proud."
        ];

        foreach ($quotes as $text) {
            Quote::create([
                'content' => $text,
            ]);
        }
    }
}
