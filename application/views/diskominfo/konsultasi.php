<?php if ($this->uri->segment(3) == ''):
    $stat = 'Pertanyaan';
    $id = '0';
else:
    $stat = 'Jawaban';
    $id = $this->uri->segment(3);
endif; ?>

<style>
    /* Style untuk form */
#form_komentar {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Style untuk label */
.form-group label {
    font-weight: bold;
}

/* Style untuk input */
.form-control {
    border: none;
    border-bottom: 2px solid #ccc;
    border-radius: 0;
    padding: 10px 0;
    transition: border-bottom-color 0.3s;
}

.form-control:focus {
    border-bottom-color: #007bff;
    outline: none;
}

/* Style untuk textarea */
.form-control-textarea {
    border: 2px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    transition: border-color 0.3s;
}

.form-control-textarea:focus {
    border-color: #007bff;
    outline: none;
}

/* Style untuk tombol */
.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

</style>
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

    /* Form Styling */
    

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    textarea.form-control {
        resize: none;
    }

    .btn-primary {
        background-color: #3498db;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        color: #fff;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }

    /* Comments Styling */
    .comment {
        border-bottom: 1px solid #eee;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }

    .media img {
        border-radius: 50%;
        margin-right: 20px;
    }

    .media-body h5 {
        margin-bottom: 5px;
    }

    .comment-reply {
        margin-top: 20px;
    }

    .button-list a {
        margin-right: 10px;
    }

    /* Additional Styling for Answer */
    .comment-reply {
        padding-left: 40px; /* Adjust as needed */
    }
</style>







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
                                    <div class="xlabel"><span>Forum</span></div>
                                </div>

                                <div class="blog-posts fbt-index-post-wrap">

                                <div class="container fbt-elastic-container mt-5 mb-5">
    <div class="row justify-content-center">

        <!-- Main Wrapper -->
        <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

            <div id="main-wrapper">
                <div class="main-section" id="main_content">
                    <br>
                    <div class="fbt-sep-title">
                        <h4 class="title title-heading-left">Tuliskan <?php echo "$stat"; ?> Anda Pada Form Dibawah Ini</h4>
                        <div class="title-sep-container">
                            <div class="title-sep sep-double"></div>
                        </div>
                    </div>
                    
                    <div class="blog-posts fbt-index-post-wrap">

                        <form action="<?php echo base_url(); ?>konsultasi/reply" method="POST" onSubmit="return validasi(this)" id="form_komentar">
                            <input type="hidden" value='<?php echo $id; ?>' name='a'>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Anda *</label>
                                <div class="col-sm-10">
                                    <input type="text" name='b' placeholder="Nama Anda" value='<?php echo "$usr[nama_lengkap]"; ?>' class="form-control shadow-none radius-0" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email *</label>
                                <div class="col-sm-10">
                                    <input type="text" name='c' placeholder="Alamat E-mail" id="email" value='<?php echo "$usr[email]"; ?>' class="form-control shadow-none radius-0" required/>
                                </div>
                            </div>

                            <?php 
                                $tanya = $this->model_utama->view_where('tbl_comment',array('id_komentar'=>$this->uri->segment(3)))->row_array();
                                if ($this->uri->segment(3) != ''){

                                    echo "<div class='form-group row'>
                                        <label class='col-sm-2 col-form-label'>Pertanyaan</label>
                                        <div class='col-sm-10'>
                                            <textarea class='form-control shadow-none radius-0' rows='5' disabled style='background:#fff;' />$tanya[isi_pesan] ?</textarea>
                                        </div>
                                    </div>";
                                }
                            ?>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?php echo "$stat"; ?> *</label>
                                <div class="col-sm-10">
                                    <textarea name='d' placeholder="Tuliskan <?php echo "$stat"; ?> Anda.." class="form-control shadow-none radius-0" rows="5" required></textarea>
                                </div>
                            </div>

                            <?php if ($this->uri->segment(3) == ''): ?>
                                <div class="form-group m-b-0 row">
                                    <div class="offset-2 col-9">
                                        <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Yakin ingin mengirimkan pertanyaan ini ?')">Kirim Pertanyaan</button>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="form-group m-b-0 row">
                                    <div class="offset-2 col-9">
                                        <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Kirimkan Sebagai Balasan Pesan terpilih?')">Kirim Balasan</button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </form>
                                            

                    </div><!-- .fbt-index-post-wrap -->

                    <br><br><br>
                    <div class="fbt-sep-title mt-5">
                        <h4 class="title title-heading-left">
                            <?php $total = $this->model_utama->view_where('tbl_comment',array('reply'=>0))->num_rows();
                            echo "Total Ada $total Pertanyaan"; ?>
                        </h4>
                        <div class="title-sep-container">
                            <div class="title-sep sep-double"></div>
                        </div>
                    </div>
                    <br>
                    <div class="blog-posts fbt-index-post-wrap">

                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-12">
                                <div class="blog-post-comments">
                                    <section class="comments embed" id="comments">
                                        <div class="comment-list--form">
                                            <div class="comment-list">

                                                <?php
                                                    $no = 1;
                                                    foreach ($konsultasi->result_array() as $kka) {
                                                        $isian=nl2br($kka['isi_pesan']); 
                                                        $komentarku=sensor($isian); 
                                                        if(($no % 2)==0){ $warna="#ffffff;"; }else{ $warna="#e3e3e3"; }
                                                        $test = md5(strtolower(trim($kka['alamat_email'])));

                                                        echo "<div class='media comment mb-4'>
                                                            <a class='mr-4' href='#'>";
                                                                if ($kka['alamat_email'] == ''){
                                                                    echo "<img src='".base_url()."asset/foto_user/blank.png'/>";
                                                                }else{
                                                                    echo "<img src='http://www.gravatar.com/avatar/$test.jpg?s=100'/>";
                                                                }
                                                            echo "</a>
                                                            <div class='media-body' id='reply$kka[id_komentar]'>
                                                                <h5 class='mt-0'>$kka[nama_lengkap]</h5>
                                                                <p>$komentarku</p>
                                                                <div class='comments__actions'>
                                                                    <span class='button'>";
                                                                        if ($this->session->level!=''):
                                                                            echo "<div class='button-list'>
                                                                                <a class='btn btn-success btn-sm' href='".base_url()."konsultasi/index/$kka[id_komentar]'>Berikan Jawaban</a>
                                                                                <a class='btn btn-warning btn-sm' href='".base_url()."konsultasi/delete/$kka[id_komentar]'>Hapus</a>
                                                                                <a class='btn btn-danger btn-sm' href='".base_url()."administrator/logout'>Logout</a>
                                                                            </div>";
                                                                        endif;
                                                                    echo "</span>
                                                                </div>";

                                                                $reply = $this->model_utama->view_where('tbl_comment',array('reply'=>$kka['id_komentar']));
                                                                foreach ($reply->result_array() as $r):

                                                                    $testt = md5(strtolower(trim($r['alamat_email'])));

                                                                    echo "<div class='comment-reply media mt-4'>
                                                                        <a class='mr-4' href='#'>";
                                                                            if ($r['alamat_email'] == ''):
                                                                                echo "<img src='".base_url()."asset/foto_user/blank.png'/>";
                                                                            else:
                                                                                echo "<img src='http://www.gravatar.com/avatar/$test.jpg?s=100'/>";
                                                                            endif;
                                                                        echo "</a>
                                                                        <div class='media-body'>
                                                                            <h5 class='mt-0'>Dibalas Oleh : $r[nama_lengkap], Pada : ".tgl_indo($r['tanggal_komentar']).", $kka[jam_komentar] WIB </h5>
                                                                            <p><i style='color:red;'>$r[alamat_email]</i> - $r[isi_pesan]</p>
                                                                        </div>
                                                                    </div>";
                                                                endforeach;
                                
                                                            echo "</div>
                                                        </div>";
                            
                                                        $no++;
                                                    }
                                                ?><!-- .comment -->
                        
                                            </div><!-- .comment-list -->
                                        </div>
                                    </section>
                                </div><!-- .blog-post-comments -->
                            </div>
                        </div>            

                    </div><!-- .fbt-index-post-wrap -->

                </div>
            </div><!-- #main-wrapper -->

        </div><!-- .fbt-main-wrapper -->

       

    </div>
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
