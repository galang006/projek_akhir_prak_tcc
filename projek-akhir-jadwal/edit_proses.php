<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $id_jadwal = $_POST['id_jadwal'];
    $mk = $_POST['mk'];
    $jurusan = $_POST['jurusan'];
    $lab = $_POST['lab'];
    $waktu = $_POST['waktu'];

    // Data yang akan dikirim ke API
    $data = [
        'mk' => $mk,
        'jurusan' => $jurusan,
        'lab' => $lab,
        'waktu' => $waktu
    ];

    // Opsi untuk konteks HTTP
    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'PUT',
            'content' => json_encode($data)
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
        echo "Error: Data tidak dapat diupdate.";
    } else {
        // Redirect ke jadwal.php jika berhasil
        header("Location: jadwal.php");
    }
} else {
    echo "Error: Invalid request method.";
}
?>
