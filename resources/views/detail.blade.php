<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ $artikel->judul }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

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

.article-container{
    margin-top:30px;
    margin-bottom:30px;
}

.article-card{
    background:white;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.article-image{
    width:100%;
    max-height:500px;
    object-fit:cover;
}

.article-body{
    padding:30px;
}

.badge-category{
    background:#e8f1ff;
    color:#2563eb;
    font-size:12px;
    padding:6px 12px;
    border-radius:20px;
}

.article-title{
    font-size:38px;
    font-weight:700;
    color:#1f2937;
    margin-top:15px;
}

.author-box{
    display:flex;
    align-items:center;
    gap:15px;
    margin-top:20px;
    margin-bottom:20px;
}

.author-photo{
    width:60px;
    height:60px;
    border-radius:50%;
    object-fit:cover;
    border:3px solid #12632f;
}

.meta{
    color:#6b7280;
    font-size:14px;
}

.meta{
    color:#6b7280;
    margin-top:15px;
    margin-bottom:20px;
    font-size:14px;
}

.meta span{
    margin-right:20px;
}

.article-content{
    color:#374151;
    line-height:2;
    text-align:justify;
    font-size:17px;
}

.sidebar-card{
    background:white;
    border-radius:10px;
    padding:20px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.sidebar-title{
    font-size:22px;
    font-weight:700;
    margin-bottom:20px;
}

.related-item{
    padding:12px 0;
    border-bottom:1px solid #e5e7eb;
}

.related-item:last-child{
    border-bottom:none;
}

.related-link{
    text-decoration:none;
    color:#1f2937;
    font-weight:600;
}

.related-link:hover{
    color:#2563eb;
}

.back-btn{
    margin-bottom:20px;
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

<div class="container article-container">

<div class="row">

<div class="col-lg-8">

<a href="/"
class="btn btn-success back-btn">

← Kembali ke Beranda

</a>

<div class="article-card">

<img
src="{{ asset('uploads_artikel/'.$artikel->gambar) }}"
class="article-image"
>

<div class="article-body">

<span class="badge-category">

{{ $artikel->kategori->nama_kategori }}

</span>

<h1 class="article-title">

{{ $artikel->judul }}

</h1>

<div class="author-box">

<img
src="{{ asset('uploads_penulis/'.$artikel->penulis->foto) }}"
class="author-photo">

<div>

<div class="fw-bold">
{{ $artikel->penulis->nama_depan }}
{{ $artikel->penulis->nama_belakang }}
</div>

<div class="text-muted">
{{ $artikel->hari_tanggal }}
</div>

</div>

</div>

<hr>

<div class="article-content">

{!! nl2br(e($artikel->isi)) !!}

</div>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="sidebar-card">

<h4 class="sidebar-title">

Artikel Terkait

</h4>

@if(isset($terkait) && count($terkait) > 0)

@foreach($terkait as $t)

<div class="related-item">

<a href="/artikel/{{ $t->id }}"
class="related-link">

{{ $t->judul }}

</a>

</div>

@endforeach

@else

<div class="text-muted">

Belum ada artikel terkait

</div>

@endif

</div>

</div>

</div>

</div>

@include('footer')

</body>
</html>