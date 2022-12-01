<article class="docs-article" id="konfigurasi">
    <header class="docs-header">
        <h1 class="docs-heading">Konfigurasi Awal</h1>
        <p>Konfigurasi awal ini dilakukan pada file <b>defined.php</b> pada folder config dalam direktori include.<small><b>include/config/defined.php</b></small></p>
    </header>
    @include('Konten.KonfigAwal.database')
    @include('Konten.KonfigAwal.url')
    @include('Konten.KonfigAwal.prefix')
    @include('Konten.KonfigAwal.language')
    @include('Konten.KonfigAwal.lain')
</article>