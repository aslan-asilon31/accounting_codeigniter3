<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-header">Master Jenis Invoice</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-success" onclick="add_invtype()"><i class="glyphicon glyphicon-plus"></i> Tambah Jenis Invoice</button>
                    </div>
                    <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                        <button class="btn btn-block btn-info" onclick="exp_invt()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div>
                </div><br>
                <div class="col-sm-12 col-xs-12 table-responsive">                    
                    <table id="dtb_invtype" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    Cabang
                                </th>
                                <th class="text-center">
                                    Piutang
                                </th>
                                <th class="text-center">
                                    Pendapatan
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
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="code" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen" type="button" onclick="gen_invtype()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
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
                                <label class="col-sm-2 control-label">Cabang</label>
                                <div class="col-sm-10">
                                    <select name="brc" id="brc" class="form-control text-center" data-live-search="true">
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akun Piutang</label>
                                <div class="col-sm-10">
                                    <select class="form-control text-center" name="accrcv" id="accrcv" data-live-search="true">
                                        <option value="">Pilih</option>
                                    </select>                                    
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akun Pendapatan</label>
                                <div class="col-sm-10">
                                    <select class="form-control text-center" name="accinc" id="accinc" data-live-search="true">
                                        <option value="">Pilih</option>
                                    </select>                                    
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="accrcvname">
                        <input type="hidden" name="accincname">
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
                                <label class="col-sm-2 control-label">Cabang</label>
                                <div class="col-sm-10">
                                    <input type="text" name="vbrc" id="vbrc" class="form-control" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akun Piutang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vaccrcv" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akun Pendapatan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vaccinc" readonly>
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
    <script>    
    $(document).ready(function()
    {
        dt_invtype();
        drop_coa1();
        drop_coa2();
        $('#accrcv').change(function(){
            $('[name="accrcvname"]').val($('#accrcv option:selected').text());
        });
        $('#accinc').change(function(){            
            $('[name="accincname"]').val($('#accinc option:selected').text());
        });
    });
    function drop_coa1()
    {
        $.ajax({
        url : "<?php echo site_url('administrator/Master/getcoa')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
            {   
                var select = document.getElementById('accrcv');
                var option;
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["COA_ID"]
                    option.text = data[i]["COA_ACC"]+'-'+data[i]["COA_ACCNAME"];
                    select.add(option);
                }
                $('#accrcv').selectpicker({});                
            },
        error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function drop_coa2()
    {
        $.ajax({
        url : "<?php echo site_url('administrator/Master/getcoa')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
            {   
                var select = document.getElementById('accinc');
                var option;
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["COA_ID"]
                    option.text = data[i]["COA_ACC"]+'-'+data[i]["COA_ACCNAME"];
                    select.add(option);
                }
                $('#accinc').selectpicker({});
            },
        error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function drop_brc(id)
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
    function dt_invtype()
    {
        table = $('#dtb_invtype').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_invtype')?>",
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
    function reload_table()
    {
        table.ajax.reload(null,false);
    }
    function add_invtype()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Jenis Invoice');
        $('[name="tb"]').val("invoice_type");
        $('[name="sts"]').val("1");
        $('[name="check"]').val("0");
        $('[name="gen"]').prop('disabled',false);
        gen_invtype();
        $('#accrcv').val('default');
        $('#accrcv').selectpicker('refresh');
        $('#accinc').val('default');
        $('#accinc').selectpicker('refresh');
        $('#brc').empty();
        drop_brc('brc');
    }
    function edit_invtype(id)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="code"]').prop('readonly',true);
        $('[name="gen"]').prop('disabled',true);
        $('#brc').empty();
        drop_brc('brc');
        $.ajax({
            url : "<?php echo site_url('administrator/Master/edit_invtype/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.INC_ID);
                $('[name="code"]').val(data.INC_CODE);
                $('[name="nama"]').val(data.INC_NAME);
                var brc = data.BRANCH_ID;
                $('select#brc').val(brc);
                $('#brc').selectpicker('refresh');
                var sts = data.INC_ACCRCV;
                $('select#accrcv').val(sts);
                $('#accrcv').selectpicker('refresh');
                var sts = data.INC_ACCINC;
                $('select#accinc').val(sts);
                $('#accinc').selectpicker('refresh');
                $('[name="sts"]').val(data.BRANCH_DTSTS);
                $('[name="check"]').val("1");
                $('[name="tb"]').val("invoice_type");
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Jenis Invoice');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function lihat_invtype(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/edit_invtype/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.INC_ID);
                $('[name="vcode"]').val(data.INC_CODE);
                $('[name="vnama"]').val(data.INC_NAME);
                $('[name="vbrc"]').val(data.BRANCH_NAME);
                $('[name="vaccrcv"]').val(data.INC_ACCRCVNAME);
                $('[name="vaccinc"]').val(data.INC_ACCINCNAME);
                var sts = data.INC_ACCRCV;
                $('#modal_view').modal('show');
                $('.modal-title').text('Lihat Cabang');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function save()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled',true);
        var url;        
        if(save_method == 'add') {
            url = "<?php echo site_url('administrator/Master/add_invtype')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/update_invtype')?>";
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
    function delete_invtype(id)
    {
        if(confirm('Are you sure delete this data?'))
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Master/delete_invtype/')?>"+id,
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
    function gen_invtype()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_invtype')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {                    
                $('[name="code"]').val(data.kode);
                // alert(data.kode);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error Generate Number');
            }
        });
    }
    function exp_invt()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_invt')?>",'_blank');
    }
    </script>
</body>
</html>