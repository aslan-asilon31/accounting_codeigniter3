<!-- Page Content -->
        <style>
              #myDIV {
                    width: 100%;
                    padding: 50px 0;
                    text-align: center;
                    background-color: lightblue;
                    margin-top: 20px;
              }
              #myKas {
                    width: 100%;
                    text-align: center;
              }
              #mySave {
                    width: 100%;
                    text-align: center;
              }
        </style>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Anggaran</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_budget()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_budget()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#myBudget" data-toggle="tab">Anggaran</a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">Detail Anggaran</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_budget">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="myBudget">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Anggaran</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Anggaran </label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_budget()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="budget_nomor" readonly>
                                        </div>
                                        <input type="hidden" value='0' class="form-control" name="budget_id">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="budget_tgl" value="<?php echo date("d/m/Y"); ?>" readonly>
                                            <!-- <input type="hidden" name="inv_typeid"> -->
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-sm-3 control-label">Acc </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="kas_acc" readonly>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info" onclick="srch_acc('1')"><span class="glyphicon glyphicon-search"></span> Cari</button>
                                        </div>
                                        <input class="form-control" type="hidden" name="acc_id">
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No.Approval </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="budget_approval" readonly>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info" onclick="srch_appr()"><span class="glyphicon glyphicon-search"></span> Cari</button>
                                        </div>
                                        <input class="form-control" type="hidden" name="appr_id">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="budget_lokasi" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="budget_lokasi_ket">
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info" onclick="srch_location()"><span class="glyphicon glyphicon-search"></span> Cari</button>
                                        </div>
                                        <input class="form-control" type="hidden" name="loc_id">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="budget_keterangan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                             <label class="col-sm-3 control-label">Jenis Anggaran</label>
                                             <div class="col-sm-2">
                                                  <select class="form-control" type="text" name="budget_type">
                                                          <option value="Proyek">Proyek</option>
                                                          <option value="Non Proyek">Non Proyek</option>
                                                  </select>
                                             </div>
                                        </div>
                                </div>      
                                <div class="tab-pane fade" id="2">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Anggaran</h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <button type="button" class="btn btn-success" onclick="myFunction()"><i class="glyphicon glyphicon-plus"></i> Tambah Anggaran</button>
                                        </div>
                                    </div><br>
                                    <div id="myDIV">
                                        <div class="form-group">
                                             <label class="col-sm-3 control-label">No Account</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control" type="text" name="acc_detail" readonly>
                                             </div>
                                             <div class="col-sm-1">
                                                  <button type="button" class="btn btn-info" onclick="srch_acc('2')"><span class="glyphicon glyphicon-search"></span> Cari</button>
                                             </div>
                                             <input class="form-control" type="hidden" name="acc_id_detail">
                                        </div>
                                        <!-- <div class="form-group">
                                             <label class="col-sm-3 control-label">No Beli</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control" type="text" name="no_beli">
                                             </div>
                                        </div> -->
                                        <div class="form-group">
                                             <label class="col-sm-3 control-label">Keterangan</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control" type="text" name="ket_detail">
                                             </div>
                                        </div>
                                        <div class="form-group">
                                             <label class="col-sm-3 control-label">Jumlah</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control" type="text" name="jumlah">
                                             </div>
                                        </div>
                                        <div class="form-group">
                                             <label class="col-sm-3 control-label">Nominal</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control curr-num" type="text" name="nominal">
                                             </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success" onclick="save_budget_detail()"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 table-responsive">
                                         <table id="dtb_budget_detail" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                 <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            No Acc
                                                        </th>
                                                        <!-- <th class="text-center">
                                                            No Beli
                                                        </th> -->
                                                        <th class="text-center">
                                                            Keterangan
                                                        </th>
                                                        <th class="text-center">
                                                            Jumlah
                                                        </th>
                                                        <th class="text-center">
                                                            Nominal
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                         </table>
                                    </div>
                                     <!-- <div class="form-group">
                                            <label class="col-sm-3 control-label">Mata Uang || Rate</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="curr_name" readonly>
                                                <input type="hidden" name="curr_id" value="">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="curr_rate" readonly>
                                            </div>
                                            <div class="col-sm-1">
                                                <a href="javascript:void(0)" onclick="srch_curr()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                            </div>
                                            <div class="col-sm-4">
                                                  <input class="form-control" type="text" name="total">
                                            </div>
                                    </div>  -->
                                    <div id="mySave" class="row">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-success" onclick="save_budget()"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
                                    </div>
                                    <!-- <div class="form-group">
                                        <button type="button" class="btn btn-success" onclick="tes()"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>

     <!-- Modal Anggaran Search -->
    <div class="modal fade" id="modal_anggaran_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_anggaran_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Tanggal</th>
                                        <th>Nomor Approval</th>
                                        <th>Nama Lokasi</th>
                                        <th>Alamat Lokasi</th>
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
    <!-- modal Anggaran selesai -->

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
    <!-- modal account selesai -->

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
    <!-- modal customer selesai -->
    
    <!-- Modal Approval -->
    <div class="modal fade" id="modal_appr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_appr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Approval</th>
                                        <th>Kode Lokasi</th>
                                        <th>Alamat</th>
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
    <!-- modal Approval selesai -->

    <!-- Modal Location -->
    <div class="modal fade" id="modal_loc" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_loc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Lokasi</th>
                                        <th>Nama Lokasi</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                    <!-- <button type="button" onclick="tes_tutup()">Tutup</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- modal Location selesai -->

    <!-- jQuery -->
    <!-- <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script> -->
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>     -->
    <!-- Metis Menu Plugin JavaScript -->
    <!-- <script src="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.js')?>"></script> -->
    <!-- Custom Theme JavaScript -->
    <!-- <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.js')?>"></script> -->
    <!-- Datatables -->
    <!-- <script src="http://localhost/mtpd/assets/datatables/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="http://localhost/mtpd/assets/datatables/js/dataTables.bootstrap.min.js"></script> -->
    <!-- <script src="http://localhost/mtpd/assets/datatables/js/dataTables.responsive.js"></script> -->
    <!-- Addon -->
    <!-- <script src="http://localhost/mtpd/assets/addons/extra.js"></script> -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
</body>
</html>
<script>
$(document).ready(function() {
    $('#myDIV').css({'display':'none'});
    // $('[name="kas_mu"]').change(function(){
    //     curr($('select :selected').val());
    // })
    var id = $('[name="kas_id"]').val();
    budget_detail(id);
})

        var sts;
        function edit_sch(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                if (sts=='1'){
                    $('[name="kas_acc"]').val(data.COA_ACC);
                    $('[name="acc_id"]').val(data.COA_ID);
                } else {
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

    // function tes()
    // {
    //     $('#modal_loc').modal('show');
    // }

    // function tes_tutup()
    // {
    //     $('#modal_loc').modal('hide');
    // }

    function gen_budget()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/gen_budget')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="budget_id"]').val(data.id);
                    $('[name="budget_nomor"]').val(data.kode);
                    $('#genbtn').attr('disabled',true);
                    // termapp(data.id);
                    // costapp(data.id);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Anggaran');
                }
            });
        }

     function srch_acc(t)
        {
            sts=t;
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
                    "url": "<?php echo site_url('administrator/Transaction/ajax_srch_acc')?>",
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
                    // $('[name="kas_acc"]').val(data.COA_ACC);               
                    // $('[name="acc_id"]').val(data.COA_ID);     
                    var accname= data.COA_ACC + ' - ' + data.COA_ACCNAME;
                    if (sts=='1'){
                       $('[name="kas_acc"]').val(accname);
                       $('[name="acc_id"]').val(data.COA_ID);
                    } else {
                       $('[name="acc_detail"]').val(accname);
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
        
        function srch_location(t)
        {
            sts=t;
            $('#modal_loc').modal('show');
            $('.modal-title').text('Cari Location');            
            table = $('#dtb_loc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Transaction/ajax_srch_loc')?>",
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

        function pick_loc(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_pick_location/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    // $('[name="kas_acc"]').val(data.COA_ACC);               
                    // $('[name="acc_id"]').val(data.COA_ID);     
                    // if (sts=='1'){
                       $('[name="budget_lokasi"]').val(data.LOC_CODE);
                       $('[name="budget_lokasi_ket"]').val(data.LOC_NAME); 
                       $('[name="loc_id"]').val(data.LOC_ID);
                    // } else {
                    //    $('[name="acc_detail"]').val(data.COA_ACC);
                    //    $('[name="acc_id_detail"]').val(data.COA_ID);
                    // }  
                    $('#modal_loc').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        } 

        function srch_appr()
        {            
            $('#modal_appr').modal('show');
            $('.modal-title').text('Cari Approval');            
            table = $('#dtb_appr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_appr')?>",
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

         function srch_supp()
        {            
            $('#modal_supp').modal('show');
            $('.modal-title').text('Cari Supplier');            
            table = $('#dtb_supp').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_supp')?>",
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

        function srch_dept()
        {            
            $('#modal_dept').modal('show');
            $('.modal-title').text('Cari Departemen');            
            table = $('#dtb_dept').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_dept')?>",
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

    function edit_cst(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Finance/ajax_pick_cst/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="kas_kode_customer"]').val(data.CUST_CODE);
                $('[name="kas_nama_customer"]').val(data.CUST_NAME);
                $('#modal_customer').modal('hide');                 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

        function add_gd(t)
    {        
        sts=t;
        $('#modal_account').modal('show');
        $('.modal-title').text('Daftar Account');
    }

    function add_cst(t)
    {        
        $('#modal_customer').modal('show');
        $('.modal-title').text('Daftar Customer');
    }

        function myFunction() 
    {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function curr(id)
    {   
        $.ajax({
            url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                if (data.CURR_RATE=='NULL') {$('[name="kas_kurs"]').val('')}else{
                $('[name="kas_kurs"]').val(data.CURR_RATE);}                
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

        function pick_appr(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_appr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="budget_approval"]').val(data.APPR_CODE);
                    pick_location(data.LOC_ID);
                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_location(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_pick_location/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                   $('[name="budget_lokasi"]').val(data.LOC_CODE); 
                   $('[name="budget_lokasi_ket"]').val(data.LOC_NAME);   
                   $('[name="loc_id"]').val(data.LOC_ID);               
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function save_budget()
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_simpan_budget')?>",
                type: "POST",
                data: $('#form_budget').serialize(),
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
                     var jenisanggaran=$('[name="budget_type"]').val();
                     var approval=$('[name="appr_id"]').val();
                     if ((jenisanggaran=='Proyek') && (approval=='')){
                        alert('Nomor Approval harus diisi!');
                     } else {
                        alert('Error adding / update data');
                     }
                }
            });
        }

        function save_budget_detail()
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_simpan_budget_detail')?>",
                type: "POST",
                data: $('#form_budget').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');   
                        var id = $('[name="budget_id"]').val();
                        budget_detail(id);                     
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function budget_detail(id)
        {
            table = $('#dtb_budget_detail').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_budget')?>/"+id,
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

        function delete_budgetdet(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_hapus_budget_detail')?>/"+id,
                type: "POST",
                data: $('#form_budget').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');   
                        var id = $('[name="budget_id"]').val();
                        budget_detail(id);                     
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function edit_budget()
        {
            $('#modal_anggaran_edit').modal('show');
            $('.modal-title').text('Cari Anggaran');
            table = $('#dtb_anggaran_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_budget_bysts')?>",
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
        function open_budget()
        {
            $('#modal_anggaran_edit').modal('show');
            $('.modal-title').text('Cari Anggaran Masuk');            
            table = $('#dtb_anggaran_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_budget_bysts')?>",
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
        function pick_budgetopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/open_budget/')?>" + id,
                type: "POST",
                data: $('#form_budget').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Anggaran Dibuka');
                        $('#modal_anggaran_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Anggaran masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_budgetedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_budgetgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="budget_id"]').val(data.BUD_ID);
                    $('[name="budget_nomor"]').val(data.BUD_CODE);
                    $('[name="budget_tgl"]').val(data.BUD_DATE);
                    pick_appr(data.BUD_APPR);
                    sts=1;
                    pick_location(data.BUD_LOC);
                    $('[name="budget_keterangan"]').val(data.BUD_INFO);
                    $('[name="budget_type"]').val(data.BUD_PROJECT);
                    budget_detail(data.BUD_ID);
                    $('#modal_anggaran_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
</script>