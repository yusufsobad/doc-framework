<article class="docs-article" id="routing">
    <header class="docs-header">
        <h1 class="docs-heading">Routing</h1>
        <section class="docs-intro">
            <p>Konfigurasi pada routing diatur pada file routes.php dalam folder _routes pada direktori Coding. <b>Coding/_routes/routes.php</b></p>
        </section>
        <!--//docs-intro-->
    </header>
    <section class="docs-section" id="routing">
        <div class="callout-block callout-block-success">
            <div class="content">
                <ul>
                    <p>Routing ini berbentuk array yang terdiri dari 3 hal yaitu home, view, dan page.
                        <br>
                        <li><b>namarouting</b> disesuaikan dengan role (jabatan), yang nantinya juga digunakan untuk memakai hak akses login.</li>
                        <li><b>home</b> berupa boolean (true/false) yang digunakan untuk menentukan apakah page tersebut menjadi homepage/tampilan awal sistem tersebut.</li>
                        <li><b>view</b> digunakan untuk menentukan lokasi include file yang ada di<b> coding/_pages </b>. Jika nama file <i>index.php</i> maka tidak diperlukan lagi. Karena sudah ter-include otomatis</li>
                        <i><small>Apabila tampilan default bernama index.php, maka tidak diperlukan.</small></i>
                        <li><b>page</b> digunakan untuk memanggil class yang akan dijalankan pada halaman.
                    </p>
                    </li>
                </ul>
            </div>
            <!--//content-->
        </div>
        <!--//callout-block-->
        <h5>Contoh Routing jika manual : </h5>
        <script src="https://gist.github.com/itaq/a6237a9827101c7896c00c2e5ff03a39.js"></script> <br> <br>

        <h5>Contoh Routing jika auto include : </h5>
        <script src="https://gist.github.com/naufal10969/2cc005841fc8523d641ea20843127ff0.js"></script>
        <!--//docs-code-block-->
        </div>
        <!--//row-->
    </section>

</article>