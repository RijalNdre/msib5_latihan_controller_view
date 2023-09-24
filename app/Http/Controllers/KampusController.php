<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $description = 'Universitas Jember (UNEJ) adalah Perguruan Tinggi Negeri (PTN) yang berdiri semenjak tahun 1964 di belahan timur pulau Jawa. Lahir dan berkembang di wilayah dengan produk pertanian dan perkebunannya, maka semangat untuk mengembangkan dan memajukan pertanian dan perkebunan menjadi visi dan misi Universitas Jember. Dalam perkembangannya, Universitas Jember berkembang menjadi perguruan tinggi terkemuka yang mengembangkan berbagai rumpun keilmuan dari rumpun ilmu pertanian, keteknikan, kesehatan hingga sosial humaniora.   
        Perkembangan tersebut nampak pada keberadaan 15 fakultas dan Pascasarjana dengan 107 program studi dari jenjang diploma (D III), sarjana terapan (D IV), sarjana (S 1), magister (S 2) dan doktoral (S 3). Program studi tersebut tersebar di Kampus Jember, Kampus Bondowoso, Kampus Lumajang dan Kampus Pasuruan. Keberhasilan Universitas Jember mengembangkan diri ini terangkum dari pengakuan berbagai lembaga yang diwujudkan dalam perolehan perguruan tinggi dengan akreditasi unggul (akreditasi A) dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbudristek). 
        Sementara pengakuan internasional datang dari Scimago International Rangking yang menempatkan Universitas Jember di peringkat ke 13 dari seluruh perguruan tinggi di Indonesia. Penghargaan ini memberikan pengakuan kepada Universitas Jember sebagai perguruan tinggi berkualitas. Dari 15 fakultas yang ada di Universitas Jember, saya saat ini berada di Fakultas Ilmu Komputer Prodi Teknologi Informasi. Fasilkom diinisiasi pada tahun 2009 yang saat itu masih merupakan program studi setara fakultas yang bernama Program Studi Sistem Informasi. 
        Pada awal berdirinya Fasilkom didukung oleh 7 dosen, 2 dari FKIP (PSTP Matematika) dan 5 orang dari FT (PST Elektro). Lalu pada tahun 2016 lahir prodi teknologi informasi dan pada tahun 2017 lahir prodi informatika. Akhirnya pada akhir tahun 2017 PSSI-UNEJ berubah nama menjadi Fasilkom UNEJ dan saat ini sudah memiliki 29 dosen.';
        $data ['description'] = $description;
        return view('dashboard.kampus.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
