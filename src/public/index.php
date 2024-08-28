<?php

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
//require_once '../PaymentGateway/Paddle/DateTime.php';
require_once '../Notification/Email.php';

//var_dump(new PaymentGateway\Stripe\Transaction());
//var_dump(new PaymentGateway\Paddle\Transaction());

//use PaymentGateway\Paddle\Transaction;
//use PaymentGateway\Paddle\{Transaction, CustomerProfile};
//use PaymentGateway\Paddle;
use PaymentGateway\Paddle AS PA;

use PaymentGateway\Stripe\Transaction as StripeTransaction;
//use PaymentGateway\Paddle\CustomerProfile;

//use function PaymentGateway\Stripe\Transaction;
//use const PaymentGateway\Stripe\Transaction;
//var_dump(new Transaction());

//$paddleTransaction = new Transaction();
//$paddleTransaction = new Paddle\Transaction();
$paddleTransaction = new PA\Transaction();
$stripeTransaction = new StripeTransaction();
//$paddleCustomerProfile = new CustomerProfile();
//$paddleCustomerProfile = new Paddle\CustomerProfile();
$paddleCustomerProfile = new PA\CustomerProfile();

var_dump($paddleTransaction, $paddleTransaction,$stripeTransaction);
?>


