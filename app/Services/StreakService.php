<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\StudentProfile;

class StreakService
{
    public function updateStreak(StudentProfile $profile): void
    {
        $today = Carbon::today();
        // $today = now($profile->student()->timezone)->startOfDay();

        // First time ever
        if (!$profile->last_activity_date) {
            $profile->current_streak = 1;
            $profile->longest_streak = 1;
            $profile->last_activity_date = $today;
            $profile->save();

            return;
        }

        $lastActivity = Carbon::parse($profile->last_activity_date);
        // echo($lastActivity);

        // Already counted today
        if ($lastActivity->isSameDay($today)) {

        // echo("lastActivity->isSameDay($today)");
          
        }

        // Consecutive day
        if ($lastActivity->copy()->addDay()->isSameDay($today)) {
            $profile->current_streak++;

            if ($profile->current_streak > $profile->longest_streak) {
                $profile->longest_streak = $profile->current_streak;
            }
        }
        // Missed one or more days
        else {
            $profile->current_streak = 1;
        }

        $profile->last_activity_date = $today;
        $profile->save();
    }
}