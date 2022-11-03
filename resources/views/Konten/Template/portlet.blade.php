<!-- Layout -->
<section class="docs-section" id="portlet">
    <h2 class="section-heading">Portlet</h2>
    <code>_portlet</code>
    <!-- <p>Tampilan navigation bar yang ada di atas. </p> -->
    <div class="callout-block callout-block-success">
        <script src="https://gist.github.com/itaq/7dc4a0315fe9440f78b2bc0a796e8ec9.js"></script>
        <ul>
            <li><b>label</b> : Untuk membuat Text</li>
            <li><b>tool</b> : ——</li>
            <li><b>action</b> : Untuk memunculkan informasi di bagian kanan atas</li>
            <li><b>func</b> : Untuk memanggil Fungsi berikutnya dan di masukkan di content Portlet</li>
            <li><b>data</b> : Data yang akan di berikan ke parameter function</li>
        </ul>
        <hr>
		<h5>Contoh:</h5>
		<img class="my-2" style="max-width: 822px;" src="{{ asset('images/template/portlet.png') }}" alt="">
		<pre><code>$box = array(
    'ID'        => '', //optional
    'label'     => 'Project',
    'tool'      => '',
    'action'    => 'New Project',
    'func'      => '',
    'data'      => ''
)

ob_start();
theme_layout(‘_portlet’,$args);
return ob_get_clean();
		</code></pre>
    </div>
</section>
<!--//section-->