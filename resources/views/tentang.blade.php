<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tentang - Sistem Manajemen Blog</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#eef2f5;
    font-family:'Segoe UI',sans-serif;
    min-height:100vh;
    display:flex;
    flex-direction:column;
}

.content{
    flex:1;
}

.about-card{
    background:white;
    border:none;
    border-radius:15px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
    overflow:hidden;
}

.profile-img{
    width:180px;
    height:180px;
    object-fit:cover;
    border-radius:50%;
    border:5px solid #143d23;
}

.title{
    font-size:38px;
    font-weight:700;
    color:#1f2937;
}

.subtitle{
    color:#6b7280;
}

.tech-badge{
    background:#22c55e;
    color:white;
    padding:8px 15px;
    border-radius:20px;
    margin:5px;
    display:inline-block;
}

.info-label{
    font-weight:700;
    color:#23364d;
}

.footer{
    background:#23364d;
    color:white;
    text-align:center;
    padding:18px;
    margin-top:auto;
}

</style>

</head>

<body>

@include('navbar')

<div class="container py-5 content">

<div class="card about-card">

<div class="card-body p-5">

<div class="row align-items-center">

<div class="col-md-4 text-center">

<img
src="{{ asset('foto/profil.jpg') }}"
class="profile-img"
alt="Foto Profil">

</div>

<div class="col-md-8">

<h1 class="title">
Tentang Proyek
</h1>

<p class="subtitle">
Website CMS Blog berbasis Laravel untuk memenuhi tugas UAS Pemrograman Web.
</p>

<hr>

<p>
<span class="info-label">Nama :</span>
Muhammad Rafiul Kholid
</p>

<p>
<span class="info-label">NIM :</span>
240605110200
</p>

<p>
<span class="info-label">Program Studi :</span>
Teknik Informatika
</p>

<p>
<span class="info-label">Mata Kuliah :</span>
Pemrograman Web
</p>

<p>
<span class="info-label">Deskripsi :</span>
Sistem Manajemen Blog (CMS) ini digunakan untuk mengelola artikel, kategori, dan penulis. Sistem dibangun menggunakan framework Laravel dengan menerapkan konsep MVC serta database MySQL.
</p>

<h5 class="mt-4">
Teknologi yang Digunakan
</h5>

<div class="mt-3">

<span class="tech-badge">Laravel 9</span>

<span class="tech-badge">PHP 8</span>

<span class="tech-badge">MySQL</span>

<span class="tech-badge">Bootstrap 5</span>

<span class="tech-badge">MVC</span>

</div>

<a href="/"
class="btn btn-success mt-4">

← Kembali ke Beranda

</a>

</div>

</div>

</div>

</div>

</div>

@include('footer')

</body>
</html>