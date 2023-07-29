<?php

namespace App\Support\Formulir;

class Box
{
    public function __construct(
        public $x,
        public $y,
        public $width,
        public $height
    ) {
    }
}
