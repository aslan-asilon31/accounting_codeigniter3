<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Posting PPN Cabang Ke Pusat</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">Data PPN Cabang</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_inv">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="1">
                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-2 text-center">
                                            <h2>Perhitungan PPN Cabang Ke Pusat</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomer</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_pos_ppn()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="pc_code" readonly>
                                            <input type="hidden" name="pc_id" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date dtp' id='dtp'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="jou_date" type='text' class="form-control input-group-addon" name="pc_date" value="<?= date('Y-m-d')?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 col-xs-12">
                                            <label class="col-sm-3 control-label">Periode Tanggal Invoice</label>
                                            <div class="col-sm-3">
                                                <input id="date1" type='date' class="form-control" name="date1" />
                                            </div>
                                            <div class="col-sm-1"><span>s/d </span></div>
                                            <div class="col-sm-3">
                                                <input id="date2" type='date' class="form-control" name="date2" />
                                            </div> 
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cabang</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="inv_branch" readonly>
                                            <input type="hidden" name="inv_branchid" value="0">
                                        </div>
                                    </div>
                                    
                                    <div id="det_approval" class="col-sm-offset-3">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_invdet" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">
                                                                No
                                                            </th>
                                                            <th class="text-center">
                                                                No Invoice
                                                            </th>                              
                                                            <th class="text-center">
                                                                Customer
                                                            </th>
                                                            <th class="text-center">
                                                                Total
                                                            </th>
                                                            <th class="text-center">
                                                                DPP
                                                            </th>
                                                            <th class="text-center">
                                                                PPN
                                                            </th>                       
                                                            <th class="text-center">
                                                                Actions
                                                            </th>
                                                        </tr>                            
                                                    </thead>                        
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-6">
                                                    <h4>Total Invoice Belum Diperhitungkan</h4>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Sub Total</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_subappr" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">PPN</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_ppnappr" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">PPH</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_pphappr" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Grand Total</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_gtotappr" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-6">
                                                    <h4>Total Invoice Yang Sudah Diperhitungkan</h4>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Sub Total</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_subapprbrc" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">PPN</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_ppnapprbrc" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">PPH</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_pphapprbrc" readonly>
                                                    </div>       
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Grand Total</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_gtotapprbrc" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="save_inv()" class="btn btn-block btn-primary btn-default">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                Simpan
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="javascript:void(0)" onclick="print_inv()" class="btn btn-block btn-info btn-default">
                                                <span class="glyphicon glyphicon-print"></span>
                                                Cetak
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="test()" class="btn btn-block btn-primary btn-default">Simpan</a>
                                        </div>
                                    </div> -->
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
    <!-- /#wrapper -->
    <!-- Modal Search -->
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
                                        <th>Approval</th>
                                        <th class="col-xs-4">Nama Cabang</th>
                                        <th>Tanggal</th>
                                        <th>Klien</th>
                                        <th>Lokasi</th>
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
    <div class="modal fade" id="modal_invtype" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_invtype" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th class="col-sm-4">Acc Piutang</th>
                                        <th class="col-sm-4">Acc Pendapatan</th>   
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
    <div class="modal fade" id="modal_branch" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_branch" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
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
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.js')?>"></script>
    <!-- Datetime -->
    <script src="<?php echo base_url('assets/addons/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.responsive.js')?>"></script>
    <!-- Select Bst -->
    <script src="<?php echo base_url('assets/addons/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
    <!-- Number to Money -->
    <script src="<?php echo base_url('assets/addons/jquery.number.js') ?>"></script>
    <!-- Addon -->
    <script src="<?php echo base_url('assets/addons/extra.js')?>"></script>
    <script>
        $(document).ready(function()
        {
            $('#det_radio0').prop('checked',true);
            // check_();
            $('select').selectpicker({});
            $('#inv_term').change(function(){
                termnom($('#inv_term option:selected').val());
            });
            $('#inv_termbrc').change(function(){
                termbrcnom($('#inv_termbrc option:selected').val());
            });
            show_inv_ppn($('[name="inv_branchid"]').val());
            show_dpp_ppn_pph_total($('[name="inv_branchid"]').val());
        })

        function check_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_approval').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_approval').css({'display':'block'});
            }
            invdet($('[name="inv_id"]').val());
        }

        function gen_pos_ppn()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_pos_ppn')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="pc_id"]').val(data.id);
                    $('[name="pc_code"]').val(data.kode);
                    // invdet(data.id);
                    // get_sub();
                    $('#genbtn').attr('disabled',true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Approval');
                }
            });
        }

        function save_inv()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/save_inv')?>",
                type: "POST",
                data: $('#form_inv').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        invdet($('[name="inv_id"]').val());
                        get_sub();
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                        }
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function print_inv()
        {
            var id = $('[name=inv_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/print_invoice/')?>"+id,'_blank');
        }
    </script>
    <!-- Search -->
    <script>
        function srch_invtype()
        {
            $('#modal_invtype').modal('show');
            $('.modal-title').text('Cari Jenis Invoice');            
            table = $('#dtb_invtype').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_invtype')?>",
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

        function srch_appr()
        {
            var id = $('[name="inv_custid"]').val();
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
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprbyclient/')?>"+id,
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

        function srch_brc()
        {
            $('#modal_branch').modal('show');
            $('.modal-title').text('Cari Cabang');            
            table = $('#dtb_branch').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_branch')?>",
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

        function show_inv_ppn(id)
        {
            table = $('#dtb_invdet').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/show_invppn/')?>"+id,
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
                    "url": "<?php echo site_url('administrator/Marketing/ajax_srch_cust')?>",
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
                    "url": "<?php echo site_url('administrator/Marketing/ajax_srch_curr')?>",
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
    </script>
    <!-- Pick -->
    <script>
        function pick_invtype(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_invtype/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_typeid"]').val(data.INC_ID);
                    $('[name="inv_typename"]').val(data.INC_CODE+' - '+data.INC_NAME);
                    $('[name="inv_incacc"]').val(data.INC_ACCINCNAME);
                    $('[name="inv_rcvacc"]').val(data.INC_ACCRCVNAME);
                    $('#modal_invtype').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_inv_ppn(id)
        { 
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_invppn/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if ($("#pilih").is(":checked")) {
                        alert('Checked');
                    } else {alert('UnChecked');}
                    
                    // $('[name="inv_typeid"]').val(data.INC_ID);
                    // $('[name="inv_typename"]').val(data.INC_CODE+' - '+data.INC_NAME);
                    // $('[name="inv_incacc"]').val(data.INC_ACCINCNAME);
                    // $('[name="inv_rcvacc"]').val(data.INC_ACCRCVNAME);
                    // $('#modal_invtype').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function show_dpp_ppn_pph_total(id)
        {
             $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_dpp_ppn_pph_total/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {  
                    $('[name="inv_subappr"]').val(data.dpp);
                    $('[name="inv_ppnappr"]').val(data.ppn);
                    $('[name="inv_pphappr"]').val(data.pph);
                    $('[name="inv_gtotappr"]').val(data.total);
                },
                 error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_branchid"]').val(data.BRANCH_ID);
                    $('[name="inv_branch"]').val(data.BRANCH_NAME);
                    $('#modal_branch').modal('hide');
                    show_inv_ppn(data.BRANCH_ID);
                    show_dpp_ppn_pph_total(data.BRANCH_ID);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_cust(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_custid"]').val(data.CUST_ID);
                    $('[name="inv_cust"]').val(data.CUST_NAME);
                    $('#modal_cust').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_loc(id)
        {           
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_loc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_apprloc"]').val(data.LOC_NAME+', '+data.LOC_ADDRESS+', '+data.LOC_CITY);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_currid"]').val(data.CURR_ID);
                    $('[name="inv_curr"]').val(data.CURR_NAME);
                    $('[name="inv_currrate"]').val(data.CURR_RATE);
                    $('.curr').text(data.CURR_SYMBOL);
                    hit_curr();
                    $('#modal_curr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_apprbyclient(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_apprgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_apprid"]').val(data.APPR_ID);
                    $('[name="inv_apprbrcid"]').val(data.APPR_BRANCH);
                    $('[name="inv_apprcode"]').val(data.APPR_CODE);
                    $('[name="inv_apprpo"]').val(data.APPR_PO);
                    pick_loc(data.LOC_ID);
                    var appr = data.APPR_ID;
                    var apprbrc = data.APPR_BRANCHID;
                    if(appr == null)
                    {
                        appr = '0';
                    }
                    if(apprbrc == null)
                    {
                        apprbrc = '0';
                    }
                    drop_term(appr);
                    drop_termbrc(apprbrc);
                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <!-- Dropdown -->
    <script>
        function drop_term(id)
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Finance/get_apprterm/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#inv_term').empty();
                    var select = document.getElementById('inv_term');
                    var option;                    
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["TERMSDET_ID"]
                        option.text = data[i]["TERMSDET_CODE"];
                        select.add(option);
                    }
                    $('#inv_term').selectpicker({});
                    $('#inv_term').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function drop_termbrc(id)
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Finance/get_apprtermbrc/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#inv_termbrc').empty();
                    var select = document.getElementById('inv_termbrc');
                    var option;                    
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["TERMSDET_ID"]
                        option.text = data[i]["TERMSDET_CODE"];
                        select.add(option);
                    }
                    $('#inv_termbrc').selectpicker({});
                    $('#inv_termbrc').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <!-- Other -->
    <script>
        // function invdet(id)
        // {
        //     table = $('#dtb_invdet').DataTable({
        //         "info": false,
        //         "destroy": true,
        //         "responsive": true,
        //         "processing": true,
        //         "serverSide": true,
        //         "order": [],                
        //         "ajax": {
        //             "url": "<?php echo site_url('administrator/Showdata/showdetail_invoice/')?>"+id,
        //             "type": "POST",                
        //         },              
        //         "columnDefs": [
        //         { 
        //             "targets": [ 0 ],
        //             "orderable": false,
        //         },
        //         ],
        //     });
        // }

        function add_invdet()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/add_invdet')?>",
                type: "POST",
                data: $('#form_inv').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        invdet($('[name="inv_id"]').val());
                        get_sub();
                        var appr = $('[name="inv_apprid"]').val();
                        var apprbrc = $('[name="inv_apprbrcid"]').val();
                        if(appr == '')
                        {
                            appr = '0';
                        }
                        if(apprbrc == '')
                        {
                            apprbrc = '0';
                        }
                        drop_term(appr);
                        drop_termbrc(apprbrc);
                        term_clean_();
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                        }
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function delete_invdet(id)
        {
            if(confirm('Are you sure delete this data?'))
            {               
                $.ajax({
                    url : "<?php echo site_url('administrator/Finance/del_invdet/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        invdet($('[name="inv_id"]').val());
                        get_sub();
                        var appr = $('[name="inv_apprid"]').val();
                        var apprbrc = $('[name="inv_apprbrcid"]').val();
                        if(appr == '')
                        {
                            appr = '0';
                        }
                        if(apprbrc == '')
                        {
                            apprbrc = '0';
                        }
                        drop_term(appr);
                        drop_termbrc(apprbrc);
                        term_clean_();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function termnom(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_apprtermnom/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var nom1 = ($('[name="inv_currrate"]').val()*data.TERMSDET_SUM);
                    $('[name="invdet_sub"]').val(nom1);
                    $('[name="inv_termcode"]').val(data.TERMSDET_CODE);
                    $('[name="inv_termsub"]').val(data.TERMSDET_SUB);
                    $('[name="inv_termppn"]').val(data.TERMSDET_PPN_SUM);
                    $('[name="inv_termpph"]').val(data.TERMSDET_PPH_SUM);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function termbrcnom(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_apprtermnom/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var nom2 = ($('[name="inv_currrate"]').val()*data.TERMSDET_SUM);
                    $('[name="invdet_brcsub"]').val(nom2);
                    $('[name="inv_termbrccode"]').val(data.TERMSDET_CODE);
                    $('[name="inv_termsubbrc"]').val(data.TERMSDET_SUB);
                    $('[name="inv_termppnbrc"]').val(data.TERMSDET_PPN_SUM);
                    $('[name="inv_termpphbrc"]').val(data.TERMSDET_PPH_SUM);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function hit_curr()
        {
            var curr = $('[name="inv_currrate"]').val();
            var nom1 = $('[name="invdet_sub"]').val();
            var nom2 = $('[name="invdet_brcsub"]').val();
            res1 = curr*nom1;
            res2 = curr*nom2;
            $('[name="invdet_sub"]').val(res1);
            $('[name="invdet_brcsub"]').val(res2);
        }

        function get_sub()
        {
            var id = $('[name="inv_id"]').val();
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_subinvdet/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="inv_subappr"]').val(data.sub1);
                    $('[name="inv_ppnappr"]').val(data.ppn1);
                    $('[name="inv_pphappr"]').val(data.pph1);
                    $('[name="inv_gtotappr"]').val(data.gt1);
                    $('[name="inv_subapprbrc"]').val(data.sub2);
                    $('[name="inv_ppnapprbrc"]').val(data.ppn2);
                    $('[name="inv_pphapprbrc"]').val(data.pph2);
                    $('[name="inv_gtotapprbrc"]').val(data.gt2);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    $('[name="inv_subappr"]').val('');
                    $('[name="inv_ppnappr"]').val('');
                    $('[name="inv_pphappr"]').val('');
                    $('[name="inv_gtotappr"]').val('');
                    $('[name="inv_subapprbrc"]').val('');
                    $('[name="inv_ppnapprbrc"]').val('');
                    $('[name="inv_pphapprbrc"]').val('');
                    $('[name="inv_gtotapprbrc"]').val('');
                }
            });
        }

        function term_clean_()
        {
            $('[name="invdet_sub"]').val('');
            $('[name="inv_termcode"]').val('');
            $('[name="inv_termsub"]').val('');
            $('[name="inv_termppn"]').val('');
            $('[name="inv_termpph"]').val('');
            $('[name="invdet_brcsub"]').val('');
            $('[name="inv_termbrccode"]').val('');
            $('[name="inv_termsubbrc"]').val('');
            $('[name="inv_termppnbrc"]').val('');
            $('[name="inv_termpphbrc"]').val('');
        }

        function test()
        {
            var id = $('[name="inv_id"]').val();
            var dt = '2018-12-20';
            var chg = moment(dt).format('DD/MM/YYYY');
            var apprbrc = '0';
            if ($('[name="inv_apprbrcid"]').val() != '')
            {
                apprbrc = $('[name="inv_apprbrcid"]').val();
            }
            alert(apprbrc);
            // $.ajax({
            //     url : "<?php echo site_url('administrator/Finance/get_subinvdet/')?>"+id,
            //     type: "GET",
            //     dataType: "JSON",
            //     success: function(data)
            //     {                       
            //         $('[name="test"]').text(data.sub1+''+data.sub2);
            //     },
            //     error: function (jqXHR, textStatus, errorThrown)
            //     {
            //         alert('Error get data from ajax');
            //     }
            // });
        }
    </script>
</body>
</html>