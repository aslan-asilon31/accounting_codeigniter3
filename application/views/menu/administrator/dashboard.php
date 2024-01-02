<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Selamat Datang Di Aplikasi Match Terpadu</h1>
                <br>
                <center>
                    <p>Repost by <a href='https://code.candilkuya.com/' title='code.candilkuya.com' target='_blank'>code.candilkuya.com</a></p>
                </center>

            </div>
        </div>
        <div class="row">
            <?php
            if (isset($_SESSION['alert'])) {
                echo $_SESSION['alert'];
                $this->session->unset_userdata('alert');
            }
            ?>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#1" data-toggle="tab">
                            <h4>Profile</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#2" data-toggle="tab">
                            <h4>Ganti Password</h4>
                        </a>
                    </li>
                    <li <?php echo (($this->session->userdata('user_level') != '1') ? 'style="display:none"' : ''); ?>>
                        <a href="#3" data-toggle="tab">
                            <h4>Setting Aplikasi</h4>
                        </a>
                    </li>
                    <li <?php echo (($this->session->userdata('user_level') != '1') ? 'style="display:none"' : ''); ?>>
                        <a href="#4" data-toggle="tab">
                            <h4>User Access</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="1">
                <br>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-xs-offset-1 col-xs-2">Username</label>
                        <div class="col-xs-6">
                            <div class="well well-sm">
                                <?php echo $this->session->userdata('user_name'); ?>
                            </div>
                            <!-- <input type="text" class="form-control" name="" value="<?php echo $this->session->userdata('user_name'); ?>" readonly> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-offset-1 col-xs-2">Cabang</label>
                        <div class="col-xs-6">
                            <div class="well well-sm">
                                <?php echo $this->session->userdata('user_branchname'); ?>
                            </div>
                            <!-- <input type="text" class="form-control" name="" value="<?php echo $this->session->userdata('user_branchname'); ?>" readonly> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-offset-1 col-xs-2">Status Cabang</label>
                        <div class="col-xs-6">
                            <div class="well well-sm">
                                <?php echo (($this->session->userdata('branch_sts') == '0') ? 'PUSAT' : 'CABANG'); ?>
                            </div>
                            <!-- <input type="text" class="form-control" name="" value="<?php echo (($this->session->userdata('branch_sts') == '0') ? 'PUSAT' : 'CABANG'); ?>" readonly> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-offset-1 col-xs-2">User Level</label>
                        <div class="col-xs-6">
                            <div class="well well-sm">
                                <?php
                                if ($this->session->userdata('user_level') == '1') {
                                    echo '<i class="fa fa-user-secret fa-lg"></i> Administrator';
                                }
                                if ($this->session->userdata('user_level') == '2') {
                                    echo '<i class="fa fa-user-circle fa-lg"></i> Super';
                                }
                                if ($this->session->userdata('user_level') == '3') {
                                    echo '<i class="fa fa-user fa-lg"></i> Regular';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                                <button type="button" onclick="test()" class="btn btn-primary">Test</button>
                            </div> -->
                </form>
            </div>
            <div class="tab-pane fade" id="2">
                <br>
                <form id="form_password" class="form-horizontal">
                    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                    <div class="form-group">
                        <label class="col-xs-offset-1 col-xs-2 control-label">Password Lama</label>
                        <div class="col-xs-6">
                            <input type="password" name="old_pass" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-offset-1 col-xs-2 control-label">Password Baru</label>
                        <div class="col-xs-6">
                            <input type="password" name="new_pass" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-offset-1 col-xs-2 control-label">Konfirmasi</label>
                        <div class="col-xs-6">
                            <input type="password" name="confirm_pass" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-6">
                            <button type="button" id="btnPass" onclick="change_pass()" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="3">
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Cabang</strong>
                            </div>
                            <div class="panel-body">
                                <form id="form_branch" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Cabang</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_branch" id="os_branch" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Setting - Rekening/Akun Transaksi Pembelian</strong>
                            </div>
                            <div class="panel-body">
                                <form id="form_prccoa" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun HPP</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prccoadeb" id="os_prccoadeb" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Diskon</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prccoadisc" id="os_prccoadisc" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun PPN</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prccoappn" id="os_prccoappn" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Biaya</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prccoacost" id="os_prccoacost" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Hutang</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prccoacrd" id="os_prccoacrd" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Hutang Main Vendor Sub-Kontrak</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prccoamaincrd" id="os_prccoamaincrd" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Hutang Sub Vendor Sub-Kontrak</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prccoasubcrd" id="os_prccoasubcrd" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-offset-1 col-xs-2 control-label">Keterangan</label>
                                        <div class="col-xs-6">
                                            <textarea name="stg_infoprccoa" class="form-control" rows="4" style="resize:vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-6">
                                            <button type="button" class="btn btn-sm btn-primary" onclick="sub_prccoa()">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Setting - Rekening/Akun Transaksi Pembelian GA</strong>
                            </div>
                            <div class="panel-body">
                                <form id="form_prccoa" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun HPP</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prcgacoadeb" id="os_prcgacoadeb" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Diskon</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prcgacoadisc" id="os_prcgacoadisc" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun PPN</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prcgacoappn" id="os_prcgacoappn" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Biaya</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prcgacoacost" id="os_prcgacoacost" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Hutang</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_prcgacoacrd" id="os_prcgacoacrd" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-offset-1 col-xs-2 control-label">Keterangan</label>
                                        <div class="col-xs-6">
                                            <textarea name="stg_infoprcgacoa" class="form-control" rows="4" style="resize:vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-6">
                                            <button type="button" class="btn btn-sm btn-primary" onclick="sub_prcgacoa()">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Setting - Keterangan Invoice</strong>
                            </div>
                            <div class="panel-body">
                                <form id="form_bankinv" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun PPN</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_bankinvppn" id="os_bankinvppn" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-offset-1 col-xs-2 control-label">Keterangan PPN Invoice</label>
                                        <div class="col-xs-6">
                                            <textarea name="stg_infoinvppn" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Bank</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_bankinfo" id="os_bankinfo" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-offset-1 col-xs-2 control-label">Keterangan Invoice</label>
                                        <div class="col-xs-6">
                                            <textarea name="stg_infoinvc" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-6">
                                            <button type="button" class="btn btn-sm btn-primary" onclick="sub_bankinfo()">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Setting - Rekening/Akun Nota Gantung Untuk Transaksi Finance</strong>
                            </div>
                            <div class="panel-body">
                                <form id="form_notafin" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Nota Gantung</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_nota" id="os_nota" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-offset-1 col-xs-2 control-label">Keterangan</label>
                                        <div class="col-xs-6">
                                            <textarea name="stg_infonotafin" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-6">
                                            <button type="button" class="btn btn-sm btn-primary" onclick="sub_notafin()">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Setting - Rekening/Akun Transaksi Giro</strong>
                            </div>
                            <div class="panel-body">
                                <form id="form_giroacc" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Piutang Giro</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_giroaccrcv" id="os_giroaccrcv" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3">Akun Hutang Giro</label>
                                        <div class="col-sm-6">
                                            <select class="form-control text-center" name="os_girodebt" id="os_girodebt" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-offset-1 col-xs-2 control-label">Keterangan</label>
                                        <div class="col-xs-6">
                                            <textarea name="stg_infogiroacc" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-6">
                                            <button type="button" class="btn btn-sm btn-primary" onclick="sub_giroacc()">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="4"><br>
                <form class="form-horizontal" id="form_useraccess">
                    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                    <div class="form-group">
                        <label class="col-xs-2 control-label">User</label>
                        <div class="col-xs-6">
                            <select class="form-control" id="user_list" name="user_list" data-live-search="true">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>Data Master</strong><br>
                                    <input type="checkbox" name="master_pick" onclick="pickall_master()"> Pilih Semua
                                </div>
                                <div class="panel-body" id="mstr">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>Data Transaksi</strong><br>
                                    <input type="checkbox" name="trx_pick" onclick="pickall_trx()"> Pilih Semua
                                </div>
                                <div class="panel-body" id="trx">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-xs-offset-1 col-xs-2">
                                <button onclick="useraccess_submit()" id="subUsrAccs" type="button" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<?php include 'application/views/layout/administrator/jspack.php'; ?>
<script>
    $(document).ready(function() {
        // os_data();
        checkboxes();
        drop_user();
        drop_branch('os_branch');
        drop_coa('os_prccoadeb');
        drop_coa('os_prccoacrd');
        drop_coa('os_prccoamaincrd');
        drop_coa('os_prccoasubcrd');
        drop_coa('os_prccoadisc');
        drop_coa('os_prccoappn');
        drop_coa('os_prccoacost');
        drop_coa('os_nota');
        drop_coa('os_giroaccrcv');
        drop_coa('os_girodebt');
        drop_coa('os_bankinvppn');
        drop_coa('os_prcgacoadeb');
        drop_coa('os_prcgacoadisc');
        drop_coa('os_prcgacoappn');
        drop_coa('os_prcgacoacost');
        drop_coa('os_prcgacoacrd');
        drop_bank();
        $('#user_list').change(function() {
            check_access($('#user_list option:selected').val());
        });
        $('#os_bankinfo').change(function() {
            if ($('#os_bankinfo option:selected').val() != '') {
                pick_bank($('#os_bankinfo option:selected').val());
            }
        });
        $('#os_branch').change(function() {
            os_data($('#os_branch option:selected').val());
        });
    });

    function os_data(id) {
        $.ajax({
            url: "<?php echo site_url('Dashboard/get_appdata/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="stg_infoinvc"]').val(data.PRINT_BANKINVOICE);
                $('[name="stg_infoinvppn"]').val('Akun PPN : ' + data.INV_COANAMEPPN);
                $('[name="stg_infoprccoa"]').val('Akun HPP : ' + data.PRC_COANAME + '\n' + 'Akun Hutang : ' + data.PRC_COANAMEAG + '\n' + 'Akun Hutang Main-Vendor Sub-Kontrak : ' + data.PRC_COAMAINNAME + '\n' + 'Akun Hutang Sub-Vendor Sub-Kontrak : ' + data.PRC_COASUBNAME + '\n' + 'Akun Diskon : ' + data.PRC_COANAMEDISC + '\n' + 'Akun PPN : ' + data.PRC_COANAMEPPN + '\n' + 'Akun Biaya : ' + data.PRC_COANAMECOST);
                $('[name="stg_infoprcgacoa"]').val('Akun HPP : ' + data.PRCGA_COANAMESUPPLY + '\n' + 'Akun Hutang : ' + data.PRCGA_COANAMEDEBT + '\n' + 'Akun Diskon : ' + data.PRCGA_COANAMEDISC + '\n' + 'Akun PPN : ' + data.PRCGA_COANAMEPPN + '\n' + 'Akun Biaya : ' + data.PRCGA_COANAMECOST);
                $('[name="stg_infonotafin"]').val('Akun Nota Gantung : ' + data.NOTAFIN_ACCNAME);
                $('[name="stg_infogiroacc"]').val('Akun Piutang Giro : ' + data.ACCRCVGIRO_ACCNAME + '\n' + 'Akun Hutang Giro : ' + data.DEBTGIRO_ACCNAME);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Gagal Ambil Data Setting Aplikasi');
            }
        });
    }

    function change_pass() {
        var x = check_pass();
        if (x == 1) {
            $('[name="new_pass"]').parent().parent().addClass('has-error');
            $('[name="new_pass"]').next().text('Password Tidak Sama');
            $('[name="confirm_pass"]').parent().parent().addClass('has-error');
            $('[name="confirm_pass"]').next().text('Password Tidak Sama');
        } else {
            $.ajax({
                url: "<?php echo site_url('Dashboard/pass_change/') ?>",
                type: "POST",
                data: $('#form_password').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) {
                        alert('Password Berhasil Diganti');
                    } else {
                        for (var i = 0; i < data.inputerror.length; i++) {
                            $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error');
                            $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]);
                        }
                    }
                    $('#btnPass').text('save');
                    $('#btnPass').attr('disabled', false);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                    $('#btnPass').text('save');
                    $('#btnPass').attr('disabled', false);
                }
            });
        }
    }

    function check_pass() {
        var n = $('[name="new_pass"]').val();
        var c = $('[name="confirm_pass"]').val();
        var s = (n != c) ? 1 : 0;
        return s;
    }

    function sub_prccoa() {
        $.ajax({
            url: "<?php echo site_url('Dashboard/save_prccoa/') ?>",
            type: "POST",
            data: $('form').serialize(),
            dataType: "JSON",
            success: function(data) {
                alert('Data Berhasil Disimpan');
                os_data();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

    function sub_bankinfo() {
        $.ajax({
            url: "<?php echo site_url('Dashboard/save_bankinfo/') ?>",
            type: "POST",
            data: $('form').serialize(),
            dataType: "JSON",
            success: function(data) {
                alert('Data Berhasil Disimpan');
                os_data();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

    function sub_notafin() {
        $.ajax({
            url: "<?php echo site_url('Dashboard/save_notafin/') ?>",
            type: "POST",
            data: $('form').serialize(),
            dataType: "JSON",
            success: function(data) {
                alert('Data Berhasil Disimpan');
                os_data((isset($('#os_branch option:selected').val())) ? $('#os_branch option:selected').val() : 0);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

    function sub_giroacc() {
        $.ajax({
            url: "<?php echo site_url('Dashboard/save_giroacc/') ?>",
            type: "POST",
            data: $('form').serialize(),
            dataType: "JSON",
            success: function(data) {
                alert('Data Berhasil Disimpan');
                os_data();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

    function sub_prcgacoa() {
        $.ajax({
            url: "<?php echo site_url('Dashboard/save_prcgacoa/') ?>",
            type: "POST",
            data: $('form').serialize(),
            dataType: "JSON",
            success: function(data) {
                alert('Data Berhasil Disimpan');
                os_data((isset($('#os_branch option:selected').val())) ? $('#os_branch option:selected').val() : 0);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

    function pickall_master() {
        $('[name="master_pick"]').click(function() {
            $('.mstr').prop('checked', $(this).prop('checked'));
        });
    }

    function pickall_trx() {
        $('[name="trx_pick"]').click(function() {
            $('.trx').prop('checked', $(this).prop('checked'));
        });
    }

    function useraccess_submit() {
        $('#subUsrAccs').text('Processing....');
        $('#subUsrAccs').attr('disabled', true);
        $.ajax({
            url: "<?php echo site_url('Dashboard/add_useraccess') ?>",
            type: "POST",
            data: $('#form_useraccess').serialize(),
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    alert('Hak Akses Sudah Ditambah');
                }
                $('#subUsrAccs').text('Submit');
                $('#subUsrAccs').attr('disabled', false);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#subUsrAccs').text('Submit');
                $('#subUsrAccs').attr('disabled', false);
            }
        });
    }

    function checkboxes() {
        $('#mstr').empty();
        $('#trx').empty();
        $.ajax({
            url: "<?php echo site_url('Dashboard/get_menulist') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                for (var i = 0; i < data['mst'].length; i++) {
                    var chkbox = $('<div class="col-xs-4"><input type="checkbox" name="mstr[]" class="mstr" value="' + data['mst'][i]['MENU_CODE'] + '" /> ' + data['mst'][i]['MENU_NAME'] + '</div>');
                    chkbox.appendTo('#mstr');
                }
                for (var i = 0; i < data['trx'].length; i++) {
                    var chkbox = $('<div class="col-xs-4"><input type="checkbox" name="trx[]" class="trx" value="' + data['trx'][i]['MENU_CODE'] + '" /> ' + data['trx'][i]['MENU_NAME'] + '</div>');
                    chkbox.appendTo('#trx');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function drop_user() {
        $.ajax({
            url: "<?php echo site_url('Dashboard/get_user') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                var select = document.getElementById('user_list');
                var option;
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["USER_ID"]
                    option.text = data[i]["USER_NAME"];
                    select.add(option);
                }
                $('#user_list').selectpicker({});
                $('#user_list').selectpicker('refresh');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function drop_branch(id) {
        $.ajax({
            url: "<?php echo site_url('administrator/Master/getcoabrc') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#' + id).empty();
                var select = document.getElementById(id);
                var option;
                option = document.createElement('option');
                option.value = ''
                option.text = 'Pilih';
                select.add(option);
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["BRANCH_ID"]
                    option.text = data[i]["BRANCH_NAME"];
                    select.add(option);
                }
                $('#' + id).selectpicker({
                    dropupAuto: false
                });
                $('#' + id).selectpicker('refresh');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax drop coa');
            }
        });
    }

    function drop_coa(parid) {
        $.ajax({
            url: "<?php echo site_url('administrator/Master/getcoa') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#' + parid).empty();
                var select = document.getElementById(parid);
                var option;
                option = document.createElement('option');
                option.value = ''
                option.text = 'Pilih';
                select.add(option);
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["COA_ID"]
                    option.text = data[i]["COA_ACC"] + '-' + data[i]["COA_ACCNAME"];
                    select.add(option);
                }
                $('#' + parid).selectpicker({
                    dropupAuto: false
                });
                $('#' + parid).selectpicker('refresh');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax drop coa');
            }
        });
    }

    function drop_bank() {
        $.ajax({
            url: "<?php echo site_url('administrator/Master/get_masterbank') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#os_bankinfo').empty();
                var select = document.getElementById('os_bankinfo');
                var option;
                option = document.createElement('option');
                option.value = ''
                option.text = 'Pilih';
                select.add(option);
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["BANK_ID"]
                    option.text = data[i]["BANK_NAME"];
                    select.add(option);
                }
                $('#os_bankinfo').selectpicker({
                    dropupAuto: false
                });
                $('#os_bankinfo').selectpicker('refresh');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax drop bank');
            }
        });
    }

    function check_access(id) {
        $('input:checkbox').prop('checked', false);
        $.ajax({
            url: "<?php echo site_url('Dashboard/get_useraccess/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                for (var i = 0; i < data.length; i++) {
                    $('input[type="checkbox"][value="' + data[i]["MENU_CODE"] + '"]').prop('checked', true);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Pilih Salah Satu User');
            }
        });
    }

    function pick_bank(id) {
        $.ajax({
            url: "<?php echo site_url('administrator/Searchdata/pick_bank/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="stg_infoinvc"]').val(data.BANK_NAME + ' ' + data.BANK_BRANCH + ' A/C ' + data.BANK_ACC + ' A/N ' + data.BANK_ACCNAME);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax pick bank');
            }
        });
    }

    function test() {
        $.ajax({
            url: "<?php echo site_url('Dashboard/test') ?>",
            type: "POST",
            data: $('#form_useraccess').serialize(),
            dataType: "JSON",
            success: function(data) {
                alert(data.tes);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }
</script>
</body>

</html>