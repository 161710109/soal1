<?php
require_once 'soal1.php';

$bio = new kelas ('Yayan','Rastian','XI RPL 1');
echo"<br />";
echo"nama guru  :".$bio->get_guru();
echo"<br />";
echo"nama siswa :".$bio->get_siswa();
echo"<br />";
echo"berada di kelas  :".$bio->get_kelas();
echo"<br />";
?>