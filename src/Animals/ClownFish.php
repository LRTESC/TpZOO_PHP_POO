<?php

    namespace App\Animals;

    class ClownFish extends Fish
    {
        protected function getNoise(): string

        {
            return "bloibloibloi";
        }
    }