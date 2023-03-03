<section class="docs-section" id="kontrol-auto">
    <h4>1. Controller Auto Include</h4>
    <p>Pada cara ini, file controller dan view terletak pada suatu direktori yang berbeda.</p>
    <ul>
        <li>Controller terletak pada folder <b>_pages</b>.</li>
        <li>Sedangkan view terletak pada folder <b>_views</b></li>
    </ul>
    <div class="callout-block callout-block-success">
        <div class="content">
            Pada <a href="#routing">routing awal</a> tadi, <b>nama_routing</b> diarahkan pada <i>view</i> index.php pada folder peran.
        </div>
    </div>
    <div class="accordion" id="accordion">
        <div class="card mb-2">
            <h2 class="card-header" id="index-auto">
                <button class="btn btn-link" data-toggle="collapse" data-target="#index-auto" aria-expanded="true" aria-controls="index-auto">
                    index.php
                </button>
            </h2>
            <div id="index-auto" class="collapse show" aria-labelledby="index-auto">
                <div class="card-body">
                    Digunakan untuk define folder. Contohnya adalah <code>define('NamaPeran', true')</code>
                </div>
            </div>
        </div>

        <div class="card mb-2">
            <h2 class="card-header" id="peran">
                <button class="btn btn-link" data-toggle="collapse" data-target="#peran" aria-expanded="true" aria-controls="peran">
                    peran.php
                </button>
            </h2>
            <div id="peran" class="collapse show" aria-labelledby="peran">
                <div class="card-body">
                    Digunakan sebagai tahap awal halaman. Sebelum itu, perlu memanggil file <b>function.php</b> dengan <i>require</i>. <br>
                    <code>require dirname(__FILE__).'/function.php';</code> <br>
                    Function <b>_reg, _page, _script</b> wajib ada pada peran.php.
                    <ul>
                        <li>
                            Function _reg digunakan untuk menetapkan bahasa dan side menu yang digunakan <code>reg_hook('reg_language',array());
                                sobad_asset::_sidemenu('nama_menu');</code>
                        </li>
                        <li>
                            Function _page digunakan untuk load tampilan tema yang telah didefiniskan pada <a href="#konfigurasi">konfigurasi awal</a> tadi.
                        </li>
                        <li>
                            Function _script digunakan untuk memanggil CSS dan JS yang akan digunakan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card mb-2">
            <h2 class="card-header" id="view">
                <button class="btn btn-link" data-toggle="collapse" data-target="#view" aria-expanded="true" aria-controls="view">
                    file_1.php
                </button>
            </h2>
            <div id="view" class="collapse show" aria-labelledby="view">
                <div class="card-body">
                    Pada file ini, nama file harus sama dengan nama class. <br>
                    Diawali dengan pemanggilan table yang digunakan seperti <code>$protected static $table = 'nama_table';
                    </code> <br>
                    Lalu dilanjutkan memanggil isi dari halaman pada folder _views dengan <code>protected static $loc_view = 'lokasi_view';</code>.
                    Pada file inilah yang digunakan untuk mengatur layout dan head_title.
                </div>
            </div>
        </div>

        <div class="card mb-2">
            <h2 class="card-header" id="loc_view">
                <button class="btn btn-link" data-toggle="collapse" data-target="#loc_view" aria-expanded="true" aria-controls="loc_view">
                    view_1.php
                </button>
            </h2>
            <div id="loc_view" class="collapse show" aria-labelledby="loc_view">
                <div class="card-body">
                    File view ini, menggunakan beberapa templating yang mempunyai fungsi masing-masing. Templating ini mempengaruhi variabel yang digunakan pada file. Variabel yang digunakan harus sesuai.
                    <ul>
                        <li><b>html</b> : digunakan untuk html. </li>
                        <li><b>config</b> : digunakan untuk konfigurasi secara umum. </li>
                        <li><b>modal</b> : digunakan untuk menggunakan modal</li>
                        <li><b>portlet</b> : digunakan untuk menggunakan portlet</li>
                    </ul>
                    Contoh penggunaan :
                    <script src="https://gist.github.com/itaq/0cd9a8adb035c8dc7dbb9bf82459f186.js"></script>
                    <p class="my-2">Apabila menggunakan 2 elemen, maka di dalam file memerlukan 2 variabel.</p>
                    <script src="https://gist.github.com/itaq/7885d76059acddf6b5bc2f7a8f1a3699.js"></script>
                    <div class="callout-block callout-block-success">
                        <div class="content">
                            <p>Penjelasan tiap-tiap elemen template dapat dilihat pada menu <a href="#template">template</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
