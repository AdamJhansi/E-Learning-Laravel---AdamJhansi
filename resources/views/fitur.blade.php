@extends('layout.template')

    <!-- Navigasi -->
    <nav>
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('home') }}"><b>HOME</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="{{ route('basic') }}">Begin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Fitur</a>
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
            <h2>Fitur Laravel</h2>
            <nav class="navside">
            <a class="side-link" href="#item-1">Routing<br></a>
            <br>
            <a class="side-link" href="#item-2">Eloquent ORM<br></a>
            <br>
            <a class="side-link" href="#item-3">Blade Templating Engine <br></a>
            <br>
            <a class="side-link" href="#item-4">Authentication and Authorization<br></a>
            <br>
            <a class="side-link" href="#item-5">Migrations<br></a>
            <br>
            <a class="side-link" href="#item-6">Artisan Command-Line Tool<br></a>
            <br>
            <a class="side-link" href="#item-7">Validation<br></a>
            <br>
            <a class="side-link" href="#item-8">Middleware<br></a>
            <br>
            <a class="side-link" href="#item-9">Caching<br></a>
            <br>
            <a class="side-link" href="#item-10">E-mail Sending<br></a>
            <br>
            <a class="side-link" href="#item-11">Queues and Jobs<br></a>
            <br>
            <a class="side-link" href="#item-12">Events and Listeners<br></a>
            
        
            </nav>
        </div>
    <!-- End Sidebar -->

    <!-- Konten -->
        <section id="main-content">
            
            <div>
                <h1>Fitur-Fitur Laravel</h1>

                <div id="item-1">
                <h4>1. Routing</h4>
                <p>Laravel memiliki sistem routing yang kuat yang memungkinkan programer mendefinisikan rute URL dengan mudah. 
                    Kamu dapat menentukan rute untuk mengarahkan permintaan HTTP ke tindakan (controller) yang sesuai. 
                    Ini memisahkan logika rute dari tindakan yang dilakukan, sehingga membuat kode lebih terstruktur dan mudah dipelihara.</p>
                    <br>
                </div>

                <div>
                <div id="item-2">
                <h4>2. Eloquent ORM</h4>
                <p>Eloquent adalah sistem ORM (Object-Relational Mapping) yang terintegrasi dengan Laravel. Fitur ini memungkinkan programer untuk berinteraksi dengan basis data menggunakan objek dan model. <br>
                    Eloquent memudahkanmu melakukan operasi CRUD (Create, Read, Update, Delete) pada tabel basis data tanpa menulis kueri SQL manual. Eloquent juga menyediakan fitur-fitur seperti relasi antar model, penyaringan (filtering), dan pengurutan data.</p>
                    <br>
                </div>

                <div id="item-3">
                <h4>3. Blade Templating Engine</h4>
                <p>Laravel menggunakan Blade sebagai mesin templatingnya, yang memungkinkan programer untuk membuat tampilan HTML yang dinamis
                     dengan mudah. Kamu bisa menggunakan sintaks Blade yang mudah dipahami untuk menghasilkan tampilan yang dinamis, serta mema
                     sukkan kondisi, perulangan, dan konten lainnya.</p>
                    <br>
                </div>
                
                <div id="item-4">
                <h4>4. Authentication and Authorization</h4>
                <p>Laravel menyediakan sistem autentikasi bawaan yang mudah digunakan. Programer dapat mengonfigurasi autentikasi pengguna dengan hanya beberapa baris kode. Selain itu, Laravel juga mendukung otorisasi dengan cara yang terintegrasi dengan autentikasi, sehingga kamu bisa mengendalikan akses pengguna ke berbagai bagian aplikasi.</p><br>
                </div>
                
                <div id="item-5">
                <h4>5. Migrations</h4>
                <p>Migrations dalam Laravel memungkinkan programer mengelola struktur basis data menggunakan kode. Kamu bisa membuat dan mengubah tabel serta kolom menggunakan file migrasi. Hal ini memungkinkan tim bekerja bersama dengan mudah dan menjaga konsistensi skema basis data dalam pengembangan berbagai lingkungan.</p><br>
                </div>
                
                <div id="item-6">
                <h4>6. Artisan Command-Line Tool</h4>
                <p>Artisan adalah alat baris perintah yang kuat yang disertakan dengan Laravel. Dengan Artisan, kamu bisa melakukan berbagai tugas, seperti membuat model, kontroler, migrasi basis data, menjalankan pengujian, dan banyak lagi.</p><br>
                </div>
                
                <div id="item-7">
                <h4>7. Validation</h4>
                <p>Laravel menyediakan sistem validasi yang kuat untuk memvalidasi data yang masuk. Aturan validasi untuk setiap input form dapat dilakukan dengan mudah.</p> <br>
                </div>

                <div id="item-8">
                <h4>8. Middleware</h4>
                <p>Middleware adalah lapisan perantara antara permintaan masuk dan tindakan yang dijalankan. Middleware dalam Laravel memungkinkan programer menjalankan kode sebelum atau sesudah tindakan, seperti otentikasi, validasi, atau manipulasi permintaan. Fitur ini mempermudah pengembangan berbagai aspek seperti keamanan dan pengolahan data sebelum tindakan dilakukan.</p><br>
                </div>
                
                <div id="item-9">
                <h4>9. Caching</h4>
                <p>Laravel memiliki sistem caching yang efisien untuk meningkatkan kinerja aplikasi. Hal ini memungkinkanmu menyimpan hasil query basis data atau hasil perhitungan ke dalam cache untuk menghindari pemrosesan berulang yang mahal secara komputasi.</p><br>
                </div>
                
                <div id="item-10">
                <h4>10. E-mail Sending</h4>
                <p>Laravel menyediakan antarmuka yang mudah digunakan untuk mengirim email. Kamu dapat mengirim email dengan berbagai driver seperti SMTP, mailgun, sendmail, dan lain-lain. Fitur ini sangat membantu dalam mengatur notifikasi dan komunikasi dengan pengguna.</p><br>
                </div>
                
                <div id="item-11">
                <h4>11. Queues and Jobs</h4>
                <p>Fitur lain dari Laravel adalah queues dan jobs yang memungkinkan programer menjalankan tugas yang memerlukan waktu lama atau berat di latar belakang. Kamu bisa mengirim email, memproses gambar, atau melakukan tugas-tugas lainnya secara asinkron.<br>
                </div>
                
                <div id="item-12">
                <h4>12. Events and Listeners</h4>
                <p>Dengan fitur events dan listeners pada Laravel, kamu bisa menghubungkan berbagai bagian aplikasi yang memerlukan reaksi terhadap peristiwa tertentu. Sebagai contoh, kamu bisa membuat listener untuk merespon perubahan status pesanan dengan mengirim email konfirmasi.</p><br>
                </div>

            </div>

        </section>
                    
    </div>

    <footer class="py-3" style="background-color: #2d2d2d">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Muhammad Adam Jhansi 2023</p></div>
    </footer>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
