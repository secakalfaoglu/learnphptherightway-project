<?php
    declare(strict_types=1);

    namespace app\PaymentGateway\Paddle;
    use App\Enums\Status;



    class Transaction
    {
//        private const STATUS_PAID = 'paid';


        private string $status ;
        public function __construct()
        {
            //$this->setStatus('pending');
            $this->setStatus(Status::PENDING);
            //var_dump(self::STATUS_PAID);
        }
//        public function setStatus(string $status) : Transaction
//        {
//            $this->status = $status;
//            return $this;
//        }
        public function setStatus(string $status) : self
        {
            if (! isset(Status::ALL_STATUSES[$status])) {
                throw new \InvalidArgumentException("Invalid status");
            }

            $this->status = $status;
            return $this;
        }

    }


?>