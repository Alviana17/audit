<table align="center">
    <tr>
        <td>
            <img src="{{ public_path('img/logo/sig.png') }}" style="max-width: 100px;">
        </td>
        <td align="center">
            <h2>SURAT PERINTAH PELAKSANAAN AUDIT</h2>
            <h2>(SP2A)</h2>
        </td>
        <td>
            <img src="{{ public_path('img/logo/sementonasa.png') }}" style="max-width: 100px;">
        </td>
    </tr>
</table>


<h5>Kepada Yth :</h5>
<ul>
    @foreach ($audities as $audity)
    <li class="list-group-item border-0 py-2">{{ $audity->departemen }}</li>
    @endforeach
</ul>

<br>

<p><strong>Dari </strong> <strong> :</strong>GM of Internal Audit</p>
<p><strong>Nomor </strong> <strong> :</strong> {{ $audit->nomor_surat }}</p>
<p><strong>Perihal</strong> <strong> :</strong> {{ $audit->judul_audit}}</p>
<br>
<p>Dengan hormat,</p>
<p>
    Sesuai dengan Rencana Kerja Internal Audit (RKIA) tahun {{ date('Y') }} ,maka kami menugaskan Tim Auditor
    Departemen Internal Audit untuk melaksanakan Audit {{$audit->judul_audit}}
    periode ,{{ $periodeMulai }} s.d {{ $periodeSelesai }} , dengan susunan Tim Auditor SBB
</p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <table class="table" align="center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($auditor as $index => $auditor)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $auditor->nama }}</td>
                        <td>{{ $auditor->jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<p>Adapun Jadwal pelaksanaan audit dan evaluasi sebagai berikut :</p>
<table class="table table-borderless">
    <tbody>
        @foreach($jadwalAudits as $index => $jadwalaudit)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $jadwalaudit->nama_kegiatan }}</td>
            <td>
                Tanggal {{ \Carbon\Carbon::parse($jadwalaudit->mulai)->translatedFormat('j F') }} s.d.
                {{ \Carbon\Carbon::parse($jadwalaudit->selesai)->translatedFormat('j F Y') }}
                ( {{ $jadwalaudit->sisaHari }} hari kerja)
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<p>Sehubungan dengan penugasan di atas, kmai harapa dapat diberikan data/informasi yang cukup demi kelancaran
    proses audit tersebut.
    Demikian kami sampaikan, atas kerja samanya diucapkan terimah kasih.
</p>
<br>
<p>Pangkep ,{{ $tanggalFormat }}</p>
<p>Department of Internal Audit</p>
<!-- Tampilkan tanda tangan -->
<div>
    @if($tandatangan)
    <img src="{{ public_path('storage/signatures/' . $tandatangan->signature) }}" alt="Tanda Tangan"
        class="img-thumbnail" style="width: 250px; border:none;margin-left:-70px">
    @else
    Tidak ada tanda tangan yang ditemukan.
    @endif
</div>
<p>
    <u>{{$generalManagers}}</u><br>
    General Manager
</p>

<p>RWB/ARD</p>
<p>Tembusan :</p>