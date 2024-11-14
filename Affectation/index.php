<?php

require 'Personnage.php';
require 'Form.php';
require 'Text.php';

$form = new Form($_POST);
var_dump(Text::withZero(10));


$merlin = new Personnage("Merlin");
$merlin->regenerer();

var_dump($merlin);

$harry = new Personnage("Harry");

$merlin->setNom('Marlin');

?>

<form action="#" method="post">

    <?php

    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
    ?>

</form>

