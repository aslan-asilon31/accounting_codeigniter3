<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pencairan Giro Masuk</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_giro_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_giro_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_giro_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_giro_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#myGiro" data-toggle="tab">Giro Masuk</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_giro">
                            <div class="tab-content">
                                <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                <div class="tab-pane fade in active" id="myGiro">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Giro Masuk</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Giro Masuk</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_giroin()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="giro_nomor">
                                            <input type="hidden" value='0' class="form-control" name="giro_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date dtp' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input type='text' class="form-control input-group-addon" name="giro_tgl" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Bank</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-block btn-info" onclick="srch_bank()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="giro_kode_bank" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="giro_nama_bank" readonly>
                                        </div>
                                        <input class="form-control" type="hidden" name="giro_bank_id">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Akun</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_acc()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="giro_bank_acc" readonly>
                                            <input class="form-control" type="hidden" name="giro_bank_acc_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <textarea name="giro_info" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Detail Giro Masuk</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" onclick="hide_()" id="det_radio0" name="det_radio">Tampilkan</label>
                                            <label class="radio-inline"><input type="radio" onclick="hide_()" id="det_radio1" name="det_radio">Sembunyikan</label>
                                        </div>
                                    </div>
                                    <div id="det_cashin" class="col-sm-offset-3">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No Giro</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-block btn-info" onclick="srch_giroin()"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" name="nomor_giro" readonly>
                                                <input type="hidden" name="gir_id">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal Giro</label>
                                            <div class="col-sm-7">
                                                <div class='input-group date dtp' id='dtp1'>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                    <input type='text' class="form-control input-group-addon" name="tgl_giro" value="<?= date('Y-m-d')?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nominal</label>
                                            <div class="col-sm-7">
                                                <input class="form-control curr-num" type="text" name="nominal" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <a href="javascript:void(0)" onclick="save_giro_in_detail()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_giro_in_detail" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Nomor Giro</th>
                                                            <th class="text-center">Tanggal Giro</th>
                                                            <th class="text-center">Nominal</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="save_giro_in()" class="btn btn-block btn-primary btn-default btnCh">
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
                                            <button type="button" onclick="approve_giro_in()" class="btn btn-block btn-primary btnApr" disabled>
                                                Approve
                                            </button>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="disapprove_giro_in()" class="btn btn-block btn-primary btnApr" disabled>
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
    <div class="modal fade" id="modal_giro_in_edit" name="modal_giro_in_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_giro_in_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Giro Masuk</th>
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
    <!-- Modal Kode Giro -->
    <div class="modal fade" id="modal_giro" name="modal_giro" role="dialog">
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
                            <table id="dtb_giro" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Giro</th>
                                        <th>Jumlah</th>
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
    <!-- Modal Acc -->
    <div class="modal fade" id="modal_account" name="modal_account" role="dialog">
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
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php'; ?>
    <script>
        $(document).ready(function()
        {
            $('#det_radio0').prop('checked',true);
            var id = $('[name="giro_id"]').val();
            giro_masuk_detail(id);
        })
        function hide_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_cashin').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_cashin').css({'display':'block'});
            }
        }
        function gen_giroin()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_giroin')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="giro_id"]').val(data.id);
                    $('[name="giro_nomor"]').val(data.kode);
                    $('#genbtn').attr('disabled',true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Giro Masuk');
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
                    $('[name="giro_kode_bank"]').val(data.BANK_CODE);
                    $('[name="giro_nama_bank"]').val(data.BANK_NAME);
                    $('[name="giro_bank_id"]').val(data.BANK_ID);
                    pick_acc(data.COA_ID);
                    $('#modal_bank').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
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
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_acc2/')?>",
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
        function pick_acc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="giro_bank_acc"]').val(data.COA_ACC+' - '+data.COA_ACCNAME);
                    $('[name="giro_bank_acc_id"]').val(data.COA_ID);
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_giroin()
        {
            $('#modal_giro').modal('show');
            $('.modal-title').text('Cari Giro');            
            table = $('#dtb_giro').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_giroin')?>",
                    "type": "POST",                
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "targets": ['_all'],
                    "className": 'text-center'
                },
                ],
            });
        }
        function pick_giroin(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_giroin/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="nomor_giro"]').val(data.BNKTRX_NUM);
                    $('[name="nominal"]').val(data.BNKTRX_AMOUNT);
                    $('[name="gir_id"]').val(data.GIR_ID);
                    $('#modal_giro').modal('hide');                 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function printPre()
        {
            var ids = $('[name=giro_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_gm/')?>"+ids,'_blank');
        }
        function save_giro_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_giro_in')?>",
                type: "POST",
                data: $('#form_giro').serialize(),
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
        function approve_giro_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_approve_giro_in')?>",
                type: "POST",
                data: $('#form_giro').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/bg_in')?>";
                        window.location = url;
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disapprove_giro_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_disapprove_giro_in')?>",
                type: "POST",
                data: $('#form_giro').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/bg_in')?>";
                        window.location = url;
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function save_giro_in_detail()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_giro_in_detail')?>",
                type: "POST",
                data: $('#form_giro').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');   
                        var id = $('[name="giro_id"]').val();
                        giro_masuk_detail(id);                     
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function giro_masuk_detail(id)
        {
            table = $('#dtb_giro_in_detail').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_giroin')?>/"+id,
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
        function delete_grindet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_hapus_giro_in_detail')?>/"+id,
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');   
                        var id = $('[name="giro_id"]').val();
                        giro_masuk_detail(id);                     
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function edit_giro_in()
        {
            $('#modal_giro_in_edit').modal('show');
            $('.modal-title').text('Cari Giro Masuk');
            table = $('#dtb_giro_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_giro_in_bysts')?>",
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
        function check_giro_in()
        {
            $('#modal_giro_in_edit').modal('show');
            $('.modal-title').text('Cari Giro Masuk');
            table = $('#dtb_giro_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_giro_in_bysts')?>",
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
        function open_giro_in()
        {
            $('#modal_giro_in_edit').modal('show');
            $('.modal-title').text('Cari Giro Masuk');            
            table = $('#dtb_giro_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_giro_in_bysts')?>",
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
        function apr_giro_in()
        {
            $('#modal_giro_in_edit').modal('show');
            $('.modal-title').text('Cari Giro Masuk');            
            table = $('#dtb_giro_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_giro_in_bysts')?>",
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
        function pick_giroinopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/open_giroin/')?>" + id,
                type: "POST",
                data: $('#form_giro').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Giro Masuk Sukses Dibuka');
                        $('#modal_giro_in_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Giro Masuk masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_giroinedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_giroingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="giro_id"]').val(data.GRIN_ID);
                    $('[name="giro_nomor"]').val(data.GRIN_CODE);
                    $('[name="giro_tgl"]').val(data.GRIN_DATE);
                    pick_giroin(data.GRIN_ID);
                    sts=1;
                    pick_bank(data.BANK_ID);
                    $('[name="giro_info"]').val(data.GRIN_INFO);
                    giro_masuk_detail(data.GRIN_ID);
                    $('#modal_giro_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_giroinchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_giroingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="giro_id"]').val(data.GRIN_ID);
                    $('[name="giro_nomor"]').val(data.GRIN_CODE);
                    $('[name="giro_tgl"]').val(data.GRIN_DATE);
                    pick_giroin(data.GRIN_ID);
                    sts=1;
                    pick_bank(data.BANK_ID);
                    $('[name="giro_info"]').val(data.GRIN_INFO);
                    giro_masuk_detail(data.GRIN_ID);
                    $('.btnCh').css({'display':'none'});
                    $('#modal_giro_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_giroinapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_giroingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="giro_id"]').val(data.GRIN_ID);
                    $('[name="giro_nomor"]').val(data.GRIN_CODE);
                    $('[name="giro_tgl"]').val(data.GRIN_DATE);
                    pick_giroin(data.GRIN_ID);
                    sts=1;
                    pick_bank(data.BANK_ID);
                    $('[name="giro_info"]').val(data.GRIN_INFO);
                    giro_masuk_detail(data.GRIN_ID);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_giro_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
</body>
</html>