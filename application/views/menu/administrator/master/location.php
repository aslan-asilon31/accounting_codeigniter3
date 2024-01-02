<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master Lokasi</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">
                                    <h4>Data Pemerintahan</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">
                                    <h4>Data Lokasi</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <div class="row"><br>
                            <div class="col-xs-2">
                                <button class="btn btn-success" onclick="add_gov()"><i class="glyphicon glyphicon-plus"></i> Tambah Status Pemerintahan</button>
                            </div>
                            <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <button class="btn btn-block btn-info" onclick="exp_gov()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">                    
                            <table id="dtb_gov" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th class="text-center">
                                            Kode
                                        </th>
                                        <th class="text-center">
                                            Nama
                                        </th>
                                        <th class="text-center">
                                            Keterangan
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
                            <div class="col-xs-2">
                                <button class="btn btn-success" onclick="add_loc()"><i class="glyphicon glyphicon-plus"></i> Tambah Lokasi</button>
                            </div>
                            <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <button class="btn btn-block btn-info" onclick="exp_loc()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">                    
                            <table id="dtb_loc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th class="text-center">
                                            Kode
                                        </th>
                                        <th class="text-center">
                                            Nama
                                        </th>
                                        <th class="text-center">
                                            Status
                                        </th>
                                        <th class="text-center">
                                            Alamat
                                        </th>
                                        <th class="text-center">
                                            Kota
                                        </th>
                                        <th class="text-center">
                                            Keterangan
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
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- Modal CRUD -->
    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form action="#" id="form">                        
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="lcode" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen2" type="button" onclick="gen_loc()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="lname">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="gov" id="gov" class="form-control">
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="lalamat" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kota</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" name="lkota">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="formgroup">
                                <label class="col-sm-2 control-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="lket" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>                  
                        <input type="hidden" name="lid" value="">
                        <input type="hidden" name="ltb" value="">
                        <input type="hidden" name="lsts" value="">
                        <input type="hidden" name="lcheck" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="saveloc()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>    
    </div>
    <div class="modal fade" id="modal_form2" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form action="#" id="form2">                        
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="gcode" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen" type="button" onclick="gen_gov()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="formg-roup">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="gname">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="ginfo" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>                  
                        <input type="hidden" name="gid" value="">
                        <input type="hidden" name="gtb" value="">
                        <input type="hidden" name="gsts" value="">
                        <input type="hidden" name="gcheck" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave2" onclick="savegov()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
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
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form action="#" id="view">
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vlcode" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vlname" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="vgov" id="vgov" class="form-control" readonly>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="vlalamat" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kota</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" name="vlkota" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="formgroup">
                                <label class="col-sm-2 control-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="vlket" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>   
                        <input type="hidden" name="lid" value="">
                        <input type="hidden" name="ltb" value="">
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
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form action="#" id="view2">
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vgcode" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="formg-roup">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vgname" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="vginfo" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>   
                        <input type="hidden" name="gid" value="">
                        <input type="hidden" name="gtb" value="">
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
    <script type="text/javascript">    
    $(document).ready(function() {
        dt_gov();
        dt_loc();
        dropgov();
        dropgov2();
    });
    function dt_gov()
    {
        table = $('#dtb_gov').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_gov')?>",
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
    function dt_loc()
    {
        table = $('#dtb_loc').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_loc')?>",
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
    function dropgov()
    {
        $.ajax({
        url : "<?php echo site_url('administrator/Master/getgov')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
            {   
                var select = document.getElementById('gov');
                var option;
                option = document.createElement('option');
                    option.value = ''
                    option.text = '--Pilih--';
                    select.add(option);
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["GOV_ID"]
                    option.text = data[i]["GOV_NAME"];
                    select.add(option);
                }
            },
        error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function dropgov2()
    {
        $.ajax({
        url : "<?php echo site_url('administrator/Master/getgov')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
            {   
                var select = document.getElementById('vgov');
                var option;
                option = document.createElement('option');
                    option.value = ''
                    option.text = '--Pilih--';
                    select.add(option);
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["GOV_ID"]
                    option.text = data[i]["GOV_NAME"];
                    select.add(option);
                }
            },
        error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function lihat_gov(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_gov/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="gid"]').val(data.GCV_ID);
                $('[name="vgcode"]').val(data.GOV_CODE);                
                $('[name="vgname"]').val(data.GOV_NAME);
                $('[name="vginfo"]').val(data.GOV_INFO);
                $('#modal_view2').modal('show');
                $('.modal-title').text('Lihat Status Pemerintahan');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function lihat_loc(id)
    {
        $('#vgov').empty()
        dropgov2();
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_loc/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="lid"]').val(data.LOC_ID);
                $('[name="vlcode"]').val(data.LOC_CODE);
                $('[name="vlname"]').val(data.LOC_NAME);
                $('[name="vgov"]').val(data.GOV_ID);
                $('[name="vlalamat"]').val(data.LOC_ADDRESS);
                $('[name="vlkota"]').val(data.LOC_CITY);
                $('[name="vlket"]').val(data.LOC_INFO);
                $('#modal_view').modal('show');
                $('.modal-title').text('Edit Lokasi');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function add_gov()
    {
        save_method = 'add';
        $('#form2')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form2').modal('show');
        $('.modal-title').text('Tambah Status Pemerintahan');
        $('[name="gtb"]').val("master_gov_type");
        $('[name="gcheck"]').val("0");
        $('[name="gsts"]').val("1");
        $('[name="gen"]').prop('disabled',false);
        gen_gov();
        // $('[name="gcode"]').prop('readonly',false);
    }
    function add_loc()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('#gov').empty()
        dropgov();
        $('.modal-title').text('Tambah Lokasi');
        $('[name="ltb"]').val("master_location");
        $('[name="lcheck"]').val("0");
        $('[name="lsts"]').val("1");
        $('[name="gen2"]').prop('disabled',false);
        gen_loc();
        // $('[name="lcode"]').prop('readonly',false);
    }
    function edit_gov(id)
    {
        save_method = 'update';
        $('#form2')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="gcode"]').prop('readonly',true);
        $('[name="gen"]').prop('disabled',true);
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_gov/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="gid"]').val(data.GOV_ID);
                $('[name="gcode"]').val(data.GOV_CODE);                
                $('[name="gname"]').val(data.GOV_NAME);
                $('[name="ginfo"]').val(data.GOV_INFO);
                $('[name="gsts"]').val(data.GOV_DTSTS);
                $('[name="gcheck"]').val("1");
                $('[name="gtb"]').val("master_gov_type");
                $('#modal_form2').modal('show');
                $('.modal-title').text('Edit Status Pemerintahan');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function edit_loc(id)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="lcode"]').prop('readonly',true);
        $('[name="gen2"]').prop('disabled',true);
        $('#gov').empty()
        dropgov();     
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_loc/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="lid"]').val(data.LOC_ID);
                $('[name="lcode"]').val(data.LOC_CODE);
                $('[name="lname"]').val(data.LOC_NAME);
                $('[name="gov"]').val(data.GOV_ID);
                $('[name="lalamat"]').val(data.LOC_ADDRESS);
                $('[name="lkota"]').val(data.LOC_CITY);
                $('[name="lket"]').val(data.LOC_INFO);
                $('[name="lsts"]').val(data.LOC_DTSTS);
                $('[name="lcheck"]').val("1");
                $('[name="ltb"]').val("master_location");
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Lokasi');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function reload_table_gov()
    {        
        $('#dtb_gov').DataTable().ajax.reload(null,false);
    }
    function reload_table_loc()
    {        
        $('#dtb_loc').DataTable().ajax.reload(null,false);
    }
    function savegov()
    {
        $('#btnSave2').text('saving...');
        $('#btnSave2').attr('disabled',true);
        var url;        
        if(save_method == 'add') {
            url = "<?php echo site_url('administrator/Master/ajax_add_gov')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_gov')?>";
        }
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form2').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                if(data.status)
                {
                    $('#modal_form2').modal('hide');
                    reload_table_gov();
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
    function saveloc()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled',true);
        var url;        
        if(save_method == 'add') {
            url = "<?php echo site_url('administrator/Master/ajax_add_loc')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_loc')?>";
        }
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                if(data.status)
                {
                    $('#modal_form').modal('hide');
                    reload_table_loc();
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
    function delete_loc(id)
    {
        if(confirm('Are you sure delete this data?'))
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_loc')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {                    
                    $('#modal_form').modal('hide');
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }
    function delete_gov(id)
    {
        if(confirm('Are you sure delete this data?'))
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_gov')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    $('#modal_form2').modal('hide');
                    reload_table_gov();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }
    function gen_gov()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_gov')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {                    
                $('[name="gcode"]').val(data.kode);                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error Generate Number');
            }
        });
    }
    function gen_loc()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_loc')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {                    
                $('[name="lcode"]').val(data.kode);                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error Generate Number');
            }
        });
    }
    function exp_gov()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_gov')?>",'_blank');
    }
    function exp_loc()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_loc')?>",'_blank');
    }
    </script>
</body>
</html>