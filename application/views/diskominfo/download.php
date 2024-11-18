<div class="outer-wrapper my-5" id="outer-wrapper">
    <style>
        /* CSS Styling */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        #outer-wrapper {
            margin-top: 50px;
        }

        .fbt-elastic-container {
            max-width: 1200px;
        }

        .fbt-sep-title {
            background-color: #3498db;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            color: #fff;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #3498db;
            color: #fff;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .button {
            display: inline-block;
            background-color: #29b332;
            color: #ffffff;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #1f9023;
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
                                    <div class="xlabel"><span>Daftar Dokumen</span></div>
                                </div>

                                <table id='data-table' class='table table-striped table-bordered' style='width: 100%'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama File</th>
                                            <th>Hits</th>
                                            <th style='width:70px'>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = $this->uri->segment(3) + 1;
                                        foreach ($download->result_array() as $r) { 
                                            echo "<tr>
                                                <td>$no</td>
                                                <td>$r[judul]</td>
                                                <td>$r[hits] Kali</td>
                                                <td><a class='button' style='background:#29b332; color:#ffffff; padding:2px 10px' href='".base_url()."download/file/$r[nama_file]'>Download</a></td>
                                            </tr>";
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable();
        });
    </script>
</div>
