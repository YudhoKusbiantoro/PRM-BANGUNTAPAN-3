<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin PRM',
            'email' => 'admin@prm.id',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        $pengurus = User::create([
            'name' => 'Pengurus PRM',
            'email' => 'pengurus@prm.id',
            'password' => bcrypt('password'),
            'role' => 'pengurus'
        ]);

        $anggota = User::create([
            'name' => 'Anggota PRM',
            'email' => 'anggota@prm.id',
            'password' => bcrypt('password'),
            'role' => 'anggota'
        ]);

        // Dummy Posts
        \App\Models\Post::create([
            'title' => 'Pengajian Rutin Ahad Pagi Penuh Sesak oleh Jamaah',
            'slug' => 'pengajian-rutin-ahad-pagi',
            'content' => 'Antusiasme warga terlihat dari penuhnya masjid pada kajian ahad pagi bulan ini yang membahas tentang fiqih kontemporer dan muamalah. Kajian ini diisi oleh Ustadz fulan...',
            'type' => 'berita',
            'visibility' => 'public',
            'user_id' => $pengurus->id
        ]);

        \App\Models\Post::create([
            'title' => 'Penyaluran Zakat Pendidikan Tahun Ajaran Baru 2026',
            'slug' => 'penyaluran-zakat-pendidikan-2026',
            'content' => 'Lazismu PRM Banguntapan 3 kembali menyalurkan beasiswa pendidikan bagi 25 anak asuh dari tingkat SD hingga SMA di sekitar ranting. Acara ini berlangsung khidmat di Gedung Dakwah...',
            'type' => 'lazismu',
            'visibility' => 'public',
            'user_id' => $pengurus->id
        ]);

        \App\Models\Post::create([
            'title' => 'Arahan Internal Pimpinan',
            'slug' => 'arahan-internal-pimpinan',
            'content' => 'Berikut adalah arahan internal pimpinan terkait persiapan musyawarah ranting bulan depan...',
            'type' => 'info',
            'visibility' => 'private',
            'user_id' => $admin->id
        ]);

        // Default Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'PRM Banguntapan 3', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'info@prmbanguntapan3.id', 'type' => 'email'],
            ['key' => 'contact_phone', 'value' => '+62 812 3456 7890', 'type' => 'text'],
            ['key' => 'address', 'value' => 'Sorowajan, Banguntapan, Bantul', 'type' => 'textarea'],
            ['key' => 'about_text', 'value' => 'Pimpinan Ranting Muhammadiyah Banguntapan 3 terus berkomitmen memberdayakan umat...', 'type' => 'textarea'],
            ['key' => 'sejarah_singkat', 'value' => 'Berdiri sebagai tonggak dakwah Muhammadiyah di tingkat akar rumput, membawa misi pencerahan dan pembaharuan (tajdid) di Banguntapan.', 'type' => 'textarea'],
            ['key' => 'visi_misi', 'value' => 'Menjadi ranting yang unggul dalam pembinaan iman, ilmu, dan amal, serta menjadi rujukan gerakan kemasyarakatan yang berkemajuan.', 'type' => 'textarea'],
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::create($setting);
        }
    }
}
