<?php
    declare(strict_types=1);

    namespace PaymentGateway\Paddle;

    //use DateTime;
    //use VendorName\Transaction as VendorTransaction;
    use PaymentGateway\Stripe\Transaction as PaddleTransaction;

    class Transaction
    {
        public function __construct()
        {
            //var_dump(new CustomerProfile());
            //var_dump(new \DateTime());
            //var_dump(new DateTime());
            //var_dump(new \Notification\Email());

            //var_dump(explode(',','hello,world'));
            var_dump(\explode(',','hello,world'));
        }

    }

    function explode($seperator, $str)
    {
        return 'foo';
    }
?>