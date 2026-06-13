<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sistem Manajemen Blog </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

html{
    scroll-behavior:smooth;
}

body{
    background:#eef2f5;
    font-family:'Segoe UI',sans-serif;
    min-height:100vh;
    display:flex;
    flex-direction:column;
}

.logo-title{
    color:white;
    font-size:24px;
    font-weight:700;
    margin:0;
}

.logo-sub{
    color:#cfd8e3;
    font-size:12px;
}

.main-content{
    margin-top:25px;
}

.article-card{
    background:white;
    border-radius:10px;
    overflow:hidden;
    border:none;
    margin-bottom:25px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.article-image{
    width:100%;
    height:220px;
    object-fit:cover;
}

.article-body{
    padding:20px;
}

.badge-category{
    background:#e8f1ff;
    color:#2563eb;
    font-size:11px;
    padding:5px 10px;
    border-radius:20px;
}

.article-title{
    font-size:30px;
    font-weight:700;
    color:#1f2937;
    text-decoration:none;
}

.article-title:hover{
    color:#2563eb;
}

.meta{
    color:#6b7280;
    font-size:13px;
    margin-top:10px;
    margin-bottom:15px;
}

.meta span{
    margin-right:15px;
}

.article-text{
    color:#6b7280;
    line-height:1.8;
    text-align:justify;
}

.btn-read{
    background:#22c55e;
    border:none;
    border-radius:20px;
    padding:8px 18px;
    color:white;
    font-size:13px;
    text-decoration:none;
}

.btn-read:hover{
    color:white;
}

.sidebar-card{
    background:white;
    border-radius:10px;
    padding:20px;
    box-shadow:0 2px 8px rgba(8, 95, 189, 0.08);
}

.sidebar-title{
    font-size:22px;
    font-weight:700;
    margin-bottom:20px;
}

.author-photo{
    width:40px;
    height:40px;
    border-radius:50%;
    object-fit:cover;
    border:2px solid #e5e7eb;
}

.kategori-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:10px 12px;
    text-decoration:none;
    color:#374151;
    border-radius:8px;
    margin-bottom:8px;
}

.kategori-item:hover{
    background:#22c55e;
    color:white;
}

.count{
    background:#e5e7eb;
    padding:3px 10px;
    border-radius:15px;
    font-size:12px;
}

.footer{
    background:#23364d;
    color:white;
    text-align:center;
    padding:18px;
    margin-top:auto;
    font-size:15px;   
}

</style>

</head>

<body>

@include('navbar')

<div class="container main-content">

<div class="row">

<div class="col-lg-8" id="artikel">

@foreach($artikel as $a)

<div class="article-card">

<img
src="{{ asset('uploads_artikel/'.$a->gambar) }}"
class="article-image"
>

<div class="article-body">

<span class="badge-category">

{{ $a->kategori->nama_kategori }}

</span>

<h2 class="mt-3">

<a href="/artikel/{{$a->id}}"
class="article-title">

{{ $a->judul }}

</a>

</h2>

<div class="meta">

<div class="d-flex align-items-center gap-2">

    <img
    src="{{ asset('uploads_penulis/'.$a->penulis->foto) }}"
    class="author-photo"
    alt="Penulis">

    <span>
        {{ $a->penulis->nama_depan }}
        {{ $a->penulis->nama_belakang }}
    </span>

</div>

<span>
📅 {{ $a->hari_tanggal }}
</span>

</div>

<p class="article-text">

{{ \Illuminate\Support\Str::limit(strip_tags($a->isi),200) }}

</p>

<a href="/artikel/{{$a->id}}"
class="btn-read">

Baca Selengkapnya →

</a>

</div>

</div>

@endforeach

</div>

<div class="col-lg-4">

<div class="sidebar-card" id="kategori">

<h4 class="sidebar-title">

Kategori Artikel

</h4>

<a href="/" class="kategori-item">

Semua Artikel

<span class="count">

{{ $artikel->count() }}

</span>

</a>

@foreach($kategori as $k)

<a href="/kategori/{{ $k->id }}"
class="kategori-item">

{{ $k->nama_kategori }}

<span class="count">

{{ $k->artikel_count ?? 0 }}

</span>

</a>

@endforeach

</div>

</div>

</div>

</div>

<div class="container mt-5" id="tentang">

<div class="card border-0 shadow-sm">

<div class="card-body p-4">

<h3 class="fw-bold mb-3">

Tentang Website

</h3>

<p>

Sistem Manajemen Blog (CMS) merupakan aplikasi blog
yang dibangun menggunakan Laravel 9 dan MySQL.

</p>

<p>

Website ini menampilkan artikel, kategori, penulis,
dan halaman detail artikel yang terintegrasi dengan
database CMS.

</p>

<p>

Aplikasi ini dibuat untuk memenuhi tugas
Ujian Akhir Semester (UAS) Mata Kuliah
Pemrograman Web.

</p>

</div>

</div>

</div>

@include('footer')

</body>
</html>