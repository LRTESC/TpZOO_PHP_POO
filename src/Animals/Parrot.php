<?php

    namespace App\Animals;

    class Parrot extends \App\Animal
    {

        protected function getNoise(): string

        {
            return "coco";
    }
}