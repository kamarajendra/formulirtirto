<?php

namespace App\Support\Formulir;

use DateTimeInterface;

class DayInput
{
    public function __construct(
        public $x,
        public $y,
        public $length,
        public DateTimeInterface $date,
        public $width = 20,
        public $height = 16,
        public $fontSize = 14,
        public $weekdayOffset = 414,
        public $dayOffset = 550,
        public $monthOffset = 663,
        public $yearOffset = 798
    ) {
    }
}
