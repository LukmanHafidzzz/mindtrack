<?php

namespace App\Services;

use App\Models\Achievement;

class AchievementService
{
    public static function check(int $userId, string $category, int $currentCount): void
    {
        $milestones = config("achievements.milestones.$category", []);

        foreach ($milestones as $level) {
            if ($currentCount >= $level) {
                Achievement::firstOrCreate([
                    'user_id' => $userId,
                    'category' => $category,
                    'level' => $level,
                ]);
            }
        }
    }
}