<style>
    /* Style untuk row */
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

/* Style untuk col-md-6 */
.col-md-6 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

/* Style untuk fbt-sep-title */
.fbt-sep-title {
    margin-bottom: 20px;
}

/* Style untuk title */
.title {
    font-size: 24px;
    color: #000;
}

/* Style untuk list-round */
.list-round {
    list-style-type: none;
    padding-left: 0;
}

/* Style untuk list item */
.list-round li {
    margin-bottom: 10px;
}

/* Style untuk link */
.list-round li a {
    color: #000;
    text-decoration: none;
    font-weight: bold;
}

.list-round li a:hover {
    color: #ff005b;
}

/* Style untuk post-date */
.post-date {
    color: #ff005b;
    margin-left: 10px;
}

</style>
<style>
    /* Style untuk form */
.form-inline {
    display: flex;
    align-items: center;
}

/* Style untuk form group */
.form-group {
    margin-right: 20px;
}

/* Style untuk input select */
.form-control {
    border-radius: 10px;
    box-shadow: none;
    border: 1px solid #ced4da;
    font-size: 16px;
    padding: 10px;
}

/* Style untuk tombol */
.btn {
    border-radius: 10px;
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
    font-size: 16px;
    padding: 10px 20px;
}

.btn:hover {
    background-color: #0056b3;
}

</style>
<!-- Halaman Baru -->
<div class="wrapper" id="features">
    <div class="mainwrap">
      <div class="sectionrow">
        <div class="featsection">
          <div class="xsection__header">
            <h1 class="xsection__title">Cari Berita "Lihat Tanggal Upload Berita"</h1>
          </div>

          <div class="buttonlist">
          <ul>
              <li ><a href="<?= base_url(); ?>kategori/detail/berita-terbaru">Berita Terbaru</a></li>
                            <li ><a href="<?= base_url(); ?>kategori/detail/berita-unggulan">Berita Unggulan</a></li>
                            <li ><a href="<?= base_url(); ?>kategori/detail/pengumuman">Pengumuman</a></li>
                            <li ><a href="<?= base_url(); ?>berita/indeks_berita">Index Berita</a></li>
                            
                          </ul>


          </div>

          <div class="blog-posts fbt-index-post-wrap">

<form class="form-inline" action="<?php echo base_url().'berita/indeks_berita' ?>" method="POST" style="display: flex; align-items: center;">
    <div class="form-group m-r-10" style="margin-right: 20px;">
        
        <div class="input-group">
            <select name="tanggal" class="form-control shadow-none radius-10" style="border-radius: 10px; box-shadow: none; border: 1px solid #ced4da; font-size: 16px;">
                <?php
                for($n=1; $n<=31; $n++){
                    if (isset($_POST['filter'])){ $tgls = $_POST['tanggal']; }else{ $tgls = date("d"); }
                    if ($tgls==$n){
                        echo "<option value='$n' selected>$n</option>";
                    }else{
                        echo "<option value='$n'>$n</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group m-r-10" style="margin-right: 20px;">
        <div class="input-group">
            <select name="bulan" class="form-control shadow-none radius-10" style="border-radius: 10px; box-shadow: none; border: 1px solid #ced4da; font-size: 16px;">
                <?php
                $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                for($n=1; $n<=12; $n++){
                    if (isset($_POST['filter'])){ $blns = $_POST['bulan']; }else{ $blns = date("n"); }
                    if ($blns == $n){
                        echo "<option value='$n' selected>$bln[$n]</option>";
                    }else{
                        echo "<option value='$n'>$bln[$n]</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group m-r-10" style="margin-right: 20px;">
        <div class="input-group">
            <select name="tahun" class="form-control shadow-none radius-10" style="border-radius: 10px; box-shadow: none; border: 1px solid #ced4da; font-size: 16px;">
                <?php
                for($n=2008; $n<=date('Y'); $n++){ 
                    if (isset($_POST['filter'])){ $year = $_POST['tahun']; }else{ $year = date("Y"); }
                    if ($year == $n){
                        echo "<option value='$n' selected>$n</option>";
                    }else{
                        echo "<option value='$n'>$n</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <button type="submit" name="filter" class="btn btn-primary radius-10 ml-3" style="border-radius: 10px; background-color: #007bff; border-color: #007bff; color: #fff; font-size: 16px; padding: 10px 20px;">Lihat Indeks</button>
</form>

<br>
<hr>
<br>

<div class="row">
<?php

    if (isset($_POST['filter'])){
        $bulan = strlen($_POST['bulan']);
        $tanggal = strlen($_POST['tanggal']);       
        if ($bulan <= 1){ $bulann = '0'.$_POST['bulan']; }else{ $bulann = $_POST['bulan']; }
        if ($tanggal <= 1){ $tanggall = '0'.$_POST['tanggal']; }else{ $tanggall = $_POST['tanggal']; }
        $fil = $_POST['tahun'].'-'.$bulann.'-'.$tanggall;
    }else{
        $fil = date("Y-m-d");
    }

    $col = 5; 
    $warna = array("red","blue","red","purple","orange","black","yellow","red","blue","green");
    if ($record->num_rows() > 0) {
        
        $cnt = 0;
        foreach ($record->result_array() as $t) {
            $total = $this->model_utama->view_where('berita',array('id_kategori' => $t['id_kategori'],'tanggal' => $fil,'status' => 'Y'))->num_rows();
            if ($total >= 1){   
                if ($cnt >= $col){ echo "</tr><tr>"; $cnt = 0; } $cnt++;

                    // echo "string";


                    echo "<div class='col-md-6' style='margin-bottom:40px;'>

                        <div class='fbt-sep-title'>
                            <h4 class='title title-heading-left'>$t[nama_kategori]</h4>
                        </div>

                        <ul class='list-round'>";
                        $sql = $this->model_utama->view_where_ordering_limit('berita',array('id_kategori' => $t['id_kategori'],'tanggal' => $fil,'status' => 'Y'),'id_berita','DESC',0,5);
                        foreach($sql->result_array() as $r) {
                            $judul = substr($r['judul'],0,40); 
                            $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();
                            echo "<li>
                            
                            <a style='color:#000;' title='$r[judul]' href='".base_url()."$r[judul_seo]'>$judul,..</a>

                            <a href='".base_url()."$r[judul_seo]'><i class='fa fa-comments-o'></i> $total_komentar</a>

                            <span class='post-date' style='color:#ff005b;'>".tgl_indo($r['tanggal'])."</span></li>";
                        }
                        echo "</ul>
                        <a href='".base_url()."kategori/detail/$t[kategori_seo]' class='pt-0 pb-0'>Selengkapnya ...</a>
                    </div>";
            }
        }
    }
if ($hitung->num_rows()<1){
    echo "<center style='padding:15%'>Maaf, Belum ada artikel yang diterbitkan pada hari ini (".tgl_indo($hari_ini).").</center>";
}
?>
</div>

</div><!-- .fbt-index-post-wrap -->
          
        </div>


      </div>
    </div>
  </div>