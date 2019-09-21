<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Combo Box Codeigniter 3</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <form method="POST">
        <p>NIP<br/>
            <input type="text" name="nip"/>
        </p>
        <p>Nama<br/>
            <input type="text" name="nama"/>
        </p>
       
        <p>Gender<br/>
            <select name="gender">
                <option value="" selected>--Please select gender--</option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
            </select>
        </p>
   
        <p>Pendidikan<br/>
            <select name="pendidikan">
                <option value="" selected>--Please select pendidikan--</option>
                <option value="1">SD</option>
                <option value="2">SMP</option>
                <option value="3">SMA</option>
                <option value="4">D1</option>
                <option value="5">D2</option>
                <option value="6">D3</option>
                <option value="7">S1</option>
                <option value="8">S2</option>
                <option value="9">S3</option>
            </select>
        </p>
 
        <p>Status Pegawai<br/>
            <select name="Status_pegawai">
                <option value="" selected>--Please select status--</option>
                <option value="1">Aktif</option>
                <option value="2">Resign</option>
                <option value="2">Pensiun</option>
            </select>
        </p>
    </form>
</body>
</html>