<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master Jenis Reklame</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">
                                    <h4>Data Jenis Reklame</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">
                                    <h4>Data Penempatan</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <div class="row"><br>
                            <div class="col-xs-2">
                                <button class="btn btn-success" onclick="add_bb()"><i class="glyphicon glyphicon-plus"></i> Tambah Jenis Reklame</button>
                            </div>
                            <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <button class="btn btn-block btn-info" onclick="exp_bb()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_bb" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th class="text-center">
                                            Kode
                                        </th>
                                        <th class="col-sm-3 col-xs-3 text-center">
                                            Nama
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
                            <div class="col-xs-2">
                                <button class="btn btn-success" onclick="add_placement()"><i class="glyphicon glyphicon-plus"></i> Tambah Penempatan</button>
                            </div>
                            <div class="col-xs-2">
                                <button class="btn btn-block btn-info" onclick="exp_plc()" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_placement" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th class="text-center">
                                            Kode
                                        </th>
                                        <th class="col-sm-3 col-xs-3 text-center">
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
                                    <input class="form-control" type="text" name="code" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen" type="button" onclick="gen_bb()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Info</label>
                                <div class="col-sm-10">
                                    <textarea name="info" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>                 
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="tb" value="">
                        <input type="hidden" name="sts" value="">
                        <input type="hidden" name="check" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
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
                                    <input class="form-control" type="text" name="code2" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen2s" type="button" onclick="gen_plc()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama2">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>                 
                        <input type="hidden" name="id2" value="">
                        <input type="hidden" name="tb2" value="">
                        <input type="hidden" name="sts2" value="">
                        <input type="hidden" name="check2" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave2" onclick="save2()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
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
                                    <input class="form-control" type="text" name="vcode" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vnama" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Info</label>
                                <div class="col-sm-10">
                                    <textarea name="vinfo" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>                  
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="tb" value="">
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
                                    <input class="form-control" type="text" name="vcode2" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vnama2" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>                 
                        <input type="hidden" name="id2" value="">
                        <input type="hidden" name="tb2" value="">
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
        dt_bboard();
        dt_placement();
    });
    function dt_bboard()
    {
        table = $('#dtb_bb').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],            
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_bb')?>",
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
    function dt_placement()
    {
        table = $('#dtb_placement').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],            
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_plc')?>",
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
    function lihat_bb(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_bb/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.BB_ID);
                $('[name="vcode"]').val(data.BB_CODE);
                $('[name="vnama"]').val(data.BB_NAME);
                $('[name="vinfo"]').val(data.BB_INFO);
                $('#modal_view').modal('show');
                $('.modal-title').text('Edit Jenis Reklame');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function lihat_plc(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_plc/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id2"]').val(data.PLC_ID);
                $('[name="vcode2"]').val(data.PLC_CODE);
                $('[name="vnama2"]').val(data.PLC_NAME);                
                $('#modal_view2').modal('show');
                $('.modal-title').text('Edit Jenis Penempatan');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function add_bb()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Jenis Reklame');
        $('[name="tb"]').val("master_bboard");
        $('[name="sts"]').val("1");
        $('[name="check"]').val("0");
        $('[name="gen"]').prop('disabled',false);
        gen_bb();
        // $('[name="code"]').prop('readonly',false);
    }
    function add_placement()
    {
        save_method = 'add';
        $('#form2')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form2').modal('show');
        $('.modal-title').text('Tambah Jenis Penempatan');
        $('[name="tb2"]').val("master_placement");
        $('[name="sts2"]').val("1");
        $('[name="check2"]').val("0");
        $('[name="gen2"]').prop('disabled',false);
        gen_plc();
        // $('[name="code"]').prop('readonly',false);
    }
    function edit_bb(id)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="code"]').prop('readonly',true);
        $('[name="gen"]').prop('disabled',true);
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_bb/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.BB_ID);
                $('[name="code"]').val(data.BB_CODE);
                $('[name="nama"]').val(data.BB_NAME);
                $('[name="info"]').val(data.BB_INFO);
                $('[name="sts"]').val(data.BB_DTSTS);
                $('[name="check"]').val("1");
                $('[name="tb"]').val("master_bboard");
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Jenis Reklame');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function edit_plc(id)
    {
        save_method = 'update';
        $('#form2')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="code2"]').prop('readonly',true);
        $('[name="gen2"]').prop('disabled',true);
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_plc/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id2"]').val(data.PLC_ID);
                $('[name="code2"]').val(data.PLC_CODE);
                $('[name="nama2"]').val(data.PLC_NAME);                
                $('[name="sts2"]').val(data.PLC_DTSTS);
                $('[name="check2"]').val("1");
                $('[name="tb2"]').val("master_placement");
                $('#modal_form2').modal('show');
                $('.modal-title').text('Edit Jenis Reklame');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function reload_table()
    {
        $('#dtb_bb').DataTable().ajax.reload(null,false);
        $('#dtb_placement').DataTable().ajax.reload(null,false);
    }
    function save()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled',true);
        var url;        
        if(save_method == 'add') {
            url = "<?php echo site_url('administrator/Master/ajax_add_bb')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_bb')?>";
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
    function save2()
    {
        $('#btnSave2').text('saving...');
        $('#btnSave2').attr('disabled',true);
        var url;        
        if(save_method == 'add') {
            url = "<?php echo site_url('administrator/Master/ajax_add_plc')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_plc')?>";
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
    function delete_bb(id)
    {
        if(confirm('Are you sure delete this data?'))
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_bb/')?>"+id,
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
    function delete_plc(id)
    {
        if(confirm('Are you sure delete this data?'))
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_plc/')?>"+id,
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
    function gen_bb()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_bb')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {                    
                $('[name="code"]').val(data.kode);                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error Generate Number');
            }
        });
    }
    function gen_plc()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_plc')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {                    
                $('[name="code2"]').val(data.kode);                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error Generate Number');
            }
        });
    }
    function exp_bb()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_bb')?>",'_blank');
    }
    function exp_plc()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_plc')?>",'_blank');
    }
    </script>
</body>
</html>