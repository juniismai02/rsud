<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar - <?php echo $title; ?></title>
    
    <!-- Meta Tags -->
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Pematangsiantar">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">

    <?php if ($this->uri->segment(1) == 'berita' AND $this->uri->segment(2) == 'detail') { 
        $rows = $this->model_utama->view_where('berita', array('judul_seo' => $this->uri->segment(3)))->row_array();
        echo '<meta property="og:title" content="'.$title.'">
              <meta property="og:type" content="article">
              <meta property="og:url" content="'.base_url().''.$this->uri->segment(3).'">
              <meta property="og:image" content="'.base_url().'asset/foto_berita/'.$rows['gambar'].'">
              <meta property="og:description" content="'.$description.'">';
    } ?>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>">

    <!-- Additional Meta Tags -->
    <meta name="title" content="Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar">
    <meta itemprop="name" content="Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Pematangsiantar">
    <meta itemprop="articleSection" content="index.html">
    <meta name="google-site-verification" content="dl7_dxHbryDGPD1ZJpaNztEcbAEV7K8fVzc5wD1Malo">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Pematangsiantar">
    <meta http-equiv="content-language" content="id">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">
    <link rel="canonical" href="<?= base_url(); ?>template/<?= template(); ?>/index.html">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Pematangsiantar">
    <meta property="og:title" content="Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Pematangsiantar">
    <meta property="og:url" content="index.html">
    <meta property="og:description" content="Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Pematangsiantar - Menyajikan Seputar Informasi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Pematangsiantar">
    <meta property="og:image" content="path/to/image.jpg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    
    <!-- CSS -->
    <link href="<?= base_url(); ?>template/<?= template(); ?>/assets/css/datatable.css" rel="stylesheet">
    <link href="<?= base_url(); ?>template/<?= template(); ?>/assets/css/app.css" rel="stylesheet">
    <link href="<?= base_url(); ?>template/<?= template(); ?>/assets/css/add.css" rel="stylesheet">
    <link href="<?= base_url(); ?>template/<?= template(); ?>/assets/plugins/slick/css/slick.css" rel="stylesheet">
    <link href="<?= base_url(); ?>template/<?= template(); ?>/assets/plugins/slick/css/slick-theme.css" rel="stylesheet">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-215056084-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-215056084-1');
    </script>
    
    <!-- Custom JavaScript -->
    <script>
        function updateClock() {
            var currentDate = new Date();
            var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var currentDay = days[currentDate.getDay()];
            var hours = (currentDate.getHours() < 10) ? '0' + currentDate.getHours() : currentDate.getHours();
            var minutes = (currentDate.getMinutes() < 10) ? '0' + currentDate.getMinutes() : currentDate.getMinutes();
            var seconds = (currentDate.getSeconds() < 10) ? '0' + currentDate.getSeconds() : currentDate.getSeconds();

            var jam = document.getElementById('dynamic-day');
            jam.innerHTML = currentDay + ', ' + currentDate.getDate() + ' ' + getMonthName(currentDate.getMonth()) + ' ' + currentDate.getFullYear() + ' <br> ' + hours + ':' + minutes + ':' + seconds + ' WIB';
        }

        function getMonthName(month) {
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            return months[month];
        }

        setInterval(updateClock, 1000);
        updateClock();
    </script>
    <script>
        $(document).ready(function(){
            moment().tz("Asia/Jakarta").format();
            var timeout = 50000;
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-full-width",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": timeout,
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            $('#toast-container').addClass("jello animated mt-5");
            setTimeout(function() {
                $('#toast-container').removeClass("jello").addClass("slideOutDown");
            }, timeout);

            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('jam').innerHTML = h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            if (document.getElementById('jam')) {
                startTime();
            }

            function checkTime(i) {
                if (i < 10) {i = "0" + i;}
                return i;
            }

            $('.js-tilt').tilt({ scale: 1.1 });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').on('click', function(e) {
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
                }
                var $subMenu = $(this).next('.dropdown-menu');
                $subMenu.toggleClass('show');

                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass('show');
                });

                return false;
            });
        });
    </script>
    
    <style>
        @media only screen and (max-width: 768px) {
            .minidashboard__body {
                flex-direction: column;
            }
            .news3col__col {
                width: 100%;
            }
        }
    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
    <h1 style="display: none">Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar Pematangsiantar</h1>

    <div class="popup">
        <div class="popup-overlay"></div>
        <div class="popup-wrap">
            <div class="popup-content">
                <div class="popup-close">&times;</div>
                <div class="popsosial">
                    <div class="popsosial-img">
                        <img src="assets/img/main-banner.html" alt="Banner">
                    </div>
                    <div class="popsosial-title"></div>
                    <div class="popsosial-summary"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bdgcontent">
        <div class="floatmenu">
            <div class="floatmenu__wrap"></div>
        </div>

        <div class="sticky-trigger"></div>
        <div class="mainmenu-spacer"></div>

        <!-- Content -->
        <?php
            $this->load->view(template().'/header');
            echo $contents;
            $this->load->view(template().'/footer');
        ?>
    </div>

    <!-- Back to top -->
    <a id="back-to-top" href="<?= base_url(); ?>template/<?= template(); ?>/#" class="back-to-top" role="button">
        <span class="fa fa-arrow-up" aria-hidden="true"></span>
    </a>
    <!-- End Back to top -->

    <!-- JavaScript Files -->
    <script src="<?= base_url(); ?>template/<?= template(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>template/<?= template(); ?>/assets/js/datatable.js"></script>
    <script src="<?= base_url(); ?>template/<?= template(); ?>/assets/plugins/slick/js/slick.min.js"></script>
    <script src="<?= base_url(); ?>template/<?= template(); ?>/assets/js/main.js"></script>
    <script src="<?= base_url(); ?>template/<?= template(); ?>/assets/js/custom.js"></script>
    <script src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
</body>
</html>
