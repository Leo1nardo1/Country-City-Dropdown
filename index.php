<?php
include ('data/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form method="get">
  <label for="pais">País:</label>
  <!-- onchange is a method to submit the form upon option selection, without the need for a button -->
   <!-- name="countries" is used in the select tag to armazenate the value of the option that has been submitted. -->
  <select onchange="this.form.submit()" name="countries" id="pais">
    <option value="">Escolha um país</option>
    <!-- foreach to list every country in the array as options -->
    <?php foreach($countries as $country): ?>
          <option value="<?= $country['value'];?>"
          
          <?php if(isset($_GET['countries']) && $_GET['countries'] == $country['value']): ?>
          selected
          <?php endif ?>
          >
          <?= $country['name'];?></option>
   <?php endforeach; ?>
   <!-- if the option has been selected and if the value of the option that has been submitted (armazenated in name="countries") is equal to the value of chosen(inside of the option tag),the "selected" attribute is written inside of the option tag, making the name of the country selected be shown visually in the dropdown -->
  </select>
  <label for="cidades">Cidades:</label>
    <select name="cities" id="cidades">
      <?= getCitiesFromCountry($countries, $selectedCountry); ?>
    </select>

  </form>
  
</body>
</html>