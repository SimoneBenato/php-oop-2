<?php
    class Product {
        public $name;
        public $price;

        function __construct($_name, $_price)
        {
            $this->name = $_name;
            $this->price = $_price;
        }

        function getName()
        {
            return $this->name;
        }

        function setName($_name)
        {
            $this->name = $_name;
        }

        function getPrice()
        {
            return $this->price;
        }

        function setPrice($_price)
        {
            $this->price = $_price;
        }
    };

    class User {
        public $userName;
        public $password;

        function __construct($_userName, $_password)
        {
            $this->userName = $_userName;
            $this->password = $_password;
        }

        function getUserName()
        {
            return $this->userName;
        }

        function setUserName($_userName)
        {
            $this->userName = $_userName;
        }

        function getPassword()
        {
            return $this->password;
        }

        function setPassword($_password)
        {
            $this->password = $_password;
        }
    }
?>