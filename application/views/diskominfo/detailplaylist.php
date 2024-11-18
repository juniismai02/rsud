<style>
    /* Video card styling */
    .fbt_magazine-blog-post {
        border: none;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .fbt_magazine-blog-post:hover {
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

    .post-excerpt {
        color: #555;
        font-size: 14px;
    }

    .post-tag {
        background-color: #3498db;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
        font-weight: bold;
    }

    .post-tag i {
        margin-left: 5px;
    }
</style>

<div class="wrapper">
        <div class="mainwrap">
            <div class="sectionrow">
                <div class="minidashboard">
                    <div class="minidashboard__body" style="display: flex; flex-wrap: wrap">
                        <!-- Widget Statistik -->
                        <?php $this->load->view(template().'/widget/berita-popular'); ?>
                        <!-- Kolom kanan (Berita) -->
                        <div class="news3col__col" style="flex: 2; order: 1; width: 100%">
                            <div class="leader">
                                <div class="leader__label">
                                    <div class="xlabel"><span>Semua Video "<?php echo "$rows[jdl_playlist]"; ?>"</span></div>
                                </div>

                                <div class="blog-posts fbt-index-post-wrap">

                                <div class="blog-posts fbt-index-post-wrap">

<?php
    foreach ($detailplaylist->result_array() as $r):
        $lihat = $r['dilihat']+1;
        $judull = substr($r['jdl_video'], 0, 33);
        $isi_berita = (strip_tags($r['keterangan']));
        $isi = substr($isi_berita, 0, 130);
        $isi = substr($isi_berita, 0, strrpos($isi, " "));
        $total_komentar = $this->model_utama->view_where('komentarvid', array('id_video' => $r['id_video']))->num_rows();
?>
        <div class='fbt_magazine-blog-post hentry fbt-index-post row align-items-center justify-content-between'>
            <div class='col-xl-6 col-md-5'>
                <div class='fbt-post-thumbnail'>
                    <a href='<?php echo base_url(); ?>playlist/watch/<?php echo $r["video_seo"]; ?>'>
                        <?php
                        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $r['youtube'], $match)):
                            echo "<img alt='' class='post-thumbnail lazyloaded' src='https://img.youtube.com/vi/" . $match[1] . "/0.jpg'>";
                        endif;
                        ?>
                        <span class='video-icon'><i class='fa fa-play'></i></span>
                    </a>
                </div>
            </div>
            <div class='col-xl-6 col-md-7'>
                <div class='fbt-post-caption mt-3 mt-md-0'>
                    <h3 class='post-title'>
                        <a href='<?php echo base_url(); ?>playlist/watch/<?php echo $r["video_seo"]; ?>'>
                            <?php echo $r["jdl_video"]; ?>
                        </a>
                    </h3>
                    <div class='post-meta mb-2'>
                        <span class='post-author'><?php echo $r["nama_lengkap"]; ?></span>
                        <span class='post-date published'><?php echo tgl_indo($r['tanggal']); ?></span>
                    </div>
                    <p class='post-excerpt mb-3'>
                        <?php echo $isi; ?> ...
                    </p>
                    <a href='<?php echo base_url(); ?>playlist/watch/<?php echo $r["video_seo"]; ?>'>
                        <span class='post-tag index-post-tag'>Watch This Video <i class='fa fa-caret-right'></i></span>
                    </a>
                </div>
            </div>
        </div>
<?php
    endforeach;
?>

</div><!-- .fbt-index-post-wrap -->

<?php echo $this->pagination->create_links(); ?>
<!-- .pagenav -->

</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mainwrap -->
        </div>
        <!-- sectionrow -->
        <div class="sectionrow"></div>
    </div>

    
</div>
