@extends('layout.template')

{{-- Navigasi --}}
<nav>
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link text-dark"  href="{{ route('home') }}"><b>HOME</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark"  href="{{ route('basic') }}">Begin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('fitur') }}">Fitur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('kuis') }}">Kuis</a>
        </li>
      </ul>
</nav>

<div class="container mt-5 shadow p-3 mb-5 bg-white rounded">
    
    <div class="text-center my-5">
        <h1 class="fw-bolder">Mulai Kuis?</h1>
        <p class="lead" style="text-align: center">Yang namanya hidup pasti ada tantangan, kalau tantangan kecil kaya gini aja ga berani, gimana mau mulai hidup :)</p>
        <button class="open-modal-btn bg-success" onclick="openModal()">Start</button>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <p>nah bagus, langkah pertama itu berani menghadapi dulu, sisanya berserah diri kepada tuhan</p>
            <a class="close-modal-btn" href="{{ route('soalkuis')}}">start</a>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
