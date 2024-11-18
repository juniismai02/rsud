<footer class="bg-blue">
        <div class="wrapper">
          <div class="footer">
            <div class="footer__col">
            <div class="footlogo">
    <?php
    $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
    foreach ($logo->result_array() as $row) {
        echo "<img src='".base_url()."asset/logo/$row[gambar]' style='width: 300px; height: auto;' />";
        // Ganti nilai width sesuai dengan ukuran yang diinginkan
    }
    ?>
</div>

              <div class="footalamat">
                
              Jl. Sutomo No.230, Simalungun, Kec. Siantar Sel., Kota Pematang Siantar, Sumatera Utara 21121
              </div>
            </div>

            <div class="footer__col">
              <ul class="footmenu">
                <li><a href="<?= base_url(); ?>halaman/detail/kata-sambutan">Tentang Kami</a></li>
                <li><a href="<?= base_url(); ?>halaman/detail/kontak" class="nav-link">Kontak</a></li>
                <li><a href="https://pematangsiantar.go.id/" class="nav-link">Website Resmi Pematangsiantar</a></li>

               
              </ul>
            </div>

            <div class="footer__col">
              <ul class="sosmedrow">
                <li>
                  <a
                    href="https://www.facebook.com/p/RSUD-Dr-Djasamen-Saragih-Pematangsiantar-official-100083215242471/"
                    target="_blank"
                    ><i class="fab fa-facebook"></i> Facebook</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/rsuddjasamensaragihofficial/"
                    target="_blank"
                    ><i class="fab fa-instagram"></i> Instagram</a
                  >
                </li>
                <!-- <li>
                  <a href="#" target="_blank"
                    ><img
                      width="20"
                      src="<?= base_url(); ?>/asset/images/tiktok.png"
                      alt=""
                    />&nbsp;&nbsp; tiktok</a
                  >
                </li> -->
                <li>
                  <a
                    href="#"
                    target="_blank"
                    ><i class="fab fa-youtube"></i> youtube</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>