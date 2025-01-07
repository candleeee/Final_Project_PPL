@extends('layouts.main')

@include('partials.navbar')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background-image: url('{{ asset('assets/img/klinik.jpg') }}'); background-size: cover; background-position: center top;">
    <div class="container">
        <h1 style="color: rgb(255, 255, 255);">DOKTER GIGI HADI</h1>
        <h2 style="color: white;">Selamat Datang</h2>

        <a href="/antrian" class="btn-get-started scrollto">Ambil Antrian</a>
    </div>
</section><!-- End Hero -->


<main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Sistem Antrian Online</h3>
                        <p>
                            Ini adalah Sistem Antrian dimana setiap pengunjung dapat
                            mengambil antrian untuk dapat melanjutkan ke tahap selanjutnya
                        </p>

                        <div class="text-center">

                            <a href="/antrian" class="more-btn">Ambil Antrian <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-lg-0">
                                    <i class="bx bx-child"></i>
                                    <h4>Pencegahan</h4>
                                    <p>meliputi pembersihan karang gigi (scaling & polishing) untuk menghilangkan plak serta fluoride treatment yang memperkuat enamel guna mencegah kerusakan gigi. Selain itu, sealant gigi sering digunakan sebagai lapisan pelindung pada gigi geraham anak-anak untuk mencegah gigi berlubang</p>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-lg-0">
                                    <i class="bx bx-dna"></i>
                                    <h4>Restoratifi</h4>
                                    <p>menawarkan layanan seperti tambal gigi untuk memperbaiki kerusakan kecil hingga crown dan bridge untuk menggantikan gigi yang rusak atau hilang. Layanan ini juga mencakup inlay dan onlay, yang dirancang untuk memperbaiki kerusakan lebih besar tanpa harus mencabut gigi</p>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-lg-0">
                                    <i class="bx bxs-first-aid"></i>
                                    <h4>Endodontik</h4>
                                    <p>menyediakan perawatan saluran akar (root canal) yang membersihkan dan menutup akar gigi yang terinfeksi, sehingga gigi dapat diselamatkan tanpa perlu dicabut.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-lg-0">
                                        <i class="bx bxs-clinic"></i>
                                        <h4>Perawatan Gigi Gigi Sensitif</h4> <!-- Nama layanan yang diinginkan -->
                                        <p>Perawatan untuk mengurangi rasa sakit pada gigi yang sensitif, dengan menggunakan pasta gigi khusus dan prosedur yang tepat untuk mengurangi ketidaknyamanan pada gigi yang mudah terasa sakit saat terkena makanan atau minuman dingin, panas, atau manis.</p>
                                     </div>
                                </div>
                                <div class="col-lg-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-lg-0">
                                        <i class="bx bx-plus-medical"></i>
                                        <h4>Periodontal</h4>
                                        <p>menawarkan pembersihan mendalam (scaling dan root planing) serta operasi gusi guna mengatasi radang dan infeksi parah</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-lg-0">
                                        <i class="bx bxs-shield-plus"></i>
                                        <h4>Prostodontik</h4>
                                        <p> mencakup pemasangan gigi palsu, baik lepasan maupun permanen, serta implan gigi yang ditanam di rahang sebagai pengganti akar gigi alami</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-lg-0">
                                        <i class="bi bi-magic" style="font-size: 30px;"></i> <!-- Menambahkan ukuran font jika diperlukan -->
                                        <h4>Estetika Gigi</h4>
                                        <p>untuk memperbaiki posisi gigi yang tidak rata atau berjejal dengan menggunakan behel atau alat transparan seperti Invisalign</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

        </div>
    </section><!-- End Why Us Section -->



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="fas fa-user-md"></i>
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Doctors</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="far fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Departments</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-flask"></i>
                        <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Research Labs</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Awards</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

<!-- ======= Jadwal Praktek Dokter Section ======= -->
<section id="dokter" class="jadwal-praktek">
    <div class="container">
        <div class="section-title">
            <h2>Jadwal Praktek Dokter</h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Dokter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin</td>
                            <td>17:00 - 21:00</td>
                            <td>Dr. Hadi</td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td>17:00 - 21:00</td>
                            <td>Dr. Hadi</td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td>17:00 - 21:00</td>
                            <td>Dr. Hadi</td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td>17:00 - 21:00</td>
                            <td>Dr. Hadi</td>
                        </tr>
                        <tr>
                            <td>Jumat</td>
                            <td>17:00 - 21:00</td>
                            <td>Dr. Hadi</td>
                        </tr>
                        <tr>
                            <td>Sabtu & Minggu/td>
                            <td>Sesuai Janji</td>
                            <td>Dr. Hadi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section><!-- End Jadwal Praktek Dokter Section -->




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Hubungi</h2>
            </div>
        </div>



        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi / Tempat:</h4>
                            <p>JL. Margorejo No.1D no 75d, Margorejo, Kec. Wonocolo, Surabaya, Jawa Timur </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>contact@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Hubungi</h4>
                            <p>0813-5784-0044</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Keluhan"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Detail Pesan"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection

@include('partials.footer')
