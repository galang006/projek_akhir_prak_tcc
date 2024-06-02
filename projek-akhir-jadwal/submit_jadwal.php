<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
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
            'method' => 'POST',
            'content' => json_encode($data)
        ]
    ];

    // Buat konteks stream
    $context = stream_context_create($options);

    // Kirim permintaan ke API
    $result = file_get_contents('https://api-dot-prakcloud1.et.r.appspot.com/jadwal/', false, $context);

    // Cek hasil permintaan
    if ($result === FALSE) {
        // Tangani kesalahan
        echo "Error: Data tidak dapat dikirim.";
    } else {
        // Redirect ke jadwal.php jika berhasil
        header("Location: jadwal.php");
    }
} else {
    echo "Error: Invalid request method.";
}
?>
