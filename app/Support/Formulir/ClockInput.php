<?php

namespace App\Support\Formulir;

use DateTimeInterface;

class ClockInput
{
    public function __construct(
        public $x,
        public $y,
        public DateTimeInterface $time,
        public $fontSize = 14,
        public $hourOffset = 369,
        public $minuteOffset = 437,
    ) {
    }
}
