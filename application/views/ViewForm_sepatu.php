<!DOCTYPE html>
<html>
    <head>
        <title>Laman Beli Sepatu</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
            <form action="<?= base_url();?>websepatu/tampil" method="post">
                <table border = "1" cellspacing="3" cellpadding="20">
                    <tr>
                        <th colspan="2" bgcolor="ffcc99"> FORM TOKO SEPATU SUKMANA JAYA </th>
                    </tr>
                    <tr>
                        <td>Nama Pembeli</td>
                        <td><input type="text" name="nama" placeholder="Masukan Nama" maxlenght="10"><br>
                        <?= form_error('nama','<small style="color:red">','</small>');?></td>
                        
                    </tr>
                    <tr>
                        <td>NO.Telpon</td>
                        <td><input type="text" name="nomor" placeholder="Masukan Nomor" maxlenght="10"><br>
                        <?= form_error('nomor','<small style="color:red">','</small>');?></td>
                    </tr>
                    <tr>
                        <td>Merk Sepatu</td>
                        <td><select name="merksepatu" id="merksepatu">
                            <option value="">Pilih Merk</option>
                            <option value="Nike">NIKE</option>
                            <option value="Adiddas">Adiddas</option>
                            <option value="Kickers">Kickers </option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucheri">Bucherri</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Ukuran Sepatu</td>
                        <td>
                            <select name="ukuransepatu" id="ukuransepatu">
                                <option value="">Pilih Ukuran</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><input type="submit" value="SUBMIT PEMBELIAN"></center></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>