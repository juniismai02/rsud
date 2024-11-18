<style>
    /* Styling for comment section */
.post-labels {
    margin-bottom: 20px;
}

.post-labels .label-head {
    display: inline-block;
}

.post-labels .label-link {
    display: inline-block;
    padding: 5px 5px;
    margin-right: 5px;
    font-size: 14px;
    font-weight: 500;
    color: #fff;
    background-color: #007bff;
    border-radius: 4px;
    text-decoration: none;
}

.post-labels .label-link:hover {
    background-color: #0056b3;
}

.blog-post-comments {
    margin-top: 30px;
}

.comments .fbt-sep-title {
    margin-bottom: 20px;
}

.comments .title {
    font-size: 24px;
    font-weight: 600;
    color: #333;
}

.comments .title-sep-container {
    display: inline-block;
    vertical-align: middle;
}

.comments .title-sep {
    width: 100px;
    height: 2px;
    background-color: #333;
}

.comment {
    margin-bottom: 30px;
    display: flex;
}

.comment img {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    margin-right: 15px;
}

.comment .media-body {
    flex: 1;
}

.comment h5 {
    margin-bottom: 5px;
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.comment p {
    margin-bottom: 0;
    font-size: 16px;
    color: #666;
}

.comment-list--form {
    margin-top: 40px;
}

.comment-list--form .form-group {
    margin-bottom: 20px;
}

.comment-list--form label {
    font-size: 16px;
    font-weight: 500;
    color: #333;
}

.comment-list--form input[type="text"],
.comment-list--form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
    transition: border-color 0.3s ease;
}

.comment-list--form input[type="text"]:focus,
.comment-list--form textarea:focus {
    outline: none;
    border-color: #007bff;
}

.comment-list--form .btn-primary {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.comment-list--form .btn-primary:hover {
    background-color: #0056b3;
}

</style>
<?php
    $baca = $rows['dibaca']+1;  
    $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $rows['id_berita']))->num_rows();
    $kategori = $this->model_utama->view_where('kategori',array('id_kategori' => $rows['id_kategori']))->row_array();
?>

<div class="wrapper" id="detailartikel">
  <br><br>
      
      <article class="artikelwrap">
        
        <div class="detailpage">
          <div class="detailhead">  
            <a href="../../pemerintahan.html" class="detail-cate">Berita</a>
            <h1 class="detail-judul"><?php echo $rows[judul]; ?></h1>
           
          </div>

          <div class="detailbody">
            <div class="repshare">
              <div class="repshare__col">
                <span class="repshare__nama"><?php echo "$rows[nama_lengkap]"; ?></span>
                <span class="repshare__date"><?php echo tgl_indo($rows['tanggal']).", $rows[jam] WIB"; ?></span>
              </div>
              <div class="repshare__col">
                <div class="xsosmedlist">
                  <ul>
                    <li><a href="javascript:voud(0)" onclick="sharelinkfacebook()" class="xsm-fb"><span style="display: none;">Facebook</span> <i class="fab fa-facebook-f"></i> </a></li>
                    <li><a href="javascript:voud(0)" onclick="sharelinktwitter()" class="xsm-tw"><span style="display: none;">Twitter</span><i class="fab fa-twitter"></i></a></li>
                    <li><a href="whatsapp://send?text=https://www.pematangsiantar.go.id/news/read/1/visi-dan-misi" class="xsm-ig"><span style="display: none;">Whatsapp</span><i class="fab fa-whatsapp"></i> </a></li>
                  </ul>
                </div>
              </div>

            </div>

            
            <div class="imgcontent">           
              <div class="imgcontent-img">  <?php
    if ($rows['gambar'] != ''):
        echo "<img src='" . base_url() . "asset/foto_berita/$rows[gambar]' alt='$rows[judul]' style='max-width: 100%; height: auto;'>";
    endif;
    ?></div>
              
            </div>

            <div class="detailcontent">
              








<p style="margin-top:15pt;margin-bottom:7.5pt;"><?php echo "$rows[isi_berita]"; ?></p>


            </div>

            
            <div class="detailbottom">
              <div class="detailbottom-col">
              </div>
              <div class="detailbottom-col">
                <div class="xsosmedlist">
                  <ul>
                    <li><a href="javascript:voud(0)" onclick="sharelinkfacebook()" class="xsm-fb"><span style="display: none;">Facebook</span> <i class="fab fa-facebook-f"></i> </a></li>
                    <li><a href="javascript:voud(0)" onclick="sharelinktwitter()" class="xsm-tw"><span style="display: none;">Twitter</span><i class="fab fa-twitter"></i></a></li>
                    <li><a href="whatsapp://send?text=https://www.pematangsiantar.go.id/news/read/1/visi-dan-misi" class="xsm-ig"><span style="display: none;">Whatsapp</span><i class="fab fa-whatsapp"></i> </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <!-- Komentar -->
        <div class="post-labels">
                                                        <span class="mr-2">TAG:</span>
                                                        <span class="label-head Label">
                                                            <?php

                                                            $tags = (explode(",",$rows['tag']));
                                                            $hitung = count($tags);
                                                            for ($x=0; $x<=$hitung-1; $x++) {
                                                                if ($tags[$x] != ''){
                                                                    echo "<a class='label-link badge badge-secondary py-1 px-3 ml-1 mb-1' href='".base_url()."tag/detail/$tags[$x]'>$tags[$x]</a>";
                                                                }
                                                            }
                                                            
                                                            ?>
                                                        </span>
                                                    </div>
                                              
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

                                                            $komentar = $this->model_utama->view_where_ordering_limit('komentar',array('id_berita' => $rows['id_berita'],'aktif' => 'Y'),'id_komentar','ASC',0,100);

                                                            if($total_komentar<1):
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

                                                        <form action="<?php echo base_url(); ?>berita/kirim_komentar" method="POST" id="form_komentar">
                                                            <input type="hidden" name='a' value='<?php echo "$rows[id_berita]"; ?>'>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="name">Nickname *</label>
                                                                        <input type="text" placeholder="Nickname" value='<?php echo $us['nama_lengkap']; ?>' name='b' class="form-control shadow-none radius-0" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="mail">E-mail*</label>
                                                                        <input type="text" name='e' placeholder="E-mail" value='<?php echo $us['email']; ?>' class="form-control shadow-none radius-0" required />
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="website">Website</label>
                                                                        <input type="text" name='c' placeholder="Website" class="form-control shadow-none radius-0" />
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="comment">Comment*</label>
                                                                        <textarea name='d' placeholder="Your message.." class="form-control shadow-none radius-0" rows="5" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-2">
                                                                    <?php echo $image; ?>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-6 ml-4">
                                                                        <input name='secutity_code' maxlength=6 type="text" class="form-control shadow-none radius-0" placeholder="Masukkkan kode di sebelah kiri.." style="width: 94%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <button class="btn btn-primary radius-0 mt-3" type="submit" name="submit" id="submit-contact"  onclick="return confirm('Haloo, Pesan anda akan tampil setelah kami setujui?')"><i class="fa fa-comment"></i> Kirim Komentar</button>
                                                        </form>
                                                    </div>
                                                </section>
                                            </div><!-- .blog-post-comments -->
      </article>
            <div class="beritalain artikelwrap">
     
            </div>
    
        
          </div>
  </div>