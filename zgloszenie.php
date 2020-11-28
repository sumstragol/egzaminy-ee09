<?php
$db = new mysqli("localhost", "root", "", "wedkarstwo");
$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];
$db->query("insert into zawody_wedkarskie values(NULL, 0, $lowisko, '$data', '$sedzia')");
$db->close();
header("Location: zawody.html");