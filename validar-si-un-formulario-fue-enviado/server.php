<?php

if ((isset($_POST['nombre'])) && !empty($_POST['nombre']) ) {
    echo "hola " . $_POST['nombre'];
} else {
    echo 'no mandaste nada';
}

if (isset($_POST['form'])) {
    echo 'se mando todo el formulario';
} else {
    echo 'no se mando todo el formulario';
}