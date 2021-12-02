<!-- <?php
    include('koneksi.php');

    if($_POST){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $alamat = $_POST['alamat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $query = "INSERT INTO pesanan(nama,email,no_hp,alamat,tanggal_pesan,keterangan) VALUES('$nama','$email','$telephone','$alamat','$tanggal','$keterangan')";

        if($koneksi->query($query)){
            echo "Data Berhasil Di Tambah";
        }else{
            echo "Data Gagal Di Tambah";
        }
    }
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="box-box-form">
        <section>
            <form action="index.php" method="POST" class="box-form">
                <p><label>Nama *</label><br>
                <input maxlength="50" name="nama" id="nama" type="text" required placeholder="Nama Lengkap"  /></p>
                
                <p><label>Email *</label><br>
                <input maxlength="80" name="email" id="email" type="email"required  placeholder="exp: nama@gmail.com" /></p>
                
                <p><label>Telephone *</label><br>
                <input name="telephone" id="phone" type="text" required  placeholder="exp: 081x-xxxx-xxxx" /></p>

                <p><label>Alamat *</label><br>
                <input name="alamat"  id="alamat" type="text" required  placeholder="Alamat Lengkap Anda" /></p>

                <p><label>Tanggal Pesan *</label><br>
                <input name="tanggal"  id="tanggal" type="datetime-local" required /></p>
                
                <p><label>Keterangan *</label><br>
                <textarea maxlength="1000" id="keterangan" name="keterangan" required placeholder="Keterangan di sini ...." style="width:100%;height:90px;"></textarea></p>
                
                <small>* Required</small>
                <p><input type="submit" value="Send Message" /></p>
            </form>
        </section>
    </div>
</body>
</html> -->