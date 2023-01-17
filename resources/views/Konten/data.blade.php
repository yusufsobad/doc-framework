<article class="docs-article" id="data">
        <section class="docs-section" id="data">
            <h2 class="section-heading">Data</h2>
            <p>Penggunaan koneksi data ini, digunakan perihal insert, delete, dan update data.</p>

            <div class="callout-block callout-block-success">
                <h5>Insert data</h5>
                <code>sobad_db::_insert_table('nama-tabel', array());</code>
                <br> <small> <b>Contoh : </b></small>
                <script src="https://gist.github.com/itaq/1987c3ddffe86ce10088b45f5bfdfffe.js"></script>
            </div>
            <div class="callout-block callout-block-success">
                <h5>Update data</h5>
                <p>Pada menggunakan update, dapat menggunakan 2 cara :
                <ul>
                    <li><code>_update_single</code> : digunakan untuk update data berdasarkan id data yang akan di-update
                    <code>_update_single($id, 'nama-tabel', array());</code>
                    <br> <small> <b> Contoh : </b></small>
                    <script src="https://gist.github.com/itaq/6fbd0d9fb8a89cee4ea7bd7fe6728a1a.js"></script>
                    </li>
                    <li><code>_update_multiple</code> : digunakan untuk update data berdasarkan data yang ada (bukan ID)
                    <code>_update_multiple("data",'nama-tabel', array());</code>
                    <br> <small> <b> Contoh : </b></small>
                    <script src="https://gist.github.com/itaq/c153db3249a1c0133723478edb50e1a1.js"></script>
                    </li>
                </ul>
                
            </div>

            <div class="callout-block callout-block-success">
                <h5>Delete data</h5>
                <code>sobad_db::_delete_single($id,'nama-tabel');</code>
                <br> <small> <b> Contoh : </b></small>
                <script src="https://gist.github.com/itaq/2f31ba23f065671525d112bc2a55c26c.js"></script>
            </div>
        </section>

</article>