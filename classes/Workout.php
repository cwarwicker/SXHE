<?php

/**
 * Workout class.
 */
class Workout
{

    /**
     * @var array Array of Exercise objects.
     */
    protected $exercises = [];

    /**
     * Add an Exercise to the workout.
     * @param Exercise $exercise
     */
    public function addExercise(Exercise $exercise): void {
        $this->exercises[] = $exercise;
    }

    /**
     * Get the array of Exercise objects.
     * @return array
     */
    public function getExercises(): array {
        return $this->exercises;
    }

}