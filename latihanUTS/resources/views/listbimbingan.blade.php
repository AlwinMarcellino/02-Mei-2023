<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Bimbingan</title>
</head>
<style>
    table, th, td {
        border: 1px solid #77DBFF;
        border-collapse: collapse;
        font-family: sans-serif;
    }

    th{
        padding: 8px;
        height: 30px;
        color: white;
        background-color: #2A3066;
    }
    td{
        padding: 8px;
        height: 25px;
    }

    .content {
        max-width: max-content;
        margin: auto;
    }

    h3, h4{
        font-family: sans-serif;
    }
</style>
<body class="content">
    <table>
        <thead>
            <th>Nama Mahasiswa</th><th>NPM</th><th>Nomor Handphone</th><th>Jenis Bimbingan</th><th>Materi Bimbingan</th><th>Tanggal Bimbingan</th><th>Kode Dosen</th><th>Nama Dosen</th>
        </thead>
        <tbody>
            @foreach ($allbimbingan as $item)
            <tr>
                <td>{{$item->nama}}</td><td>{{$item->npm}}</td><td>{{$item->no_hp}}</td><td>{{$item->jenis_bimbingan}}</td><td>{{$item->materi_bimbingan}}</td><td>{{$item->tanggal_bimbingan}}</td><td>{{$item->kode_dosen}}</td><td>{{$item->nama_dosen}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
</body>
</html>
