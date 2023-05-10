<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tugas Sekolah</title>
    <style>
        body {
            color: purple;
            background-image: url("bahan/concrete-texture.png");
        }

        h1 {
            color: lavender;
            text-align: center;
            background: linear-gradient(180deg,purple,grey,purple);
        }

        h2 {
            color: lavender;
            text-align: center;
            background: linear-gradient(180deg,purple,grey,purple);
        }
    </style>
</head>
<body>

        <h1>FORMULIR PPDB ONLINE</h1>

    <form method="POST" style="margin-bottom: 2rem;">
    
        <div style="margin-bottom: .5rem;">
            <label>NIS Siswa:</label>
            <input type="text" name="nis" placeholder="NIS">
        </div><br>
        <div style="margin-bottom: .5rem;">
            <label>Nama Siswa:</label>
            <input type="text" name="nama_siswa" placeholder="Nama Siswa">
        </div><br>
        <div style="margin-bottom: .5rem;">
            <label>Asal Sekolah:</label>
            <input type="text" name="asal_sekolah" placeholder="Asal Sekolah">
        </div><br>
        <div style="margin-bottom: .5rem;">
            <label>Alamat:</label>
            <input type="text" name="alamat" placeholder="Alamat">
        </div><br>
        <div style="margin-bottom: .5rem;">
            <label>TTL:</label>
            <input type="text" name="ttl" placeholder="T/T/L">
        </div><br>
        <div style="margin-bottom: .5rem;">
            <label>Telepone:</label>
            <input type="text" name="tlp" placeholder="Telepone">
        </div><br>
        <div>
            <label>Jurusan:</label>
            <select name="jrs" placeholder="Jurusan">
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="MM">Multimedia</option>
                <option value="OTKP">Otomatisasi Tata Kelola Perkantoran</option>
            </select>
        </div><br>
        <div>
            <label>Jenis Kelamin:</label>
            <select name="jk" placeholder="Jenis Kelamin">
                <option value="laki - laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div><br>

        <button type="submit">Simpan Data</button>

    </form>

    <table border="1" style="text-align: center;" cellpadding="10">

        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Asal Sekolah</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>Telepone</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php if(count($_POST) > 0) : ?>
                    <td><?= $_POST['nis'] ?></td>
                    <td><?= $_POST['nama_siswa'] ?></td>
                    <td><?= $_POST['asal_sekolah'] ?></td>
                    <td><?= $_POST['alamat'] ?></td>
                    <td><?= $_POST['ttl'] ?></td>
                    <td><?= $_POST['tlp'] ?></td>
                    <td><?= $_POST['jrs'] ?></td>
                    <td><?= $_POST['jk'] ?></td>
                <?php endif ?>
            </tr>
        </tbody>

    </table>
    
</body>
</html>
