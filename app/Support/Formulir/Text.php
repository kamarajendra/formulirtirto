<?php

namespace App\Support\Formulir;

class Text
{
    public function __construct(
        public $text,
        public $x,
        public $y,
        public $fontSize = 14,
        public $kerning = 1,
        public $align = "left"
    ) {
    }
}
