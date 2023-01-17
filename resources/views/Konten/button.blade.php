<article class="docs-article" id="table">
        <section class="docs-section" id="button">
            <h2 class="section-heading">Button</h2>
            <p>Tampilan button untuk melakukan suatu action dapat menggunakan beberapa function berikut.</p>
            <div class="callout-block callout-block-success">
                <h5><code>dropdown_button()</code></h5>
                <script src="https://gist.github.com/itaq/6fdb499081a14abb8255b392d41850a3.js"></script>
                <p>Terdapat beberapa <a href="#func-button">function button</a> yang dapat digunakan. </p>
            </div>

            <div class="callout-block callout-block-success" id="func-button">
                <h4>Function button</h4>
                <div class="alert alert-light" role="alert">
                    <h5>Konfigurasi button</h5>
                    <ul>
                        <li>ID      = data yang akan dikirim ke server</li>
                        <li>toggle  = '' // modal</li>
                        <li>func    = function yang akan di panggil</li>
                        <li>load    = id tag yang akan menerima response</li>
                        <li>href    = link href</li>
                        <li>color   = class warna</li>
                        <li>icon    =  class font icon</li>
                        <li>label   = text</li>
                        <li>type    = data POST type</li>
                        <li>alert   = alert notif setelah request</li>
                        <li>class   = class tag</li>
                        <li>onclick = function js</li>
                        <li>status  = data tambahan di dalam tag</li>
                    </ul>
                </div>
                <ul>
                    <li>
                        <h4><code>buat_button($args)</code></h4>
                        <script src="https://gist.github.com/itaq/b5041e9eddeddd77ba9b3fa5ae73c285.js"></script>
                    </li>
                    <li>
                        <h4><code>edit_button($args)</code></h4>
                        <p>Digunakan untuk mengarah ke form yang berada pada modal.</p>
                        <!-- <p>Tombol edit akan mengarah pada function <code>_modal_button($args, $modal)</code>.</p> -->
                        <script src="https://gist.github.com/itaq/68d88914e70412447439438ee75462f5.js"></script>
                    </li>
                    <li>
                        <h4><code>_modal_button($args)</code></h4>
                        <p>Digunakan untuk mengarah ke modal.</p>
                        <script src="https://gist.github.com/itaq/68d88914e70412447439438ee75462f5.js"></script>
                    </li>
                    <li>
                        <h4><code>apply_button($args)</code></h4>
                        <p>Digunakan untuk mengarah ke form yang berada pada modal yang terkhusus pada modal ke-2.</p>
                        <!-- <p>Tombol apply juga akan mengarah pada function <code>_modal_button($args, $modal)</code>. Perbedaannya adalah pada pendefinisian <code>$modal = 2</code></p> -->
                        <script src="https://gist.github.com/itaq/a3353a61df1d38291bbb314e7042846c.js"></script>
                    </li>
                    <li>
                        <h4><code>print_button()</code></h4>
                        <p>Digunakan untuk mencetak sebagai PDF.</p>
                        <script src="https://gist.github.com/itaq/22da3696548d2a46f00de890069bfb99.js"></script>
                    </li>
                    <li>
                        <h4><code>hapus</code></h4>
                        <p>Digunakan untuk menghapus data. Ada 2 function default yang tersedia, yaitu </p>
                        <ul>
                            <li>
                                <b><code>_delete</code></b> : digunakan untuk menghapus data dari database
                                <script src="https://gist.github.com/itaq/6700b8a34e0d263e7b5a93e3f51b6afa.js"></script>
                            </li>
                            <li>
                                <b><code>_trash</code></b>: digunakan untuk memindahkan ke trash (data tidak hilang dari database)
                                <script src="https://gist.github.com/itaq/33196938d4a70126af02c6eb233f41ff.js"></script>
                            </li>
                        </ul>
                        <p>Pada dasarnya, penggunaan hapus_button dengan cara <code>hapus_button($hapus)</code>. Dan penggunaan ini akan menuju ke <code>_click_button</code>.</p>
                    </li>
                </ul>
            </div>
            <div class="callout-block callout-block-success" id="func-button">
                <h4>Button Color</h4>
                <p>Diisi pada <code>'color'</code></p>
                <ul>
                    <p><i class="fa fa-circle" style="color: white;"></i> default </p>
                    <p><i class="fa fa-circle" style="color: blue;"></i> blue</p>
                    <p><i class="fa fa-circle" style="color: green;"></i> green</p>
                    <p><i class="fa fa-circle" style="color: yellow;"></i> yellow</p>
                    <p><i class="fa fa-circle" style="color: red;"></i> red</p>
                </ul>
            </div>
        </section>

</article>