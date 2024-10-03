<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom right, #e3f2fd, #bbdefb);
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #90caf9;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #80caf7;
        }
        h2 {
            text-align: center;
        }
        .text-danger {
            color: red;
            font-size: 12px;
        }

    table {
    width: 90%; /* Lebar tabel lebih fleksibel */
    max-width: 1000px; /* Lebar maksimal agar tidak terlalu lebar */
    border-collapse: collapse; /* Menggabungkan border tabel dan cell */
    margin: 20px auto; /* Pusatkan tabel */
    background-color: #ffffff; /* Warna latar belakang tabel */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan di sekitar tabel */
    border-radius: 8px; /* Membuat sudut tabel melengkung */
    overflow: hidden; /* Untuk menghindari teks keluar dari batas */
}

th, td {
    padding: 12px 20px; /* Ruang di dalam sel yang lebih besar */
    text-align: left; /* Perataan teks di kiri */
    border-bottom: 1px solid #dddddd; /* Tambahkan garis pada setiap baris bawah */
    font-family: 'Arial', sans-serif; /* Font modern */
}

th {
    background-color: #2c3e50; /* Warna latar belakang header */
    color: white; /* Warna teks header */
    font-weight: 600; /* Tebal teks header */
    text-transform: uppercase; /* Huruf besar di header */
}

tr {
    transition: background-color 0.3s ease; /* Transisi halus untuk hover */
}

tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris tabel */
}

td {
    color: #2c3e50; /* Warna teks utama */
    font-size: 14px; /* Ukuran teks */
}

@media (max-width: 768px) {
    table {
        width: 100%; /* Tabel penuh di layar kecil */
    }

    th, td {
        padding: 10px; /* Ruang sel lebih kecil */
        font-size: 12px; /* Ukuran teks lebih kecil */
    }
}

    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>
