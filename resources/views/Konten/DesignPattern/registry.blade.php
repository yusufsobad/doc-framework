<article class="docs-article" id="registry-pattern">
    <header class="docs-header">
        <h1 class="section-heading">Registry - Pattern</h1>
        <section class="docs-intro">
            <p>
                    Registry adalah sebuah file yang berlokasi di folder coding/_pages/ dan terletak di setiap folder peran, misalnya PPIC. File registry ini bernama sesuai perannya masing-masing, misalnya <b> ppic.php. </b> <br>
                    Namun sebenarnya penamaan file registry ini berhubungan dengan <a href="#kontrol-auto">control auto include</a> dan <a href="#routing">Routing</a>. Pada file <b>routes.php</b>. Jika menggunakan control auto include, maka file di folder tiap peran harus bernama <b>index.php</b>. dan jika menggunakan manual, nama file harus disesuaikan dengan peran masing-masing.
            </p>
            <div class="callout-block callout-block-success">
                <div class="content">
                    <h5 class="mt-3">Contoh file registry</h5>
                    <script src="https://gist.github.com/naufal10969/bff33a65a4862e580ad6ecb460edac89.js"></script>
                    Bagian penting dari file registry ini adalah yang pertama memasukkan nama class untuk eksekusi routing, kemudian function pertama harus bernama _reg
                    <li> <b>reg_hook("reg_script_head")</b> untuk custom script bagian header</li>
                    <li><b>reg_hook("reg_script_css")</b> untuk load css </li>
                    <li><b>reg_hook("reg_script_js")</b> untuk load js </li>
                    <li><b>reg_hook("reg_script_foot")</b> untuk load custom script bagian footer </li>
                    <li><b>reg_hook("reg_language")</b> untuk load bahasa yang digunakan </li>
                    <li><b>sobad_asset::_sidemenu('namafilemenu');</b> untuk load sidemenu</li>
                    setelah reg selesai, langsung load function _page
                </div>
            </div>
        </section>
        <!--//docs-intro-->
    </header>
</article>
<!--//docs-article-->
