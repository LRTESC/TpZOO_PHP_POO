<?php

    namespace App\Animals;

    class Whale extends \App\Animal
    {

        protected function getNoise(): string

        {
            return "Spaaashh";
        }
}