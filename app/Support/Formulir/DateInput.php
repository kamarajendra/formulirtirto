<?php

namespace App\Support\Formulir;

use DateTimeInterface;

class DateInput
{
    public function __construct(
        public $x,
        public $y,
        public DateTimeInterface $date,
        public $width = 20,
        public $height = 16,
        public $fontSize = 14,
        public $dayOffset = 414,
        public $monthOffset = 505,
        public $yearOffset = 595
    ) {
    }
}
