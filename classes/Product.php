<?php
    class Product
    {
        public $name;
        public $price;

        function __construct($name,$price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPrice()
        {
            return $this->price;
        }
        
        public function getProduct(){
            $out = "<hr> <br><b>About product:</b><br>
                Price: {$this->price}<br>
                Name: {$this->name} <br>";
            return $out;
        }
    }
