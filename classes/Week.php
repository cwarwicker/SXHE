<?php

/**
 * Week class.
 */
class Week
{

    /**
     * @var array Workouts array
     */
    protected $workouts = [];

    /**
     * Add a new Workout to the week.
     * @param int $number Day number.
     * @return Workout
     */
    public function addWorkout(int $number): Workout {
        $this->workouts[$number] = new Workout();
        return $this->workouts[$number];
    }

    /**
     * Get a Workout object by its number.
     * @param int $number Day number.
     * @return Workout|null
     */
    public function getWorkout(int $number): ?Workout {
        return ($this->workouts[$number]) ?? null;
    }

    /**
     * Get all of the Workouts for this week.
     * @return array
     */
    public function getWorkouts(): array {
        return $this->workouts;
    }

}