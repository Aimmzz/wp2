<!DOCTYPE html>
<html>
    <head>
        <title>Laman Data Beli</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <center>
                <table border = "1" cellspacing="3" cellpadding="20">
                    <tr>
                        <th colspan="2" bgcolor="ffcc99"> TOKO SEPATU SUKMANA JAYA </th>
                    </tr>
                    <tr>
                        <th>Nama Pembeli</th>
                        <td><?= $nama;?></td>
                    </tr>
                    <tr>
                        <th>No.Telpon</th>
                        <td><?= $nomor;?></td>
                    </tr>
                    <tr>
                        <th>Merk Sepatu</th>
                        <td><?= $merksepatu; ?></td>
                    </tr>
                    <tr>
                        <th>Ukuran Sepatu</th>
                        <td><?= $ukuransepatu;?></td>
                    </tr>
                    <tr>
                        <th>Harga Sepatu</th>
                        <td>Rp.<?= $harga;?></td>
                    </tr>
                    <tr>
                    <th colspan="2"><a href="<?=base_url();?>websepatu" title="kembali">Kembali<a></th>
                    </tr>
                </table>
            </center>
    </body>
</html>