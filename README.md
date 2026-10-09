## 💻 Kebutuhan Sistem (System Requirements)

Proyek ini dibangun menggunakan **Laravel** dan memiliki beberapa spesifikasi minimum untuk dapat berjalan dengan baik di lingkungan lokal maupun server.

Berikut adalah spesifikasi versi yang dibutuhkan:
- **PHP**: `^8.3` (Versi 8.3 atau yang lebih baru)
- **Laravel Framework**: `^13.8`

Pastikan server atau perangkat lokal Anda sudah memenuhi persyaratan minimum di atas sebelum melakukan instalasi.

## USE CASE
<img width="3612" height="4024" alt="image" src="https://github.com/user-attachments/assets/b395cb7e-fafd-46ff-9c6d-378af30d59b4" />

## 🌟 Fitur Utama & Hak Akses (Role)

Website ini memiliki dua sisi utama, yaitu **Tampilan Publik (Frontend)** dan **Dashboard Manajemen (Backend)**, serta menggunakan sistem pembatasan akses berbasis *role* pengguna.

### 1. Tampilan Publik
Bagian ini dapat diakses oleh siapa saja (pengunjung website) tanpa perlu melakukan proses login. Tampilan publik biasanya memuat Beranda utama, program, artikel, dan informasi kontak.

### 2. Dashboard & Hak Akses (Role)
Untuk masuk ke sistem manajemen dashboard, pengguna harus login terlebih dahulu. Sistem memiliki 3 tingkatan *role* atau hak akses:

- 👑 **Admin**: Memiliki hak akses penuh terhadap seluruh sistem. Admin dapat menambah/mengubah pengguna, mengatur konfigurasi website, dan mengakses semua fitur tanpa batasan.
- 💼 **Pengurus**: Memiliki hak akses untuk mengelola konten website (seperti artikel, program, dan kegiatan), tetapi dibatasi dari pengaturan inti sistem.
- 👥 **Anggota**: Pengguna terdaftar dengan akses terbatas di dashboard, seperti melihat konten khusus atau memperbarui profil pribadi.

---

## 📸 Cuplikan Layar (Screenshots)

Berikut adalah tampilan awal dari masing-masing halaman sesuai dengan aksesnya:

**1. Tampilan Publik (Beranda)**  
<img width="941" height="440" alt="image" src="https://github.com/user-attachments/assets/ebb1c376-5fa9-40e3-ba69-a030211ddb8a" />

**2. Dashboard - Admin**  
<img width="938" height="443" alt="image" src="https://github.com/user-attachments/assets/785cea64-6c30-45d6-ac9f-1dd81845d0ed" />

**3. Dashboard - Pengurus**  
<img width="945" height="444" alt="image" src="https://github.com/user-attachments/assets/e0fee279-fca0-4558-ae11-0164316ee6ac" />

**4. Dashboard - Anggota**  
<img width="947" height="440" alt="image" src="https://github.com/user-attachments/assets/fbf63f9e-db7f-47cb-9ed9-d33cd5212bfd" />

