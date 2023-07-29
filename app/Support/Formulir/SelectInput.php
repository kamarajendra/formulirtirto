<?php

namespace App\Support\Formulir;

class SelectInput
{
    public function __construct(
        public $x,
        public $y,
        public $width = 20,
        public $height = 16,
        public $fontSize = 14,
        public array $options = [],
        public $selectedOption = null,
        public $symbol = 'X'
    ) {
    }
}
