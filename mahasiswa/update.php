<!-- fungsi masukan -->
<?php include '../partial/top.php';
include 'koneksi.php';
$idku = $_GET['id'];
$update = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$idku");
$dataupdate = mysqli_fetch_array($update);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header waves-effect w-md waves-light center">
                    <h5 class=" text-black">Update Data Mahasiswa</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="prosesupdate.php">

                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Nama</label>
                            <div class="col-10">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $dataupdate['id']; ?>">
                                <input type="teks" class="form-control" name="nama" value="<?php echo $dataupdate['nama']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Nama</label>
                            <div class="col-10">
                                <select class="form-control " name="jenis_kelamin">
                                    <option><?php echo $dataupdate['jenis_kelamin']; ?></option>
                                    <?php
                                    if ($dataupdate['jenis_kelamin'] = 'pria') { ?>
                                        <option value="wanita" <?php if ($dataupdate['jenis_kelamin'] == 'wanita') echo 'checked' ?>>wanita</option>

                                    <?php
                                    } elseif ($dataupdate['jenis_kelamin'] = 'wanita') { ?>
                                        <option value="pria" <?php if ($dataupdate['jenis_kelamin'] == 'pria') echo 'checked' ?>>pria</option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Jenis Kelamain</label>

                            <div class="col-10">
                                <label><input type="radio" name="jenis_kelamin" name="jenis_kelamin" value="pria" <?php if ($dataupdate['jenis_kelamin'] == 'pria') echo 'checked' ?>>pria</label>
                                <label><input type="radio" name="jenis_kelamin" value="wanita" name="jenis_kelamin" <?php if ($dataupdate['jenis_kelamin'] == 'wanita') echo 'checked' ?>>wanita</label>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Alamat</label>
                            <div class="col-10">
                                <input type="teks" class="form-control" name="alamat" value="<?php echo $dataupdate['alamat']; ?>">
                            </div>
                        </div>


                        <hr>
                        <div class="form-group text-right m-b-0">
                            <button type="reset" class="btn btn-secondary ">
                                <i class="fi-rewind"><a href="index.php"></i>Kembali</a>
                            </button>
                            <input class="btn btn-primary " type="submit" value="Update">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../partial/bottom.php' ?>