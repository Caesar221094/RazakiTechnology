<!-- Web Company Profile "PT Razaki Technoogy"
**********************************************
* Developer    : Caesar Rizki Octaviano
* Company      : Caesar
* Release Date : 30 Maret 2020
* Website      : IG @Caesaroktaviano
* E-mail       : caesar22101994o@gmail.com
* Phone        : +62-812-8972-3775
-->

<?php
session_start();
// hapus session
session_destroy();

// alihkan ke halaman login (index.php) dan berikan alert = 2
header('Location: index.php?alert=2');
?>