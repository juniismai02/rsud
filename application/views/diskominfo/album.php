
<!-- Halaman Baru -->
<div class="wrapper" id="features">
    <div class="mainwrap">
      <div class="sectionrow">
        <div class="featsection">
          <div class="xsection__header">
            <h1 class="xsection__title">Albums</h1>
          </div>
          <div class="news3col">
    <div class="news3col__row">
        <?php foreach ($album->result_array() as $h): 

            if ($h['gbr_album'] ==''):
                $gbr_album = 'no-image.jpg';
            else:
                $gbr_album = $h['gbr_album'];
            endif;

            $total_foto = $this->model_utama->view_where('gallery',array('id_album' => $h['id_album']))->num_rows();

            ?>

            <div class="news3col__col">
                <a href="<?php echo base_url("albums/detail/$h[album_seo]"); ?>" class="news3col__img">
                    <img src="<?php echo base_url("asset/img_album/$gbr_album"); ?>" alt="<?php echo $h['jdl_album']; ?>">
                </a>
                <p class="news3col__summary"><?php echo $h['jdl_album']; ?></p>
                <p style="background-color: #007bff; color: #fff; border-radius: 5px; padding: 5px 10px; display: inline-block;">Ada <?php echo $total_foto; ?>     Foto</p>
                <a href="<?php echo base_url("albums/detail/$h[album_seo]"); ?>" class="linkmore" tabindex="0"><span>Lihat Detail</span></a>
            </div>

        <?php endforeach; ?>
    </div>
</div>


    </div>
      </div>

    </div>
      </div>

    </div>
     
  