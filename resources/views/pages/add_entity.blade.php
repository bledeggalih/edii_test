@extends('layouts.app')

@section('content')
<style type="text/css">
    a.text-only{
        text-decoration: none;
        color: black;
    }
    a.text-only:hover{
        color: grey;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('/assets/images/edii-logo.jpg')}}" height="200px">
                </div>
                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <h3 style="text-decoration: underline; font-weight: 700">DATA PRIBADI PELAMAR</h3>
                            </div>
                        </div>
                        <form method="post" action="{{url('/add-entity')}}" enctype="multipart/data">
                            @csrf
                            <div class="col-12">
                                <div class=" mx-4">
                                    <table width="100%" class="table">
                                        <tr>
                                            <td style="width: 5%">1.</td>
                                            <td style="width: 25%">POSISI YANG DILAMAR</td>
                                            <td style="width: 70%"><input type="text" class="text-control w-100" name="posisi"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">2.</td>
                                            <td style="width: 25%">NAMA</td>
                                            <td style="width: 70%"><input type="text" class="text-control w-100" name="nama"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">3.</td>
                                            <td style="width: 25%">NO KTP</td>
                                            <td style="width: 70%"><input type="text" class="text-control w-100" name="ktp"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">4.</td>
                                            <td style="width: 25%">TEMPAT TANGGAL LAHIR</td>
                                            <td style="width: 70%"><input type="date" class="text-control w-100" name="ttl"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">5.</td>
                                            <td style="width: 25%">JENIS KELAMIN</td>
                                            <td style="width: 70%">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="laki">
                                                    <label class="form-check-label" for="inlineRadio1">LAKI-LAKI</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="perempuan">
                                                    <label class="form-check-label" for="inlineRadio2">PEREMPUAN</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">6.</td>
                                            <td style="width: 25%">AGAMA</td>
                                            <td style="width: 70%"><input type="text" class="text-control w-100" name="agama"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">7.</td>
                                            <td style="width: 25%">GOLONGAN DARAH</td>
                                            <td style="width: 70%"><input type="text" class="text-control w-100" name="goldar"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">8.</td>
                                            <td style="width: 25%">STATUS</td>
                                            <td style="width: 70%"><input type="text" class="text-control w-100" name="status"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">9.</td>
                                            <td style="width: 25%">ALAMAT KTP</td>
                                            <td style="width: 70%"><textarea class="text-control w-100" name="alamat_ktp" style="max-width: 100%; min-width: 100%; max-height: 200px; min-height: 50px"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">10.</td>
                                            <td style="width: 25%">ALAMAT TINGGAL</td>
                                            <td style="width: 70%"><textarea class="text-control w-100" name="alamat_tinggal" style="max-width: 100%; min-width: 100%; max-height: 200px; min-height: 50px"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">11.</td>
                                            <td style="width: 25%">EMAIL</td>
                                            <td style="width: 70%"><input type="email" class="text-control w-100" name="email"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">12.</td>
                                            <td style="width: 25%">NO. TELP</td>
                                            <td style="width: 70%"><input type="tel" class="text-control w-100" name="telpon"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">13.</td>
                                            <td style="width: 25%">ORANG YANG DAPAT DIHUBUNGI</td>
                                            <td style="width: 70%"><input type="text" class="text-control w-100" name="org_dpt_dihubungi"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">14.</td>
                                            <td style="width: 25%">PENDIDIKAN TERAKHIR</td>
                                            <td style="width: 70%"></td>
                                        </tr>
                                        <tr>
                                            <table class="table table-bordered" width="100%">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="text-center">Jenjang Pendidikan Terakhir</th>
                                                        <th class="text-center">Nama Institusi Akademik</th>
                                                        <th class="text-center">Jurusan</th>
                                                        <th class="text-center">Tahun Lulus</th>
                                                        <th class="text-center">IPK</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_jenjang_pendidikan_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_nama_institusi_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_jurusan_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_tahun_lulus_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_ipk_1"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_jenjang_pendidikan_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_nama_institusi_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_jurusan_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_tahun_lulus_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="p_ipk_2"></textarea>
                                                        </td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">15.</td>
                                            <td style="width: 25%">RIWAYAT PELATIHAN</td>
                                            <td style="width: 70%"></td>
                                        </tr>
                                        <tr>
                                            <table class="table table-bordered" width="100%">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="text-center">Nama Kursus / Seminar</th>
                                                        <th class="text-center">Sertifikat (Ada/Tidak)</th>
                                                        <th class="text-center">Tahun</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <textarea class="text-control w-100" name="l_nama_kursus_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="l_sertifikat_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="l_tahun_1"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <textarea class="text-control w-100" name="l_nama_kursus_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="l_sertifikat_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="l_tahun_2"></textarea>
                                                        </td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">16.</td>
                                            <td style="width: 25%">RIWAYAT PEKERJAAN</td>
                                            <td style="width: 70%"></td>
                                        </tr>
                                        <tr>
                                            <table class="table table-bordered" width="100%">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="text-center">Nama Perusahaan</th>
                                                        <th class="text-center">Posisi Terakhir</th>
                                                        <th class="text-center">Pendapatan Terahir</th>
                                                        <th class="text-center">Tahun</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <textarea class="text-control w-100" name="k_perusahaan_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="k_posisi_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="k_pendapatan_1"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="k_tahun_1"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <textarea class="text-control w-100" name="k_perusahaan_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="k_posisi_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="k_pendapatan_2"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea class="text-control w-100" name="k_tahun_2"></textarea>
                                                        </td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">17.</td>
                                            <td style="width: 25%">SKILL</td>
                                            <td style="width: 70%"><span style="float: right">Tuliskan keahlian & keterampilan yang saat ini anda miliki.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="width: 100%">
                                                <textarea class="text-control w-100" name="skill" style="max-width: 100%; min-width: 100%; max-height: 200px; min-height: 50px"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">18.</td>
                                            <td style="width: 25%">BERSEDIA DITEMPATKAN DISELURUH KANTOR PERUSAHAAN</td>
                                            <td style="width: 70%">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="penempatan" id="penempatan2" value="1">
                                                    <label class="form-check-label" for="penempatan1">YA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="penempatan" id="penempatan2" value="2">
                                                    <label class="form-check-label" for="penempatan2">TIDAK</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 5%">19.</td>
                                            <td style="width: 25%">PENGHASILAN YANG DIHARAPKAN</td>
                                            <td style="width: 70%"><input type="number" class="text-control w-100" name="penghasilan"></td>
                                        </tr>
                                    </table>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
    });
</script>
@endsection