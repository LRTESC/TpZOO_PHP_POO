<?php

    namespace App\Animals;

    class Elephant extends \App\Animal
    {
        protected function getNoise(): string
        {
            return "toooooout";
        }

    }
