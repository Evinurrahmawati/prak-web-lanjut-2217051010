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
    </style>
</head>
<body>

    <form action="/user/store" method="POST">
        <h2>Create User</h2>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda">
            @foreach ($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>

        <div class="form-group">
            <label for="npm">NPM :</label>
            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda">
            @foreach ($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>

        <div class="form-group">
            <label for="id_kelas">Kelas :</label><br>
            <select name="kelas_id" id="kelas_id">
                @foreach($kelas as $kelasItem)
                <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
