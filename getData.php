<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="my_jquery.js"></script>
</head>
<body>
<?php
require_once 'database.php';

$db = DataBase::getInstance();
$tableData = $db->getData();
$i = 1;
?>

<table class="table">
    <tr>
        <th class="table">Id</th>
        <th class="table">Alpha</th>
        <th class="table">Beta</th>
        <th class="table">Gamma</th>
    </tr>
<?php foreach ($tableData as $data): ?>
    <tr>
        <td class="table">
            <?php echo $data['Id'] ?>
        </td>
        <td class="table">
            <?php echo $data['Alpha'] ?>
        </td>
        <td class="table">
            <?php echo $data['Beta'] ?>
        </td>
        <td class="table">
            <?php echo $data['Gamma'] ?>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>
