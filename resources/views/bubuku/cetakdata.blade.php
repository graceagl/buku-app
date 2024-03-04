<section class="home">
    <div class="contain">
        <h1>Staff</h1>
    <table>
            
        <tr class="tabel">
            <th>No.</th>
            <th>Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status</th>
            <th>Action</th>
        
        </tr>
        @foreach ($dtpeminjam as $tampil)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tampil->buku['judul'] }}</td>
            <td>{{ $tampil->tanggalpeminjaman }}</td>
            <td>{{ $tampil->tanggalpengembalian }}</td>
            <td>{{ $tampil->status }}</td>
            
            <td style="display: flex; gap:50px; justify-content:center;">
             
                <a href="/edit/{{ $tampil->id }}"><i class="bi bi-pencil"></i></a>
                <form action="/delete/{{ $tampil ->id }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" value=""  style="background-color: transparent; border:none;"><i class="bi bi-trash" style="font-size :20px;">
                    </i></button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
    


    
</section>