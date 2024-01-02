<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-header">Master Currency</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-success" onclick="add_crc()"><i class="glyphicon glyphicon-plus"></i> Tambah Mata Uang</button>
                    </div>
                    <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                        <button class="btn btn-block btn-info" onclick="exp_curr()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div>
                </div><br>
                <div class="col-sm-12 col-xs-12 table-responsive">                    
                    <table id="dtb_crc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th class="text-center">
                                    Kode
                                </th>
                                <th class="text-center">
                                    Simbol
                                </th>
                                <th class="text-center">
                                    Nama
                                </th>
                                <th class="text-center">
                                    Rate
                                </th>                               
                                <th class="text-center">
                                    Actions
                                </th>
                            </tr>                            
                        </thead>                        
                    </table>
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
                                <label class="col-sm-3 control-label">Kode</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="code" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen" type="button" onclick="gen_crc()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Simbol Mata Uang</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="cr_code">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="nama">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rate</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="rate">
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
                                <label class="col-sm-3 control-label">Kode</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vcode" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Simbol Mata Uang</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vcr_code" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vnama" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rate</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vrate" readonly>
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
    <!-- /Modal View -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script type="text/javascript">    
    $(document).ready(function() {
        dt_crc();        
    });
    function dt_crc()
    {
        table = $('#dtb_crc').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_crc')?>",
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
    function lihat_crc(id)
    {        
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_crc/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.CURR_ID);
                $('[name="vcode"]').val(data.CURR_CODE);
                $('[name="vnama"]').val(data.CURR_NAME);
                $('[name="vcr_code"]').val(data.CURR_SYMBOL);
                $('[name="vrate"]').val(data.CURR_RATE); 
                $('#modal_view').modal('show');
                $('.modal-title').text('Edit Lokasi');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function add_crc()
    {        
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Mata Uang');
        $('[name="tb"]').val("master_currency");
        $('[name="sts"]').val("1");
        $('[name="check"]').val("0");
        $('[name="gen"]').prop('disabled',false);
        gen_crc();
        // $('[name="code"]').prop('readonly',false);
    }
    function edit_crc(id)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="code"]').prop('readonly',true);
        $('[name="gen"]').prop('disabled',true);
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_crc/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.CURR_ID);
                $('[name="code"]').val(data.CURR_CODE);
                $('[name="nama"]').val(data.CURR_NAME);
                $('[name="cr_code"]').val(data.CURR_SYMBOL);
                $('[name="rate"]').val(data.CURR_RATE);
                $('[name="sts"]').val(data.CURR_DTSTS);
                $('[name="check"]').val("1");
                $('[name="tb"]').val("master_currency");
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Mata Uang');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function reload_table()
    {
        table.ajax.reload(null,false);
    }
    function save()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled',true);
        var url;        
        if(save_method == 'add') {
            url = "<?php echo site_url('administrator/Master/ajax_add_crc')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_crc')?>";
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
    function delete_crc(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_crc')?>/"+id,
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
    function gen_crc()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_crc')?>",
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
    function exp_curr()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_curr')?>",'_blank');
    }
    </script>
</body>
</html>