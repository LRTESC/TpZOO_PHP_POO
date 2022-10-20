<?php

    namespace App\Animals;

    class Zebra extends \App\Animal
    {
        protected function getNoise(): string

        {
            return "hiiiiiii";
        }
    }