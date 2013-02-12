<?php
require_once 'database.php';

$db = DataBase::getInstance();

for ($i = 1; $i<4; $i++) {
    $db->insertData(
        array(
            "Alpha" => "record-" . $i,
            "Beta" => "record-" . $i,
            "Gamma" => "record-" . $i,
        )
    );
}
header('Location: getData.php');