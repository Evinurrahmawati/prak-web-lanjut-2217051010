<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <style>
     /* Umum untuk halaman */
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
        h2, h1 {
            text-align: center;
            margin-bottom: 20px; 
        }

        /* Tabel */
       /* Container utama */
.container {
    margin-top: 20px;
}

/* Heading */
h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-weight: bold;
    color: #333;
}

/* Tombol Tambah Pengguna */
.add-btn-container {
    margin-bottom: 20px;
}

.btn-add {
    background-color: #007bff;
    color: white;
    font-size: 1rem;
    padding: 10px 20px;
    border-radius: 5px;
    text-transform: uppercase;
}

.btn-add:hover {
    background-color: #0056b3;
}

/* Card Layout */
/* Mengatur margin dan padding agar tampilan lebih rapi */
body {
    background-color: #eaf2f8;
    font-family: Arial, sans-serif;
}

.container {
    margin-top: 30px;
}

h1 {
    font-size: 2.5em;
    color: #333;
    margin-bottom: 20px;
}

.add-btn-container {
    margin-bottom: 20px;
}

.btn-add {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
}

.btn-add:hover {
    background-color: #0056b3;
}

/* Styling untuk card */
.card {
    margin: 15px; /* Tambahkan margin di sekitar card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    background-color: white;
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.card-img-top {
    width: 95%;
    height: 250px; /* Sesuaikan tinggi gambar */
    object-fit: cover; /* Pastikan gambar tetap sesuai proporsi dan terpotong dengan rapi */
    border-bottom: 1px solid #ddd;
}

.card-body {
    padding: 15px;
}

.card-text {
    font-size: 1rem;
    color: #333;
    line-height: 1.5;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    margin-right: 10px;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    border: none;
}

.btn-danger:hover {
    background-color: #c82333;
}

/* Styling untuk layout grid */
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Jarak antara card */
}

.col-md-4 {
    flex: 0 0 calc(33.333% - 30px); /* Perhitungan untuk mempertimbangkan margin */
    max-width: calc(33.333% - 30px); /* Ukuran card mempertimbangkan margin */
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}




    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>