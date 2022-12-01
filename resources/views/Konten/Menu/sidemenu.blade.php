<section class="docs-section" id="side-menu">
    <h2 class="section-heading">Side Menu</h2>
    <p>Setiap session user memiliki side menu masing-masing yang berbeda. Konfigurasi menu ini terletak pada folder <b>Coding/_sidemenu</b> Maka dari itu perlu beberapa konfigurasi</p>
    <div class="callout-block callout-block-success">
        <div class="content">
            <ul>
                <p>Konfigurasi ini juga berupa array, maka dari itu perlu inisiasi array terlebih dahulu untuk menggunakannya. Terdapat 5 hal pada array, yaitu
                    <br>
                    <li><b>status</b> untuk menentukan apakah halaman tersebut yang akan diakses pertama kali atau bukan. Diisi 'active' bila menjadi halaman pertama yang diakses. Jika tidak, tidak diisi.</li>
                    <li><b>icon</b> digunakan untuk mengambil icon mana yang akan dipakai. List icon dapat dilihat pada <a href="/icons">Daftar Icons</a></li>
                    <li><b>label</b> digunakan sebagai nama side menu.</li>
                    <li><b>func</b> digunakan untuk memanggil function yang akan dijalankan. Pada nilai function ini, terdapat 3 macam penggunaannya :</p>
                    <ol>
                        <li><b>nama_class</b> : digunakan untuk memanggil class yang akan digunakan.</li>
                        <li><b>#</b> : digunakan sebagai menu yang tidak memerlukan pemanggilan class.</li>
                        <li><b>''</b> atau string kosong : digunakan untuk menu yang disable. </li>
                    </ol>
                </li>
                <li><b>child</b> diisi dengan <code>null</code> apabila side menu tidak memerlukan child menu. Jika membutuhkan child menu, maka nilai child adalah konfigurasi sidemenu.
                </li>
                <!-- <code class="json hljs">$accounting = self::_getSidemenu('child menu.accounting');</code><br>
                <small>$self digunakan untuk menunjuk sebuah objek yang bersifat statis yang berada pada folder <b>child menu</b></small> -->
                </p>
            </ul>
        </div>
        <!--//content-->
    </div>
    <!--//callout-block-->
    <p>Konfigurasi side menu :</p>
    <script src="https://gist.github.com/itaq/cecde72bebe20bf5d392c77a4abeb531.js"></script>

</section>
<!--//section-->