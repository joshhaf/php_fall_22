<?php 
  class Car {}
  class Computer {}
  $boolean = false;
  $integer = 77;
  $integer_negative = -21;
  $float_double = 3.14;
  $string = "PHP";
  $array = array('llama', 'llama', 'nighty', 'night');
  $object = new Computer();
  //$resource = mysql_connect();
  $null = NULL;
?>

<table border='1px solid;'>
  <tr>
    <th>Type</th>
    <th>Value</th>
    <th>gettype() response</th>
  </tr>

  <tr>
    <td>Boolean</td>
    <td><?= $boolean ?></td>
    <td><?= gettype($boolean); ?></td>
  </tr>

  <tr>
    <td>Integer</td>
    <td><?= $integer ?></td>
    <td><?= gettype($integer); ?></td>
  </tr>

  <tr>
    <td>Integer Negative</td>
    <td><?= $integer_negative ?></td>
    <td><?= gettype($integer_negative); ?></td>
  </tr>

  <tr>
    <td>Float</td>
    <td><?= $float_double ?></td>
    <td><?= gettype($float_double); ?></td>
  </tr>

  <tr>
    <td>String</td>
    <td><?= $string ?></td>
    <td><?= gettype($string); ?></td>
  </tr>

  <tr>
    <td>Array</td>
    <td><?= implode(',', $array); ?></td>
    <td><?= gettype($array); ?></td>
  </tr>

  <tr>
    <td>Object</td>
    <td><?php print_r($object); ?></td>
    <td><?= gettype($object); ?></td>
  </tr>

<!--
  <tr>
    <td>Resource</td>
    <td><?php print_r($resource); ?></td>
    <td><?= gettype($resource); ?></td>
  </tr>
-->

  <tr>
    <td>Null</td>
    <td><?php print_r($null); ?></td>
    <td><?= gettype($null); ?></td>
  </tr>
</table> 