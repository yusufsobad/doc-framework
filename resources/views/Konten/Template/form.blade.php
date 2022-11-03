<section class="docs-section" id="form">
	<h2 class="section-heading">Form</h2>
	<p>Template form</p>
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
			<li><b>value</b> sebagai data.</li>
			<li><b>label</b> berfungsi sebagai pelengkap keterangan.</li>
			<li><b>searching</b> bersifat boolean karena menentukan apakah inputan tersebut berupa search atau tidak.</li>
		</ul>
		<hr>
		<h5>Contoh:</h5>
		<img class="my-2" style="max-width: 80;" src="{{ asset('images/template/input.png') }}" alt="">
		<pre><code>$data[] = array(
        'required'		=> false,
        'func'			=> 'opt_input',
        'type'			=> 'text',
        'data'			=> $nama,
        'key'			=> 'name',
        'value'			=> 'Joe Bidden',
        'label'			=> 'input',
        'class'			=> 'input-circle',
        'searching'		=> false
      )
		</code></pre>
	</div>
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Text area</h4>
		<script src="https://gist.github.com/itaq/3c2171a31d627cb7ebfb39643c68d7bf.js"></script>
		<b>rows</b> digunakan untuk menentukan ukuran text area.
		<hr>
		<h5>Contoh:</h5>
		<img class="my-2" style="max-width: 80;" src="{{ asset('images/template/text_area.png') }}" alt="">
		<pre><code> $data[] = array(
        'required'		=> false,
        'func'			=> 'opt_textarea',
        'type'			=> 'text',
        'data'			=> $alamat,
        'key'			=> 'alamat',
        'value'			=> 'Jalan kiri kanan ku lihat pohon cemara',
        'label'			=> 'input',
        'class'			=> 'input-circle',
        'rows'			=> 4
      )
		</code></pre>
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
		<hr>
		<h5>Contoh:</h5>
		<img class="my-2" style="max-width: 80;" src="{{ asset('images/template/select.png') }}" alt="">
		<pre><code>$data[] = array(
        'required'		=> false,
        'func'			=> 'opt_select',
        'type'			=> 'text',
        'data'			=> array(),
        'key'			=> '',
        'value'			=> '',
        'label'			=> 'Select',
        'class'			=> 'input-circle',
        'searching'		=> true,
        'group'			=> false,
        'select'		=> ,
        'button'		=> ,
        'status'		=> 
      )
		</code></pre>
	</div>
	<div class="callout-block callout-block-success">
		<h4 class="alert alert-primary">Select Tags</h4>
		<script src="https://gist.github.com/itaq/e839e9b590dfbc4c2e94d36c87c7385b.js"></script>
		<hr>
		<h5>Contoh:</h5>
		<img class="my-2" style="max-width: 80;" src="{{ asset('images/template/tags.png') }}" alt="">
		<pre><code>$data[] = array(
    'id'		=> '',
    'required'	=> true,
    'func'		=> 'opt_select_tags',
    'data'      => array(),
    'key'       => '',
    'label'		=> 'Tags',
    'class'     => 'input-circle',
  );
		</code></pre>
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
		<hr>
		<h5>Contoh:</h5>
		<img class="my-2" style="max-width: 80;" src="{{ asset('images/template/date_picker.png') }}" alt="">
		<pre><code>$data[] = array(
    'id'		=> '', //optional
    'required'	=> true, //optional
    'func'		=> 'opt_datepicker',
    'key'       => '',
    'label'		=> 'Mulai',
    'class'     => 'input-circle',
    'value'     => '', 
    'status'    => '', 
    'to'        => '', //optional--Key**
    'data'      => '', //optional
    'status2'   => '' //optional
  );
		</code></pre>
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
		<h5>Contoh:</h5>
		<img class="my-2" style="max-width: 80;" src="{{ asset('images/template/radio.png') }}" alt="">
		<pre><code>$data[] = array(
    'required'	=> true/false, //optional
    'func'		=> 'opt_box',
    'type'      => 'radio',
    'key'       => '',
    'label'		=> 'Input',
    'value'     => '', 
    'data'      => array(
                    0 => array(
                        'title'   => 'Laki=laki',
                        'value'   => 'male'
                      ),
                    1 => array(
                      'title'   => 'Perempuan',
                      'value'   => 'female'
                    ),
                   )
  );
		</code></pre>
	</div>
	<div class="callout-block callout-block-success">
		<div class="mb-5">
			<code>ob_start(); theme_layout('sobad_form', $data); return ob_get_clean()</code>
		</div>
	</div>
</section>
<!--//section-->