     <div class="wrapper">
        <div class="mainwrap">
          <div class="sectionrow">
            <div class="minidashboard">
              

              <div
                class="minidashboard__body"
                style="display: flex; flex-wrap: wrap"
              >
               <!-- Widget Statistik -->
               <?php $this->load->view(template().'/widget/berita-popular'); ?>
                <!-- Kolom kanan (Berita) -->
                <div
                  class="news3col__col"
                  style="flex: 2; order: 1; width: 100%"
                >
                  

            <div class="leader">
              <div class="leader__label">
                <div class="xlabel"><span><?php echo $rows[judul]; ?></span></div>
              </div>
              <!-- <div class="post-meta mb-3">
                                            <span class="post-author"><?php echo "$rows[nama_lengkap]"; ?></span>
                                            <span class="post-date published"><?php echo tgl_indo($rows['tanggal']).", $rows[jam] WIB"; ?></span>
                                        </div> -->

              <p><?php echo "$rows[isi_halaman]"; ?></p>
              </div>
            </div>
          </div>
          <!-- sectionrow -->

          <div class="sectionrow"></div>
        </div>
        <!-- mainwrap -->
      </div>

                </div>
              </div>
            </div>
          </div>
          <!-- sectionrow-->

          <!-- sectionrow-->
        </div>
        <!-- mainwrap-->
      </div>