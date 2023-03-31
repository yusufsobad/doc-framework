<article class="docs-article" id="component">
    <header class="docs-header">
        <h1 class="docs-heading">Component</h1>
        <section class="docs-intro">
            <p>Untuk menggunakan component diperlukan pemanggilan function <code>component</code>. Namun untuk memanggil function-function lain yang ada di dalam file memerlukan konfigurasi default seperti dibawah ini</p>
			<script src="https://gist.github.com/naufal10969/cc638e98145a40935e154e024ba041eb.js"></script>
			<p><i> pendeklarasian key dapat dilakukan dengan penggunaan variabel diluar key <code>data</code> sehingga di key data cukup memanggil variabel yang sudah dideklarasikan saja.</i></p>
        </section>
        <!--//docs-intro-->
    </header>

	<section class="docs-section">
		<div class="callout-block callout-block-success">
			<h4 class="alert alert-primary">Title Label</h4>
			<p>Ini adalah paket untuk menampilkan title dan data yang akan ditampilkan. function dari title label adalah <code>title_label</code></p>
			<script src="https://gist.github.com/naufal10969/fc3bd024f18c147f1e55601e7af3ca88.js"></script>
			Tampilan:
			<img src="{{ asset('images/template/title-label.png') }}" style="margin-top:5px; max-width: 850px;border-style: solid;" alt="">
		</div>
		<div class="callout-block callout-block-success">
			<h4 class="alert alert-primary">Progress Bar</h4>
			<p>Untuk menampilkan progress bar. Function dari progress bar adalah <code>progress_bar</code></p>
			<script src="https://gist.github.com/naufal10969/bf80a603cfd0d42e64ea6c3ac0bbb0f8.js"></script>
			Tampilan:
			<img src="{{ asset('images/template/progress.png') }}" style="margin-top:5px; max-width: 850px;border-style: solid;" alt="">
		</div>
		<div class="callout-block callout-block-success">
			<h4 class="alert alert-primary">Image Carousel</h4>
			<p>Untuk menampilkan image carousel menggunakan function <code>image_carousel</code></p>
			<script src="https://gist.github.com/itaq/a7b717f160818d08f606d47b5e1b69ad.js"></script>
			<ul>
				<li><b>dots</b> : berupa booelan (true/false) untuk menampilkan navigations dots</li>
				<li><b>data</b> : berisi url image yang akan digunakan</li>
			</ul>
			Tampilan:
			<img src="{{ asset('images/template/carousel.png') }}" style="margin-top:5px; height: 300px;border-style: solid;" alt="">
		</div>
	
	</section>
	<!--//section-->

</article>
<!--//docs-article-->

