<?php include "../partial/top.php" ?>
<?php
include "koneksi.php";
?>

<div class="topbar">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header waves-effect w-md waves-light center">
                    <h5 class=" text-black">Tabel Data Mahasiswa</h5>
                </div>

                <div class="card-body">
                    <a class="btn btn-success waves-effect w-md waves-light" href="form_tambah.php"><i class="fa fa-plus"></i> Tambah</a>
                    <hr>
                    </table>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                            $i=0;
                            $data = mysqli_query($conn, "SELECT * FROM mahasiswa");
                            while ($isi = mysqli_fetch_array($data)) {
                                $i++;
                            ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                    <td><?php echo $isi['nama']; ?></td>
                                    <td><?php echo $isi['alamat']; ?></td>
                                    <td><?php echo $isi['jenis_kelamin']; ?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $isi['id']; ?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                        <a class="edit" href="update.php?id=<?php echo $isi['id']; ?>">Update</a>
                                        <a href="hapus.php?id=<?php echo $isi['id']; ?>" class="herf"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>

                                        <a class="hapus" href="hapus.php?id=<?php echo $isi['id'];  ?>">hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../partial/bottom.php" ?>