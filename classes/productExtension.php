<?php
    class Salesperson extends Product {
        public $premium = false;
        private $premiumPassword = '';
        use Discount;

        function __construct($_premium, $_premiumPassword)
        {
            $this->premium = $_premium;
            $this->premiumPassword = $_premiumPassword;
        }

        function getPremium()
        {
            return $this->premium;
        }

        function setPremium($_premiumPassword)
        {
           if ($this->$_premiumPassword == 'password') {
               $this->premium = true;
               echo 'Il suo account è premium';
           } else {
               echo 'Il suo account non è premium';
           }
        }

        function setUserDiscountProduct()
        {
            $this->setDiscountProduct($this->premium);
        }
    }
?>