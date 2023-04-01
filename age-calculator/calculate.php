<?php

$curr_date = date('d/m/Y');
$birth_date = date('d/m/Y', strtotime($_POST['birth-date']));
$age = date_diff(date_create($birth_date), date_create($curr_date));

echo $age->format('%y');

?>