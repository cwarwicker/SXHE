<?php

class Set
{

    /**
     * Warmup Set
     */
    const TYPE_WARMUP = 'WARMUP';

    /**
     * Standard working Set
     */
    const TYPE_STANDARD = 'STANDARD';

    /**
     * @var int Number of reps in this Set.
     */
    protected $reps;

    /**
     * @var int Weight to lift in this Set.
     */
    protected $weight;

    /**
     * @var string Type of Set, e.g. Warmup, Standard, etc...
     */
    protected $type;

    /**
     * @var int Rest time, in minutes.
     */
    protected $rest;

    /**
     * Set constructor.
     * @param int $reps Number of reps in this Set.
     * @param int $weight Weight to lift in this Set.
     * @param string $type Type of Set, e.g. Warmup, Standard, etc...
     * @param int $rest Rest time, in minutes.
     */
    public function __construct(int $reps, int $weight, string $type, int $rest = null) {
        $this->reps = $reps;
        $this->weight = $weight;
        $this->type = $type;
        $this->rest = $rest;
    }

}