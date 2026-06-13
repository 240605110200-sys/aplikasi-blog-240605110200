<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Daftar Kategori</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#eef2f5;
    font-family:'Segoe UI',sans-serif;
    min-height:100vh;
    display:flex;
    flex-direction:column;
}

.card-kategori{
    border:none;
    border-radius:12px;
    transition:.3s;
}

.card-kategori:hover{
    transform:translateY(-5px);
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

<div class="container mt-5">

<h2 class="fw-bold mb-4">

📂 Daftar Kategori

</h2>

<div class="row">

@foreach($kategori as $k)

<div class="col-md-4 mb-4">

<a href="/kategori/{{ $k->id }}"
class="text-decoration-none">

<div class="card shadow-sm card-kategori">

<div class="card-body text-center">

<h4 class="fw-bold">

{{ $k->nama_kategori }}

</h4>

<span class="badge bg-success">

{{ $k->artikel_count }}
Artikel

</span>

</div>

</div>

</a>

</div>

@endforeach

</div>

</div>

@include('footer')


</body>
</html>