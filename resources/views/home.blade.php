@extends('layout.template')
    <!-- Navigasi -->
    <nav>
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><b>HOME</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark "  href="{{ route('basic') }}">Begin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="{{ route('fitur') }}">Fitur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="{{ route('kuis') }}">Kuis</a>
            </li>
          </ul>
    </nav>
    <!-- End Navigasi -->

        <!-- Page header with logo and tagline-->
        <header class="py-5 border-bottom mb-4" >
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Selamat Datang!</h1>
                    <p class="lead" style="text-align: center">Laravel - Framework php</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <video controls class="card-img-top" width="50%" height="50%">
                            <source src="video/laravel-100s.mp4" type="video/webm" />
                            Browsermu tidak mendukung tag ini, upgrade donk!
                          </video>
                        <div class="card-body">
                            <div class="small text-muted"></div>
                            <h2 class="card-title">Sedikit Pengenalan</h2>
                            <p class="card-text">Laravel merupakan framework PHP yang open-source dan berisi banyak modul dasar untuk mengoptimalkan kinerja PHP dalam pengembangan aplikasi web, apalagi PHP adalah bahasa pemrograman yang dinamis dan Laravel disini bisa bertindak untuk membuat web development lebih cepat, lebih aman, dan lebih simpel.</p>
                            {{-- <a class="btn btn-dark" href="#!">Read more →</a> --}}
                        </div>
                    </div>
                    
                    <div class="card mb-4">
                            <img class="card-img-top" src="img/laravel.jpg" alt="..." /></img>
                        <div class="card-body">
                            <div class="small text-muted"></div>
                            <h2 class="card-title">Dokumentasi</h2>
                            <p class="card-text">Semua tentang laravel dapat kita lihat di Website laravelnya langsung.</p>
                            <a class="btn btn-dark" href="https://laravel.com/">Read more →</a>
                        </div>
                    </div>

                    {{-- <div class="container text-center">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="https://laravel.com/"><img class="card-img-top" src="img/laravel.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2023</div>
                                    <h2 class="card-title h4">Dokumentasi</h2>
                                    <p class="card-text">Semua tentang laravel dapat kita lihat di Website laravelnya langsung.</p>
                                    <a class="btn btn-dark" href="#!">Read more →</a>
                                </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x400/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2023</div>
                                    <h2 class="card-title h4">Post Titlaaaaaae</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-dark" href="#!">Read more →</a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div> --}}

                </div>

                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-dark" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!" style="color:black;">Web Design</a></li>
                                        <li><a href="#!" style="color:black;">HTML</a></li>
                                        <li><a href="#!" style="color:black;">PHP</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!" style="color:black;">JavaScript</a></li>
                                        <li><a href="#!" style="color:black;">CSS</a></li>
                                        <li><a href="#!" style="color:black;">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Model View Control(MVC)</div>
                        <div class="card-body" style="text-align: justify"><b>Model (Model):</b> bagian yang mengelola data atau yang berhubungan dengan database. <b>'app/Models'</b><br>
                            <br><b>View (Tampilan):</b> bagian yang akan menyajikan tampilan desain dan informasi kepada pengguna. <b>'resources/views'</b><br>
                            <br><b>Controller (Kontroler):</b> bagian yang menghubungkan model dan view dalam setiap proses request dari user. <b>'app/Http/Controllers'</b> <br>
                            <br>Jadi, secara singkat, konsep MVC membagi aplikasi menjadi tiga bagian utama: model untuk data, tampilan untuk presentasi, dan kontroler untuk mengatur interaksi antara keduanya. Ini membantu pengembang membuat kode yang lebih mudah dipahami, dikelola, dan diperbarui.</div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Cara Kerja MVC</div>
                        <div class="card-body" style="text-align: justify">1. Bagian View melakukan permintaan informasi agar dapat ditampilkan kepada pengguna. <br>
                            <br>2. Kemudian, permintaan diterima oleh Controller dan dikirimkan ke bagian Model untuk diproses. <br>
                            <br>3. Informasi yang diterima di bagian Model akan dioleh dan dicari data informasinya ke dalam database. <br>
                            <br>4. Selanjutnya, Model memberikan kembali informasi yang telah didapatkan pada Controller agar hasilnya dapat ditampilkan pada View. <br>
                            <br>5. Controller mengambil hasil olahan yang dilakukan pada bagian Model serta menata hasil olahan pada View.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5" style="background-color: #2d2d2d">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Muhammad Adam Jhansi 2023</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
