<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card">
                        <div class="card-header text-light bg-dark">
                            Form Tambah Buku
                        </div>
                        <div class="card-body table-responsive">
                            <form action="main/savebuku" id="save" method="post" enctype="multipart/form-data">
                                <table class="table">
                                    <tr>
                                        <td>Judul Buku</td>
                                        <td>
                                            <input type="text" placeholder="Judul Buku" class="form-control"
                                                name="judul">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kategori Buku</td>
                                        <td>
                                            <select class="form-control" name="kategori">
                                                <option value="">Pilih</option>
                                                <?php
$q = $this->db->get("kategori");
foreach($q->result() as $row){
?>
                                                <option value="<?php echo $row->kat ?>"><?php echo $row->kat ?></option>
                                                <?php }  ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pengarang</td>
                                        <td>
                                            <input type="text" placeholder="Nama Pengarang" class="form-control "
                                                autocomplete="off" name="pengarang">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tanggal Terbit Buku</td>
                                        <td>
                                            <input type="date" placeholder="Nama Pengarang" class="form-control "
                                                autocomplete="off" name="terbit">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kondisi Buku</td>
                                        <td>
                                            <select class="form-control" name="kondisi">
                                                <option value="">Pilih</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Rusak">Rusak</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Foto / Gambar</td>
                                        <td>
                                            <center>
                                                <img id="blah" class='img-fluid mb-3' width='280'
                                                    src="assets/nofoto.jpg" alt="your image" />
                                            </center>
                                            <input type="file" name="gambar" class="form-control mb-3 bersih"
                                                onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                                            <span class="badge badge-warning mb-3"><strong>Informasi</strong> Input
                                                Gambar
                                                Maksimal 3mb !</span>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>

                                            <a href="main/buku" class="btn btn-danger "><i class="fa fa-sync-alt"></i>
                                                Kembali</a>
                                            <button type="submit" class="btn btn-primary "><i
                                                    class="fa fa-paper-plane"></i> Simpan</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>