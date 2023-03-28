<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Model 2</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form id="myForm" method="POST" action="action.php" autocomplete="off">
            <h1>Registrasi</h1>
            <!-- Multi Step Form -->
            <div class="tab">Data Personal :
                <p><input type="text" name="nama" placeholder="Nama" oninput="this.className = ''"></p>
                <p><input type="tel" name="telpon" placeholder="Nomor Telepon" oninput="this.className = ''"></p>
            </div>

            <div class="tab">Alamat :
                <p><input type="text" name="jalan" placeholder="Nama Jalan" oninput="this.className = ''"></p>
                <p><input type="number" name="rumah" placeholder="Nomor Rumah" oninput="this.className = ''"></p>
                <p><input type="number" name="pos" placeholder="Kode Pos" oninput="this.className = ''"></p>
                <p><input type="text" name="kota" placeholder="Nama Kota" oninput="this.className = ''"></p>
            </div>

            <div class="tab">Pendidikan :
                <p><input type="text" name="jurusan" placeholder="Nama Jurusan" oninput="this.className = ''"></p>
                <p><input type="text" name="kampus" placeholder="Nama Universitas" oninput="this.className = ''"></p>
            </div>
            
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" name="submit" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    <button type="submit" id="sub" name="submit" value="submit" style="display:none;">Submit</button>
                </div>
            </div>
            <!-- Lingkaran bawah -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
        <script src="script.js"></script>
    </body>
</html>
<?php session_destroy();?>