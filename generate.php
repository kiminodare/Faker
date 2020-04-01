<?php
require_once 'vendor/autoload.php';
$faker = Faker\Factory::create('en_US');

$disiaja = readline('How many you generate fake : ');

$array = [];
for ($i = 0; $i < $disiaja; $i++) {
    $name = $faker->name;
    $address = $faker->address;
    $bankaccount = $faker->bankAccountNumber;
    $bankrouting = $faker->bankRoutingNumber;
    $email = $faker->email;
    $creditCardDetails = $faker->creditCardDetails;
    $phone = $faker->phoneNumber;
    $ssn = $faker->ssn;
    $data = [$name,$address,$bankaccount,$bankrouting,$email,$creditCardDetails,$tollFreePhoneNumber,$ssn];
    $array[$i] = $data;
  }
  print_r($array);
  $hasil =json_decode($array);

  file_put_contents('hasil.txt',$hasil);
