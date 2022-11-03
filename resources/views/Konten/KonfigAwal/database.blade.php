<section class="docs-section" id="database">
    <h2 class="section-heading">Database</h2>
    <p>Pada database, diperlukan beberapa konfigurasi yang perlu diperhatikan.</p>
    <div class="callout-block callout-block-success">
        <h5>Set username</h5>
        <code>define('USERNAME', "root");</code>
        </small><b>root</b> diganti sesuai username yang digunakan pada localhost.</small>
    </div>

    <div class="callout-block callout-block-success">
        <h5>Set password</h5>
        <code>define('PASSWORD', 'pass');</code>
        </small><b>pass</b> diisi dengan password yang digunakan pada localhost.</small>
    </div>

    <div class="callout-block callout-block-success">
        <h5>Set nama database</h5>
        <code>define('DB_NAME', 'namadatabase');</code>
        </small><b>namadatabase</b> diisi sesuai nama database yang akan digunakan.</small>
    </div>

    <div class="callout-block callout-block-success">
        <h5>Set Database</h5>
        <code>$GLOBALS['DB_NAME'] = DB_NAME;</code>
        <small>digunakan untuk menjadikan DB_NAME sebagai variabel, agar bisa dipanggil setelahnya.</small>
        <div class="m-3">
            <script src="https://gist.github.com/itaq/ecc8b4bfa94ca2148789e60c52028ecb.js"></script>
        </div>
        <h5>Set Multiple Database</h5>
        <div class="m-3">
            <script src="https://gist.github.com/itaq/f6a92a1aed1333576b14c6cfcaaf7a5b.js"></script>
        </div>
        <ul>
            <li><b>Penggunaan array setelah pendefinisian database utama digunakan jika memerlukan multiple database.</b></li>
            <li><b>db</b> digunakan untuk menentukan database mana yang akan digunakan. </li>
            <li><b>where</b> digunakan untuk menentukan table mana saja yang akan digunakan. Dengan menggunakan <code>array('table1', 'table2')</code></li>
            <li><b>SCHEMA</b> digunakan untuk menampung konfigurasi multiple database tadi.</li>
        </ul>

    </div>


</section>