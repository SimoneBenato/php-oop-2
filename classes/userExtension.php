<?php

    require 'classes/generals.php';
    require 'classes/traits.php';
    class Level extends User {
        public $premium = false;
        public $premiumPassword = '';
        use Discount;

        function __construct($_userName, $_password, $_premiumPassword)
        {
            $this->userName = $_userName;
            $this->password = $_password;
            $this->premiumPassword = $_premiumPassword;
            $this->setPremium($_premiumPassword);
        }

        function getPremium()
        {
            return $this->premium;
        }

        function setPremium($_premiumPassword)
        {
           if ($_premiumPassword == 'password') {
               $this->premium = true;
               echo 'Il suo account è premium';
           } else {
               echo 'Il suo account non è premium';
           }
        }

        function setUserDiscountUser()
        {
            $this->setDiscountUser($this->premium);
        }
    }

    $users = [
        new Level('Alessio', 'aaa', 'password'),
        new Level('Simone', 'bbb', 'ciao')
    ];

?>
