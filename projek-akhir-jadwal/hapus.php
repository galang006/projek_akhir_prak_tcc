<?php
// Cek apakah id_jadwal ada di URL
if (isset($_GET['id'])) {
    // Ambil id_jadwal dari URL
    $id_jadwal = $_GET['id'];

    // Opsi untuk konteks HTTP
    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'DELETE'
        ]
    ];

    // Buat konteks stream
    $context = stream_context_create($options);

    // Kirim permintaan ke API
    $url = "https://api-dot-prakcloud1.et.r.appspot.com/jadwal/$id_jadwal";
    $result = file_get_contents($url, false, $context);

    // Cek hasil permintaan
    if ($result === FALSE) {
        // Tangani kesalahan
        echo "Error: Data tidak dapat dihapus.";
    } else {
        // Redirect ke jadwal.php jika berhasil
        header("Location: jadwal.php");
    }
} else {
    echo "Error: id_jadwal tidak ditemukan.";
}
?>
