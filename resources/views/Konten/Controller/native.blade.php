<section class="docs-section" id="kontrol-native">
    <h4>1. Kontrol PHP Native</h4>
    <p>Pada cara ini, file controller dan view terletak pada suatu direktori yang sama dalam folder _pages</p>
    <div class="callout-block callout-block-success">
        <div class="content">
            Pada <a href="#routing">routing awal</a> tadi, <b>nama_routing</b> diarahkan pada <i>view</i> index.php pada folder peran.
        </div>
    </div>
    <div class="accordion" id="accordion">
        <div class="card mb-2">
            <h2 class="card-header" id="index">
                <button class="btn btn-link" data-toggle="collapse" data-target="#index" aria-expanded="true" aria-controls="index">
                    index.php
                </button>
            </h2>
            <div id="index" class="collapse show" aria-labelledby="index">
                <div class="card-body">
                    <!-- Digunakan sebagai tahap awal halaman. Sebelum itu, perlu memanggil file <b>function.php</b> dengan <i>require</i>. <br> -->
                    <!-- <code>require dirname(__FILE__).'/function.php';</code> <br> -->
                    Function <b>_reg, _page, _script</b> wajib ada pada index.php.
                    <ul>
                        <li>
                            Function _reg digunakan untuk menetapkan bahasa dan side menu yang digunakan <code>reg_hook('reg_language',array());
                                sobad_asset::_sidemenu('nama_menu');</code>
                        </li>
                        <li>
                            Function _page digunakan untuk load tampilan tema yang telah didefiniskan pada <a href="awal">konfigurasi awal</a> tadi.
                        </li>
                        <li>
                            Function _script digunakan untuk memanggil CSS dan JS yang akan digunakan.
                        </li>
                        <li>Apabila memerlukan file yang lain, maka bisa menggunakan prinsip PHP dengan include manual seperti : <code>require 'file_1.php';</code></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="card mb-2">
            <h2 class="card-header" id="function">
                <button class="btn btn-link" data-toggle="collapse" data-target="#function" aria-expanded="true" aria-controls="function">
                    function.php
                </button>
            </h2>
            <div id="function" class="collapse show" aria-labelledby="function">
                <div class="card-body">
                    Memanggil file <b>NamaPeran.php</b> dengan <i>require</i> pada folder view. <br>
                    <code>require 'view/NamaPeran.php';</code>
                </div>
            </div>
        </div>

        <div class="card mb-2">
            <h2 class="card-header" id="files">
                <button class="btn btn-link" data-toggle="collapse" data-target="#files" aria-expanded="true" aria-controls="files">
                    nama_peran.php
                </button>
            </h2>
            <div id="files" class="collapse show" aria-labelledby="files">
                <div class="card-body">
                    Memanggil file <b>include.php</b> dengan <i>require</i> pada folder view. <br>
                    <code>require 'NamaPeran/include.php';</code>
                </div>
            </div>
        </div>

        <div class="card mb-2">
            <h2 class="card-header" id="include">
                <button class="btn btn-link" data-toggle="collapse" data-target="#include" aria-expanded="true" aria-controls="include">
                    include.php
                </button>
            </h2>
            <div id="include" class="collapse show" aria-labelledby="include">
                <div class="card-body">
                    Memanggil file-file yang digunakan dengan <i>require</i> pada folder Peran di dalam folder view. <br>
                    Contoh :
                    <code>require 'file-1.php';</code>
                </div>
            </div>
        </div> -->

        <div class="card mb-2">
            <h2 class="card-header" id="view">
                <button class="btn btn-link" data-toggle="collapse" data-target="#view" aria-expanded="true" aria-controls="view">
                    file_1.php
                </button>
            </h2>
            <div id="view" class="collapse show" aria-labelledby="view">
                <div class="card-body">
                    File ini adalah wadah coding untuk menentukan apa saja yang ada pada suatu halaman. File tersebut dapat diisi dengan <a href="#template">template</a>.<br>
                    Pada file ini, diperlukan konfigurasi object seperti <code>protected static $object = 'nama_class';</code>
                    
                </div>
            </div>
        </div>
    </div>

</section>