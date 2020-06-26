
<table>
    <thead>
        <tr>
            <th><font><b>TANGGAL </b></font></th>
            <th><font><b>NAMA OBAT</b></font></th>
            <th><font><b>STOK</b></font></th>
            <th><font><b>STOK KELUAR</b></font></th>
        </tr>
    </thead>
    <tbody>

        @foreach($stok as $so)
        <tr>
            <!-- <td></td> -->
            <td>{{$so->tgl}}</td>
            <td>{{$so->obat->nama_obat}}</td> 
            <td>{{$so->stok}}</td>
            <td>{{$so->stok_out}}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
        </tr>
    </tfoot>
</table>
