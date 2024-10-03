<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
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
    width: 80%;
    border-collapse: collapse; /* Menggabungkan border tabel dan cell */
    margin: 20px auto; /* Pusatkan tabel */
    background-color: #fff; /* Warna latar belakang tabel */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan di sekitar tabel */
}

th, td {
    padding: 10px; /* Ruang di dalam sel */
    text-align: left; /* Perataan teks di kiri */
    border: 1px solid #ddd; /* Tambahkan garis pada setiap kolom */
}

th {
    background-color: #385c3a; /* Warna latar belakang header */
    color: white; /* Warna teks header */
}

tr:hover {
    background-color: #f5f5f5; /* Efek hover untuk baris tabel */
}

td {
    color: #333; /* Warna teks */
}
    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>