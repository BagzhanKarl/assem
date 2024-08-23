<?php
require "../db.php";

$data = $_POST;

$areas = R::findAll('businessarea', 'type = ?', [$data['type']]);

echo '<option value="">Выбрать</option>';
foreach ($areas as $area){
    echo '<option value="'. $area->id.'">'.$area->title.'</option>';
}
?>