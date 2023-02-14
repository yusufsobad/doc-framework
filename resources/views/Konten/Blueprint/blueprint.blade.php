<article class="docs-article" id="blueprint">
    <header class="docs-header">
        <h1 class="docs-heading">Blueprint</h1>
        <section class="docs-intro">
            <p>Blueprint digunakan untuk konfigurasi database yang akan digunakan. Pada framework lain seperti CI atau laravel, blueprint ini bisa dianggap sebagai model. Namun pada framework ini, susunan database berbeda dari database biasanya. 
            </p>
        </section>
        <!--//docs-intro-->
    </header>
    <section class="docs-section" id="side-menu">
    <h2 class="section-heading">Table</h2>
    <p>Terdapat berbagai jenis table yang digunakan</p>
    <div class="callout-block callout-block-success">
        <div class="content">
            <ul>
                <li> <h5>Table utama </h5> 
                Table ini digunakan untuk menyimpan data utama dan digunakan untuk mereferensikan data ke table lain.</li>
                <li> <h5>Table meta</h5>
                Table ini berisi beberapa baris data sebagai perpanjangan kolom dari table utama.</li>
                <li> <h5>Table detail</h5>
                Merupakan table yang mendeskripsikan detail dari suatu data dengan mereferensikannya data tertentu</li>
                <li> <h5>Table join</h5>
                Merupakan table yang digunakan untuk menggabungkan table satu, dengan table yang lainnya</li>
        </div>
        <!--//content-->
    </div>

    <h2 class="section-heading">Penggunaan</h2>
    <p>Berikut ini penjelasan penggunaan dari blueprint</p>
    <div class="callout-block callout-block-success">
        <div class="content">
            <ul>
                <li> <h5>Function set_listmeta </h5> 
                Digunakan untuk setting tambahan data pada meta yang digunakan.
                <p>Contoh :</p>
                 <script src="https://gist.github.com/itaq/d8a333a7a36da680c35713a9bb6fbc31.js"></script>
                <ol>
                    <li>nama_var : nama data yang digunakan sebagai pembeda pada table utama</li>
                    <li>meta-.. : nama meta atau kolom perpanjangan dari tabel utama</li>
                </ol>
                </li>
                <li> <h5>Function blueprint</h5>
                Digunakan untuk konfigurasi table utama untuk menghubungkan tabel lain, yang dapat terdiri dari :
                    <ol> 
                        <li> Meta : digunakan untuk menghubungkan table utama dengan table meta
                            <script src="https://gist.github.com/itaq/d8e9428db9a4dd94b232ea4f3e9c3c6e.js"></script>
                        </li>
                        <li> Join : digunakan untuk menghubungkan table utama dengan table lain berdasarkan id 
                            <script src="https://gist.github.com/itaq/c78207dbba4908d56c63fc9c07bcee1a.js"></script>
                        </li>
                        <li> Detail : digunakan untuk menghubungkan table utama dengan table lain berdasarkan kolom-kolom yang digunakan  
                            <script src="https://gist.github.com/itaq/8e9cce5c393891754bab0c7b5f3ac6a0.js"></script>
                        </li>
                    </ol>
                </li>
        </div>
        <!--//content-->
    </div>
    <!--//callout-block-->
    

</section>

</article>
<!--//docs-article-->