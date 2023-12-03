@extends('layout.template')
    
    <!-- Navigasi -->
    <nav>
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('home') }}"><b>HOME</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="#">Begin</a>
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

    <!-- Sidebar -->
    <div class="container-side">
        <div id="sidebar">
            <h2>Basic Laravel</h2>
            <nav class="navside">
            <a class="side-link" href="#item-1.1">Persyaratan Sistem<br></a>
            <br>
            <a class="side-link" href="#item-1.2">Langkah Instalasi<br></a>
            <br>
            <a class="side-link" href="#item-1.3">Running Laravel</a>
            </nav>
        </div>
    <!-- End Sidebar -->

    <!-- Konten -->
        <section id="main-content">
            
            <div class="item-1">
                <h1>Ayo Mulai Belajar Laravel !!</h1>

                <div id="item-1.1">
                <h3>Persyaratan Sistem</h3>
                <p><b>1. PHP </b>Pastikan Anda telah menginstal PHP. Untuk mengecek buka terminal dan ketikan kode dibawah, 
                    jika muncul tampilan yang sama maka php telah terinstal di laptop</p>
                    <div class="code-box">
                        <pre>

 C:\Users\Adam Jhansi> php --version
 PHP 8.2.4 (cli) (built: Mar 14 2023 17:54:25) (ZTS Visual C++ 2019 x64)
 Copyright (c) The PHP Group
 Zend Engine v4.2.4, Copyright (c) Zend Technologies</pre>
                    </div>
                    <br>
                <p><b>2. COMPOSER </b>digunakan untuk mengelola dependensi dan instalasi Laravel. 
                        Pastikan Composer terinstal. Buka terminal dan ketik.</p>
                    <div class="code-box">
                        <pre>

C:\Users\Adam Jhansi>composer --version
Composer version 2.6.5 2023-10-06 10:11:52</pre>
                    </div>
                    <p>Jika tidak memiliki Composer, bisa download <a href="https://getcomposer.org/">disini</a></p>
                    <br>
                    <p><b>3. Laragon, XAMPP, atau sejenisnya (opsional) </b>Jika tidak menggunakan server web bawaan PHP, kita dapat menggunakan Laragon, XAMPP, 
                        atau paket sejenisnya untuk menyediakan server lokal dan MySQL.</p>
                    </div>
                        <br>

                <div id="item-1.2">
                <h3>Langkah-langkah Instalasi Laravel</h3>
                <p><b>Instal Laravel menggunakan Composer</b>
                    <br>1. Buka direktori tempat kita akan membuat file laravelnya</p>
                <p>2. Buka terminal atau command prompt pada diterktori yang sudah dituju tersebut dan jalankan perintah berikut</p>
                    <div class="code-box">
                        <pre>

composer create-project laravel/laravel nama-proyek</pre>
                    </div>
                    <br><p>3. Jika sudah selesai lalu masuk ke directory file yang sudah dibuat</p>
                    <div class="code-box">
                        <pre>

C:\Users\Adam Jhansi> cd nama-proyek-laravel</pre>
                    </div>
                    <br><p>4. Lalu buka vs code dengan ketik seperti dibawah</p>
                    <div class="code-box">
                        <pre>

C:\Users\Adam Jhansi\nama-proyek-laravel> code .</pre>
                    </div>
                    <br><p>5. Jika sudah masuk ke vs codenya lalu kita sudah bisa memulai coding laravelnya</p>
                    </div>
                    <img style="height: fit-content"  src="img/ss-laravel.png" alt="laravel">
                    <p>Selamat coding :)</p><br>

                    
                    <div id="item-1.3">
                        <h3>Running Laravel</h3>
                        <p><b>Run dengan terminal</b>
                            <br>1. Pada vs code dengan project laravel sebelumnya, buka terminal</p>
                        <p>2. Ketikan code dibawah pada terminal</p>
                            <div class="code-box">
                                <pre>

        <span class="yellow" >php</span> artisan serve
        <span class="low">// jika berhasil akan muncul tampilan seperti dibawah</span>
        <span class="bg-blue"> INFO </span> Server running on [http://127.0.0.1:8000]. </pre>
                            </div>
                        <p>3. Lalu ctrl + klik bagian url di terminal diatas lalu akan terbuka web laravel kita</p>
                        <p><b>Run dengan XAMPP</b>
                            <br>1. Buka XAMPP dan start Apache serta MySQL</p>
                        <p>2. Buka browser yang kita pakai lalu ketikan http://localhost/nama-proyek</p>
                        <p>3. Dan kita sudah bisa melihat web laravel kita~</p>

                        <!-- trigger modal -->
                        <button class="open-modal-btn bg-success" onclick="openModal()">Sudah Paham?</button>

                        <!-- Modal -->
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <p>Banyak orang berkata bisa, namun hanya sedikit yang dapat membuktikannya.. jadi langsung coba!</p>
                                <button class="close-modal-btn" onclick="closeModal()">close</button>
                            </div>
                        </div>

            </div>
        </section>
                    
    </div>

    <footer class="py-3" style="background-color: #2d2d2d">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Muhammad Adam Jhansi 2023</p></div>
    </footer>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
