        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bank Masuk</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_bank_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_bank_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_bank_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_bank_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#myKas" data-toggle="tab">Bank Masuk</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_bank">
                            <div class="tab-content">
                                <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                <div class="tab-pane fade in active" id="myKas">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Bank Masuk</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Bank Masuk</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_bankin()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="bank_nomor" readonly>
                                            <input type="hidden" value='0' class="form-control" name="bank_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date dtp' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input type='text' class="form-control input-group-addon" name="bank_tgl" value="<?= date('Y-m-d')?>"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kode Bank</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_bank()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="bank_kode">
                                            <input type="hidden" value='' class="form-control" name="kode_bank">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Akun Debet</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_acc()"><span class="glyphicon glyphicon-search"></span></button>
                                            <input class="form-control" type="hidden" name="acc_id">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="bank_acc" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="bank_acc_info" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Customer</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_cust()"><span class="glyphicon glyphicon-search"></span></button>
                                            <input class="form-control" type="hidden" name="bank_customer_id">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="bank_kode_customer" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="bank_nama_customer" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <textarea name="bank_info" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Mata Uang</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_curr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="curr_name" readonly>
                                            <input type="hidden" name="curr_id" value="0">
                                            <input type="hidden" name="curr_rate" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Detail Giro</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" onclick="hidegiro_()" id="det_radio0" name="det_radio">Tampilkan</label>
                                            <label class="radio-inline"><input type="radio" onclick="hidegiro_()" id="det_radio1" name="det_radio">Sembunyikan</label>
                                        </div>
                                    </div>
                                    <div id="det_giro" class="col-sm-offset-3">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipe</label>
                                            <div class="col-sm-7">
                                                <select class="form-control" name="bank_type1">
                                                    <option value="G">Giro</option>
                                                    <option value="T">Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No. Giro/Transfer</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="bank_no_giro1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal</label>
                                            <div class="col-sm-7">
                                                <div class='input-group date dtp' id='dtp1'>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                    <input type='text' class="form-control input-group-addon" name="bank_giro_tgl" value="<?= date('Y-m-d')?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nominal</label>
                                            <div class="col-sm-7">
                                                <input class="form-control curr-num-perc" type="text" name="nominal1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <a href="javascript:void(0)" onclick="save_bank_in_detail1()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_bank_in_detail1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Type</th>
                                                            <th class="text-center">No. Giro/Transfer</th>
                                                            <th class="text-center">Tgl Giro</th>
                                                            <th class="text-center">Nominal</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Total</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control curr-num-perc" name="grand_total_" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Detail Bank Masuk</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" onclick="hidebm_()" id="det_radioa0" name="det_radioa">Tampilkan</label>
                                            <label class="radio-inline"><input type="radio" onclick="hidebm_()" id="det_radioa1" name="det_radioa">Sembunyikan</label>
                                        </div>
                                    </div>
                                    <div id="det_bankmasuk" class="col-sm-offset-3">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Akun</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-info btn-block" onclick="srch_acc2()"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" name="acc_detail" readonly>
                                                <input class="form-control" type="hidden" name="acc_id_detail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipe</label>
                                            <div class="col-sm-7">
                                                <select class="form-control" name="bank_type2">
                                                    <option value="G">Giro</option>
                                                    <option value="T">Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No. Giro/Transfer</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="bank_no_giro2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Reff</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-info btn-block" onclick="srch_inv()"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" name="no_jual">
                                                <input class="form-control" type="hidden" name="invoice_id">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Keterangan</label>
                                            <div class="col-sm-7">
                                                <textarea name="ket_detail" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nominal</label>
                                            <div class="col-sm-7">
                                                <input class="form-control curr-num-perc" type="text" name="nominal2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <a href="javascript:void(0)" onclick="save_bank_in_detail2()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_bank_in_detail2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Akun</th>
                                                            <th class="text-center">Tipe</th>
                                                            <th class="text-center">No Giro/Transfer</th>
                                                            <th class="text-center">Reff</th>
                                                            <th class="text-center">Keterangan</th>
                                                            <th class="text-center">Nominal</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Total</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control curr-num-perc" name="grand_total" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="save_bank_in()" class="btn btn-block btn-primary btn-default btnCh">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                Simpan
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="javascript:void(0)" onclick="printPre()" class="btn btn-block btn-info btn-default">
                                                <span class="glyphicon glyphicon-print"></span>
                                                Cetak
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="approve_bank_in()" class="btn btn-block btn-primary btnApr" disabled>
                                                Approve
                                            </button>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="disapprove_bank_in()" class="btn btn-block btn-primary btnApr" disabled>
                                                Disapprove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search -->
    <div class="modal fade" id="modal_bank_in_edit" name="modal_bank_in_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_bank_in_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Bank Masuk</th>
                                        <th>Nama Account</th>
                                        <th>Tanggal</th>  
                                        <th>Keterangan</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal Account -->
    <div class="modal fade" id="modal_account" name="modal_account" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="formku" action="<?php echo base_url('Finance/cash_in') ; ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <!-- <input type="text" class="form-control" name="dept"> -->
                    <div class="row">
                        <!-- <input type="text" name="id_meeting" >
                        <input type="text" name="title" >
                        <input type="text" name="tgl" >
                        <input type="text" name="jam" > -->
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <div class="maxh">
                            <table id="dtb_acc" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                                        
                            </table>
                        </div>
                        </div>
                    </div>                  
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" onclick="kirim_email()" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-send"></span> Send</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Kode Bank -->
    <div class="modal fade" id="modal_bank" name="modal_bank" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <div class="maxh">
                            <table id="dtb_bank" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Info</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead> 
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Customer -->
    <div class="modal fade" id="modal_cust" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_cust" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                                <tbody id="tb_content"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Currency -->
    <div class="modal fade" id="modal_curr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_curr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Rate</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Invoice -->
    <div class="modal fade" id="modal_inv" name="modal_inv" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cari Invoice</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <div class="maxh">
                                <table id="dtb_inv" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Invoice</th>
                                            <th>Tanggal</th>
                                            <th>Nama Customer</th>
                                            <th>Keterangan</th>
                                            <th>Pilih</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>    
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function() 
        {
            $('#det_radio0').prop('checked',true);
            $('#det_radioa0').prop('checked',true);
            $('#myDIV1').css({'display':'none'});
            $('#myDIV2').css({'display':'none'});
            $('[name="bank_no_giro1"]').on('input',function()
            {
                $('[name="bank_no_giro2"]').val($('[name="bank_no_giro1"]').val());
            });
            $('[name="bank_no_giro2"]').on('input',function()
            {
                $('[name="bank_no_giro1"]').val($('[name="bank_no_giro2"]').val());
            });
            $('[name="nominal1"]').on('input',function(){
                $('[name="nominal2"]').val($('[name="nominal1"]').val());
            });
            var id = $('[name="bank_id"]').val();
            bank_masuk_detail1(id);
            bank_masuk_detail2(id);
            gen_total(id);
            gen_total_(id);
        })
        function hidebm_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_bankmasuk').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_bankmasuk').css({'display':'block'});
            }
        }
        function hidegiro_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_giro').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_giro').css({'display':'block'});
            }
        }
        var sts;
        function edit_sch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if (sts=='1')
                    {
                        $('[name="bank_acc"]').val(data.COA_ACC);
                        $('[name="bank_acc_info"]').val(data.COA_ACCNAME);
                        $('[name="acc_id"]').val(data.COA_ID);
                    }
                    else
                    {
                        $('[name="acc_detail"]').val(data.COA_ACC);
                        $('[name="acc_id_detail"]').val(data.COA_ID);
                    }
                     $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function gen_bankin()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_bankin')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="bank_id"]').val(data.id);
                    $('[name="bank_nomor"]').val(data.kode);
                    $('#genbtn').attr('disabled',true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
        }
        function gen_total(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_total_bankin/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="grand_total"]').val(data.TOTAL);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
        }
        function gen_total_(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_total_bankintrx/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="grand_total_"]').val(data.TOTAL);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
        }
        function edit_cst(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cst/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_kode_customer"]').val(data.CUST_CODE);
                    $('[name="bank_nama_customer"]').val(data.CUST_NAME);
                    $('[name="bank_customer_id"]').val(data.CUST_ID);
                    $('#modal_customer').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function edit_bank(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bank/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_kode"]').val(data.BANK_CODE);
                    $('[name="bank_id"]').val(data.BANK_ID);
                    $('#modal_bank').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function add_gd(t)
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Daftar Account');
            sts=t;
        }
        function add_cst(t)
        {
            $('#modal_customer').modal('show');
            $('.modal-title').text('Daftar Customer');
        }
        function myFunction(id) 
        {
            if (id=='1')
            {
                var x = document.getElementById("myDIV1");
                if (x.style.display === "none")
                {
                    x.style.display = "block";
                }
                else
                {
                    x.style.display = "none";
                }
            }
            else
            {
                var x = document.getElementById("myDIV2");
                if (x.style.display === "none")
                {
                    x.style.display = "block";
                }
                else
                {
                    x.style.display = "none";
                }
            }
        }
        function srch_acc()
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Cari Account');
            table = $('#dtb_acc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_coa_bank')?>",
                    "type": "POST",
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_coabank(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_coagb/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="bank_acc"]').val(data.COA_ACC);
                    $('[name="bank_acc_info"]').val(data.COA_ACCNAME);
                    $('[name="acc_id"]').val(data.COA_ID);
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_acc2()
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Cari Account');
            table = $('#dtb_acc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_coabybrc')?>",
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_coagb(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_coagb/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="acc_detail"]').val(data.COA_ACC +" - "+data.COA_ACCNAME);
                    $('[name="acc_id_detail"]').val(data.COA_ID);
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_acc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    if (sts=='1')
                    {
                        $('[name="bank_acc"]').val(data.COA_ACC);
                        $('[name="bank_acc_info"]').val(data.COA_ACCNAME);
                        $('[name="acc_id"]').val(data.COA_ID);
                    }
                    else
                    {
                        $('[name="acc_detail"]').val(data.COA_ACC +" - "+ data.COA_ACCNAME);
                        $('[name="acc_id_detail"]').val(data.COA_ID);
                    } 
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_bank()
        {
            $('#modal_bank').modal('show');
            $('.modal-title').text('Cari Bank');
            table = $('#dtb_bank').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_bank')?>",
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_bank(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bank/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_kode"]').val(data.BANK_CODE+' - '+data.BANK_NAME);
                    $('[name="kode_bank"]').val(data.BANK_ID);
                    $('#modal_bank').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_cust()
        {
            $('#modal_cust').modal('show');
            $('.modal-title').text('Cari Customer');
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/srch_custall')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data.length; i++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-center">'+data[i]["code"]+'</td>'),
                            $('<td class="text-center">'+data[i]["name"]+'</td>'),
                            $('<td class="text-center">'+data[i]["address"]+'</td>'),
                            $('<td class="text-center"><a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cust('+"'"+data[i]["code"]+"'"+')">Pilih</a></td>')
                        ).appendTo('#tb_content');
                    }
                    dt_cust();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dt_cust()
        {
            $('#dtb_cust').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
            });
        }
        function pick_cust(id)
        {
            var kd = id;
            var kode = kd.substr(0,4);
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if (kode!='CSTI')
                    {
                        $('[name="bank_kode_customer"]').val(data.CUST_CODE);
                        $('[name="bank_nama_customer"]').val(data.CUST_NAME);
                        $('[name="bank_customer_id"]').val(data.CUST_ID);
                    }
                    if (kode=='CSTI')
                    {
                        $('[name="bank_kode_customer"]').val(data.CSTIN_CODE);
                        $('[name="bank_nama_customer"]').val(data.PERSON_NAME);
                        $('[name="bank_customer_id"]').val(data.CSTIN_ID);
                    }
                    $('#modal_cust').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_inv()
        {
            $('#modal_inv').modal('show');
            $('.modal-title').text('Cari Invoice');
            var id = $('[name="bank_customer_id"]').val();
            table = $('#dtb_inv').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_invbyid/')?>" + id,
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_inv(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_inv/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="no_jual"]').val(data.INV_CODE);
                    $('[name="invoice_id"]').val(data.INV_ID);
                    pick_inv_amount(id);
                    $('#modal_inv').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_inv_amount(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_subinvdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="nominal2"]').val(data.gt1);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function bank_masuk_detail1(id)
        {
            table = $('#dtb_bank_in_detail1').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_trxbankin')?>/"+id,
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function bank_masuk_detail2(id)
        {
            table = $('#dtb_bank_in_detail2').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_bankin')?>/"+id,
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if (data.CURR_RATE=='NULL')
                    {
                        $('[name="kas_kurs"]').val('')
                    }
                    else
                    {
                        $('[name="bank_kurs"]').val(data.CURR_RATE);
                        $('[name="curr_id"]').val(data.CURR_ID);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_curr()
        {
            $('#modal_curr').modal('show');
            $('.modal-title').text('Cari Rate Mata Uang');            
            table = $('#dtb_curr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_curr')?>",
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="curr_id"]').val(data.CURR_ID);
                    $('[name="curr_name"]').val(data.CURR_NAME);
                    $('[name="curr_rate"]').val(data.CURR_RATE);
                    $('#modal_curr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function printPre()
        {
            var ids = $('[name=bank_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_bm/')?>"+ids,'_blank');
        }
        function save_bank_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_bank_in')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function approve_bank_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_approve_bank_in')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/bank_in')?>";
                        window.location = url;
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disapprove_bank_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_disapprove_bank_in')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/bank_in')?>";
                        window.location = url;
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function save_bank_in_detail1()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_bank_in_detail1')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        var id = $('[name="bank_id"]').val();
                        bank_masuk_detail1(id);
                        gen_total(id);
                        gen_total_(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function save_bank_in_detail2()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_bank_in_detail2')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        var id = $('[name="bank_id"]').val();
                        bank_masuk_detail2(id);
                        gen_total(id);
                        gen_total_(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function bank_masuk_detail1(id)
        {
            table = $('#dtb_bank_in_detail1').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_trxbankin')?>/"+id,
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function bank_masuk_detail2(id)
        {
            table = $('#dtb_bank_in_detail2').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_bankin')?>/"+id,
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function delete_bankintrxdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_hapus_bank_in_detail1')?>/"+id,
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');
                        var id = $('[name="bank_id"]').val();
                        bank_masuk_detail1(id);
                        gen_total(id);
                        gen_total_(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function delete_bankindet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_hapus_bank_in_detail2')?>/"+id,
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');
                        var id = $('[name="bank_id"]').val();
                        bank_masuk_detail2(id);
                        gen_total(id);
                        gen_total_(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function edit_bank_in()
        {
            $('#modal_bank_in_edit').modal('show');
            $('.modal-title').text('Cari Bank Masuk');
            table = $('#dtb_bank_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bank_in_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '0';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '0';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function open_bank_in()
        {
            $('#modal_bank_in_edit').modal('show');
            $('.modal-title').text('Cari Bank Masuk');
            table = $('#dtb_bank_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bank_in_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '1';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function check_bank_in()
        {
            $('#modal_bank_in_edit').modal('show');
            $('.modal-title').text('Cari Bank Masuk');
            table = $('#dtb_bank_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bank_in_bystschk')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '2';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function apr_bank_in()
        {
            $('#modal_bank_in_edit').modal('show');
            $('.modal-title').text('Cari Bank Masuk');
            table = $('#dtb_bank_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bank_in_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '2';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '3';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_bankinopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/open_bankin/')?>" + id,
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Bank Masuk Sukses Dibuka');
                        $('#modal_bank_in_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Bank Masuk masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bankinedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bankingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_bank')[0].reset();
                    $('[name="bank_id"]').val(data.BNK_ID);
                    $('[name="bank_nomor"]').val(data.BNK_CODE);
                    $('[name="bank_tgl"]').val(data.BNK_DATE);
                    pick_bank(data.BANK_ID);
                    sts=1;
                    pick_acc(data.COA_ID);
                    $('[name="bank_info"]').val(data.BNK_INFO);
                    cust = (data.CUST_ID != null)?data.CUST_ID:data.CSTIN_ID;
                    md = (data.CUST_ID != null)?'0':'1';
                    pick_custedit(md,cust);
                    pick_curr(data.CURR_ID)
                    bank_masuk_detail1(data.BNK_ID);
                    bank_masuk_detail2(data.BNK_ID);
                    gen_total(data.BNK_ID);
                    gen_total_(data.BNK_ID);
                    $('#modal_bank_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bankinchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bankingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_bank')[0].reset();
                    $('[name="bank_id"]').val(data.BNK_ID);
                    $('[name="bank_nomor"]').val(data.BNK_CODE);
                    $('[name="bank_tgl"]').val(data.BNK_DATE);
                    pick_bank(data.BANK_ID);
                    sts=1;
                    pick_acc(data.COA_ID);
                    $('[name="bank_info"]').val(data.BNK_INFO);
                    cust = (data.CUST_ID != null)?data.CUST_ID:data.CSTIN_ID;
                    md = (data.CUST_ID != null)?'0':'1';
                    pick_custedit(md,cust);
                    pick_curr(data.CURR_ID)
                    bank_masuk_detail1(data.BNK_ID);
                    bank_masuk_detail2(data.BNK_ID);
                    gen_total(data.BNK_ID);
                    gen_total_(data.BNK_ID);
                    $('.btnCh').css({'display':'none'});
                    $('#modal_bank_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bankinapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bankingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_bank')[0].reset();
                    $('[name="bank_id"]').val(data.BNK_ID);
                    $('[name="bank_nomor"]').val(data.BNK_CODE);
                    $('[name="bank_tgl"]').val(data.BNK_DATE);
                    pick_bank(data.BANK_ID);
                    sts=1;
                    pick_acc(data.COA_ID);
                    $('[name="bank_info"]').val(data.BNK_INFO);
                    cust = (data.CUST_ID != null)?data.CUST_ID:data.CSTIN_ID;
                    md = (data.CUST_ID != null)?'0':'1';
                    pick_custedit(md,cust);
                    pick_curr(data.CURR_ID)
                    bank_masuk_detail1(data.BNK_ID);
                    bank_masuk_detail2(data.BNK_ID);
                    gen_total(data.BNK_ID);
                    gen_total_(data.BNK_ID);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_bank_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_custedit(md,id)
        {
            if(md != '0')
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Searchdata/pick_custint/')?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {   
                        $('[name="bank_kode_customer"]').val(data.CSTIN_CODE);
                        $('[name="bank_nama_customer"]').val(data.PERSON_NAME);
                        $('[name="bank_customer_id"]').val(data.CSTIN_ID);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }
            else
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Searchdata/pick_cust/')?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {   
                        $('[name="bank_kode_customer"]').val(data.CUST_CODE);
                        $('[name="bank_nama_customer"]').val(data.CUST_NAME);
                        $('[name="bank_customer_id"]').val(data.CUST_ID);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }
        }
    </script>
</body>
</html>