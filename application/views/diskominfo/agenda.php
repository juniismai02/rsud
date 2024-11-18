<style>
    /* CSS Styling */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f8f8;
        color: #333;
    }

    #outer-wrapper {
        margin-top: 50px;
    }

    .fbt-elastic-container {
        max-width: 1200px;
    }

    .fbt-sep-title {
        background-color: #3498db;
        padding: 20px;
        border-radius: 8px 8px 0 0;
        color: #fff;
    }

    .fbt_magazine-blog-post {
        margin-bottom: 30px;
        padding: 0;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .fbt-post-thumbnail img {
        width: 100%;
        height: 200px; /* Adjust the height as needed */
        object-fit: cover; /* Ensure the image covers the entire card */
        border-radius: 8px 8px 0 0;
        transition: transform 0.3s ease-in-out;
    }

    .fbt-post-thumbnail img:hover {
        transform: scale(1.05);
    }

    .fbt-post-caption {
        padding: 20px;
    }

    .post-title a {
        color: #333;
        font-size: 20px; /* Decrease the font size */
        font-weight: 600;
        transition: color 0.3s ease-in-out;
    }

    .post-title a:hover {
        color: #007bff;
    }

    .post-meta {
        color: #6c757d;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .post-excerpt {
        color: #333;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .post-tag {
        background-color: #007bff;
        color: #fff;
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 14px;
        transition: background-color 0.3s ease-in-out;
    }

    .post-tag:hover {
        background-color: #0056b3;
    }
</style>




<div class="outer-wrapper my-5" id="outer-wrapper">
    <style>
        /* CSS Styling */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        #outer-wrapper {
            margin-top: 50px;
        }

        .fbt-elastic-container {
            max-width: 1200px;
        }

        .fbt-sep-title {
            background-color: #3498db;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            color: #fff;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #3498db;
            color: #fff;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .button {
            display: inline-block;
            background-color: #29b332;
            color: #ffffff;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #1f9023;
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
                                    <div class="xlabel"><span>Daftar Agenda</span></div>
                                </div>

                                <div class="blog-posts fbt-index-post-wrap">

<?php


foreach ($agenda->result_array() as $r):

    $tgl_posting = tgl_indo($r['tgl_posting']);
    $tgl_mulai   = tgl_indo($r['tgl_mulai']);
    $tgl_selesai = tgl_indo($r['tgl_selesai']);
    $baca = $r['dibaca']+1;
    $judull = substr($r['tema'],0,33); 
    $isi_agenda =(strip_tags($r['isi_agenda']));
    $isi = substr($isi_agenda,0,210);
    $isi = substr($isi_agenda,0,strrpos($isi," "));

    if ($r['gambar'] ==''):
        $foto_agenda = 'no-image.jpg';
    else:
        $foto_agenda = $r['gambar'];
    endif;

    echo "<div class='fbt_magazine-blog-post hentry fbt-index-post row align-items-center justify-content-between'>
        <div class='col-xl-6 col-md-5'>
            <div class='fbt-post-thumbnail'>
                <a href='".base_url()."agenda/detail/$r[tema_seo]'>
                    <img class='post-thumbnail lazyloaded' src='".base_url()."asset/foto_agenda/$foto_agenda'>
                </a>
            </div>
        </div>
        <div class='col-xl-6 col-md-7'>
            <div class='fbt-post-caption mt-3 mt-md-0'>
                <h3 class='post-title'>
                    <a href='".base_url()."agenda/detail/$r[tema_seo]'>
                        $judull
                    </a>
                </h3>
                <div class='post-meta mb-2'>
                    <span class='post-author'>$r[nama_lengkap]</span>
                    <span class='post-date published'>$tgl_posting</span>
                    <span class='post-date published'>$baca view</span>
                </div>
                <p class='post-excerpt'>
                    $isi
                </p>
                <a href='".base_url()."agenda/detail/$r[tema_seo]' class='post-tag index-post-tag mt-3'>See More</a>
            </div>
        </div>
    </div>";

    
endforeach;

?>

</div><!-- .fbt-index-post-wrap -->

<?php echo $this->pagination->create_links(); ?>


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
