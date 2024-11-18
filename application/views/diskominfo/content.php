<style>
  .homeimg {
    display: flex;
    justify-content: center; /* Mengatur gambar agar berada di tengah secara horizontal */
    align-items: center; /* Mengatur gambar agar berada di tengah secara vertikal */
    width: 100%; /* Lebar maksimum gambar */
    height: 100vh; /* Tinggi maksimum gambar */
    overflow: hidden; /* Menghindari gambar yang melebihi header */
  }

  .homeimg img {
    width: 100%; /* Lebar maksimum gambar */
    height: 100%; /* Tinggi maksimum gambar */
    object-fit: cover; /* Memastikan gambar tetap proporsional tanpa deformasi */
  }

  @media (max-width: 768px) { /* Atur gaya untuk tampilan mobile */
    .homeimg {
      height: auto; /* Mengubah tinggi gambar menjadi otomatis agar gambar tetap proporsional */
    }
  }
</style>
<div class="slidelax">
  <div class="homeslide" id="story">
    <div class="slick-home">

      <?php
      // Ambil data gambar dari database
      $album_title = "Header Beranda";
      $limit = 10;
      $images = $this->db->select('gbr_gallery')
                         ->from('gallery')
                         ->join('album', 'gallery.id_album = album.id_album')
                         ->where('album.jdl_album', $album_title)
                         ->order_by('gallery.id_gallery', 'DESC')
                         ->limit($limit)
                         ->get()
                         ->result_array();

      // Tampilkan data dalam carousel
      foreach ($images as $key => $image) {
        ?>
        <div class="slickwrap">
          <div class="homeimg">
            <img src="<?= base_url(); ?>asset/img_galeri/<?= $image['gbr_gallery']; ?>" alt="bandung" />
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
</div>


            <!-- DATA STORY BOARD ASLI
  =============================
                                                  <div class="slickwrap">
                                      <div class="homeimg">
                                          <img class="d-only" src="https://img.bandung.go.id/images/slider/2022/02/14/header/166374430249-balai-kota-desktop.jpg" alt="bandung">
                                          <img class="m-only" src="https://img.bandung.go.id/images/slider/2022/02/14/thumb/166374430222-balai-kota-mobile.jpg" alt="bandung">
                                      </div>
                                      <div class="hometext">
                                          <div class="wrapper">
                                              <div class="hometext__inner">
                                                  <div class="hometitle">Balai Kota</div>
                                                  <div class="homesummary">Di Jln. Wastukancana No. 2 Bandung terdapat komplek perkantoran pemerintahan Kota Bandung, Balai Kota Bandung dahulu bernama Gedung Kopi (Koffie Pakhuis).</div>
                                                                                                  <div class="homelink"><a href="<?= base_url(); ?>template/<?= template(); ?>/https://www.bandung.go.id/features/detail/23/balai-kota">Selengkapnya</a></div>
                                                                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                                                  <div class="slickwrap">
                                      <div class="homeimg">
                                          <img class="d-only" src="https://img.bandung.go.id/images/slider/2023/11/15/header/170002248178-bursa-kerja-job-fair-2023-desktop.jpg" alt="bandung">
                                          <img class="m-only" src="https://img.bandung.go.id/images/slider/2023/11/15/thumb/170002248162-bursa-kerja-job-fair-2023-mobile.jpg" alt="bandung">
                                      </div>
                                      <div class="hometext">
                                          <div class="wrapper">
                                              <div class="hometext__inner">
                                                  <div class="hometitle">Bursa Kerja (Job Fair) 2023!</div>
                                                  <div class="homesummary">Halo Pencaker 
  Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Kota Bandung akan menghadirkan kembali acara Bursa Kerja (Job Fair) 2023!
  
  Ada lebih dari 40 perusahaan bergabung dengan 4000 lowongan menarik yang siap mengubah kariermu. Job fair ini akan dilaksanakan pada :
  
  📅 : 21 - 22 November 2023
  ⏱️ : 08.00-16.00
  📍: Venue Kiara Artha Park.
  
  Yuk, ikuti dan daftar Job Fair Disnaker dengan scan barcode pada slide ke-2. siapkan resume terbaik ya!</div>
                                                                                                  <div class="homelink"><a href="<?= base_url(); ?>template/<?= template(); ?>/https://www.bandung.go.id/information/read/472/bursa-kerja-job-fair-2023">Selengkapnya</a></div>
                                                                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  -->
          </div>
        </div>
      </div>

      <!-- <div class="bg-gray" id="galerifoto">
        <div class="wrapper">
          <div class="mainwrap">
            <div class="sectionrow">
              <div class="galerifoto">
                <div class="xsection__header">
                  <h2 class="xsection__title">Layanan Diskominfo</h2>
                </div>

                <div class="galeri-slider">
                  <section class="slick-galeri-slider">
                    <div class="newsslider__row">
                      <div class="newsslider__img">
                        <a href="https://cctv.pematangsiantar.go.id/"
                          ><img
                            src="asset/logo/layanan-cctv.png"
                            alt="img"
                        /></a>
                      </div>
                    </div>
                    <div class="newsslider__row">
                      <div class="newsslider__img">
                        <a href="https://sisada.pematangsiantar.go.id/"
                          ><img
                          src="asset/logo/layanan-sisada.png"
                            alt="img"
                        /></a>
                      </div>
                    </div>
                    <div class="newsslider__row">
                      <div class="newsslider__img">
                        <a href="http://ppid.pematangsiantar.go.id/"
                          ><img
                          src="asset/logo/layanan-ppid.png"
                            alt="img"
                        /></a>
                      </div>
                    </div>
                   
                   
                  </section>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div> -->

      <div class="wrapper">
        <div class="mainwrap">
          <div class="sectionrow">
            <div class="minidashboard">
              <div class="xsection__header">
                <h2 class="xsection__title">Berita Terbaru</h2>
               
              </div>

              <div
                class="minidashboard__body"
                style="display: flex; flex-wrap: wrap"
              >
                <!-- Kolom kiri (Widget) -->

                <div
                  class="news3col__col"
                  style="flex: 1; order: 2; width: 100%"
                >

                <div
                          id="gpr-kominfo-widget-container"
                          style="margin: auto"
                        ></div>


                  <!-- Daftar Pengunjung -->

                  <!-- Daftar Pengunjung -->
                  <!-- <div
                    class="visitor-card"
                    id="visitorCard"
                    style="
                      display: flex;
                      flex-direction: column;
                      align-items: stretch;
                      background-color: #f9f9f9;
                      padding: 20px;
                      border-radius: 10px;
                      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                      border: 2px solid #007bff;
                    "
                  > -->
                    <!-- Judul Card -->
                    <!-- <h2
                      style="
                        font-size: 24px;
                        color: #333;
                        margin: 0 0 20px 0;
                        text-align: center;
                      "
                    >
                      Pengunjung Website
                    </h2> -->
                    <!-- Statistik Pengunjung -->
                    <!-- <div class="visitor-stat" style="margin-bottom: 15px">
                      <h3 style="font-size: 14px; color: #333; margin: 0">
                        Hari Ini:
                        <span
                          id="todayVisitors"
                          style="
                            font-weight: bold;
                            color: #007bff;
                            font-size: 14px;
                          "
                          >Loading...</span
                        >
                        Pengunjung
                      </h3>
                    </div>
                    <div class="visitor-stat" style="margin-bottom: 15px">
                      <h3 style="font-size: 14px; color: #333; margin: 0">
                        Kemarin:
                        <span
                          id="yesterdayVisitors"
                          style="
                            font-weight: bold;
                            color: #007bff;
                            font-size: 14px;
                          "
                          >Loading...</span
                        >
                        Pengunjung
                      </h3>
                    </div>
                    <div class="visitor-stat" style="margin-bottom: 15px">
                      <h3 style="font-size: 14px; color: #333; margin: 0">
                        Bulan Ini:
                        <span
                          id="thisMonthVisitors"
                          style="
                            font-weight: bold;
                            color: #007bff;
                            font-size: 14px;
                          "
                          >Loading...</span
                        >
                        Pengunjung
                      </h3>
                    </div>
                    <div class="visitor-stat" style="margin-bottom: 15px">
                      <h3 style="font-size: 14px; color: #333; margin: 0">
                        Tahun Ini:
                        <span
                          id="thisYearVisitors"
                          style="
                            font-weight: bold;
                            color: #007bff;
                            font-size: 14px;
                          "
                          >Loading...</span
                        >
                        Pengunjung
                      </h3>
                    </div> -->
                    <!-- Total Pengunjung -->
                    <!-- <div
                      class="visitor-total"
                      style="
                        margin-top: auto;
                        border-top: 1px solid #ddd;
                        padding-top: 20px;
                      "
                    >
                      <h3 style="font-size: 16px; color: #333; margin: 0">
                        Total Pengunjung:
                        <span
                          id="totalVisitors"
                          style="
                            font-weight: bold;
                            color: #28a745;
                            font-size: 16px;
                          "
                          >Loading...</span
                        >
                      </h3>
                    </div>
                  </div> -->

                  <!-- Quisioner Website -->
                  <br />
                  <!-- Kuesioner -->
                  <!-- Kuesioner -->
                  <!-- <div
                    class="poll-card"
                    id="pollCard"
                    style="
                      display: flex;
                      flex-direction: column;
                      align-items: stretch;
                      background-color: #f9f9f9;
                      padding: 20px;
                      border-radius: 10px;
                      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                      border: 2px solid #007bff;
                    "
                  > -->
                    <!-- Judul Card -->
                    <!-- <h2
                      style="
                        font-size: 20px;
                        color: #333;
                        margin: 0 0 20px 0;
                        text-align: center;
                      "
                    >
                      Apakah Website ini bermanfaat?
                    </h2> -->
                    <!-- Opsi Polling -->
                    <!-- <div class="poll-options" style="margin-bottom: 15px">
                      <label
                        style="font-size: 14px; color: #333; margin-bottom: 5px"
                      >
                        <input
                          type="radio"
                          name="poll-option"
                          value="sangat-bermanfaat"
                          style="margin-right: 5px"
                        />Sangat Bermanfaat
                      </label>
                      <label
                        style="font-size: 14px; color: #333; margin-bottom: 5px"
                      >
                        <input
                          type="radio"
                          name="poll-option"
                          value="cukup-bermanfaat"
                          style="margin-right: 5px"
                        />Cukup Bermanfaat
                      </label>
                      <label
                        style="font-size: 14px; color: #333; margin-bottom: 5px"
                      >
                        <input
                          type="radio"
                          name="poll-option"
                          value="bermanfaat"
                          style="margin-right: 5px"
                        />Bermanfaat
                      </label>
                      <label
                        style="font-size: 14px; color: #333; margin-bottom: 5px"
                      >
                        <input
                          type="radio"
                          name="poll-option"
                          value="kurang-bermanfaat"
                          style="margin-right: 5px"
                        />Kurang Bermanfaat
                      </label>
                    </div> -->
                    <!-- Tombol Kirim Polling -->
                    <!-- <button
                      onclick="submitPoll()"
                      style="
                        font-size: 14px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        padding: 8px 16px;
                        cursor: pointer;
                      "
                    >
                      Kirim Polling
                    </button> -->
                    <!-- Hasil Polling -->
                    <!-- <div
                      class="poll-results"
                      style="
                        margin-top: 20px;
                        border-top: 1px solid #ddd;
                        padding-top: 20px;
                      "
                    >
                      <h3
                        style="
                          font-size: 16px;
                          color: #333;
                          margin-bottom: 10px;
                        "
                      >
                        Hasil Polling
                      </h3>
                      <div
                        class="poll-result-item"
                        style="font-size: 14px; color: #333; margin-bottom: 5px"
                      >
                        Sangat Bermanfaat
                        <div
                          class="poll-bar"
                          style="
                            background-color: #007bff;
                            height: 15px;
                            margin-top: 5px;
                            width: 50%;
                          "
                        ></div>
                        <span style="font-weight: bold">50.00%</span>
                      </div>
                      <div
                        class="poll-result-item"
                        style="font-size: 14px; color: #333; margin-bottom: 5px"
                      >
                        Cukup Bermanfaat
                        <div
                          class="poll-bar"
                          style="
                            background-color: #007bff;
                            height: 15px;
                            margin-top: 5px;
                            width: 50%;
                          "
                        ></div>
                        <span style="font-weight: bold">50.00%</span>
                      </div>
                      <div
                        class="poll-result-item"
                        style="font-size: 14px; color: #333; margin-bottom: 5px"
                      >
                        Bermanfaat
                        <div
                          class="poll-bar"
                          style="
                            background-color: #007bff;
                            height: 15px;
                            margin-top: 5px;
                            width: 0%;
                          "
                        ></div>
                        <span style="font-weight: bold">0.00%</span>
                      </div>
                      <div
                        class="poll-result-item"
                        style="font-size: 14px; color: #333; margin-bottom: 5px"
                      >
                        Kurang Bermanfaat
                        <div
                          class="poll-bar"
                          style="
                            background-color: #007bff;
                            height: 15px;
                            margin-top: 5px;
                            width: 0%;
                          "
                        ></div>
                        <span style="font-weight: bold">0.00%</span>
                      </div>
                    </div>
                  </div> -->

                  <!-- Widget GPR Diskominfo -->

                </div>

                <!-- Kolom kanan (Berita) -->
                <div
                  class="news3col__col"
                  style="flex: 2; order: 1; width: 100%"
                >
                  <?php
$terbaru = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.status' => 'Y'),'id_berita','DESC',0,9);

echo '<div class="news3col">
        <div class="news3col__row">';

foreach ($terbaru->result_array() as $r2x):
    $isi_berita = strip_tags($r2x['isi_berita']); 
    $isi = substr($isi_berita, 0, 150); 
    $isi = substr($isi_berita, 0, strrpos($isi, " "));

    echo '<div class="news3col__col">
            <a href="'.base_url()."$r2x[judul_seo]".'" class="news3col__img">
              <img src="'.base_url()."/asset/foto_berita/$r2x[gambar]".'" alt="img">
            </a>
            <p class="news3col__summary">
              '.$r2x['judul'].'
            </p>
            <a href="'.base_url()."$r2x[judul_seo]".'" class="linkmore" tabindex="0">
              <span>Lihat Detail</span>
            </a>
          </div>';
endforeach;

echo '  </div>
      </div>';
?>

                </div>
              </div>
            </div>
          </div>
          <!-- sectionrow-->

          <!-- sectionrow-->
        </div>
        <!-- mainwrap-->
      </div>


      <!-- Video -->
      <div class="bg-yellow bg-color" id="pesanpemerintah">
  <div class="wrapper">
    <div class="mainwrap">
      <div class="sectionrow">
        <div class="govideo">
          <div class="xsection__header">
            <h1 class="xsection__title">Ayo Ke Siantar! Destinasi Yes, Transit No!</h1>
          </div>
          <div class="govideo-body">
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/Dtglv-wcJOM?si"
              title="Pesan dari Wali Kota Pematangsiantar"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- wrapper -->

      <div class="wrapper">
        <div class="sectionrow minidashboard-outer bg-gray"></div>
      </div>
      <!-- wrapper -->