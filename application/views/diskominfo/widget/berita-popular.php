 <!-- Tambahkan ini di dalam tag <head> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function updateVisitorStatistics() {
            $.ajax({
                url: '<?php echo $_SERVER["PHP_SELF"]; ?>',
                type: 'POST',
                data: { action: 'update_visitor_statistics' },
                dataType: 'json',
                success: function(data) {
                    $('#todayVisitors').text(data.today);
                    $('#yesterdayVisitors').text(data.yesterday);
                    $('#thisMonthVisitors').text(data.this_month);
                    $('#thisYearVisitors').text(data.this_year);
                    $('#totalVisitors').text(data.total);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Panggil fungsi updateVisitorStatistics() setiap 10 detik
        setInterval(updateVisitorStatistics, 10000); // 10000 milidetik = 10 detik
    });
</script>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'update_visitor_statistics') {
        // Di sini tempatkan logika pembaruan statistik pengunjung
        // Anda dapat menempatkan logika tersebut langsung di sini
        // Atau panggil fungsi dari model jika Anda telah memisahkan logika tersebut ke model
        // Contoh logika:
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $this_month = date('Y-m-01');
        $this_year = date('Y-01-01');

        $statistics = array(
            'today' => $this->db->query("SELECT COUNT(*) as total FROM statistik WHERE tanggal='$today'")->row()->total,
            'yesterday' => $this->db->query("SELECT COUNT(*) as total FROM statistik WHERE tanggal='$yesterday'")->row()->total,
            'this_month' => $this->db->query("SELECT COUNT(*) as total FROM statistik WHERE tanggal>='$this_month'")->row()->total,
            'this_year' => $this->db->query("SELECT COUNT(*) as total FROM statistik WHERE tanggal>='$this_year'")->row()->total,
            'total' => $this->db->query("SELECT COUNT(*) as total FROM statistik")->row()->total
        );

        echo json_encode($statistics);
        exit; // Penting: Keluar dari script setelah mengirimkan data JSON
    }
?>

 
 <!-- Kolom kiri (Widget) -->

 <div
                  class="news3col__col"
                  style="flex: 1; order: 2; width: 100%"
                >
               
<div class="buttonlist" style="list-style-type: none; padding: 0; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px solid #007bff;">
<br>
<h2 style="font-size: 24px; text-align: center; color: #333; margin: 0;">Menu Navigasi</h2> 
<br>         
  <!-- Navigasi Menu -->
  <ul class="menu-card" >
     

    <!-- Daftar Menu -->
    <li class="menu-item" style="margin-bottom: 15px;">
      <a href="<?= base_url(); ?>halaman/detail/kata-sambutan" style="font-size: 16px; color: #007bff; text-decoration: none; transition: color 0.3s ease;">Kata Sambutan</a>
    </li>
    <li class="menu-item" style="margin-bottom: 15px;">
      <a href="<?= base_url(); ?>halaman/detail/struktu-organisasi" style="font-size: 16px; color: #007bff; text-decoration: none; transition: color 0.3s ease;">Struktur Organisasi</a>
    </li>
    <li class="menu-item" style="margin-bottom: 15px;">
      <a href="<?= base_url(); ?>halaman/detail/tugas-dan-fungsi" style="font-size: 16px; color: #007bff; text-decoration: none; transition: color 0.3s ease;">Tugas dan Fungsi</a>
    </li>
    <li class="menu-item" style="margin-bottom: 15px;">
      <a href="<?= base_url(); ?>halaman/detail/visi-misi" style="font-size: 16px; color: #007bff; text-decoration: none; transition: color 0.3s ease;">Visi Misi</a>
    </li>
    <li class="menu-item" style="margin-bottom: 15px;">
      <a href="<?= base_url(); ?>kategori/detail/berita-terbaru" style="font-size: 16px; color: #007bff; text-decoration: none; transition: color 0.3s ease;">Berita Terbaru</a>
    </li>
    <li class="menu-item" style="margin-bottom: 15px;">
      <a href="<?= base_url(); ?>kategori/detail/berita-unggulan" style="font-size: 16px; color: #007bff; text-decoration: none; transition: color 0.3s ease;">Berita Unggulan</a>
    </li>
    <li class="menu-item" style="margin-bottom: 15px;">
      <a href="<?= base_url(); ?>kategori/detail/pengumuman" style="font-size: 16px; color: #007bff; text-decoration: none; transition: color 0.3s ease;">Pengumuman</a>
    </li>
    <li class="menu-item" style="margin-bottom: 15px;">
      <a href="<?= base_url(); ?>berita/indeks_berita" style="font-size: 16px; color: #007bff; text-decoration: none; transition: color 0.3s ease;">Index Berita</a>
    </li>
  </ul>
</div>


<br>
                  
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
      <span id="todayVisitors" style="font-weight: bold; color: #007bff; font-size: 14px;">
        <?php echo $visitor_statistics['today']; ?>
      </span>
      Pengunjung
    </h3>
  </div>
  <div class="visitor-stat" style="margin-bottom: 15px">
    <h3 style="font-size: 14px; color: #333; margin: 0">
      Kemarin:
      <span id="yesterdayVisitors" style="font-weight: bold; color: #007bff; font-size: 14px;">
        <?php echo $visitor_statistics['yesterday']; ?>
      </span>
      Pengunjung
    </h3>
  </div>
  <div class="visitor-stat" style="margin-bottom: 15px">
    <h3 style="font-size: 14px; color: #333; margin: 0">
      Bulan Ini:
      <span id="thisMonthVisitors" style="font-weight: bold; color: #007bff; font-size: 14px;">
        <?php echo $visitor_statistics['this_month']; ?>
      </span>
      Pengunjung
    </h3>
  </div>
  <div class="visitor-stat" style="margin-bottom: 15px">
    <h3 style="font-size: 14px; color: #333; margin: 0">
      Tahun Ini:
      <span id="thisYearVisitors" style="font-weight: bold; color: #007bff; font-size: 14px;">
        <?php echo $visitor_statistics['this_year']; ?>
      </span>
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
      <span id="totalVisitors" style="font-weight: bold; color: #28a745; font-size: 16px;">
        <?php echo $visitor_statistics['total']; ?>
      </span>
    </h3>
  </div> -->
<!-- </div> -->

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
                  <br />
                  <div
                          id="gpr-kominfo-widget-container"
                          style="margin: auto"
                        ></div>

                </div>