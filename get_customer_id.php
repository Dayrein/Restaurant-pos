<?php
include('config/config.php');
header('Content-Type: text/plain');

if (isset($_POST['customer_name'])) {
    $name = trim($_POST['customer_name']);
    $stmt = $mysqli->prepare("SELECT customer_id FROM rpos_customers WHERE customer_name = ?");
    $stmt->bind_param('s', $name);
    $stmt->execute();
    $stmt->bind_result($id);
    if ($stmt->fetch()) {
        echo $id;
    }
}
exit();