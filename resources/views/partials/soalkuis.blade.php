@extends('layout.template')

    <style>
        /* Gaya CSS untuk tombol dan elemen kuis */
        #quizContainer {
            display: none;
        }

        #exitButton {
            display: none;
            margin-top: 10px;
            background-color: red;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        img {
            width: 80%;
            height: 80%;
        }
    </style>

<!-- Halaman Utama -->
<div class="container mt-5">
    <div id="startPage" class="card">
        <div class="card-header text-center fw-bold" >
            Simple Quiz
        </div>
        <div class="card-body text-center">
            <p style="text-align: center">Hanya teori dasar html, css, dan js</p>
            <button class="btn btn-primary" onclick="startQuiz()">Mulai Kuis</button>
        </div>
    </div>

    <!-- Kontainer Kuis -->
    <div id="quizContainer">
        <div id="questionContainer"></div>
        <button onclick="checkAnswer()">Selanjutnya</button>
    </div>

    <!-- Tombol Keluar -->
    <button class="bg-success" id="exitButton" onclick="exitQuiz()">SELAMAT!</button>
</div>

<script>
    var quizzes = [
        {
            question: "1. Apa output dari program diatas? ",
            image: "img/soal1.png",
            correctAnswer: "7"
        },
        {
            question: "2. Apakah output dari program diatas?",
            image: "img/soal2.png",
            correctAnswer: "3,5"
        },
        // Tambahkan lebih banyak objek kuis sesuai kebutuhan Anda
    ];

    var currentQuizIndex = 0; // Indeks kuis saat ini

    function startQuiz() {
        document.getElementById("startPage").style.display = "none";
        document.getElementById("quizContainer").style.display = "block";
        showQuestion();
    }

    function showQuestion() {
        var questionContainer = document.getElementById("questionContainer");
        var currentQuiz = quizzes[currentQuizIndex];

        // Menampilkan gambar (jika ada)
        if (currentQuiz.image) {
            questionContainer.innerHTML = '<img src="' + currentQuiz.image + '" alt="Gambar Pertanyaan">';
        }

        // Menampilkan pertanyaan dan input teks untuk jawaban
        questionContainer.innerHTML += "<h2>" + currentQuiz.question + "</h2>";
        questionContainer.innerHTML += '<input type="text" id="userAnswer" placeholder="Ketik jawaban Anda">';
    }

    function checkAnswer() {
        var userAnswer = document.getElementById("userAnswer").value.trim().toLowerCase();

        if (userAnswer !== "") {
            var currentQuiz = quizzes[currentQuizIndex];

            if (userAnswer === currentQuiz.correctAnswer) {
                alert("Jawaban Anda benar!");

                // Pindah ke pertanyaan berikutnya hanya jika jawaban benar
                currentQuizIndex++;
                if (currentQuizIndex < quizzes.length) {
                    showQuestion();
                } else {
                    showExitButton();
                }
            } else {
                alert("Jawaban Anda salah. Coba lagi!");
            }
        } else {
            alert("Masukkan jawaban Anda!");
        }
    }

    function showExitButton() {
        document.getElementById("exitButton").style.display = "block";
    }

    function exitQuiz() {
        // Redirect ke halaman lain atau lakukan tindakan lain saat keluar dari kuis
        window.location.href = "home";
    }
</script>

</body>
</html>
