
        <h1 class="docs-heading">Form</h1>
        <section class="docs-intro">
            <p>Penggunaan form menggunakan func <code>sobad_form</code></p>
        </section>
        <!--//docs-intro-->
    </header>

	<section class="docs-section" id="form">
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Input type hidden</h4>
		<script src="https://gist.github.com/itaq/f115edff8557bebdfca0cb52b2fd5d9d.js"></script>
		Bisa di isi sesuai input di HTML
		tambahan :
		<ul>
			<li><b>price</b> : input nominal tanpa decimal</li>
			<li><b>decimal</b> : decimal 1</li>
			<li><b>number</b> : decimal 2</li>
			<li><b>clock</b> : input jam</li>
		</ul>
	</div>
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Input type</h4>
		<script src="https://gist.github.com/itaq/d697fc1dc3f58a790463aff226bd895a.js"></script>
		<ul>
			<li><b>key</b> digunakan sebagai kunci untuk memanggil data (value).</li>
			<li><b>value</b> sebagai data yang ada.</li>
			<li><b>label</b> berfungsi sebagai label inputan.</li>
			<li><b>searching</b> bersifat boolean karena menentukan apakah inputan tersebut berupa search atau tidak.</li>
		</ul>
	</div>
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Text area</h4>
		<script src="https://gist.github.com/itaq/3c2171a31d627cb7ebfb39643c68d7bf.js"></script>
		<b>rows</b> digunakan untuk menentukan ukuran text area.
	</div>
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Select</h4>
		<script src="https://gist.github.com/itaq/d2f5ca8a0c292e867a58ac8f84a316b4.js"></script>
		Jika ingin trigger select <code>data-sobad="{func}" data-load="{id}" data-attribute="{val"}"</code>
		<p>jika <code>'group' => true</code></p>
		<ul>
			<li><b>data</b> : menggunakan array multidimensi</li>
			<li><b>ex</b> : array(‘nama’ ⇒ array(‘a’,’b’,c))</li>
		</ul>
	</div>
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Select Tags</h4>
		<script src="https://gist.github.com/itaq/e839e9b590dfbc4c2e94d36c87c7385b.js"></script>
		<hr>
		<h5>Contoh:</h5>
		<img class="my-2" style="max-width: 80;" src="{{ asset('images/template/tags.png') }}" alt="">
	</div>
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Datepicker</h4>
		<script src="https://gist.github.com/itaq/e08c2bebc65b7e8e110a2934143e70d6.js"></script>
		<div class="mb-5">
			Untuk membuat range data, dapat mengisi :
			<ul>
				<li><b>to</b></li>
				<li><b>data</b></li>
				<li><b>status2</b></li>
			</ul>
		</div>
	</div>
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Radio Button</h4>
		<script src="https://gist.github.com/itaq/0cc1d0b47c2d7740beb241a86fa014b2.js"></script>
		inline : posisi radiobox
		<ul>
			<li><b>false</b> : vertical</li>
			<li><b>true</b> : horizontal</li>
		</ul>
		<hr>
	</div>
	<div class="callout-block callout-block-success">
		<div class="mb-5">
			<code>ob_start(); theme_layout('sobad_form', $data); return ob_get_clean()</code>
		</div>
	</div>
</section>
