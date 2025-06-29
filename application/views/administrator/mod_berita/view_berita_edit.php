<?php 
echo "<div class='card'>
    <div class='card-header with-border'>
      <h3 class='card-title'>Edit Berita Terpilih</h3>
    </div>
  <div class='card-body'>";
  $attributes = array('class'=>'form-horizontal','role'=>'form');
  echo form_open_multipart($this->uri->segment(1).'/edit_listberita',$attributes); 
echo "<table class='table table-sm table-borderless'>
      <tbody>
        <input type='hidden' name='id' value='$rows[id_berita]'>
        <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='b' value='$rows[judul]' required></td></tr>
        <tr><th scope='row'>Sub Judul</th>              <td><input type='text' class='form-control' name='c' value='$rows[sub_judul]'></td></tr>
        <tr><th scope='row'>Video Youtube</th>          <td><input type='text' class='form-control' name='d' value='$rows[youtube]' placeholder='Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU'></td></tr>
        <tr><th scope='row'>Kategori</th>               <td><select name='a' class='form-control' required>";
                                                                foreach ($record as $row){
                                                                    if ($rows['id_kategori'] == $row['id_kategori']){
                                                                      echo "<option value='$row[id_kategori]' selected>$row[nama_kategori]</option>";
                                                                    }else{
                                                                      echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                                    }
                                                                }
        echo "</td></tr>
        
        <tr><th scope='row'>Isi Berita</th>             <td><textarea id='editor1' class='form-control' name='h' style='height:260px' required>$rows[isi_berita]</textarea></td></tr>
        <tr><th scope='row'>Ganti Gambar</th>                 <td><input type='file' class='form-control' name='k'>";
                                                                   if ($rows['gambar'] != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_berita/$rows[gambar]'>$rows[gambar]</a>"; } echo "</td></tr>
        <tr><th scope='row'>Ket. Gambar</th>            <td><input type='text' class='form-control' name='i' value='$rows[keterangan_gambar]'></td></tr>
        <tr><th scope='row'>Tag</th>                    <td><div class='checkbox-scroll'>";
                                                                $_arrNilai = explode(',', $rows['tag']);
                                                                foreach ($tag as $tag){
                                                                    $_ck = (array_search($tag['tag_seo'], $_arrNilai) === false)? '' : 'checked';
                                                                    echo "<span style='display:block;'><input type=checkbox value='$tag[tag_seo]' name=j[] $_ck> $tag[nama_tag] &nbsp; &nbsp; &nbsp; </span>";
                                                                }
        echo "</div></td></tr>
        <tr><th scope='row'>Waktu Posting</th>              <td><input type='text' id='datetimepicker1' data-date-format='YYYY-MM-DD HH:mm:ss' class='form-control' name='waktu' value='$rows[tanggal] $rows[jam]'></td></tr>
      </tbody>
      </table>
  
  <div class='card-footer'>
        <button type='submit' name='submit' class='btn btn-info'>Update</button>
        <a href='".base_url().$this->uri->segment(1)."/listberita'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
  </div>
</div></div>";
echo form_close();
?>



