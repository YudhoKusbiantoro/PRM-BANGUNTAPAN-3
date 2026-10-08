<?php
use App\Models\Pengurus;

Pengurus::truncate();

$penguruses = [
    ['name' => 'Prof. Drs. H. Asjmuni Abdurrahman', 'position' => 'Penasehat', 'order' => 0],
    ['name' => 'Dr. H. Hamim Ilyas, M.Ag', 'position' => 'Penasehat', 'order' => 1],
    ['name' => 'Drs. H. Agus Isbandi', 'position' => 'Penasehat', 'order' => 2],
    ['name' => 'H.Tole Sutikno, ST.,MT.,Ph.D', 'position' => 'Ketua Umum', 'order' => 3],
    ['name' => 'Dr. Ir. Sunar Rochmadi., MS', 'position' => 'Ketua 1', 'order' => 4],
    ['name' => 'Ir. H Arif Budi Wahyono', 'position' => 'Ketua 2', 'order' => 5],
    ['name' => 'Dr. Mursid Wahyu Hananto, S.Si.,M.Kom', 'position' => 'Ketua 3', 'order' => 6],
    ['name' => 'Ir.M. Abdus Shomad, S.Sos.I.,S.T., M.Eng', 'position' => 'Sekretaris Umum', 'order' => 7],
    ['name' => 'Agus Riyadi,S.E', 'position' => 'Bendahara Umum', 'order' => 8],
    ['name' => 'Dr. Ari Setiawan, S.Sos.I .,M.Pd', 'position' => 'Ketua Majelis Pendidikan', 'order' => 9],
    ['name' => 'Sigit TS. SH', 'position' => 'Ketua Majelis Pembinaan Kader', 'order' => 10],
    ['name' => 'Drs. Zuhri', 'position' => 'Ketua Majelis Tabligh', 'order' => 11],
    ['name' => 'Ruhan Maskuri, S.E', 'position' => 'Ketua Majelis Pemberdayaan Umat', 'order' => 12],
    ['name' => 'H. Abu Jahid, S.E', 'position' => 'Ketua LazisMU', 'order' => 13],
    ['name' => 'Arif Purwandaru, ST', 'position' => 'Ketua Majelis Komunikasi & Informasi', 'order' => 14],
];

foreach ($penguruses as $p) {
    Pengurus::create($p);
}
echo "Penguruses seeded.\n";
