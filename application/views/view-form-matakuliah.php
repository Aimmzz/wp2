<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
</head>
<body>
<center>
    
<?php // echo validation_errors();?>
<form action="<?= base_url();?>matakuliah/cetak" method="post">

<table>
    <tr>
        <th colspan="3">From Input Data Mata Kuliah</th>
    </tr>
    <tr>
        <th colspan="3"><hr></th>
    </tr>
    <tr>
        <th>Kode MTK</th>
        <th>:</th>
        <th><input type="text" name="kode" placeholder="Input Kode MTK" maxlenght="10"></th>
        <th><?= form_error('kode','<small style="color:red">','</small>');?></th>
    </tr>
    <tr>
        <th>Nama MTK</th>
        <th>:</th>
        <th><input type="text" name="nama" placeholder="Input Nama MTK" maxlenght="10"></th>
        <th><?= form_error('nama','<small style="color:red">','</small>');?></th>
        <br>
    </tr>
    <tr>
        <th>SKS</th>
        <th>:</th>
        <th><select name="sks" id="sks">
            <option vaule="">Pilih SKS</option>
            <option vaule="2">2</option>
            <option vaule="3">3</option>
            <option vaule="4">4</option>
            <select>
        </th>
    </tr>

    <tr>
         <th colspan="3"><input type="submit" vaule="SUBMIT"><th>
    </tr>
</table>
</form>
</center>
</body>
</html>