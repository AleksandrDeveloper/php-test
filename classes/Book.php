<?php 
    class Book extends Product
    {
        public $numPage;
        public function __construct($name,$price,$numPage)
        {
            parent::__construct($name,$price);

            $this->numPage = $numPage;
        }
        public function getProduct()
        {
           $out = parent::getProduct();
           return $out .= "Page count: {$this->numPage}";
        }

        public function getNumPage()
        {
            return $this->cpu;
        }
    }