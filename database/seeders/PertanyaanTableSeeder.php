<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pertanyaan;

class PertanyaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'pertanyaan' => 'Mengatur ulang hal-hal di sekitar Anda sehingga masalah Anda sangat berpeluang terselesaikan.',
                'jenis' => 'Pemecahan Masalah'
            ],
            [
                'pertanyaan' => 'Menetapkan beberapa tujuan bagi diri Anda untuk menghadapi situasi.',
                'jenis' => 'Pemecahan Masalah'
            ],
            [
                'pertanyaan' => 'Mempertimbangkan pilihan Anda dengan sangat hati-hati.',
                'jenis' => 'Pemecahan Masalah'
            ],
            [
                'pertanyaan' => 'Mencoba berbagai cara untuk menyelesaikan masalah hingga Anda menemukan satu cara yang berhasil.',
                'jenis' => 'Pemecahan Masalah'
            ],
            [
                'pertanyaan' => 'Memfokuskan perhatian Anda sepenuhnya untuk memecahkan masalah.',
                'jenis' => 'Pemecahan Masalah'
            ],
            [
                'pertanyaan' => 'Menyusun rencana tindakan dalam pikiran Anda.',
                'jenis' => 'Pemecahan Masalah'
            ],
            [
                'pertanyaan' => 'Tetap tegar dan berusaha keras meraih apa yang Anda inginkan dalam situasi yang sedang dihadapi',
                'jenis' => 'Pemecahan Masalah'
            ],
            [
                'pertanyaan' => 'Mencoba memecahkan masalah.',
                'jenis' => 'Pemecahan Masalah'
            ],
            [
                'pertanyaan' => 'Mengungkapkan perasaan pada teman.',
                'jenis' => 'Dukungan Sosial'
            ],
            [
                'pertanyaan' => 'Berbicara dengan orang lain tentang situasi yang dihadapi, karena membicarakannya membantu Anda merasa lebih baik.',
                'jenis' => 'Dukungan Sosial'
            ],
            [
                'pertanyaan' => 'Mengungkapkan ketakutan dan kekhawatiran Anda kepada teman atau kerabat.',
                'jenis' => 'Dukungan Sosial'
            ],
            [
                'pertanyaan' => 'Menemui seseorang (teman atau profesional) untuk membantu Anda merasa lebih baik.',
                'jenis' => 'Dukungan Sosial'
            ],
            [
                'pertanyaan' => 'Menemui teman untuk membantu Anda merasa lebih baik tentang masalahnya.',
                'jenis' => 'Dukungan Sosial'
            ],
            [
                'pertanyaan' => 'Menemui teman untuk meminta nasihat tentang cara mengubah situasi.',
                'jenis' => 'Dukungan Sosial'
            ],
            [
                'pertanyaan' => 'Mencari kepastian dari orang-orang yang mengenal Anda dengan sangat baik.',
                'jenis' => 'Dukungan Sosial'
            ],
            [
                'pertanyaan' => 'Menghabiskan lebih banyak waktu dari biasanya dengan menyendiri.',
                'jenis' => 'Penghindaran'
            ],
            [
                'pertanyaan' => 'Menghindari berkumpul bersama orangorang pada umumnya.',
                'jenis' => 'Penghindaran'
            ],
            [
                'pertanyaan' => 'Berfantasi tentang bagaimana hal bisa berbeda.',
                'jenis' => 'Penghindaran'
            ],
            [
                'pertanyaan' => 'Menyamakan diri dengan karakter novel atau film.',
                'jenis' => 'Penghindaran'
            ],
            [
                'pertanyaan' => 'Ketika saya dihadapkan pada situasi yang penuh tekanan, saya memikirkannya dengan cara yang membantu saya tetap tenang.',
                'jenis' => 'Penilaian Ulang'
            ],
            [
                'pertanyaan' => 'Ketika saya ingin merasakan emosi yang lebih positif, saya mengubah cara saya memikirkan situasi.',
                'jenis' => 'Penilaian Ulang'
            ],
            [
                'pertanyaan' => 'Saya mengendalikan emosi dengan cara memikirkan situasi yang sedang saya hadapi.',
                'jenis' => 'Penilaian Ulang'
            ],
            [
                'pertanyaan' => 'Ketika saya ingin merasakan emosi yang sedikit lebih negatif, saya mengubah cara memikirkan situasi yang saya hadapi.',
                'jenis' => 'Penilaian Ulang'
            ],
            [
                'pertanyaan' => 'Memikirkan betapa sulitnya berkonsentrasi.',
                'jenis' => 'Perenungan'
            ],
            [
                'pertanyaan' => 'Memikirkan betapa pasif dan tidak termotivasinya perasaan Anda.',
                'jenis' => 'Perenungan'
            ],
            [
                'pertanyaan' => 'Memikirkan bagaimana Anda tidak merasakan apa-apa lagi.',
                'jenis' => 'Perenungan'
            ],
            [
                'pertanyaan' => 'Memikirkan bagaimana anda tidak merasa bersemangat untuk melakukan sesuatu.',
                'jenis' => 'Perenungan'
            ],
            [
                'pertanyaan' => 'Memikirkan semua kekurangan, kegagalan, kesalahan Anda.',
                'jenis' => 'Perenungan'
            ],
            [
                'pertanyaan' => 'Mencoba menemukan sesuatu yang positif dalam situasi atau sesuatu yang Anda pelajari.',
                'jenis' => 'Pengalihan'
            ],
            [
                'pertanyaan' => 'Berpikir “Saya akan melakukan sesuatu untuk membuat diri saya merasa lebih baik.”',
                'jenis' => 'Pengalihan'
            ],
            [
                'pertanyaan' => 'Melakukan sesuatu yang menyenangkan dengan seorang teman.',
                'jenis' => 'Pengalihan'
            ],
            [
                'pertanyaan' => 'Saya menerima perasaan menyenangkan.',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
            [
                'pertanyaan' => 'Saya berusaha mempertahankan perasaan menyenangkan selama saya bisa.',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
            [
                'pertanyaan' => 'Ketika saya mengalami perasaan menyenangkan, saya dapat menerimanya.',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
            [
                'pertanyaan' => 'Ketika saya mengalami perasaan menyenangkan, saya dapat menerimanya.',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
            [
                'pertanyaan' => 'Saya bertahan dengan perasaan menyenangkan.',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
            [
                'pertanyaan' => 'Saya menikmati perasaan positif sebanyak yang saya bisa.',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
            [
                'pertanyaan' => 'Saya mencoba merasakan perasaan menyenangkan sebisa mungkin',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
            [
                'pertanyaan' => 'Saya mencoba segalanya untuk memperkuat perasaan menyenangkan',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
            [
                'pertanyaan' => 'Ketika saya mengalami perasaan menyenangkan, saya mencoba untuk memperkuatnya.',
                'jenis' => 'Penerimaan perasaan menyenangkan'
            ],
        ];

        Pertanyaan::insert($data);
    }
}
