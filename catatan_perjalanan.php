<div class="card">
    <div class="card-header">
    <a href="user.php?url=dashboard" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>

                                        <span class="text">Kembali</span>
                                    </a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Lokasi</th>
                                            <th>Suhu Tubuh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                                    $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                                    foreach($data as $value){
                                        $pecah = explode("|", $value);
                                        @$key = $pecah['1']."|".$pecah['2'];
                                        if($key==$user){
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pecah['3']; ?></td>
                                            <td><?= $pecah['4']; ?></td>
                                            <td><?= $pecah['5']; ?></td>
                                            <td><?= $pecah['6']."°C"; ?></td>
                                        </tr>
                                    <?php } } ?>
                                    </tbody>
                                </table>
    </div>
    </div>
</div>