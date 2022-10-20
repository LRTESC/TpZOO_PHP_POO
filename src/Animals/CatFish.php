<?php

    namespace App\Animals;

    class CatFish extends Fish
    {

        protected function getNoise(): string

        {
            return "miaou";
        }
    }