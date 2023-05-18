@php
    $nama = 'Reyvaldo Arrizky';
    $nilai = 80;
@endphp
    
    @if ($nilai > 60)
        @php
            $ket = 'Lulus';
        @endphp
    @else
        @php
            $ket = 'Gagal';   
        @endphp
    @endif

    Siswa Dengan Nama {{ $nama }} 
    Keterangan {{ $ket }}
    