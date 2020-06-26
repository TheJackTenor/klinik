
<table>
    <thead>
        <tr>
            <th><font><b>TANGGAL </b></font></th>
            <th><font><b>NO REKAM MEDIS</b></font></th>
            <th><font><b>NAMA PASIEN</b></font></th>
            <th><font><b>KELUHAN</b></font></th>
            <th><font><b>PEMERIKSAAN</b></font></th>
            <th><font><b>NAMA DOKTER</b></font></th>
        </tr>
    </thead>
    <tbody>

        @foreach ($kunjungan1 as $k)
        <tr>
            <td>{{$k->tgl}}</td>
            <td>{{$k->no_rm}}</td>
            <td>{{$k->nama_pasien}}</td>
            <td>{{$k->keluhan}}</td>
            <td>{{$k->pemeriksaan}}</td>
            <td>{{$k->name_user}}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td><b>TOTAL KUNJUNGAN</b></td>
            <td><b>{{$jumlah_kunjungan}}</b></td>
        </tr>
    </tfoot>
</table>
