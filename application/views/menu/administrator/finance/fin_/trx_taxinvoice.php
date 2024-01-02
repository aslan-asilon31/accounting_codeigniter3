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
                    /*padding: 50px 0;*/
                    text-align: center;
                    /*background-color: lightblue;*/
                    /*margin-top: 5px;*/
              }
              #mySave {
                    width: 100%;
                    /*padding: 50px 0;*/
                    text-align: center;
                    /*background-color: lightblue;*/
                    /*margin-top: 5px;*/
              }
        </style>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Faktur Pajak</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_taxinvoice()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_taxinvoice()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#myFaktur" data-toggle="tab">Faktur Pajak</a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">Detail Faktur Pajak</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_faktur">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="myFaktur">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Faktur Pajak</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Faktur</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_tax()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="tax_nomor">
                                        </div>
                                        <input type="hidden" value='4' class="form-control" name="tax_id">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="tax_tgl" value="<?php echo date("d/m/Y"); ?>" readonly>
                                            <!-- <input type="hidden" name="inv_typeid"> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Paktur Pajak </label>
                                        <div class="col-sm-1">
                                            <input class="form-control" type="text" name="head_taxnumber">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="taxnumber">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Customer</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="tax_kode_customer" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="tax_nama_customer" readonly>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info" onclick="srch_cust()"><span class="glyphicon glyphicon-search"></span> Cari</button>
                                        </div>
                                        <input class="form-control" type="hidden" name="cust_id" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat / Kota</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="tax_alamat" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">NPWP / NPPKP</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="tax_npwp" readonly>
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="tax_nppkp" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Invoice</label>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="tax_invoice" readonly>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info" onclick="srch_inv()"><span class="glyphicon glyphicon-search"></span> Cari</button>
                                        </div>
                                        <input class="form-control" type="hidden" name="invoice_id" readonly>
                                    </div>
                                </div>      
                                <div class="tab-pane fade" id="2">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-4 text-center">
                                            <h2>Data Faktur Pajak Detail </h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <button type="button" class="btn btn-success" onclick="myFunction()"><i class="glyphicon glyphicon-plus"></i> Tambah Approval</button>
                                        </div>
                                    </div><br>
                                    <div id="myDIV">
                                        <div class="form-group">
                                             <label class="col-sm-3 control-label">No Approval</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control" type="text" name="no_appr" readonly>
                                             </div>
                                             <div class="col-sm-1">
                                                  <button type="button" class="btn btn-info" onclick="srch_appr()"><span class="glyphicon glyphicon-search"></span> Cari</button>
                                             </div>
                                             <input class="form-control" type="hidden" name="appr_id">
                                        </div>
                                        <div class="form-group">
                                             <label class="col-sm-3 control-label">Keterangan</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control" type="text" name="keterangan">
                                             </div>
                                        </div>
                                        <div class="form-group">
                                             <label class="col-sm-3 control-label">Lokasi</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control" type="text" name="lokasi" readonly>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                             <label class="col-sm-3 control-label">Nominal</label>
                                             <div class="col-sm-4">
                                                  <input class="form-control curr-num" type="text" name="nominal" readonly>
                                             </div>
                                             <input class="form-control" type="hidden" name="ppn">
                                             <input class="form-control" type="hidden" name="pph">
                                             <input class="form-control" type="hidden" name="jumlah">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success" onclick="save_tax_detail()"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 table-responsive">
                                         <table id="dtb_tax_detail" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                 <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            No Approval
                                                        </th>
                                                        <th class="text-center">
                                                            Keterangan
                                                        </th>
                                                        <th class="text-center">
                                                            Lokasi
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
                                    <div id="mySave" class="row">
                                    <div class="form-group">
                                        <!-- <button type="button" class="btn btn-success" onclick="save_tax()"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button> -->
                                        <a href="javascript:void(0)" type="button" class="btn btn-success" onclick="save_tax()"><span class="glyphicon glyphicon-save"></span> Simpan</a>
                                        <a href="javascript:void(0)" type="button" class="btn btn-default" onclick="printPre()"><span class="glyphicon glyphicon-print"></span> Print</a>
                                    </div>
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

    <!-- Modal Search -->
    <div class="modal fade" id="modal_taxinvoice_edit" name="modal_taxinvoice_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_taxinvoice_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Faktur Pajak</th>
                                        <th>Customer</th>
                                        <th>Tanggal</th>  
                                        <th>Nomor Faktur</th>                                      
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
                <form id="formku" action="<?php echo base_url('Finance/f_pjk') ; ?>" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cari Invoice</h4>
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
                </form>
            </div>
        </div>
    </div>
    <!-- modal invoice selesai -->

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
                </div>
            </div>
        </div>
    </div>
    <!-- modal customer selesai -->

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
    var id = $('[name="tax_id"]').val();
    tax_detail(id);
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

    function printPre()
        {
            // var seg1 = $('[name="tgl1"]').val()?$('[name="tgl1"]').val():'null';
            // var seg2 = $('[name="tgl2"]').val()?$('[name="tgl2"]').val():'null';
            id = $('[name="tax_id"]').val()?$('[name="tax_id"]').val():'null';
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_bfaktur/')?>"+id,'_blank');
        }

    function gen_tax()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_tax')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="tax_id"]').val(data.id);
                    $('[name="tax_nomor"]').val(data.kode);
                    $('#genbtn').attr('disabled',true);
                    // termapp(data.id);
                    // costapp(data.id);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
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

    function srch_inv()
        {
            $('#modal_inv').modal('show');
            $('.modal-title').text('Cari Invoice');            
            table = $('#dtb_inv').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_inv')?>",
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
                    $('[name="tax_invoice"]').val(data.INV_CODE);
                    $('[name="invoice_id"]').val(data.INV_ID);
                    $('#modal_inv').modal('hide');
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
            id = $('[name="invoice_id"]').val();          
            table = $('#dtb_appr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_apprinv/')?>" + id,
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

    function pick_apprinv(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_apprinv/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="no_appr"]').val(data.APPR_CODE);
                    $('[name="nominal"]').val(data.TERMSDET_DPP);
                    $('[name="ppn"]').val(data.TERMSDET_PPN_SUM);
                    $('[name="pph"]').val(data.TERMSDET_PPH_SUM);
                    jumlah = (data.TERMSDET_DPP * 1) + (data.TERMSDET_PPN_SUM * 1) - (data.TERMSDET_PPH_SUM * 1);
                    $('[name="jumlah"]').val(jumlah);
                    $('[name="lokasi"]').val(data.LOC_ADDRESS);
                    alert(data.TERMSDET_DPP);
                    // pick_location(data.LOC_ID);                   
                    $('#modal_appr').modal('hide');
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
            table = $('#dtb_cust').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_cust')?>",
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

    function pick_cust(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="tax_kode_customer"]').val(data.CUST_CODE);
                    $('[name="tax_nama_customer"]').val(data.CUST_NAME);
                    $('[name="cust_id"]').val(data.CUST_ID);
                    $('[name="tax_alamat"]').val(data.CUST_ADDRESS);
                    $('[name="tax_npwp"]').val(data.CUST_NPWPACC);
                    $('[name="tax_nppkp"]').val(data.CUST_NPKP);
                    $('#modal_cust').modal('hide');
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
    function save_tax()
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_tax')?>",
                type: "POST",
                data: $('#form_faktur').serialize(),
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
    function save_tax_detail()
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_tax_detail')?>",
                type: "POST",
                data: $('#form_faktur').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');   
                        var id = $('[name="tax_id"]').val();
                        tax_detail(id);                     
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

    function tax_detail(id)
        {
            table = $('#dtb_tax_detail').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_faktur')?>/"+id,
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

        function delete_taxdet(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_hapus_tax_detail')?>/"+id,
                type: "POST",
                data: $('#form_faktur').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');   
                        var id = $('[name="tax_id"]').val();
                        tax_detail(id);                     
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function edit_taxinvoice()
        {
            $('#modal_taxinvoice_edit').modal('show');
            $('.modal-title').text('Cari Faktur Pajak');
            table = $('#dtb_taxinvoice_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_taxinvoice_bysts')?>",
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
        function open_taxinvoice()
        {
            $('#modal_taxinvoice_edit').modal('show');
            $('.modal-title').text('Cari Faktur Pajak');            
            table = $('#dtb_taxinvoice_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_taxinvoice_bysts')?>",
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
        function pick_taxinvoiceopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/open_taxinvoice/')?>" + id,
                type: "POST",
                data: $('#form_faktur').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Bank Masuk Sukses Dibuka');
                        $('#modal_bank_out_edit').modal('hide');
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

        function pick_taxinvoiceedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_taxinvoicegb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="tax_id"]').val(data.TINV_ID);
                    $('[name="tax_nomor"]').val(data.TINV_CODE);
                    $('[name="tax_tgl"]').val(data.TINV_DATE);
                    //pick_bank(data.BANK_ID);
                    sts=1;
                    pick_inv(data.INV_ID);
                    //$('[name="bank_nomor_approval"]').val(data.BNKO_APPR);
                    pick_CUST(data.CUST_ID);
                    //$('[name="bank_info"]').val(data.BNKO_INFO);
                    //pick_dept(data.DEPT_ID);
                    //$('[name="bank_anggaran"]').val(data.BNKO_BUDGET);
                    $('[name="head_taxnumber"]').val(data.TINV_TAXHEADCODE);
                    $('[name="taxnumber"]').val(data.TINV_TAXCODE);
                    //pick_curr(data.CURR_ID)
                    //bank_keluar_detail1(data.BNKO_ID);
                    //bank_keluar_detail2(data.BNKO_ID);
                    $('#modal_taxinvoice_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
</script>