<?php
    declare(strict_types=1);

    namespace app\PaymentGateway\Paddle;
    use App\Enums\Status;



    class Transaction
    {

        public static int $count=0;

        public function __construct(
            public float $amount,
            public string $description
        ){
            self::$count++;
        }

        public static function getCount(): int
        {
            return self::$count;
        }

        public function process(){

            array_map(/*static */function()
            {
                $this->amount =35;
                var_dump($this->amount);
            },[1]);
            echo 'Processing paddle transaction...' ;
        }

    }


?>