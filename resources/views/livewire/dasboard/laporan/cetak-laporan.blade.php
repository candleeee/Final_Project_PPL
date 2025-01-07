<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Antrian</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
    </style>
</head>
<body>
    <h1>Laporan Antrian</h1>

    <table>
        <thead>
            <tr>
                <th>No Antrian</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Nomor HP</th>
                <th>Nomor KTP</th>
                <th>Tgl. Lahir</th>
                <th>Pekerjaan</th>
                <th>Poli</th>
                <th>Tgl. Antrian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $list)
                <tr>
                    <td>{{ $list->no_antrian }}</td>
                    <td>{{ $list->nama }}</td>
                    <td>{{ $list->alamat }}</td>
                    <td>{{ $list->jenis_kelamin }}</td>
                    <td>{{ $list->no_hp }}</td>
                    <td>{{ $list->no_ktp }}</td>
                    <td>{{ $list->tgl_lahir }}</td>
                    <td>{{ $list->pekerjaan }}</td>
                    <td>{{ $list->poli }}</td>
                    <td>{{ $list->tanggal_antrian }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
