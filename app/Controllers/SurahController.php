<?php

namespace App\Controllers;

use App\Models\SurahModel;

class SurahController extends BaseController
{
    public function show($surahNumber)
    {
        // Membuat objek model SurahModel
        $surahModel = new SurahModel();

        // Mengambil data surah berdasarkan nomor surah
        $surah = $surahModel->getSurahByNumber($surahNumber);

        // Menyiapkan data untuk dikirimkan ke tampilan (view)
        $data = [
            'surah' => $surah
        ];

        // Memuat tampilan (view) dengan data yang disiapkan
        return view('surah/show', $data);
    }
}
