<?php
  $age=filter_input(INPUT_POST, 'age');
  $gen=filter_input(INPUT_POST, 'gen');
 ?>

 <?php
if ($age>=18) {
if ($gen=="m") {
      echo "Zaplať 150Kč.";
    }
    else {
      echo "Pojď dál holka, dnes máš vstup zdarma!";
    };
}
else {
  echo "Odpal miminko.";
}
  ?>
