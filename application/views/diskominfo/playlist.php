

<style>
    /* Playlist card styling */
    .post-item {
        border: none;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .post-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    /* Thumbnail styling */
    .fbt-post-thumbnail img {
        width: 100%;
        height: auto;
        border-radius: 8px 8px 0 0;
    }

    .video-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 24px;
    }

    /* Caption styling */
    .fbt-post-caption {
        padding: 15px;
    }

    .post-meta {
        color: #777;
        font-size: 12px;
    }

    .post-title a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    .post-title a:hover {
        color: #3498db;
    }
</style>


<!-- Halaman Baru -->
<div class="wrapper" id="features">
    <div class="mainwrap">
      <div class="sectionrow">
        <div class="featsection">
          <div class="xsection__header">
            <h1 class="xsection__title">Playlist</h1>
          </div>
          <div class="news3col">
    <div class="news3col__row">
        <?php foreach ($playlist->result_array() as $h): 

            if ($h['gbr_playlist'] ==''):
                $gbr_playlist = 'no-image.jpg';
            else:
                $gbr_playlist = $h['gbr_playlist'];
            endif;

            $total_video = $this->model_utama->view_where('video',array('id_playlist' => $h['id_playlist']))->num_rows();

            ?>

            <div class="news3col__col">
                <div class="post-item">
                    <div class="fbt-post-thumbnail">
                        <a href="<?php echo base_url("playlist/detail/$h[playlist_seo]"); ?>">
                            <img class="post-thumbnail lazyloaded" src="<?php echo base_url("asset/img_playlist/$gbr_playlist"); ?>" alt="<?php echo $gbr_playlist; ?>" />
                            <span class="video-icon"><i class="fa fa-play"></i></span>
                        </a>
                    </div>
                    <div class="fbt-post-caption">
                        <div class="title-caption text-center pt-3 px-2">
                            <div class="post-meta mb-2">
                                <span class="post-date published">Ada <?php echo $total_video; ?> Video</span>
                            </div>
                            <h3 class="post-title">
                                <a href="<?php echo base_url("playlist/detail/$h[playlist_seo]"); ?>"><?php echo $h["jdl_playlist"]; ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>



    </div>
      </div>

    </div>
      </div>

    </div>
     
  