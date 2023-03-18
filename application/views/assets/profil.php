<?php
$id = $this->session->userdata("id");
$q = $this->db->query("select * from admin  where id='$id'");

$row =  $q->row();
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-header text-light bg-dark text-light">
                                    <!-- <a class="btn btn-warning text-light mr-3"><i class="fa fa-user"></i> Profil Saya</a> -->
                                </div>
                                <div class="card-body table-responsive">
                                    <center>
                                        <img src="assets/pria.png" alt="" class="mb-3 img img-fluid rounded-circle"
                                            width="90">
                                    </center>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Nama</td>
                                            <td><?php echo $row->nama ?></td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td><?php echo $row->username ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-header text-light bg-dark text-light">
                                    <!-- <a class="btn btn-warning"><i class="fa fa-edit"></i> Edit Profil</a> -->
                                </div>
                                <div class="card-body table-responsive">
                                    <form action="main/updateprofil" id="editprofil" method="post">
                                        <table class="table">
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" name="nama"
                                                        value="<?php echo $row->nama ?>" required></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Username</td>
                                                <td><input type="text" class="form-control" name="username"
                                                        value="<?php echo $row->username ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><input type="password" class="form-control" name="password"
                                                        placeholder="Kosongkan jika tidak diubah..."></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary"><i
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

</div>
</div>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->