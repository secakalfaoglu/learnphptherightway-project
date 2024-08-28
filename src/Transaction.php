<?php

    declare(strict_types=1);

    class Transaction
    {

        //public ?Customer $customer = null;
        private ?Customer $customer = null;

        public function __construct(
            private float $amount,
            //private $description
            private string $description
        ){

            echo $this-> amount;
            echo $amount;
        }

        public function getCustomer(): ?Customer
        {
            return $this->customer;
        }
    }
?>