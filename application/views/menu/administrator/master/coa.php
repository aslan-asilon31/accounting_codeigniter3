<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master Chart of Account</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">
                                    <h4>Data Rek. Induk</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">
                                    <h4>Data Rekening</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <div class="row"><br>
                            <div class="col-sm-2">
                                <button class="btn btn-success" onclick="add_parent()"><i class="glyphicon glyphicon-plus"></i> Tambah Rek. Induk</button>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-primary" onclick="open_parenttype()"><i class="glyphicon glyphicon-plus"></i> Tambah Jenis Rek.Induk</button>
                            </div>
                        </div><br>
                        <div class="col-sm-offset-2 col-sm-8" id="parenttype">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h4>Tambah Jenis Rekening Induk</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" id="form_parenttype">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="partp_name" class="form-control">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-9">
                                                <select id="partp_sts" name="partp_sts" class="form-control">
                                                    <option value="">Pilih</option>
                                                    <option value="1">Harta/Assets</option>
                                                    <option value="2">Biaya/Cost</option>
                                                    <option value="3">Utang/Liability</option>
                                                    <option value="4">Pendapatan</option>
                                                    <option value="5">Modal</option>
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="partp_savests" value="0">
                                            <input type="hidden" name="partp_check" value="0">
                                            <input type="hidden" name="partp_id">
                                            <div class="col-sm-offset-3 col-sm-2">
                                                <button type="button" id="btnSave" onclick="save_partp()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                                            </div>
                                        </div>
                                    </form><br>
                                    <div class="col-sm-offset-3 col-sm-9 col-xs-offset-3 col-xs-9 table-responsive">
                                        <table id="dtb_partype" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        No
                                                    </th>
                                                    <th class="text-center">
                                                        Nama
                                                    </th>
                                                    <th class="text-center">
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_parent" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th class="text-center">
                                            No.Rekening
                                        </th>
                                        <th class="col-sm-3 col-xs-3 text-center">
                                            Nama
                                        </th>
                                        <th class="text-center">
                                            Jenis
                                        </th>
                                        <th class="text-center">
                                            Info
                                        </th>                                
                                        <th class="text-center">
                                            Actions
                                        </th>
                                    </tr>                            
                                </thead>                        
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="2">
                        <div class="row"><br>
                            <div class="col-sm-2">
                                <button class="btn btn-success" onclick="add_chart()"><i class="glyphicon glyphicon-plus"></i> Tambah Rekening</button>
                            </div>
                            <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <button class="btn btn-block btn-info" onclick="exp_coa()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_coa" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th class="text-center">
                                            Rek. Induk
                                        </th>
                                        <th class="text-center">
                                            No. Rekening
                                        </th>                                        
                                        <th class="text-center">
                                            Nama
                                        </th>
                                        <th class="text-center">
                                            Actions
                                        </th>
                                    </tr>                            
                                </thead>                        
                            </table>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>        
    </div>
    <!-- Modal CRUD -->
    <div class="modal fade" id="modal_parent" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form action="#" id="form_parent">
                        <div class="row">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">No Rekening</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="par_acc">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Rekening</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="par_name">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jenis Rekening</label>
                                <div class="col-sm-9">
                                    <select class="form-control text-center" name="par_type" id="par_type" data-live-search="true">
                                        <option value="">Pilih</option>
                                        <option value="aktiva">Aktiva</option>
                                        <option value="kewajiban">Kewajiban</option>
                                        <option value="modal">Modal</option>
                                        <option value="pendapatan">Pendapatan</option>
                                        <option value="biaya">Biaya</option>
                                        <option value="penjualan">Penjualan</option>
                                        <option value="pembelian">Pembelian</option>
                                        <option value="returpenjualan">Retur Penjualan</option>
                                        <option value="returpembelian">Retur Pembelian</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Info</label>
                                <div class="col-sm-9">
                                    <textarea name="par_info" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>               
                        <input type="hidden" name="par_id" value="">
                        <input type="hidden" name="par_tb" value="">
                        <input type="hidden" name="par_sts" value="">
                        <input type="hidden" name="par_check" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save_par()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>    
    </div>
    <div class="modal fade" id="modal_coa" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form action="#" id="form_coa">
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rek. Induk</label>
                                <div class="col-sm-9">
                                    <select name="coa_par" id="coa_par" class="form-control text-center" data-live-search="true">
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cabang</label>
                                <div class="col-sm-9">
                                    <select name="coa_brc" id="coa_brc" class="form-control text-center" data-live-search="true">
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-3 control-label">No. Rekening</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="coa_acc">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-3 control-label">Nama Rekening</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="coa_accname">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="coa_id" value="">
                        <input type="hidden" name="coa_tb" value="">
                        <input type="hidden" name="coa_sts" value="">
                        <input type="hidden" name="coa_check" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave2" onclick="save_coa()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>    
    </div>
    <!-- /Modal CRUD -->
    <!-- Modal View -->
    <div class="modal fade" id="modal_view" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                </div>
                <div class="modal-body">
                    <form action="#" id="view">
                        <div class="row">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">No Rekening</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="par_accv" disabled>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Rekening</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="par_namev" disabled>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jenis Rekening</label>
                                <div class="col-sm-9">
                                    <select class="form-control text-center" name="par_typev" id="par_typev" disabled>
                                        <option value="">Pilih</option>
                                        <option value="aktiva">Aktiva</option>
                                        <option value="kewajiban">Kewajiban</option>
                                        <option value="modal">Modal</option>
                                        <option value="pendapatan">Pendapatan</option>
                                        <option value="biaya">Biaya</option>
                                        <option value="penjualan">Penjualan</option>
                                        <option value="pembelian">Pembelian</option>
                                        <option value="returpenjualan">Retur Penjualan</option>
                                        <option value="returpembelian">Retur Pembelian</option>
                                    </select>                                    
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Info</label>
                                <div class="col-sm-9">
                                    <textarea name="par_infov" class="form-control" rows="2" style="resize:vertical;" disabled></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>               
                        <input type="hidden" name="par_id" value="">
                        <input type="hidden" name="par_tb" value="">
                        <input type="hidden" name="par_sts" value="">
                    </form>
                </div>
                <div class="modal-footer">                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>    
    </div>
    <div class="modal fade" id="modal_view2" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                </div>
                <div class="modal-body">
                    <form action="#" id="view2">
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rek. Induk</label>
                                <div class="col-sm-9">
                                    <select name="coa_parv" id="coa_parv" class="form-control text-center" disabled>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rek. Induk</label>
                                <div class="col-sm-9">
                                    <select name="coa_brcv" id="coa_brcv" class="form-control text-center" disabled>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-3 control-label">No. Rekening</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="coa_accv" disabled>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-3 control-label">Nama Rekening</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="coa_accnamev" disabled>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="coa_id" value="">
                        <input type="hidden" name="coa_tb" value="">
                        <input type="hidden" name="coa_sts" value="">
                    </form>
                </div>
                <div class="modal-footer">                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>    
    </div>
    <!-- /Modal View -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function() 
        {
            $('#parenttype').css({'display':'none'});
            dt_parenttype();
            dt_parent();
            dt_coa();
        });
        function open_parenttype()
        {
            if(!$('#parenttype').is(':visible'))
            {
                $('#parenttype').css({'display':'block'});
            }
            else
            {
                $('#parenttype').css({'display':'none'});
            }
        }
        function dropcoaprtp(id)
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getcoaprtp')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById(id);
                    var option;
                    option = document.createElement('option');
                    option.value = ''
                    option.text = 'Pilih';
                    select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["PARTP_ID"]
                        option.text = data[i]["PARTP_NAME"];
                        select.add(option);
                    }
                    $('#'+id).selectpicker({});
                    $('#'+id).selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dropcoapr(id)
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getcoapr')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById(id);
                    var option;
                    option = document.createElement('option');
                    option.value = ''
                    option.text = 'Pilih';
                    select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["PAR_ID"]
                        option.text = data[i]["PAR_ACC"]+'-'+data[i]["PAR_ACCNAME"];
                        select.add(option);
                    }
                    $('#'+id).selectpicker({});
                    $('#'+id).selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dropcoabrc(id)
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getcoabrc')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
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
                    $('#'+id).selectpicker({});
                    $('#'+id).selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dt_parenttype()
        {
            table = $('#dtb_partype').DataTable({ 
                "info": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showmaster_coapartp')?>",
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "className":"text-center", "targets": [0,2],
                },
                ],
            });
        }
        function dt_parent()
        {
            table = $('#dtb_parent').DataTable({ 
                "info": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_coaparent')?>",
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "className":"text-center", "targets": [0,1,5],
                },
                ],
            });
        }
        function dt_coa()
        {
            table = $('#dtb_coa').DataTable({ 
                "info": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_coa')?>",
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "className":"text-center", "targets": [0,2,4],
                },
                ],
            });
        }
        function reload_table()
        {
            $('#dtb_partype').DataTable().ajax.reload(null,false);
            $('#dtb_parent').DataTable().ajax.reload(null,false);
            $('#dtb_coa').DataTable().ajax.reload(null,false);
        }
        function add_parent()
        {
            save_method = 'add';
            $('#form_parent')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_parent').modal('show');
            $('.modal-title').text('Tambah Rek. Induk');
            $('[name="par_tb"]').val("parent_chart");
            $('[name="par_sts"]').val("1");
            $('[name="par_check"]').val("0");
            $('#par_type').empty();
            dropcoaprtp('par_type');
        }
        function add_chart()
        {
            save_method = 'add';
            $('#form_coa')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_coa').modal('show');
            $('.modal-title').text('Tambah Rek. Induk');
            $('[name="coa_tb"]').val("chart_of_account");
            $('[name="coa_sts"]').val("1");
            $('[name="coa_check"]').val("0");
            $('#coa_par').empty();
            $('#coa_brc').empty();
            dropcoapr('coa_par');
            dropcoabrc('coa_brc');
        }
        function edit_partp(id)
        {
            $('[name="partp_savests"]').val('1');
            $('#form_parenttype')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();

            $.ajax({
                url : "<?php echo site_url('administrator/Master/edit_coaprtp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="partp_id"]').val(data.PARTP_ID);                    
                    $('[name="partp_name"]').val(data.PARTP_NAME);                    
                    // var sts = data.PARTP_STS;
                    // document.querySelector('#partp_sts [value="' + sts + '"]').selected = true;
                    $('#partp_sts').selectpicker('val', data.PARTP_STS);
                    $('[name="partp_check"]').val("1");
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function edit_par(id)
        {
            save_method = 'update';
            $('#form_parent')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#par_type').empty();
            dropcoaprtp('par_type');

            $.ajax({
                url : "<?php echo site_url('administrator/Master/edit_coapr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="par_id"]').val(data.PAR_ID);                    
                    $('[name="par_acc"]').val(data.PAR_ACC);
                    $('[name="par_name"]').val(data.PAR_ACCNAME);
                    $('[name="par_info"]').val(data.PAR_INFO);
                    // var sts = data.PARTP_ID;
                    // document.querySelector('#par_type [value="' + sts + '"]').selected = true;
                    $('#par_type').selectpicker('val', data.PARTP_ID);
                    $('[name="par_check"]').val("1");
                    $('[name="par_tb"]').val("parent_chart");
                    $('#modal_parent').modal('show');
                    $('.modal-title').text('Edit Rek. Induk');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function edit_coa(id)
        {
            save_method = 'update';
            $('#form_coa')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#coa_par').empty();
            $('#coa_brc').empty();
            dropcoapr('coa_par');
            dropcoabrc('coa_brc');

            $.ajax({
                url : "<?php echo site_url('administrator/Master/edit_coa/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="coa_id"]').val(data.COA_ID);
                    $('[name="coa_acc"]').val(data.COA_ACC);
                    $('[name="coa_accname"]').val(data.COA_ACCNAME);
                    // var sts = data.PAR_ID;
                    // document.querySelector('#coa_par [value="' + sts + '"]').selected = true;
                    $('#coa_par').selectpicker('val', data.PAR_ID);
                    $('#coa_brc').selectpicker('val', data.BRANCH_ID);
                    $('[name="coa_check"]').val("1");
                    $('[name="coa_tb"]').val("chart_of_account");
                    $('#modal_coa').modal('show');
                    $('.modal-title').text('Edit Rekening');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function save_partp()
        {
            $('#btnSave').text('saving...');
            $('#btnSave').attr('disabled',true);
            var url;        
            if($('[name="partp_savests"]').val() == '0') 
            {
                url = "<?php echo site_url('administrator/Master/add_coaprtp')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/update_coaprtp')?>";
            }            
            $.ajax({
                url : url,
                type: "POST",
                data: $('#form_parenttype').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        reload_table();
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                            $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                        }
                    }
                    $('#btnSave').text('save');
                    $('#btnSave').attr('disabled',false);
                    $('[name="partp_savests"]').val('0');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                    $('#btnSave').text('save');
                    $('#btnSave').attr('disabled',false);
                }
            });
        }
        function save_par()
        {
            $('#btnSave').text('saving...');
            $('#btnSave').attr('disabled',true);
            var url;        
            if(save_method == 'add') {
                url = "<?php echo site_url('administrator/Master/add_coapr')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/update_coapr')?>";
            }            
            $.ajax({
                url : url,
                type: "POST",
                data: $('#form_parent').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        $('#modal_parent').modal('hide');
                        reload_table();
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                            $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                        }
                    }
                    $('#btnSave').text('save');
                    $('#btnSave').attr('disabled',false);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                    $('#btnSave').text('save');
                    $('#btnSave').attr('disabled',false);
                }
            });
        }
        function save_coa()
        {
            $('#btnSave2').text('saving...');
            $('#btnSave2').attr('disabled',true);
            var url;        
            if(save_method == 'add') {
                url = "<?php echo site_url('administrator/Master/add_coa')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/update_coa')?>";
            }            
            $.ajax({
                url : url,
                type: "POST",
                data: $('#form_coa').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        $('#modal_coa').modal('hide');
                        reload_table();
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                            $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                        }
                    }
                    $('#btnSave2').text('save');
                    $('#btnSave2').attr('disabled',false);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                    $('#btnSave2').text('save');
                    $('#btnSave2').attr('disabled',false);
                }
            });
        }
        function delete_partp(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/delete_coaprtp')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        reload_table();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function delete_par(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/delete_coapr')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        reload_table();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function delete_coa(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/delete_coa')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        reload_table();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function lihat_par(id)
        {
            $('#par_type').empty();
            dropcoaprtp('par_typev');
            $.ajax({
                url : "<?php echo site_url('administrator/Master/edit_coapr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="par_id"]').val(data.PAR_ID);
                    $('[name="par_accv"]').val(data.PAR_ACC);
                    $('[name="par_namev"]').val(data.PAR_ACCNAME);
                    $('[name="par_infov"]').val(data.PAR_INFO);
                    // var sts = data.PARTP_ID;
                    // document.querySelector('#par_typev [value="' + sts + '"]').selected = true;
                    $('#par_typev').selectpicker('val', data.PARTP_ID);
                    $('#modal_view').modal('show');
                    $('.modal-title').text('Lihat Rek. Induk');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function lihat_coa(id)
        {
            $('#coa_parv').empty();
            $('#coa_brcv').empty();
            dropcoapr('coa_parv'); 
            dropcoabrc('coa_brcv');     
            $.ajax({
                url : "<?php echo site_url('administrator/Master/edit_coa/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="coa_id"]').val(data.COA_ID);
                    $('[name="coa_accv"]').val(data.COA_ACC);
                    $('[name="coa_accnamev"]').val(data.COA_ACCNAME);                    
                    // var sts = data.PAR_ID;
                    // document.querySelector('#coa_parv [value="' + sts + '"]').selected = true;
                    $('#coa_parv').selectpicker('val', data.PAR_ID);
                    $('#coa_brcv').selectpicker('val', data.BRANCH_ID);
                    $('#modal_view2').modal('show');
                    $('.modal-title').text('Lihat Rekening');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function exp_coa()
        {
            window.open ( "<?php echo site_url('administrator/Master/export_coa')?>",'_blank');
        }
    </script>