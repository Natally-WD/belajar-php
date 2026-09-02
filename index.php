<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $nama = "Budi";
        // $umur = 30;
        // $sudahmenikah = false;

        // // //nama saya budi, umur saya 30 tahun
        // // echo "nama saya ".$nama . ", umur saya " .$umur;
        // // //atau
        // // echo "nama saya $nama, umur saya $umur tahun"

        // // if ($sudahmenikah == true) {
        // //     echo "sudah menikah";
        // // } else {
        // //     echo "belum menikah";
        // // }

        // //perulangan
        // for ($i=1; $i < 10; $i+=2) { 
        //     echo $i;
        // }

        //diskon
        // $totalbelanja = 120000;
        
        // if ($totalbelanja > 100000) {
        //     $diskon = $totalbelanja*0.1;
        //     $totalakhir = $totalbelanja - ($totalbelanja*0.1);
        //     echo "anda belanja $totalbelanja, mendapat diskon 10% Rp$diskon, menjadi Rp$totalakhir";
        // } else {
        //     $totalakhir = $totalbelanja;
        //     echo "total belanja anda belum memenuhi syarat, Rp$totalbelanja";
        // }

        //cek username dan password
        // $user = "GW";
        // $pass = "abcd";

        // $useript = "GW";
        // $passipt = "abcd";

        // if ($user == $useript && $pass == $passipt) {
        //     echo "sukses";
        // } else {
        //     echo "gagal";
        // }


        //soal bonus
        // for ($i=1; $i <= 50; $i++) { 
        //     echo "peserta ke- " .$i ."<br>";
        // }

        //array
        // $mhs = ['deni', 'sindi', 'deka']; //biasa
        // $datamhs = ["nama"=>"Merry","umur"=>20,"kelas"=>"A","prodi"=>"BD"];
        // //saya merry, umur saya 20 tahun, saya prodi BD kelas A
        // echo "saya ".$datamhs["nama"] ." umur saya ".$datamhs["umur"] ." tahun, saya prodi ".$datamhs["prodi"] ." kelas ".$datamhs["kelas"]
        
        //function
        function perkalian($angka1, $angka2){
            return $angka1*$angka2;
        }

        $hasil = perkalian(10, 10);
        echo $hasil;
    ?>
</body>
</html>