<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;
use App\Models\Pelatihan;
use App\Models\Pekerjaan;
use App\Models\Lamaran;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user();
        $lamaran = Lamaran::where('user_id',$user->id)->get();
        return view('home')->with(compact('lamaran'));
    }

    public function viewEntity(){
        $user = Auth::user();
        $lamaran = Lamaran::get();
        return view('pages.view_entity')->with(compact('lamaran'));
    }

    public function dashboard(){


        return view('pages.dashboard');
    }

    public function addEntity(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user = Auth::user();

            // dd($data); 

            $lamaran = new Lamaran();
            $lamaran->user_id = $user->id;
            $lamaran->posisi = $data["posisi"];
            $lamaran->nama = $data["nama"];
            $lamaran->ktp = $data["ktp"];
            $lamaran->ttl = $data["ttl"];
            $lamaran->jk = $data["jk"];
            $lamaran->agama = $data["agama"];
            $lamaran->goldar = $data["goldar"];
            $lamaran->status = $data["status"];
            $lamaran->alamat_ktp  = $data["alamat_ktp"];
            $lamaran->alamat_tinggal = $data["alamat_tinggal"];
            $lamaran->email  = $data["email"];
            $lamaran->telpon = $data["telpon"];
            $lamaran->org_dpt_dihubungi  = $data["org_dpt_dihubungi"];
            $lamaran->skill  = $data["skill"];
            $lamaran->penempatan  = $data["penempatan"];
            $lamaran->pendapatan = $data["penghasilan"];
            $lamaran->save();

            $r_pendidikan = new Pendidikan();
            $r_pendidikan->user_id = $user->id;
            $r_pendidikan->lamaran_id = $lamaran->id;
            $r_pendidikan->p_jenjang_pendidikan = $data["p_jenjang_pendidikan_1"];
            $r_pendidikan->p_nama_institusi = $data["p_nama_institusi_1"];
            $r_pendidikan->p_jurusan = $data["p_jurusan_1"];
            $r_pendidikan->p_tahun_lulus = $data["p_tahun_lulus_1"];
            $r_pendidikan->p_ipk = $data["p_ipk_1"];
            $r_pendidikan->save();

            $r_pendidikan = new Pendidikan();
            $r_pendidikan->user_id = $user->id;
            $r_pendidikan->lamaran_id = $lamaran->id;
            $r_pendidikan->p_jenjang_pendidikan = $data["p_jenjang_pendidikan_2"];
            $r_pendidikan->p_nama_institusi = $data["p_nama_institusi_2"];
            $r_pendidikan->p_jurusan = $data["p_jurusan_2"];
            $r_pendidikan->p_tahun_lulus = $data["p_tahun_lulus_2"];
            $r_pendidikan->p_ipk = $data["p_ipk_2"];
            $r_pendidikan->save();

            $r_pelatihan = new Pelatihan();
            $r_pelatihan->user_id = $user->id;
            $r_pelatihan->lamaran_id = $lamaran->id;
            $r_pelatihan->l_nama_kursus = $data["l_nama_kursus_1"];
            $r_pelatihan->l_sertifikat = $data["l_sertifikat_1"];
            $r_pelatihan->l_tahun = $data["l_tahun_1"];
            $r_pelatihan->save();

            $r_pelatihan = new Pelatihan();
            $r_pelatihan->user_id = $user->id;
            $r_pelatihan->lamaran_id = $lamaran->id;
            $r_pelatihan->l_nama_kursus = $data["l_nama_kursus_2"];
            $r_pelatihan->l_sertifikat = $data["l_sertifikat_2"];
            $r_pelatihan->l_tahun = $data["l_tahun_2"];
            $r_pelatihan->save();
            
            $r_pekerjaan = new Pekerjaan();
            $r_pekerjaan->user_id = $user->id;
            $r_pekerjaan->lamaran_id = $lamaran->id;
            $r_pekerjaan->k_perusahaan = $data["k_perusahaan_1"];
            $r_pekerjaan->k_posisi = $data["k_posisi_1"];
            $r_pekerjaan->k_pendapatan = $data["k_pendapatan_1"];
            $r_pekerjaan->k_tahun = $data["k_tahun_1"];
            $r_pekerjaan->save();

            $r_pekerjaan = new Pekerjaan();
            $r_pekerjaan->user_id = $user->id;
            $r_pekerjaan->lamaran_id = $lamaran->id;
            $r_pekerjaan->k_perusahaan = $data["k_perusahaan_2"];
            $r_pekerjaan->k_posisi = $data["k_posisi_2"];
            $r_pekerjaan->k_pendapatan = $data["k_pendapatan_2"];
            $r_pekerjaan->k_tahun = $data["k_tahun_2"];
            $r_pekerjaan->save();


            // dd($data); 

            return redirect()->back()->with('flash_message_success','Entity telah dibuat!');

        }else{
            return view('pages.add_entity');
        }
    }
}
