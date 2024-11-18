<?php
$lihat = $rows['dilihat']+1;
$total_komentar = $this->model_utama->view_where('komentarvid',array('id_video' => $rows['id_video']))->num_rows();
?> 

<style>
    /* Video Styling */
.featuredImageContainer {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.fbt-item-thumbnail {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
}

.fbt-item-thumbnail iframe {
  width: 100%;
  height: 400px; /* Adjust as needed */
  border: none;
}

.post-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.post-meta {
  font-size: 14px;
  color: #888;
}

.post-footer {
  margin-top: 20px;
}

.post-labels {
  font-size: 14px;
}

/* Comment Styling */
.comment-list {
  margin-top: 30px;
}

.comment {
  margin-bottom: 30px;
}

.comment img {
  width: 64px;
  height: 64px;
  border-radius: 50%;
}

.comment h5 {
  margin-bottom: 5px;
}

.comment p {
  margin-bottom: 10px;
}

.comment-form {
  margin-top: 40px;
}

.comment-form input,
.comment-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 6px;
  border: 1px solid #ccc;
}

.comment-form button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

.comment-form button:hover {
  background-color: #0056b3;
}
/* Form Komentar Styling */
.comment-form input[type="text"],
.comment-form textarea {
  padding: 12px;
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 6px;
  width: 100%;
  font-size: 14px;
}

.comment-form input[type="text"]:focus,
.comment-form textarea:focus {
  outline: none;
  border-color: #007bff;
}

.comment-form textarea {
  resize: vertical;
}

.comment-form button {
  padding: 12px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

.comment-form button:hover {
  background-color: #0056b3;
}

.comment-list--form .alert {
  margin-bottom: 20px;
}

/* Optional: Add styling for the security code input */
.comment-form .security-code-input {
  display: flex;
  align-items: center;
}

.comment-form .security-code-input input[type="text"] {
  width: 70%;
  margin-right: 10px;
}

.comment-form .security-code-input img {
  max-width: 100px;
  height: auto;
}

@media (max-width: 768px) {
  /* Adjust styling for smaller screens */
  .comment-form input[type="text"],
  .comment-form textarea {
    padding: 10px;
    font-size: 12px;
  }

  .comment-form button {
    padding: 10px 16px;
  }

  /* Optional: Adjust styling for security code input on smaller screens */
  .comment-form .security-code-input input[type="text"] {
    width: 60%;
  }
}

</style>

<style>
    /* Styling untuk judul "Tuliskan Komentar Anda!" */
.fbt-sep-title {
  margin-top: 30px;
  padding-bottom: 10px;
  border-bottom: 2px solid #007bff;
  position: relative;
}

.fbt-sep-title h4 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #007bff;
}

.title-sep-container {
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
}

.title-sep {
  height: 2px;
  background-color: #007bff;
}

.sep-double {
  width: 50%;
}

/* Styling untuk form komentar */
.comment-form .form-group {
  margin-bottom: 20px;
}

.comment-form input[type="text"],
.comment-form textarea {
  padding: 12px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 6px;
  width: 100%;
}

.comment-form input[type="text"]:focus,
.comment-form textarea:focus {
  outline: none;
  border-color: #007bff;
}

.comment-form textarea {
  resize: vertical;
}

.comment-form .row {
  margin-bottom: 20px;
}

.comment-form .col-md-2 {
  margin-top: 12px; /* Sesuaikan sesuai kebutuhan */
}

.comment-form .col-md-6 {
  margin-top: 12px; /* Sesuaikan sesuai kebutuhan */
}

.comment-form .form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
}

.comment-form button {
  padding: 12px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

.comment-form button:hover {
  background-color: #0056b3;
}

/* Optional: Styling untuk input kode keamanan */
.comment-form .security-code-input {
  display: flex;
  align-items: center;
}

.comment-form .security-code-input input[type="text"] {
  width: 70%;
  margin-right: 10px;
}

.comment-form .security-code-input img {
  max-width: 100px;
  height: auto;
}

@media (max-width: 768px) {
  /* Sesuaikan styling untuk layar yang lebih kecil */
  .fbt-sep-title h4 {
    font-size: 20px;
  }

  .comment-form input[type="text"],
  .comment-form textarea {
    padding: 10px;
  }

  .comment-form button {
    padding: 10px 16px;
  }

  /* Optional: Sesuaikan styling untuk input kode keamanan pada layar yang lebih kecil */
  .comment-form .security-code-input input[type="text"] {
    width: 60%;
  }
}

</style>

<style>
    /* Form Styling */
.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 12px;
  border: 1px solid #ced4da;
  border-radius: 5px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
  border-color: #007bff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

textarea.form-control {
  resize: vertical;
}

.col-md-2,
.col-md-6 {
  margin-top: 12px;
}

.input-group {
  position: relative;
  width: 100%;
}

.input-group-prepend {
  width: 20%;
}

.input-group-prepend span {
  width: 100%;
  text-align: center;
  display: block;
  line-height: 38px;
}

.input-group-append {
  width: 76%;
}

.input-group-append input {
  width: calc(100% - 38px);
}

.form-control-feedback {
  position: absolute;
  right: 0;
  top: calc(50% - 10px);
}

.btn {
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.15s ease-in-out;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0056b3;
}

</style>


        
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
                                    <div class="xlabel"><span><?php echo $rows[jdl_video]; ?></span></div>
                                </div>

                                <div class="blog-posts fbt-index-post-wrap">
                                <div class="featuredImageContainer">
                                    <div class="fbt-item-thumbnail">

                                        <?php
                                        
                                        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $rows['youtube'], $match)):
                                            echo "<iframe class='post-thumbnail lazyloaded'  style='height:400px' src='https://www.youtube.com/embed/".$match[1]."' frameborder='0' allowfullscreen></iframe>";
                                        endif;
                                        
                                        ?>
                                    </div>
                                    <div class="fbt-item-caption mt-3">
                                        <h1 class="post-title"><?php echo $rows[jdl_video]; ?></h1>
                                        <div class="item-post-meta mt-3">
                                            <div class="post-meta mb-3">
                                                <span class="post-author"><?php echo "$rows[nama_lengkap]"; ?></span>
                                                <span class="post-date published"><?php echo tgl_indo($rows['tanggal']).", $rows[jam] WIB"; ?></span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-n4">
                                        <div class="col-lg-12">
                                            <div class="blog-post-comments">
                                                <section class="comments embed" id="comments">
                                                    <div class="fbt-sep-title">
                                                        <h4 class="title title-heading-left">Komentar</h4>
                                                        <div class="title-sep-container">
                                                            <div class="title-sep sep-double"></div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-list--form" id="listcomment">
                                                        <div class="comment-list">


                                                            <?php

                                                            $komentar = $this->model_utama->view_where_ordering_limit('komentarvid',array('id_video' => $rows['id_video'],'aktif' => 'Y'),'id_video','ASC',0,100);

                                                            if($total_komentar < 1):
                                                                echo "<div class='alert alert-info text-info alert-dismissible fade show' role='alert'>
                                                                    BELUM ADA KOMENTAR UNTUK BERITA INI!
                                                                </div>";
                                                            endif;

                                                            foreach ($komentar->result_array() as $kka):
                                                                $isian=nl2br($kka['isi_komentar']);
                                                                $komentarku = sensor($isian);

                                                                $test = md5(strtolower(trim($kka['email']))); 
                                                                echo "<div class='media comment mb-4'>
                                                                    <a href='#' class='mr-4'>";
                                                                        if ($kka['email'] == ''):
                                                                            echo "<img style='width:64px;' src='".base_url()."asset/foto_user/blank.png'/>";
                                                                        else:
                                                                            echo "<img class='setborder' src='http://www.gravatar.com/avatar/$test.jpg?s=100'/>";
                                                                        endif;
                                                                    echo "</a>
                                                                    <div class='media-body'>
                                                                        <h5 class='mb-2'>$kka[nama_komentar]</h5>
                                                                        <p>$komentarku</p>
                                                                        
                                                                    </div>
                                                                </div>";
                                                            
                                                            endforeach;
                                                            
                                                            ?><!-- .comment -->

                                                            <div class="fbt-sep-title mt-5">
                                                                <h4 class="title title-heading-left">Tuliskan Komentar Anda!</h4>
                                                                <div class="title-sep-container">
                                                                    <div class="title-sep sep-double"></div>
                                                                </div>
                                                            </div>

                                                        </div><!-- .comment-list -->

                                                        <?php echo $this->session->flashdata('message'); ?>

                                                        <form action="<?php echo base_url(); ?>playlist/kirim_komentar" method="POST" id="form_komentar">
                                                            <input type="hidden" name='a' value='<?php echo "$rows[id_video]"; ?>'>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="name">Nickname *</label>
                                                                        <input type="text" placeholder="Nickname" value='<?php echo $us['nama_lengkap']; ?>' name='b' class="form-control shadow-none radius-0" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="mail">E-mail*</label>
                                                                        <input type="text" name='c' placeholder="E-mail" value='<?php echo $us['email']; ?>' class="form-control shadow-none radius-0" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="comment">Comment*</label>
                                                                        <textarea name='d' placeholder="Your message.." class="form-control shadow-none radius-0" rows="5" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <?php echo $image; ?>
                                                                </div>
                                                                <div class="col-md-6 ml-4">
                                                                    <input name='secutity_code' maxlength=6 type="text" class="form-control shadow-none radius-0" placeholder="Masukkan kode di atas..." style="width: 94%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <button class="btn btn-primary radius-0 mt-3" type="submit" name="submit" id="submit-contact"  onclick="return confirm('Haloo, Pesan anda akan tampil setelah kami setujui?')"><i class="fa fa-comment"></i> Kirim Komentar</button>
                                                        </form>
                                                    </div>
                                                </section>
                                            </div><!-- .blog-post-comments -->
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
</div>
    
</div>
