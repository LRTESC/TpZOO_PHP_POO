<?php

    namespace App\Animals;

    class Fish extends \App\Animal
    {

        protected function getNoise(): string

        {
            return "bloubloublou";
        }
    }