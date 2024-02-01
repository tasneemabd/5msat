<?php
    header("Content-Type:application/json; charset=UTF-8");
    header("Acess-Control-Max-Age:3600");
    header("Acess-Control-Allow-Header:Content-Type, Access-Control-Allow-Header,Authorization,X-Requested-With");

    include('../../Connect.php');

    $stm = "SELECT * FROM services";
    $q = $conn->prepare($stm);
    $q->execute();
    $q = $q->fetchAll(PDO::FETCH_ASSOC);

    print_r(json_encode($q));

?>