<!-- Halaman Baru -->
<div class="wrapper" id="features">
    <div class="mainwrap">
      <div class="sectionrow">
        <div class="featsection">
          <div class="xsection__header">
            <h1 class="xsection__title">Berita Kategori "<?php echo "$rows[nama_kategori]"; ?>"</h1>
          </div>

          <div class="buttonlist">
            <ul>
              <li ><a href="<?= base_url(); ?>kategori/detail/berita-terbaru">Berita Terbaru</a></li>
                            <li ><a href="<?= base_url(); ?>kategori/detail/berita-unggulan">Berita Unggulan</a></li>
                            <li ><a href="<?= base_url(); ?>kategori/detail/pengumuman">Pengumuman</a></li>
                            <li ><a href="<?= base_url(); ?>berita/indeks_berita">Index Berita</a></li>
                            
                          </ul>


          </div>

          <div class="news3col">
          <div class="news3col__row">
    <?php foreach ($beritakategori->result_array() as $r): ?>

    <?php
    $baca = $r['dibaca'] + 1;
    $isi_berita = (strip_tags($r['isi_berita']));
    $isi = substr($isi_berita, 0, 220);
    $isi = substr($isi_berita, 0, strrpos($isi, " "));
    $judul = substr($r['judul'], 0, 33);
    $total_komentar = $this->model_utama->view_where('komentar', array('id_berita' => $r['id_berita']))->num_rows();

    $foto_slide = ($r['gambar'] != '') ? $r['gambar'] : 'no-image.jpg';
    ?>

    <div class="news3col__col">
        <a href="<?= base_url() . $r['judul_seo'] ?>" class="news3col__img">
            <img src="<?= base_url() ?>asset/foto_berita/<?= $foto_slide ?>" alt="<?= $r['judul'] ?>">
        </a>
        <p class="news3col__summary"><?= $r['judul'] ?></p>
        <a href="<?= base_url() . $r['judul_seo'] ?>" class="linkmore" tabindex="0"><span>Lihat Detail</span></a>
    </div>

    <?php endforeach; ?>
</div>
</div><!-- .fbt-index-post-wrap -->

                        <?php echo $this->pagination->create_links(); ?>


                    </div>
          <!-- </div>
					<div class="paging">
			<ul>
				           
                                                                        <li class="active"><a href="#">1</a></li>
                                                                                <li><a href="news4658.html?page=2">2</a></li>
                                                                                <li><a href="news9ba9.html?page=3">3</a></li>
                                                                                <li><a href="newsfdb0.html?page=4">4</a></li>
                                                                                <li><a href="newsaf4d.html?page=5">5</a></li>
                                                                                <li><a href="newsc575.html?page=6">6</a></li>
                                                                                <li><a href="news235c.html?page=7">7</a></li>
                                                                                <li><a href="newsfdfa.html?page=8">8</a></li>
                                                                   
                               
                                                                        <li><a href="newsa99e.html?page=983">983</a></li>
                                                                                <li><a href="news5261.html?page=984">984</a></li>
                                                                   
			</ul>
		</div> -->
	
          
        </div>


      </div>
    </div>
  </div>