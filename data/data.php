<?php
//Arrays individuais, de paises, cada array the pais tem 3 cidades, um nome (do país) e um valor

$countries = [
  'brasil' => [
    'name' => 'Brasil',
    'value' => 'BR',
    'cities' => [
      'Salvador', 'Campinas', 'Belford Roxo'
    ]
  ],
  'argentina' => [
    'name' => 'Argentina',
    'value' => 'AR',
    'cities' => [
      'Buenos Aires', 'Salta', 'Córdova'
    ]
  ],
  'chile' => [
    'name' => 'Chile',
    'value' => 'CL',
    'cities' => [
      'Santiago', 'Viña del Mar', 'Pucón'
    ]
  ]
];
// Assigns the value returned by the form to selectCountry, if nothing is selected, assigns empty space
$selectedCountry = isset($_GET['countries']) ? $_GET['countries'] : '';

function getCitiesFromCountry($countries, $selectedCountry){
  $option = '';
  foreach($countries as $country){
    if($country['value'] === $selectedCountry){
      foreach($country['cities'] as $city){
        $option .= '<option value="'.$city.'">'.$city.'</option>';
      }
      
    }
  
  }
  return $option;
  



