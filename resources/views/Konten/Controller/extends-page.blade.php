<section class="docs-section" id="extends-page">
    <h4>Layout</h4>
    <p>Pada pengaturan halaman atau layout terdapat 2 opsi, yaitu menggunakan <b> extends page </b> atau tidak.</p>
    <div class="callout-block callout-block-success">
        <!-- <h5>Tanpa extends_page</h5>
        <script src="https://gist.github.com/itaq/47cbdfe2bd0770614e2f79e5d8f74438.js"></script>
        <small>Jika tanpa extends page, perlu konfigurasi sidemenu.</small> -->
        <h5 class="mt-3">Pakai extends_page</h5>
        <script src="https://gist.github.com/itaq/81e37b657729e94f223b031aa444fa73.js"></script>
        <small>Tidak perlu konfigurasi side menu, karena di dalam extends page sudah terdapat side menu.</small>
    </div>
    <h5>Konfigurasi konektivitas</h5>
    <div class="callout-block callout-block-success">
        <div class="content">
            <p>Apabila memerlukan beberapa konektivitas, maka diperlukan konfigurasi.</p>
            <ul>
                <li><b>Table database</b> digunakan untuk menyimpan, mengubah, atau menghapus data.
                </li>
                <code>$protected static $table = 'nama_blueprint';</code>
                <li><b>Post</b> digunakan untuk memilih data yang akan digunakan.</li>
                <code>protected static $post = 'nama_var';</code>
                <li><b>Lokasi view</b> digunakan untuk menentukan nama file view yang digunakan sebagai view.</li>
                <code>$protected static $loc_view = 'lokasi_view';</code>
            </ul>
        </div>
    </div>

</section>