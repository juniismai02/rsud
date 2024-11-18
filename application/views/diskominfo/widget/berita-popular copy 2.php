
 <!-- <div class="blog_right_sidebar">        <aside class="single_sidebar_widget mb-4 search_widget">
            <form class="form" method="post" action="#">
                <div class="input-group">
                    <input type="text" name="key" class="form-control" placeholder="cari berita apa ?">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
                    </span>
                </div>
            </form>
        </aside>    </div> -->
        <div style="text-align: center; margin-bottom: 20px;">
        <h3 style="font-size: 24px; font-weight: bold; color: #3498db; margin: 0;">Layanan Diskominfo</h3>
        <hr style="border: none; height: 2px; background-color: #3498db; margin: 10px 0;">
    </div>

    <!-- Baris 1 -->
    <div style="display: flex; justify-content: space-around; background-color: #3498db; padding: 20px; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
        <!-- Kolom 1 -->
        <div style="width: 45%; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <a href="https://cctv.pematangsiantar.go.id/">
                <img src="<?= base_url(); ?>template/<?= template(); ?>/assets/instansi/diskominfo/cctv.png" alt="CCTV Pelintas" style="width: 100%; max-height: 150px; object-fit: cover; border-radius: 8px 8px 0 0;">
                <div style="text-align: center; font-size: 18px; font-weight: bold; margin-top: 10px; color: #3498db;">CCTV Pelintas</div>
                <div style="font-size: 14px; color: #555; text-align: center;"></div>
            </a>
        </div>

        <!-- Kolom 2 -->
        <div style="width: 45%; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <a href="https://sisada.pematangsiantar.go.id/">
                <img src="<?= base_url(); ?>template/<?= template(); ?>/assets/instansi/diskominfo/sisada.png" alt="Satu Data" style="width: 100%; max-height: 150px; object-fit: cover; border-radius: 8px 8px 0 0;">
                <div style="text-align: center; font-size: 18px; font-weight: bold; margin-top: 10px; color: #3498db;">Sisada <br> Satu Data</div>
                <div style="font-size: 14px; color: #555; text-align: center;"></div>
            </a>
        </div>
    </div>
    <br>

    <div id="gpr-kominfo-widget-container" style="margin:auto" ></div>

   <!-- Widget Container -->
   <div style="max-width: 400px; margin: 20px auto; background-color: #3498db; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; text-align: left; color: #fff; position: relative;">

<!-- Hari Ini -->
<div id="hariIni" style="margin-bottom: 20px; border-bottom: 1px solid #fff; padding-bottom: 10px; display: flex; justify-content: space-between; align-items: center;" onmouseover="hoverEffect(this)" onmouseout="resetEffect(this)">
    <div>
        <?php
        $hari_ini = $this->db->query("SELECT SUM(hits) AS total_hits FROM statistik WHERE tanggal = CURDATE()")->row()->total_hits;
        ?>
        <h4 style="font-size: 15px; font-weight: bold; margin: 0;">Hari Ini : <?php echo $hari_ini; ?> </h4>
    </div>
</div>

<!-- Kemarin -->
<div id="kemarin" style="margin-bottom: 20px; border-bottom: 1px solid #fff; padding-bottom: 10px; display: flex; justify-content: space-between; align-items: center;" onmouseover="hoverEffect(this)" onmouseout="resetEffect(this)">
    <div>
        <?php
        $kemarin = $this->db->query("SELECT SUM(hits) AS total_hits FROM statistik WHERE tanggal = DATE_SUB(CURDATE(), INTERVAL 1 DAY)")->row()->total_hits;
        ?>
        <h4 style="font-size: 15px; font-weight: bold; margin: 0;">Kemarin : <?php echo $kemarin; ?></h4>
    </div>
</div>

<!-- Bulan Ini -->
<div id="bulanIni" style="margin-bottom: 20px; border-bottom: 1px solid #fff; padding-bottom: 10px; display: flex; justify-content: space-between; align-items: center;" onmouseover="hoverEffect(this)" onmouseout="resetEffect(this)">
    <div>
        <?php
        $bulan_ini = $this->db->query("SELECT SUM(hits) AS total_hits FROM statistik WHERE MONTH(tanggal) = MONTH(CURDATE()) AND YEAR(tanggal) = YEAR(CURDATE())")->row()->total_hits;
        ?>
        <h4 style="font-size: 15px; font-weight: bold; margin: 0;">Bulan Ini : <?php echo $bulan_ini; ?></h4>
    </div>
</div>

<!-- Tahun Ini -->
<div id="tahunIni" style="margin-bottom: 20px; border-bottom: 1px solid #fff; padding-bottom: 10px; display: flex; justify-content: space-between; align-items: center;" onmouseover="hoverEffect(this)" onmouseout="resetEffect(this)">
    <div>
        <?php
        $tahun_ini = $this->db->query("SELECT SUM(hits) AS total_hits FROM statistik WHERE YEAR(tanggal) = YEAR(CURDATE())")->row()->total_hits;
        ?>
        <h4 style="font-size: 15px; font-weight: bold; margin: 0;">Tahun Ini : <?php echo $tahun_ini; ?></h4>
    </div>
</div>

<!-- Total Pengunjung -->
<div id="totalPengunjung" style="display: flex; justify-content: space-between; align-items: center;" onmouseover="hoverEffect(this)" onmouseout="resetEffect(this)">
    <div>
        <?php
        $total_pengunjung = $this->db->query("SELECT SUM(hits) AS total_hits FROM statistik")->row()->total_hits;
        ?>
        <h4 style="font-size: 15px; font-weight: bold; margin: 0;">Total Pengunjung : <?php echo $total_pengunjung; ?></h4>
    </div>
</div>

</div>



<div style="max-width: 400px; margin: 50px auto; background-color: #3498db; color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    

    <div style="font-size: 1.2em; text-align:center; margin-bottom: 20px; color: #fff;">Apakah Website ini bermanfaat?</div>

    <div style="display: flex; flex-direction: column;">
        <div style="margin: 10px; padding: 10px; border: 1px solid #fff; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;" onclick="toggleCheckbox(1)" onmouseover="hoverOption(this)" onmouseout="unhoverOption(this)">
            <input type="checkbox" id="checkbox-1" />
            <label for="checkbox-1" style="margin-left: 5px;">Sangat Bermanfaat</label>
        </div>
        <div style="margin: 10px; padding: 10px; border: 1px solid #fff; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;" onclick="toggleCheckbox(2)" onmouseover="hoverOption(this)" onmouseout="unhoverOption(this)">
            <input type="checkbox" id="checkbox-2" />
            <label for="checkbox-2" style="margin-left: 5px;">Cukup Bermanfaat</label>
        </div>
        <div style="margin: 10px; padding: 10px; border: 1px solid #fff; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;" onclick="toggleCheckbox(3)" onmouseover="hoverOption(this)" onmouseout="unhoverOption(this)">
            <input type="checkbox" id="checkbox-3" />
            <label for="checkbox-3" style="margin-left: 5px;">Bermanfaat</label>
        </div>
        <div style="margin: 10px; padding: 10px; border: 1px solid #fff; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;" onclick="toggleCheckbox(4)" onmouseover="hoverOption(this)" onmouseout="unhoverOption(this)">
            <input type="checkbox" id="checkbox-4" />
            <label for="checkbox-4" style="margin-left: 5px;">Kurang Bermanfaat</label>
        </div>
    </div>

    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;  margin: 0; background-color: #3498db;">
    <button style="background-color: #2ecc71; color: #fff; padding: 10px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s; margin-top: 10px;" onclick="submitPolling()">Kirim Polling</button>
    
    <p style="margin-top: 20px; font-weight: bold; font-size: 18px; color: #fff;">Hasil Polling</p>
</div>

    <div style="margin-top: 10px; perspective: 500px; transform-style: preserve-3d;">
    <hr style="border-top: 1px solid #fff;">
        <p style="color: #fff;">Sangat Bermanfaat</p>
        <div style="margin-top: 10px; height: 20px; background-color: #2ecc71; border-radius: 5px; transition: width 0.5s; text-align: left; line-height: 20px; color: #fff; padding: 0 5px; transform: rotateX(30deg);" id="result-bar-1"></div>
        <hr style="border-top: 1px solid #fff;">
        <p style="color: #fff;">Cukup Bermanfaat</p>
        <div style="margin-top: 10px; height: 20px; background-color: #2ecc71; border-radius: 5px; transition: width 0.5s; text-align: left; line-height: 20px; color: #fff; padding: 0 5px; transform: rotateX(30deg);" id="result-bar-2"></div>
        <hr style="border-top: 1px solid #fff;">
        <p style="color: #fff;">Bermanfaat</p>
        <div style="margin-top: 10px; height: 20px; background-color: #2ecc71; border-radius: 5px; transition: width 0.5s; text-align: left; line-height: 20px; color: #fff; padding: 0 5px; transform: rotateX(30deg);" id="result-bar-3"></div>
        <hr style="border-top: 1px solid #fff;">
        <p style="color: #fff;">Kurang Bermanfaat</p>
        <div style="margin-top: 10px; height: 20px; background-color: #2ecc71; border-radius: 5px; transition: width 0.5s; text-align: left; line-height: 20px; color: #fff; padding: 0 5px; transform: rotateX(30deg);" id="result-bar-4"></div>
        <hr style="border-top: 1px solid #fff;">
    </div>
</div>


<br>
