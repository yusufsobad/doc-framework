<section class="docs-section" id="table">
    <h2 class="section-heading">Table</h2>
    <p>Untuk membuat tabel diperlukan sebuah function yang bernama <code>sobad_table</code> </p>

    <div class="callout-block callout-block-success">
        <h5 class="mt-2">Tabel Basic</h5>
        <p>Pembuatan tabel sederhana dapat dilakukan dengan memasukkan kode seperti dibawah ini. <i>Kode dibawah ini tidak dapat diganti/disesuaikan</i></p>
        
        <script src="https://gist.github.com/naufal10969/2c497256769e74f1420efafff3e2e875.js"></script>
        Tampilan : <img src="{{ asset('images/template/tabel_basic.png') }}" style="margin-top:5px; max-width: 850px;border-style: solid;" alt="">
    </div>

    <div class="callout-block callout-block-success">
        <h5 class="mt-2">Tabel dengan dropdown search</h5>
        <script src="https://gist.github.com/naufal10969/e557536d03e36fddabbe101388da0163.js"></script>
        <ul>
            <li><b>data</b> : berisi text pencarian</li>
            <li><b>type</b> : data lemparan $_POST[‘type’]</li>
            <li><b>object</b> : Untuk melakukan pemanggilan nama class beda</li>
            <li><b>func</b> : Nama class selain default :: _search</li>
            <li><b>load</b> : DOM pengembalian data ke id :: sobad_portlet</li>
        </ul>
        Tampilan : 
        <img src="{{ asset('images/template/search_dropdown.png') }}" style="margin-top:5px; max-width: 850px;border-style: solid;" alt="">
    </div>

    <div class="callout-block callout-block-success">
        <h5 class="mt-2">Pagination</h5>
        <script src="https://gist.github.com/naufal10969/0fc19ad663dd79d56a4710247c43fe1c.js"></script>
        <ul>
            <li><b>func</b> : model pagination</li>
            <ul>
                <li><b>_pagination</b> : nomor halaman</li>
                <li><b>_scolldown</b> : load page by Scroll</li>
            </ul>
            <li><b>start</b> : nomor halaman active</li>
            <li><b>qty</b> : Jumlah Data</li>
            <li><b>limit</b> : tampilan data per Halaman</li>
            <li><b>type</b> : data lemparan $_POST[‘type’]</li>
        </ul>
        Tampilan : 
        <img src="{{ asset('images/template/halaman.png') }}" style="margin-top:5px; max-width: 850px;border-style: solid;" alt="">

    </div>

    <div class="callout-block callout-block-success">
        <h5 class="mt-2">Advanced Table</h5>
        <script src="https://gist.github.com/naufal10969/c436ff2d07affe05367065d0293bbb98.js"></script>
        <ul>
            <li><b>$data[‘table’][0]</b> : baris table</li>
            <li><b>Index Array (‘No’) </b> : Untuk membuat title kolom</li>
            <li><b>array 0</b> : Text Align</li>
            <li><b>array 1</b> : width</li>
            <li><b>array 2</b> : value / text kolom</li>
            <li><b>array 3</b> : sort by</li>
        </ul>
        Tampilan : 
        <img src="{{ asset('images/template/tabel_advanced.png') }}" style="margin-top:5px; max-width: 850px;border-style: solid;" alt="">
    </div>


</section>