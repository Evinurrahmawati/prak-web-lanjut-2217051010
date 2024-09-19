<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            font-weight: 600;
            font-size: 24px;
        }
        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); 
            max-width: 450px;
            width: 100%;
            transition: transform 0.3s ease; 
        }
        form:hover {
            transform: scale(1.05); 
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px 40px; 
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
            background-color: #f9f9f9;
        }
        input[type="text"]:focus {
            border-color: #2193b0;
            box-shadow: 0 0 8px rgba(33, 147, 176, 0.3);
            background-color: #f1f1f1; /* Slight color change on focus */
        }
        .form-group i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #2193b0;
            font-size: 18px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            background-color: #2193b0;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #6dd5ed;
            box-shadow: 0 4px 8px rgba(33, 147, 176, 0.4); 
            color: #fff;
        }
        
        @media (max-width: 768px) {
            body {
                padding: 20px;
            }
            form {
                padding: 30px;
                max-width: 100%;
            }
        }
        @media (max-width: 480px) {
            h2 {
                font-size: 1.5rem;
            }
            input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <form action="/user/store" method="POST">
        <h2>Create User</h2>
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <i class="fas fa-user"></i> 
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
        </div>

        <div class="form-group">
            <label for="npm">NPM:</label>
            <i class="fas fa-id-card"></i> 
            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda" required>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <i class="fas fa-school"></i> 
            <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas Anda" required>
        </div>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
