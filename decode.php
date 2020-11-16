<?php
if(isset($_GET['token'])){
    require 'JwtHandler.php';
    $jwt = new JwtHandler();

    $data =  $jwt->_jwt_decode_data(trim($_GET['token']));

    var_dump($data);

    echo "<br><hr>";
}
?>
<form action="" method="GET">
    <label for="_token"><strong>Enter Token</strong></label>
    <input type="text" name="token" id="_token">
    <input type="submit" value="Docode">
</form>