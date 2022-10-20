<?php

    namespace App;

    abstract class Animal
    {

        private readonly string $name;

        public function __construct(string $name){
            $this->name = $name;
        }

        abstract protected function getNoise(): string;

        public function noise(): string
        {
            return $this->getNoise();
        }

        /**
         * @return string
         */
        public function getName(): string
        {
            return $this->name;
        }
    }