<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengurus;
use Illuminate\Support\Facades\DB;

class PengurusSeeder extends Seeder
{
    public function run(): void
    {
        // Kosongkan tabel sebelum diisi ulang
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('penguruses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $data = [
            ['name' => 'Prof. Drs. H. Asjmuni Abdurrahman', 'position' => 'Penasehat', 'order' => 1],
            ['name' => 'Dr. H. Hamim Ilyas, M.Ag', 'position' => 'Penasehat', 'order' => 2],
            ['name' => 'Drs. H. Agus Isbandi', 'position' => 'Penasehat', 'order' => 3],
            
            ['name' => 'H.Tole Sutikno, ST.,MT.,Ph.D', 'position' => 'Ketua Umum', 'order' => 4],
            ['name' => 'Dr. Ir. Sunar Rochmadi., MS', 'position' => 'Ketua 1 Bidang Pendidikan dan Pembinaan Kader', 'order' => 5],
            ['name' => 'Ir. H Arif Budi Wahyono', 'position' => 'Ketua 2 Bidang Tabligh dan Pemberdayaan Umat', 'order' => 6],
            ['name' => 'Dr. Mursid Wahyu Hananto, S.Si.,M.Kom', 'position' => 'Ketua 3 Bidang Komunikasi dan Informasi', 'order' => 7],
            
            ['name' => 'Ir.M. Abdus Shomad, S.Sos.I.,S.T., M.Eng', 'position' => 'Sekretaris Umum', 'order' => 8],
            ['name' => 'Fredy Wanto S.Pd', 'position' => 'Sekretaris 1', 'order' => 9],
            ['name' => 'Muhammad Riyan Fitriyanto, S.Pt', 'position' => 'Sekretaris 2', 'order' => 10],
            ['name' => 'Son Ali Akbar, ST., M.Eng', 'position' => 'Sekretaris 3', 'order' => 11],
            
            ['name' => 'Agus Riyadi, S.E', 'position' => 'Bendahara Umum', 'order' => 12],
            ['name' => 'Eko Joko Santoso, ST', 'position' => 'Bendahara 1', 'order' => 13],
            ['name' => 'Akhmadi', 'position' => 'Bendahara 2', 'order' => 14],
            ['name' => 'Sularto, B.sc', 'position' => 'Bendahara 3', 'order' => 15],
            
            // Majelis Pendidikan
            ['name' => 'Dr. Ari Setiawan, S.Sos.I .,M.Pd', 'position' => 'Ketua Majelis Pendidikan', 'order' => 16],
            ['name' => 'Drs. Bajuri', 'position' => 'Sekretaris Majelis Pendidikan', 'order' => 17],
            ['name' => 'Prof. Dr. Bambang Jatmiko, SE.M.Sc', 'position' => 'Anggota Majelis Pendidikan', 'order' => 18],
            ['name' => 'Benny Oktiyanto, S. Pd', 'position' => 'Anggota Majelis Pendidikan', 'order' => 19],
            ['name' => 'Andika Wisnujati, ST.M.Eng', 'position' => 'Anggota Majelis Pendidikan', 'order' => 20],
            ['name' => 'Dr. Ferriawan Yudhanto, ST.,MT', 'position' => 'Anggota Majelis Pendidikan', 'order' => 21],
            ['name' => 'Mirza Yusuf, SP.d,.MT', 'position' => 'Anggota Majelis Pendidikan', 'order' => 22],
            ['name' => 'Fatkhurahman, S.Ag., M.Ag', 'position' => 'Anggota Majelis Pendidikan', 'order' => 23],
            ['name' => 'Hari Hariyadi, S.P., M.Sc', 'position' => 'Anggota Majelis Pendidikan', 'order' => 24],

            // Majelis Pembinaan Kader
            ['name' => 'Sigit TS. SH', 'position' => 'Ketua Majelis Pembinaan Kader', 'order' => 25],
            ['name' => 'Muhammad Zainal Abidin, S.Kom', 'position' => 'Sekretaris Majelis Pembinaan Kader', 'order' => 26],
            ['name' => 'Ir. Zuhri Nurisna, ST.,MT', 'position' => 'Anggota Majelis Pembinaan Kader', 'order' => 27],
            ['name' => 'Ir. Sotya Anggoro, ST..,M.Eng', 'position' => 'Anggota Majelis Pembinaan Kader', 'order' => 28],
            ['name' => 'Nur Huda Wijaya, ST.,M.Eng', 'position' => 'Anggota Majelis Pembinaan Kader', 'order' => 29],
            ['name' => 'Ir. Indar Surahmat, ST.,M.T., IPM', 'position' => 'Anggota Majelis Pembinaan Kader', 'order' => 30],

            // Majelis Tabligh
            ['name' => 'Drs. Zuhri', 'position' => 'Ketua Majelis Tabligh', 'order' => 31],
            ['name' => 'Drs.H. Fatkhul Birri', 'position' => 'Sekretaris Majelis Tabligh', 'order' => 32],
            ['name' => 'Jibrin, S.Si', 'position' => 'Anggota Majelis Tabligh', 'order' => 33],
            ['name' => 'Habibi Ashidiqi, SIP, MIP', 'position' => 'Anggota Majelis Tabligh', 'order' => 34],
            ['name' => 'Muhammad Naím S.Ag', 'position' => 'Anggota Majelis Tabligh', 'order' => 35],
            ['name' => 'Nur Halim Iskak, BE', 'position' => 'Anggota Majelis Tabligh', 'order' => 36],
            ['name' => 'Hermansyah, S.Pd.I', 'position' => 'Anggota Majelis Tabligh', 'order' => 37],

            // Majelis Pemberdayaan umat
            ['name' => 'Ruhan Maskuri, S.E', 'position' => 'Ketua Majelis Pemberdayaan Umat', 'order' => 38],
            ['name' => 'Fajar Ismu Nugroho, S.H', 'position' => 'Sekretaris Majelis Pemberdayaan Umat', 'order' => 39],
            ['name' => 'H.Prayogo Ontowiryo, SE', 'position' => 'Anggota Majelis Pemberdayaan Umat', 'order' => 40],
            ['name' => 'H. Muhammad Sigit Widodo, ST.M.Sc', 'position' => 'Anggota Majelis Pemberdayaan Umat', 'order' => 41],
            ['name' => 'M. Thalib', 'position' => 'Anggota Majelis Pemberdayaan Umat', 'order' => 42],
            ['name' => 'Muhammad Ridwan Alvino, S.Kom', 'position' => 'Anggota Majelis Pemberdayaan Umat', 'order' => 43],
            ['name' => 'Pristian Indra Saputro, S.Pd', 'position' => 'Anggota Majelis Pemberdayaan Umat', 'order' => 44],
            ['name' => 'Eko Pambudi', 'position' => 'Anggota Majelis Pemberdayaan Umat', 'order' => 45],
            ['name' => 'Irfan prasetyo', 'position' => 'Anggota Majelis Pemberdayaan Umat', 'order' => 46],

            // LazisMU
            ['name' => 'H. Abu Jahid, S.E', 'position' => 'Ketua LazisMU', 'order' => 47],
            ['name' => 'Susanto', 'position' => 'Wakil Ketua LazisMU', 'order' => 48],
            ['name' => 'Junadi', 'position' => 'Sekretaris LazisMU', 'order' => 49],
            ['name' => 'Tugiman', 'position' => 'Bendahara LazisMU', 'order' => 50],
            ['name' => 'Sukamto', 'position' => 'Anggota LazisMU', 'order' => 51],
            ['name' => 'Sunoto', 'position' => 'Anggota LazisMU', 'order' => 52],
            ['name' => 'Bambang', 'position' => 'Anggota LazisMU', 'order' => 53],
            ['name' => 'Jefri Chaniago', 'position' => 'Anggota LazisMU', 'order' => 54],
            ['name' => 'Slamet Suprapto', 'position' => 'Anggota LazisMU', 'order' => 55],
            ['name' => 'Heri Winarno', 'position' => 'Anggota LazisMU', 'order' => 56],
            ['name' => 'Basuki', 'position' => 'Anggota LazisMU', 'order' => 57],

            // Majelis Komunikasi dan Informasi
            ['name' => 'Arif Purwandaru, ST', 'position' => 'Ketua Majelis Komunikasi & Informasi', 'order' => 58],
            ['name' => 'Panji, S.Psi', 'position' => 'Sekretaris Majelis Komunikasi & Informasi', 'order' => 59],
            ['name' => 'Ulil Amri', 'position' => 'Anggota Majelis Komunikasi & Informasi', 'order' => 60],
            ['name' => 'H.Gamal Suwantoro SH', 'position' => 'Anggota Majelis Komunikasi & Informasi', 'order' => 61],
            ['name' => 'Fajar Ismu Nugroho, S.H', 'position' => 'Anggota Majelis Komunikasi & Informasi', 'order' => 62],
            ['name' => 'Bambang Sutriyanto, SH', 'position' => 'Anggota Majelis Komunikasi & Informasi', 'order' => 63],
            ['name' => 'Wahyu Handoyo, ST', 'position' => 'Anggota Majelis Komunikasi & Informasi', 'order' => 64],
        ];

        foreach ($data as $item) {
            Pengurus::create($item);
        }
    }
}
