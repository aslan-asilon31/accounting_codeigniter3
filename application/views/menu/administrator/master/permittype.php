<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master Perijinan</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">
                                    <h4>Data Jenis Ijin</h4>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#2" data-toggle="tab">
                                    <h4>Data Ijin Lokasi</h4>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <div class="row"><br>
                            <div class="col-xs-2">
                                <button class="btn btn-success" onclick="add_ptyp()"><i class="glyphicon glyphicon-plus"></i> Tambah Jenis Ijin</button>
                            </div>
                            <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <button class="btn btn-block btn-info" onclick="exp_patt()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">                    
                            <table id="dtb_ptyp" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                    <!-- <div class="tab-pane fade" id="2">
                        <div class="row"><br>
                            <div class="col-lg-2">
                                <button class="btn btn-success" onclick="add_locpat()"><i class="glyphicon glyphicon-plus"></i> Tambah Ijin Lokasi</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">                    
                            <table id="dtb_locpat" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th class="text-center">
                                            Kode
                                        </th>
                                        <th class="text-center">
                                            Lokasi
                                        </th>
                                        <th class="text-center">
                                            Nama Ijin
                                        </th>
                                        <th class="text-center">
                                            Uraian
                                        </th>
                                        <th class="text-center">
                                            Tgl.Habis
                                        </th>
                                        <th class="text-center">
                                            Actions
                                        </th>
                                    </tr>                            
                                </thead>                        
                            </table>
                        </div>
                    </div> -->
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
                                    <input class="form-control" type="text" name="code" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen" type="button" onclick="gen_ptyp()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
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
                    <button type="button" id="btnSave" onclick="save_ptyp()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
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
                                    <input class="form-control" type="text" name="code" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen2" type="button" onclick="gen_locpat()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <select name="gov" id="loc" class="form-control">
                                        <option value="">--Pilih--</option>
                                    <?php
                                        for($i=0; $i<count($loc); $i++)
                                    { ?>
                                        <option value="<?php echo $loc[$i]->LOC_ID ; ?>"><?php echo $loc[$i]->LOC_NAME; ?></option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Ijin</label>
                                <div class="col-sm-10">
                                    <select name="gov" id="patyp" class="form-control">
                                        <option value="">--Pilih--</option>
                                    <?php
                                        for($i=0; $i<count($pattyp); $i++)
                                    { ?>
                                        <option value="<?php echo $pattyp[$i]->PRMTTYP_ID ; ?>"><?php echo $pattyp[$i]->PRMTTYP_NAME; ?></option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Uraian</label>
                                <div class="col-sm-10">
                                    <textarea name="desc" class="form-control" rows="2" style="resize:vertical;"></textarea>
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
                    <button type="button" id="btnSave" onclick="save_locpat()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
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
    <!-- /Modal View -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script type="text/javascript">    
    $(document).ready(function() {
        dt_ptyp();
        dt_locpat();
    });
    function dt_ptyp()
    {
        table = $('#dtb_ptyp').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_ptyp')?>",
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
    function dt_locpat()
    {
        table = $('#dtb_locpat').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],            
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_locpat')?>",
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
    function lihat_ptyp(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_ptyp/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.PRMTTYP_ID);
                $('[name="vcode"]').val(data.PRMTTYP_CODE);
                $('[name="vnama"]').val(data.PRMTTYP_NAME);
                $('[name="vinfo"]').val(data.PRMTTYP_INFO);
                $('#modal_view').modal('show');
                $('.modal-title').text('Edit Jenis Reklame');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function lihat_locpat(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_ptyp/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.PRMTTYP_ID);
                $('[name="vcode"]').val(data.PRMTTYP_CODE);
                $('[name="vnama"]').val(data.PRMTTYP_NAME);
                $('[name="vinfo"]').val(data.PRMTTYP_INFO);
                $('#modal_view').modal('show');
                $('.modal-title').text('Edit Jenis Reklame');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function add_ptyp()
    {        
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Jenis Permit');
        $('[name="tb"]').val("master_permit_type");
        $('[name="sts"]').val("1");
        $('[name="check"]').val("0");
        $('[name="gen"]').prop('disabled',false);
        gen_ptyp();
        // $('[name="code"]').prop('readonly',false);
    }
    function add_locpat()
    {
        save_method = 'add';
        $('#form2')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form2').modal('show');
        $('.modal-title').text('Tambah Ijin Lokasi');
        $('[name="tb"]').val("master_permit_type");
        $('[name="sts"]').val("1");
        $('[name="check"]').val("0");
        $('[name="code"]').prop('readonly',false);
    }
    function edit_ptyp(id)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="code"]').prop('readonly',true);
        $('[name="gen"]').prop('disabled',true);
        
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_ptyp/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.PRMTTYP_ID);
                $('[name="code"]').val(data.PRMTTYP_CODE);
                $('[name="nama"]').val(data.PRMTTYP_NAME);
                $('[name="info"]').val(data.PRMTTYP_INFO);
                $('[name="sts"]').val(data.PRMTTYP_DTSTS);
                $('[name="check"]').val("1");
                $('[name="tb"]').val("master_permit_type");
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Jenis Ijin');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function reload_table_ptyp()
    {        
        $('#dtb_ptyp').DataTable().ajax.reload(null,false);
    }
    function reload_table_locpat()
    {        
        $('#dtb_locpat').DataTable().ajax.reload(null,false);
    }
    function save_ptyp()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled',true);
        var url;        
        if(save_method == 'add') {
            url = "<?php echo site_url('administrator/Master/ajax_add_ptyp')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_ptyp')?>";
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
                    reload_table_ptyp();
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
    function delete_ptyp(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_ptyp/')?>"+id,
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
    function gen_ptyp()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_ptyp')?>",
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
    function exp_patt()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_patt')?>",'_blank');
    }
    </script>
</body>
</html>