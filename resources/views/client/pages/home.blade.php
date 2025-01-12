@extends('client.layouts.main')
@section('content')

<!-- Carousel -->
@include('client.layouts.carousel')
<!-- Carousel End -->

<div class="content">
    <!-- What is K3 -->
    <div class="k3-explaination mt-10 text-black py-6 px-4 bg-orange-200">
        <div class="title text-2xl font-bold">Apa itu K3?</div>
        <div class="content text-base/snug my-5">
            <p><b>K3</b> atau <b>Keselamatan dan Kesehatan Kerja</b> adalah suatu upaya kerja sama, saling pengertian dan partisipasi dari pengusaha dan karyawan dalam perusahaan untuk melaksanakan tugas dan kewajiban bersama dibidang keselamatan, kesehatan, dan keamanan kerja dalam rangka meningkatkan produktivitas.</p>
        </div>
    </div>
    <!-- What is K3 End -->

    <!-- About Us -->
    <div class="about-us py-8 px-6 md:pxß-0 text-white">
        <div class="title pb-8">
            <h4 class="text-2xl underline md:text-2xl font-bold">Tentang Kami</h4>
        </div>
        <div
            class="flex flex-col-reverse gap-7 md:flex-row md:gap-10">
            <div class="left md:basis-1/2">
                <div class="content text-base">
                    <p>PT Dinamika Candra Sarana Atau DCS Merupakan Perusahaan Jasa Keselamatan dan Kesehatan Kerja ( PJK3) Bidang Pembinaan Keselamatan dan Kesehatan Kerja (K3) Pada Perusahaan.</p><br>
                    <p>DCS telah mendapatkan Surat Penunjukan Sebagai PJK3 dari Kementerian Ketenagakerjaan Republik Indonesia Nomor : ---------------------------------------------- Tentang Pembinaan Keahlian Keselamatan Kerja.</p><br>
                    <p>Sesuai Peraturan Menteri Tenaga Kerja No. PER. 04/MEN/1987, dalam pasal 3 ayat (2) yang berbunyi, Sekretaris P2K3 ialah “Ahli Keselamatan dan Kesehatan Kerja”dari perusahaan tersebut. Merujuk dari Regulasi yang dikeluarkan oleh Pemerinath, Terkait dengan Ahli K3 Umum tertuang di dalam :</p><br>

                    <ul class="list-disc list-inside px-3">
                        <li>Permenaker No.02 Tahun 1992, tentang Penunjujkan dan Kewenangan Ahli K3</li>
                        <li>Permenaker No.239 Tahun 2003, tentang Pedoman Pelaksanaan Calon Ahli K3 Umum</li>
                        <li>KepDirjen No.69 Tahun 2015, tentang Pedoman Pembinaan Calon Ahli K3 Umum</li>
                        <li>Tambahan Surat Pemberitahuan dari Kemnaker RI yang ditujukkan kepada PJK3</li>
                    </ul>
                </div>
            </div>
            <div class="right md:basis-1/2">
                <div class="mx-auto">
                    <img
                        src="{{ asset('storage/images/director-1.avif') }}"
                        alt="Director-Image"
                        class="w-full shadow-lg">
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Kompetensi Ahli K3 Umum -->
    <div class="ka-k3-umum p-6 md:p-10 text-black bg-gray-200">
        <div class="title">
            <h4 class="text-2xl md:text-3xl lg:text-2xl underline font-bold py-4">Kompetensi Ahli K3 Umum</h4>
        </div>
        <div class="flex flex-col-reverse gap-5 lg:flex-row h-full w-full">
            <div class="left basis-1/2">
                <div class="content text-base/relaxed lg:text-base">
                    <ul class="list-disc list-inside">
                        <li>Menjelaskan tugas, wewenang dan tanggung jawab Ahli K3</li>
                        <li>Menjelaskan hak pekerja dalam bidang K3</li>
                        <li>Menjelaskan kepada pengusaha bahwa upaya K3 menguntungkan bagi perusahaan</li>
                        <li>Menjelaskan tujuan sistem manajemen K3 (SMK3)</li>
                        <li>Menjelaskan sistem pelaporan kecelakaan</li>
                        <li>Menganalisa kasus kecelakaan, mengetahui faktor penyebabnya dan dapat menyiapkan laporan kecelakaan kepada pihak terkait.</li>
                        <li>Mengenal P2K3, tugas, tanggung jawab dan wewenang organisasi ini – Mengenal pembinaan dan pengawasan K3 di tingkat perusahaan, Nasional dan Internasional</li>
                        <li>Mengidentifikasi obyek pengawasan K3</li>
                        <li>Mengetahui persyaratan dan pemenuhan terhadap peraturan perundangan di tempat kerja.</li>
                        <li>Mengetahui persyaratan keselamatan dan kesehatan kerja di tempat kerja</li>
                        <li>Mengetahui proses audit dan ruang lingkupnya untuk mengukur tingkat pencapaian.</li>
                    </ul>
                </div>
            </div>
            <div class="right basis-1/2">
                <img
                    src="{{ asset('storage/images/kompetensi-1.avif') }}"
                    alt="Komptensi Ahli K3"
                    class="w-full shadow-lg !shadow-gray-700">
            </div>
        </div>
    </div>
    <!-- Kompetensi Ahli K3 Umum End -->

    <!-- Layanan Kami -->
    <div class="layanan-kami my-5 py-4 px-5">
        <div class="title pb-8 text-white">
            <h4 class="text-2xl underline md:text-2xl font-bold">Layanan Kami</h4>
        </div>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
            <div class="card bg-white text-center p-3 shadow-sm shadow-black">
                <div class="card-image">
                    <img
                        src="{{ asset('storage/images/layanan-kami-1.webp') }}"
                        alt="Layanan Kami 1"
                        class="w-full">
                </div>
                <div class="card-title text-base/tight font-bold my-2">Pelatihan K3 Umum</div>
                <div class="card-body text-sm font-medium">
                    AK3U Online Kemnaker RI
                </div>
            </div>

            <div class="card bg-white text-center p-3 shadow-sm shadow-black">
                <div class="card-image">
                    <img
                        src="{{ asset('storage/images/layanan-kami-1.webp') }}"
                        alt="Layanan Kami 1"
                        class="w-full">
                </div>
                <div class="card-title text-base/tight font-bold my-2">Pelatihan K3 Umum</div>
                <div class="card-body text-sm font-medium">
                    AK3U Online Kemnaker RI
                </div>
            </div>
            <div class="card bg-white text-center p-3 shadow-sm shadow-black">
                <div class="card-image">
                    <img
                        src="{{ asset('storage/images/layanan-kami-1.webp') }}"
                        alt="Layanan Kami 1"
                        class="w-full">
                </div>
                <div class="card-title text-base/tight font-bold my-2">Pelatihan K3 Umum</div>
                <div class="card-body text-sm font-medium">
                    AK3U Online Kemnaker RI
                </div>
            </div>
            <div class="card bg-white text-center p-3 shadow-sm shadow-black">
                <div class="card-image">
                    <img
                        src="{{ asset('storage/images/layanan-kami-1.webp') }}"
                        alt="Layanan Kami 1"
                        class="w-full">
                </div>
                <div class="card-title text-base/tight font-bold my-2">Pelatihan K3 Umum</div>
                <div class="card-body text-sm font-medium">
                    AK3U Online Kemnaker RI
                </div>
            </div>
            <div class="card bg-white text-center p-3 shadow-sm shadow-black">
                <div class="card-image">
                    <img
                        src="{{ asset('storage/images/layanan-kami-1.webp') }}"
                        alt="Layanan Kami 1"
                        class="w-full">
                </div>
                <div class="card-title text-base/tight font-bold my-2">Pelatihan K3 Umum</div>
                <div class="card-body text-sm font-medium">
                    AK3U Online Kemnaker RI
                </div>
            </div>
            <div class="card bg-white text-center p-3 shadow-sm shadow-black">
                <div class="card-image">
                    <img
                        src="{{ asset('storage/images/layanan-kami-1.webp') }}"
                        alt="Layanan Kami 1"
                        class="w-full">
                </div>
                <div class="card-title text-base/tight font-bold my-2">Pelatihan K3 Umum</div>
                <div class="card-body text-sm font-medium">
                    AK3U Online Kemnaker RI
                </div>
            </div>

        </div>
    </div>
    <!-- Layanan Kami End -->

    <!-- Materi Training Ahli K3 Umum -->
    <div class="mta-k3-umum p-8 lg:p-16 text-white">
        <div class="title">
            <h4 class="text-2xl md:text-2xl underline font-bold py-4">Materi Training Ahli K3 Umum</h4>
        </div>
        <div class="flex">
            <div class="left">
                <div class="content text-base">
                    <p>Sesuai dengan keputusan Dirjen Pembinaan Pengawasan Ketenagakerjaan, Keselamatan dan Kesehatan Kerja (K3) RI No.KEP.69/PPK&K3/XII/2015 Tanggal 02 Desember 2015, tentang Pedoman Pembinaan Calon Ahli Keselamatan dan Kesehatan Kerja (K3) Umum maka berikut Silabi yang akan diberikan selama 12 hari atau 120 JP (Jam Pelajaran) : </p>
                    <br>
                    <ul class="list-disc list-inside px-3">
                        <li>Kebijakan K3</li>
                        <li>Dasar-Dasar K3</li>
                        <li>Undang-undang No.1 Tahun 1970</li>
                        <li>Pengawasan Norma Kelembagaan dan Keahlian K3</li>
                        <li>Pengawasan Norma Keselamatan Kerja Listrik</li>
                        <li>Pengawasan Norma Penanggulangan Kebakaran</li>
                        <li>Pengawasan Norma Keselamatan Kerja Konstruksi dan Bangunan</li>
                        <li>Pengawasan Norma Keselamatan Kerja Mekanik</li>
                        <li>Pengawasan Norma Keselamatan Kerja Pesawat Uap dan Bejana Tekan</li>
                        <li>Pengawasan Norma Kesehatan Kerja</li>
                        <li>Pengawasan Norma Bahan Berbahaya</li>
                        <li>Pengawasan Norma SMK3</li>
                        <li>Laporan Kecelakaan Kerja</li>
                        <li>Konsep Dasar K3</li>
                        <li>Analisis Kecelakaan</li>
                        <li>Manajemen Risiko</li>
                        <li>Praktek Kerja Lapangan / Observasi Lapangan</li>
                        <li>Ujian tertulis</li>
                        <li>Seminar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Materi Training Ahli K3 Umum End -->

    <!-- Persyaratan Ahli dan Peserta K3 Umum -->
    <div class="pap-k3-umum px-16 py-6 text-white flex flex-col gap-8 md:flex-row">
        <div class="left">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Persyaratan Ahli K3 Umum</h4>
            </div>
            <div class="content text-base">
                <p>Sesuai dengan keputusan Dirjen Pembinaan Pengawasan Ketenagakerjaan, Keselamatan dan Kesehatan Kerja (K3) RI No.KEP.69/PPK&K3/XII/2015 Tanggal 02 Desember 2015, tentang Pedoman Pembinaan Calon Ahli Keselamatan dan Kesehatan Kerja (K3) Umum maka berikut Silabi yang akan diberikan selama 12 hari atau 120 JP (Jam Pelajaran)</p>
                <br>
                <ul class="list-disc list-inside px-3">
                    <li>Kebijakan K3</li>
                    <li>Dasar-Dasar K3</li>
                    <li>Undang-undang No.1 Tahun 1970</li>
                    <li>Pengawasan Norma Kelembagaan dan Keahlian K3</li>
                    <li>Pengawasan Norma Keselamatan Kerja Listrik</li>
                    <li>Pengawasan Norma Penanggulangan Kebakaran</li>
                    <li>Pengawasan Norma Keselamatan Kerja Konstruksi dan Bangunan</li>
                    <li>Pengawasan Norma Keselamatan Kerja Mekanik</li>
                    <li>Pengawasan Norma Keselamatan Kerja Pesawat Uap dan Bejana Tekan</li>
                    <li>Pengawasan Norma Kesehatan Kerja</li>
                    <li>Pengawasan Norma Bahan Berbahaya</li>
                    <li>Pengawasan Norma SMK3</li>
                    <li>Laporan Kecelakaan Kerja</li>
                    <li>Konsep Dasar K3</li>
                    <li>Analisis Kecelakaan</li>
                    <li>Manajemen Risiko</li>
                    <li>Praktek Kerja Lapangan / Observasi Lapangan</li>
                    <li>Ujian tertulis</li>
                    <li>Seminar</li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Persyaratan Peserta K3 Umum</h4>
            </div>
            <div class="content text-base">
                <p>Sesuai dengan keputusan Dirjen Pembinaan Pengawasan Ketenagakerjaan, Keselamatan dan Kesehatan Kerja (K3) RI No.KEP.69/PPK&K3/XII/2015 Tanggal 02 Desember 2015, tentang Pedoman Pembinaan Calon Ahli Keselamatan dan Kesehatan Kerja (K3) Umum maka berikut Silabi yang akan diberikan selama 12 hari atau 120 JP (Jam Pelajaran)</p>
                <ul class="list-disc list-inside px-3">
                    <li>Mengisi Formulir Pendaftaran</li>
                    <li>Copy Ijazah Minimal D3</li>
                    <li>Copy KTP</li>
                    <li>Surat Keterangan Kerja dari Perusahaan</li>
                    <li>Surat Keterangan Sehat Dari Klinik / Puskesmas</li>
                    <li>Curicculum Vitae ( CV )</li>
                    <li>Menandatangani Fakta Integritas Peserta</li>
                    <li>Scan Foto ukuran 3x4 dan 2x3 ( Background Merah )</li>
                    <li>Memiliki email pribadi aktif di Google ( GMAIL)</li>
                    <li>Memiliki dan dapat menggunakan Laptop/ PC dan Smartphone</li>
                    <li>Memiliki Koneksi Internet yang memadai ( stabil dan kuota cukup )</li>
                    <li>Menginstal Aplikasi Zoom Meeting</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Persyaratan Ahli K3 Umum End -->

    <!-- Fasilitas Training Ahli K3 Umum -->
    <div class="fta-k3-umum p-8 text-white flex flex-col gap-8 md:flex-row">
        <div class="left md:basis-2/4">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Fasilitas Training Ahli K3 Umum</h4>
            </div>
            <div class="content text-base">
                <ul class="list-disc list-inside px-3">
                    <li>Sertifikat Calon Ahli K3 Umum Kemnaker RI</li>
                    <li>SKP (Surat Keterangan Penunjukan) sebagai Ahli K3 dari Kementrian Ketenagakerjaan RI (Jika utusan perusahaan)</li>
                    <li>Kartu Lisensi Ahli K3 (Jika utusan perusahaan)</li>
                    <li>Surat Keterangan Lulus ( SKL ) Dari PJK3 PT Dinamika Candra Sarana</li>
                    <li>E-Modul Materi Ahli K3 Umum</li>
                    <li>E-Modul Peraturan perundang – Undangan K3</li>
                    <li>Kemeja Safety</li>
                    <li>Training Kit</li>
                    <li>Souvenir</li>
                </ul>
            </div>
        </div>
        <div class="right md:basis-2/4">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Instruktur Training</h4>
            </div>
            <div class="content text-base">
                <p>Pemateri yang akan menyampaikan Pembelajaran dalam Pelaksanaan training Calon Ahli K3 umum ini bersumber dari beberapa instruktur Kementrian Ketenagakerjaan R.I dan Disnaker Kota  Setempat yang telah Berpengalaman , serta para Akademisi dan Praktisi yang berpengalaman dan  berkompeten dibidang K3.</p>
            </div>
        </div>
    </div>
    <!-- Fasilitas Training Ahli K3 Umum End -->

    <!-- Investasi Training Ahli K3 Umum -->
    <div class="ita-k3-umum p-8 text-white flex flex-col gap-8 md:flex-row">
        <div class="left md:basis-2/4">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Investasi Training Ahli K3 Umum</h4>
            </div>
            <div class="content text-base">
                <ul class="list-disc list-inside px-3">
                    <li>Personel/Fresh Graduate/Belum kerja Rp 5.000.000,- (Lima Juta Rupiah)</li>
                    <li>Utusan Perusahaan Rp 6.000.000,- ( Enam Juta Rupiah )</li>
                    <li>Note : Biaya di atas belum termasuk Pajak PPN 10% dan PPh 2% (jika diperlukan)</li>
                </ul>
            </div>
        </div>
        <div class="right md:basis-2/4">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Flyer Training :</h4>
            </div>
            <div class="content text-base">
                <img s{{ asset('storage/images/jpg" alt="Flyer Training"') }}>
            </div>
        </div>
    </div>
    <!-- Investasi Training Ahli K3 Umum End -->

    <!-- Klien Kami -->
    <div class="kk p-8 text-white">
        <div class="left">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Klien Kami</h4>
            </div>
            <div class="content text-base">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Klien Kami End -->

    <!-- Info Dan Registrasi -->
    <div class="ir-k3-umum p-8 text-white">
        <div class="left">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Info Dan Registrasi</h4>
            </div>
            <div class="content text-base">
                <h4 class="text-xl">Hubungi Tim Kami :</h4><br>
                <ul class="list-none">
                    <li>WA CENTER 08</li>
                    <li>Email : info@dcstrainingk3.com</li>
                    <li>Website : www.dcstrainingk3.com</li>
                    <li>Office : Graha STIO. Lt 2 No 2f, JL KH Soleh Iskandar – Jalan Baru, Kota Bogor – Jawa Barat</li>
                    <li>Kantor cabang :</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Info Dan Registrasi End -->
</div>

@endsection
