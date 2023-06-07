<?php
//data siswa dan nilai ujian
$siswa = array(
    array("nama" => "Reygan", "nilai" => 65),
    array("nama" => "Arslan", "nilai" => 82),
    array("nama" => "Nathan", "nilai" => 58),
    array("nama" => "Ardhan", "nilai" => 92),
    array("nama" => "Vano", "nilai" => 72 )
);

//perulangan untuk menge cek apakah siswa lulus atau tidak 
foreach ($siswa as $data) {
    $nama = $data['nama'];
    $nilai = $data['nilai'];

    echo "Nama: " . $nama . ", Nilai: " . $nilai . " = ", "<br>";

    // Percabangan untuk memeriksa apakah siswa lulus atau tidak
    if ($nilai >= 70) {
        echo "LULUS";
    } else {
        echo "TIDAK LULUS";
    }

}
?>