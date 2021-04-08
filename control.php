<?php
$aa = $_SERVER["HTTP_USER_AGENT"];

echo "<h4>Sizin Brauzer Melumatiniz:</h4>";

echo substr($aa, 0,12);

echo "<h4>Sizin Emeliyyat Sistemi Melumatiniz</h4>";

echo substr($aa, 17,23);
