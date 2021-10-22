<?php
    trait Discount {
        public $discount;

        function __construct($_discount)
        {
            $this->discount = $_discount;
        }

        function getDiscount()
        {
            return $this->discount;
        }

        function setDiscountUser($_premium)
        {
            if ($_premium != false) {
                $this->discount = '30%';
            } else {
                $this->discount = '5%';
            }
        }

        function setDiscountProduct($_premium)
        {
            if ($_premium != false) {
                $this->discount = '5%';
            } else {
                $this->discount = '30%';
            }
        }
    }
?>