<style>
        body {
            background-color: #f8f8f8;
            font-family: 'Roboto', sans-serif;
        }

        #main-wrapper {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 20px;
            padding: 20px;
        }

        .fbt-item-post {
            margin-bottom: 30px;
        }

        .post-title {
            font-size: 24px;
            color: #333;
        }

        .post-author {
            color: #555;
        }

        .post-date {
            color: #777;
        }

        .post-content {
            line-height: 1.6;
            color: #444;
        }

        .fbt-item-thumbnail img {
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer; /* Menambahkan pointer saat diarahkan ke gambar */
        }

        /* Modal Style */
        .modal {
            display: none; /* Sembunyikan modal secara default */
            position: fixed;
            z-index: 999;
            padding-top: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .modal-content img {
            width: 100%;
            height: auto;
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
                                <div class="xlabel"><span>Forum</span></div>
                            </div>

                            <div class="blog-posts fbt-index-post-wrap">
                                <div class="container fbt-elastic-container mt-5 mb-5">
                                    <div class="row justify-content-center">
                                        <!-- Konten -->
                                        <!-- Main Wrapper -->
                                        <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">
                                            <div id="main-wrapper">
                                                <div class="main-section" id="main_content">
                                                    <div class="blog-posts fbt-item-post-wrap">
                                                        <div class="blog-post fbt-item-post">
                                                            <div class="featuredImageContainer">
                                                                <div class="fbt-item-thumbnail">
                                                                    <?php
                                                                    $imageSrc = ($rows['gbr_album'] != '') ? base_url() . "asset/img_album/$rows[gbr_album]" : base_url() . "asset/img_album/no-image.jpg";
                                                                    echo "<img class='post-thumbnail lazyloaded' style='max-width: 100%; height: auto;' src='$imageSrc' alt='$rows[jdl_album]' onclick='openModal(this.src)'>";
                                                                    ?>
                                                                </div>
                                                                <div class="fbt-item-caption mt-3">
                                                                    <h1 class="post-title"><?php echo "$rows[jdl_album]"; ?></h1>
                                                                    <div id="share"></div>
                                                                    <div class="item-post-meta mt-3">
                                                                        <div class="post-meta mb-3">
                                                                            <?php
                                                                            $r = $this->model_utama->view_where('users', array('username' => $rows['username']))->row_array();
                                                                            echo "<span class='post-author'>$r[nama_lengkap]</span>"; 
                                                                            echo "&nbsp;&nbsp;<span class='post-date published'>$rows[hits_album] view</span>";
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="post-body post-content">
                                                                <p><?php echo "$rows[keterangan]"; ?></p>
                                                                <?php
                                                                $no = $this->uri->segment(4) + 1;
                                                                foreach ($detailalbum->result_array() as $h) :
                                                                    if (trim($h['gbr_gallery']) == '') :
                                                                        $gbr_gallery = 'no-image.jpg';
                                                                    else :
                                                                        $gbr_gallery = $h['gbr_gallery'];
                                                                    endif;
                                                                    echo "<h3 class='mb-4'>$no. $h[jdl_gallery]</h3>";
                                                                    echo "<div class='fbt-item-thumbnail'>
                                                                        <img class='post-thumbnail lazyloaded' style='max-width: 100%; height: auto;' src='" . base_url() . "asset/img_galeri/$gbr_gallery' alt='$h[jdl_gallery]' onclick='openModal(this.src)' />
                                                                        <p class='mt-3'>$h[keterangan]</p>
                                                                    </div>";
                                                                    $no++;
                                                                endforeach;
                                                                ?>
                                                                <p><?php echo $this->pagination->create_links(); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #main-wrapper -->
                                        </div>
                                    </div>
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



<!-- Modal -->
<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="img01">
</div>

<script>
    // Fungsi untuk membuka modal dan menampilkan gambar yang diklik
    function openModal(src) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        modal.style.display = "block"; // Menampilkan modal
        modalImg.src = src; // Mengatur sumber gambar modal
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none"; // Menyembunyikan modal
    }

    // Menutup modal jika pengguna mengklik di luar gambar
    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none"; // Menyembunyikan modal
        }
    }
</script>
