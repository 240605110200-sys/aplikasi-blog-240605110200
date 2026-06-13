<style>
.navbar-custom{
    background:#23364d;
    position:sticky;
    top:0;
    z-index:9999;
    box-shadow:0 2px 12px rgba(0,0,0,.15);
}

.navbar-brand{
    color:white !important;
    font-weight:700;
    font-size:1.7rem;
}

.nav-link{
    color:white !important;
    font-weight:500;
    margin-left:15px;
    transition:.3s;
    position:relative;
}

.nav-link:hover{
    color:#22c55e !important;
}

.nav-link.active{
    color:#22c55e !important;
    font-weight:700;
}

.nav-link.active::after{
    content:'';
    position:absolute;
    bottom:-8px;
    left:0;
    width:100%;
    height:3px;
    background:#22c55e;
    border-radius:10px;
}

.navbar-toggler{
    border:none;
}

.navbar-toggler:focus{
    box-shadow:none;
}
</style>

<nav class="navbar navbar-expand-lg navbar-custom">

<div class="container">

<a class="navbar-brand" href="/">
📰 Sistem Manajemen Blog
</a>

<button
class="navbar-toggler bg-light"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link {{ request()->path() == '/' ? 'active' : '' }}"
href="/">
Beranda
</a>
</li>

<li class="nav-item">
<a class="nav-link
{{ request()->is('artikel') || request()->is('artikel/*') ? 'active' : '' }}"
href="/artikel">
Artikel
</a>
</li>

<li class="nav-item">
<a class="nav-link {{ request()->is('kategori*') ? 'active' : '' }}"
href="/kategori">
Kategori
</a>
</li>

<li class="nav-item">
<a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}"
href="/tentang">
Tentang
</a>
</li>

</ul>

</div>

</div>

</nav>