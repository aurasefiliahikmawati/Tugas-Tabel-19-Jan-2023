<html>
    <head>
</head>
<body>
    <h1>Form tambah</h1>
    <form action="proses.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_siswa">Nama : </label>
                    <input type="text" name="nama_siswa" />
</p>
<p>
    <label for="kelas">Kelas : </label>
    <input type="text" name="kelas"/>
</p>
<p>
    <label for="nama_jurusan">Nama Jurusan : </label>
    <select name="jurusan">
        <option value="RPL">RPL</option>
        <option value="Busan">Busana</option>
        <option value="Boga">Boga</option>
        <option value="TL">TL</option>
</select>
</p>
<p>
    <label for="tahun">Tahun : </label>
    <input type="text" name="tahun" />
</p>
<p>
    <label for="nominal">Nominal : </label>
    <select name="number" name="nominal" >
        <option>140.000</option>
        <option>150.000</option>
        <option>155.000</option>
        <option>100.000</option>
        <option>120.000</option>
        <option>130.000</option>
        <option>115.000</option>
        <option>125.000</option>
</select>
</p>
<p>
   <button type="submit" value="simpan" name="simpan">simpan</button>
</p>
</fieldset>
</form>
</body>
</html> 