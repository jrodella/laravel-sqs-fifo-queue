<?php

namespace ShiftOneLabs\LaravelSqsFifoQueue\Contracts\Queue;

interface Group
{
    /**
     * Generate a group id
     *
     * @param  string  $payload
     * @param  string  $queue
     *
     * @return string|bool
     */
    public function generate($payload, $queue);
}
