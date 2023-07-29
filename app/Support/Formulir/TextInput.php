<?php

namespace App\Support\Formulir;

class TextInput
{
    public function __construct(
        public $x,
        public $y,
        public $length,
        public $text,
        public $width = 20,
        public $height = 16,
        public $fontSize = 14,
    ) {
    }
}
