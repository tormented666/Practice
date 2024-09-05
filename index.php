<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigga</title>
</head>
<body>
    <?php 
    $nama = "six";
    $nama2 = "Nigg's";
    $angka = 1000;
    $angka2 = 6000;
    $angka2--;
    $tambah = $angka2 / $angka;
    $text = "Yang Anjing Masuk Kandang";
    $kandang = array('Kucing', 'Anjing', 'Babi');
    $owner = ['Oliver', 'Alissa', 'Sriyanto'];
    $data = array( "Nama"   => "Oliver",
                   "Umur"   => 38,
                   "Negara" => "United Kingdom"
                );
    $data2 = array( "Istri"   => "Alissa",
                    "Mobil"   => "Tesla"                
                );
    $data['Nama'] = "Oliver Sykes";
    $data3 = array(
        array("Wachid", "500", "Sangat Malas"),
        array("Sugeng", "1000", "Malas Sedang"),
        array("agoY", "400", "Sedikit Malas")
    );

    echo "<h1>$nama2</h1>";
    echo "$nama";
    echo "<br>";
    echo $angka + $angka2;
    echo "<br>";
    echo $angka + $angka2 * $angka2;
    echo "<br>";
    echo $tambah;
    echo "<br>";
    echo "Angka terhitam adalah ". rand(1, 1000000);
    echo "<br>";
    echo "Angka terhitam adalah ". min($angka, $angka2, $tambah);
    echo "<br>";
    echo str_replace("Anjing", "Babi", $text);
    echo "<br>";
    echo str_repeat(str_replace("Anjing", "Babi", $text), 5);
    echo "<br>";
    print_r($kandang);
    echo "<br>";
    echo $kandang[0]; 
    echo "<br>";
    echo $kandang[2];
    echo "<br>";
    echo $owner[0];
    echo "<br>";
    shuffle($kandang);
    print_r($kandang);
    echo "<br>";
    sort($owner);
    print_r($owner);
    echo "<br>";
    echo "Nama orang itu adalah " . $data['Nama'];
    echo "<br>";
    echo "Umurnya " . $data['Umur'] . " Tahun";
    echo "<br>";
    echo "Dia dari Negara " . $data['Negara'];
    echo "<br>";
    print_r( array_merge($data, $data2));
    print_r($data3);
    echo "<br>";
    echo $data3[0][2];
    echo "<br>";
    $data3[2][2] = "Pemalas Sekali";
    echo $data3[2][2]





    ?>
</body>
</html>