<header class="mainmenu">
        <div class="wrapper">
          <nav class="menu">
            <div class="burger"><span></span></div>
            <div class="mobile-menutitle">
              <div class="mobile-menutitle-inner">
              <?php
$logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
foreach ($logo->result_array() as $row) {
    echo "<img src='".base_url()."asset/logo/$row[gambar]' style='width: 120px; height: auto;' />";
}
?>

                <!-- <span
                  >DISKOMINFO PEMATANGSIANTAR</span
                > -->
              </div>
            </div>

            <div class="menu__outer">
              <div class="menu__wrap">
                <div class="menu__left">
                  <div class="menu__utama">
                  <ul>
                  <li class="nav-item ">
                                        <a href="<?php echo base_url(); ?>"  class="nav-link"> <i class="fas fa-home"></i>Beranda</a>
                                        
                                                                            </li>
                 
    <?php
    $botm = $this->db->query("SELECT * FROM menu WHERE id_parent='0' AND position = 'Bottom' AND aktif='Ya' ORDER BY urutan ASC");
    foreach ($botm->result_array() as $row):
        $dropdown = $this->db->query("SELECT * FROM menu WHERE id_parent='$row[id_menu]' AND aktif='Ya' ORDER BY urutan ASC")->num_rows();
        if ($row['nama_menu'] == 'Beranda'): ?>
            <li class="active">
                <span>
                    <a class="smuroll" href="<?= base_url() . $row['link']; ?>" class="nav-link">
                        <i class="fas fa-home"></i> <?= $row['nama_menu']; ?>
                    </a>
                </span>
            </li>
        <?php elseif ($dropdown == 0): ?>
            <li>
                <span>
                    <a href="<?= base_url() . $row['link']; ?>" class="nav-link">
                        <?= $row['nama_menu']; ?>
                    </a>
                </span>
            </li>
        <?php else: ?>
            <li class="has-dropdown">
                <span>
                    <a href="<?= base_url() . $row['link']; ?>" class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                        <?= $row['nama_menu']; ?>
                    </a>
                </span>
                <ul>
                    <?php
                    $dropmenu = $this->db->query("SELECT * FROM menu WHERE id_parent='$row[id_menu]' AND aktif='Ya' ORDER BY urutan ASC");
                    foreach ($dropmenu->result_array() as $subrow):
                    ?>
                        <li >
                            <a href="<?= base_url() . $subrow['link']; ?>" class="dropdown-item">
                                <?= $subrow['nama_menu']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>


                  </div>
                </div>
              </div>
            </div>

            <div class="menu__right">
              <div class="hujanbahasa">
                <!-- <div class="hujan">21&#176;C Berawan</div> -->
                <div class="bn-label" id="dynamic-day" style="font-size: 13px;">Mengambil data...</div>

                <!-- <div class="bahasa">
                  <a href="<?= base_url(); ?>template/<?= template(); ?>/index9bb4.html?lang=id">ID</a> |
                  <a href="<?= base_url(); ?>template/<?= template(); ?>/index9ed2.html?lang=en">EN</a>
                </div> -->
              </div>
              <!-- <div class="search">
                <div class="search__icon">
                  <i class="scari-icon fas fa-search"></i>
                  <i class="sclose-icon fas fa-times"></i>
                </div>
              </div> -->
            </div>
            <form action="#" method="get">
              <div class="search__form-outer">
                <div class="search__form">
                  <input type="text" name="key" />
                  <button type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </nav>
        </div>

        
      </header>