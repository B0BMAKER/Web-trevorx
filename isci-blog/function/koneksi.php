<?php

$koneksi = mysqli_connect("sql113.epizy.com", "epiz_32241845", "UdcXpiWbNC2IBV", "epiz_32241845_isci");

$query = mysqli_query($koneksi, "SELECT * FROM user");
