<?php
    $tgl_posting   = tgl_indo($rows['tgl_posting']);
    $tgl_mulai   = tgl_indo($rows['tgl_mulai']);
    $tgl_selesai = tgl_indo($rows['tgl_selesai']);
    $isi_agenda=nl2br($rows['isi_agenda']);
    $baca = $rows['dibaca']+1;
?>  
<div class="outer-wrapper my-5" id="outer-wrapper">


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
                                    <div class="xlabel"><span><?php echo "$rows[tema]"; ?></span></div>
                                </div>

                                <div class="blog-posts fbt-index-post-wrap">

                        <?php

if ($rows['gambar'] ==''):
    $foto_agenda = 'no-image.jpg';
else:
    $foto_agenda = $rows['gambar'];
endif;

echo "<img width='100%' src='".base_url()."asset/foto_agenda/$foto_agenda'><hr>
      <table>
      <tr><td valign='top' width=65px><b>Tema</b><br><br></td> <td valign='top' width=15px> : </td>   <td>$rows[isi_agenda]<br><br></td></tr>
      <tr><td><b>Tanggal</b></td>   <td> : </td> <td>$tgl_mulai s/d $tgl_selesai</td></tr>
      <tr><td><b>Tempat</b></td>    <td> : </td> <td>$rows[tempat]</td></tr>
      <tr><td><b>Jam</b></td>   <td> : </td> <td>$rows[jam]</td></tr>
      </table>
      <br><br>";

?>


                        </div><!-- .fbt-index-post-wrap -->


                              

                                
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
