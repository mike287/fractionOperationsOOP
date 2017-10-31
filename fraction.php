<?php

class Fraction
{

        private $numerator; // licznik
        private $denominator; // mianownik

    function __construct($numerator = 0, $denominator = 0)
    {
        $this->numerator = $numerator;
            if($this->numerator === 0 )
            {
                $this->numerator = 1;
            }

        $this->denominator = $denominator;
            if($this->denominator === 0 )
            {
                $this->denominator = 1;
            }

    }

        /**
         * @param mixed $numerator
         */
        public function setNumerator($numerator)
        {
            $this->numerator = $numerator;
        }

        /**
         * @param mixed $denominator
         */
        public function setDenominator($denominator)
        {
            $this->denominator = $denominator;
        }

        /**
         * @return mixed
         */
        public function getNumerator()
        {
            return $this->numerator;
        }

        /**
         * @return mixed
         */
        public function getDenominator()
        {
            return $this->denominator;
        }
            /*
             * metody
             */
            public function inverse() //odwrocenie
            {
                $temp = $this->numerator;
                $this->numerator = $this->denominator;
                $this->denominator = $temp;
            }

            public function showFraction()
            {
                return "$this->numerator / $this->denominator";
            }

            public function toFloat($dec = 5)
            {
                return round($this->numerator / $this->denominator,$dec);
            }

            public function comparison()
            {
                $comparison = $this->showFraction()." = ".$this->toFloat();
                return $comparison;
            }

            /*
             * operacje na ułamkach
             */

            public function addFraction(Fraction $fraction)
            {
                $this->numerator = ($this->numerator * $fraction->denominator) + ($this->denominator * $fraction->numerator);

                $this->denominator = $this->denominator * $fraction->denominator;
            }

            public function subFraction(Fraction $fraction)
            {
                $this->numerator = ($this->numerator * $fraction->denominator) - ($this->denominator * $fraction->numerator);

                $this->denominator = $this->denominator * $fraction->denominator;

            }

            public function mulFraction(Fraction $fraction)
            {
                $this->numerator = $this->numerator * $fraction->numerator;

                $this->denominator = $this->denominator * $fraction->denominator;
            }

            public function divFraction(Fraction $fraction)
            {
                $this->numerator = $this->numerator * $fraction->denominator;

                $this->denominator = $this->denominator * $fraction->numerator;
            }

            /*
             * metody
             */

            private function NWD($a, $b)
            {
                while ($b != 0 )
                {
                    $c = $a % $b;
                    $a = $b;
                    $b = $c;
                }
                return $a;
            }

            private function NWW($a, $b)
            {
                $ab = $a * $b / $this->NWD($a,$b);
                return $ab;
            }

            public function reduce()
            {
                $c = $this->NWD($this->numerator, $this->denominator);

                $this->numerator /= $c;
                $this->denominator /= $c;
            }




























}