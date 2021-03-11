<?php

class Exercise
{

    /**
     * @var string Name of the Exercise. E.g. 'Deadlift'.
     */
    protected $name;

    /**
     * @var string Exercise Type. E.g. 'Strength', 'Hypertrophy', etc...
     */
    protected $type;

    /**
     * @var array Array of Sets in this Exercise.
     */
    protected $sets = [];

    /**
     * Construct the Exercise.
     * @param string $name Exercise name.
     * @param string $type Exercise type.
     * @return void
     */
    public function __construct(string $name, string $type) {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Add a Set to this Exercise.
     * @param Set $set
     * @return Exercise
     */
    public function addSet(Set $set): Exercise {
        $this->sets[] = $set;
        return $this;
    }

}