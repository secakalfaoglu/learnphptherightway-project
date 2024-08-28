<?php

require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once '../Transaction.php';

$transaction = new Transaction(5,'Test');

//$transaction->customer=new Customer();
//Nullsafe Operator ?->
//echo $transaction->customer?->paymentProfile?->id;

//echo $transaction->customer->paymentProfile->id ?? 'foo';

//echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';

//Null check conditional

/*$profileID= null;

if ($customer =$transaction-->getCustomer()){
    if ($paymentProfile = $customer->getPaymentProfile()) {
        $profileID = $paymentProfile->getId();
    }
}

echo $profileID;*/

echo $transaction->getCustomer()?->setPaymentProfile(createProfile())?->id;

?>


