<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN PEMINJAMAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>LAPORAN PEMINJAMAN</h4>

        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Tanggal Pengaduan</th>
                <th>Isi Pengaduan</th>
                <th>Tanggal Tanggapan</th>
                <th>Tanggapan</th>
                <th>Status</th>
                <th>Status</th>



            </tr>
        </thead>
        <tbody>
        <tbody>
            
            @foreach($tanggapan as $item)
           <tr>
            <td> {{ $loop->iteration }}
            <td> {{ $item->pengaduan->masyarakat->nik }}</td>
            <td> {{ $item->pengaduan->masyarakat->nama }}</td>
            <td> {{ $item->pengaduan->tgl_pengaduan }}</td>
            <td> {{ $item->pengaduan->isi_laporan }}</td>
            <td> {{ $item->tgl_tanggapan }}</td>
             <td> {{ $item->tanggapan }}</td>
             <td> {{ $item->pengaduan->status }}</td>
            <td>

            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>