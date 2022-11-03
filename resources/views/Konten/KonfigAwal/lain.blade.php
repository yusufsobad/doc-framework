<section class="docs-section" id="lain">
    <h2 class="section-heading">Lain-lain</h2>
    <div class="callout-block callout-block-success">
        <h5>Set nama perusahaan</h5>
        <code>define('company', 'namaperusahaan');</code>
        <small><b>namaperusahaan</b> untuk ditampikan pada footer</small>
    </div>
    <div class="callout-block callout-block-success">
        <h5>Set title</h5>
        <code>define('title', 'Nama Perusahaan');</code>
        <small><b>Nama Perusahaan</b> untuk judul yang akan muncul pada SERP .</small>
    </div>

    <div class="callout-block callout-block-success">
        <h5>Set include_pages</h5>
        <code>define('include_pages', true);</code>
        <p> diisi dengan boolean.</p>
        <ol>
            <li><b>true</b> : untuk menggunakan file index.php pada folder _pages secara otomatis.</li>
            <li><b>false</b> : tampilan view harus disetting manual pada <a href="#routing">Routing</a></li>
        </ol>
    </div>

    <div class="callout-block callout-block-success">
        <h5>Set library</h5>
        <p>Library ditempatkan pada folder <b>include/libs</b>. Untuk load apa saja library yang akan digunakan diperlukan konfigurasi seperti
        <code>define('_library', serialize($library_sc));</code> </p>
        <p>Sebelum itu, $library_sc perlu didefinisikan sebagai array, seperti :</p>
        <script src="https://gist.github.com/itaq/9bd67a64c2f7188b5e31505df5c25113.js"></script>
    </div>

    <div class="callout-block callout-block-success">
        <h5>Set tema</h5>
        <p>Digunakan untuk mengatur tema mana yang digunakan sesuai nama folder tema yang ada pada folder <b>theme</b>.</p>
        <code>define('theme', 'namafoldertema');</code>
    </div>
</section>