<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-header">Master Sales</h1>
                    </div>                
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-success" onclick="add_sls()"><i class="glyphicon glyphicon-plus"></i> Tambah Sales</button>
                    </div>
                    <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                        <button class="btn btn-block btn-info" onclick="exp_sales()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div>
                </div><br>
                <div class="col-sm-12 col-xs-12 table-responsive">                    
                    <table id="dtb_sls" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th class="text-center">
                                    Kode
                                </th>
                                <th class="col-sm-2 col-xs-2 text-center">
                                    Nama
                                </th>
                                <th class="col-sm-2 col-xs-2 text-center">
                                    Cabang
                                </th>
                                <th class="text-center">
                                    No.Tlp
                                </th>
                                <th class="text-center">
                                    Email
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
                <div class="modal-body" style="overflow:hidden;">
                    <form action="#" id="form">                        
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="code" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen" type="button" onclick="gen_sls()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Karyawan</label>
                                <div class="col-sm-10">
                                    <select id="person" name="person" class="form-control" required>
                                        <option value="">--Pilih--</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cabang</label>
                                <div class="col-sm-10">
                                    <select id="brc" name="brc" class="form-control" required>
                                        <option value="">--Pilih--</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>                        
                        <div class="row">
                            <div class="formgroup">
                                <label class="col-sm-2 control-label">No.Tlp</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="notlp">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="formgroup">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="mail">
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
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vcode" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Karyawan</label>
                                <div class="col-sm-10">
                                    <select id="vperson" name="vperson" class="form-control" required readonly disabled>
                                        <option value="">--Pilih--</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cabang</label>
                                <div class="col-sm-10">
                                    <select id="vbrc" name="vbrc" class="form-control" required readonly disabled>
                                        <option value="">--Pilih--</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>                        
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No.Tlp</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vnotlp" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="vmail" readonly>
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
        dt_sls();
        dropperson();
        dropperson2();
        dropbranch();
        dropbranch2();
    });
    function dt_sls()
    {
        table = $('#dtb_sls').DataTable({ 
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],            
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_sls')?>",
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
    function dropperson()
    {
        $.ajax({
        url : "<?php echo site_url('administrator/Master/getperson')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
            {   
                var select = document.getElementById('person');                
                var option;
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["PERSON_ID"]
                    option.text = data[i]["PERSON_NAME"];
                    select.add(option);                    
                }
            },
        error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function dropperson2()
    {
        $.ajax({
        url : "<?php echo site_url('administrator/Master/getperson')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
            {   
                var select = document.getElementById('vperson');                
                var option;
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["PERSON_ID"]
                    option.text = data[i]["PERSON_NAME"];
                    select.add(option);                    
                }
            },
        error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function dropbranch()
    {
        $.ajax({
        url : "<?php echo site_url('administrator/Master/getbranch')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
            {   
                var select = document.getElementById('brc');                
                var option;
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["BRANCH_ID"]
                    option.text = data[i]["BRANCH_NAME"];
                    select.add(option);                    
                }
            },
        error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function dropbranch2()
    {
        $.ajax({
        url : "<?php echo site_url('administrator/Master/getbranch')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
            {   
                var select = document.getElementById('vbrc');                
                var option;
                for (var i = 0; i < data.length; i++) {
                    option = document.createElement('option');
                    option.value = data[i]["BRANCH_ID"]
                    option.text = data[i]["BRANCH_NAME"];
                    select.add(option);                    
                }
            },
        error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function lihat_sls(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_sls/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.SALES_ID);
                $('[name="vcode"]').val(data.SALES_CODE);
                var person = data.PERSON_ID;
                document.querySelector('#vperson [value="' + person + '"]').selected = true;
                var branch = data.BRANCH_ID;
                document.querySelector('#vbrc [value="' + branch + '"]').selected = true
                $('[name="vnama"]').val(data.SALES_NAME);
                $('[name="vnotlp"]').val(data.SALES_PHONE);
                $('[name="vmail"]').val(data.SALES_EMAIL);
                $('#modal_view').modal('show');
                $('.modal-title').text('Edit Sales');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function add_sls()
    {        
        save_method = 'add';
        $('#form')[0].reset();
        $('.formgroup').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Sales');
        $('[name="tb"]').val("master_sales");
        $('[name="sts"]').val("1");
        $('[name="check"]').val("0");
        $('[name="gen"]').prop('disabled',false);
        gen_sls();
        // $('[name="code"]').prop('readonly',false);
    }
    function edit_sls(id)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.formgroup').removeClass('has-error');
        $('.help-block').empty();
        $('[name="code"]').prop('readonly',true);
        $('[name="gen"]').prop('disabled',true);
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_sls/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.SALES_ID);
                $('[name="code"]').val(data.SALES_CODE);
                var person = data.PERSON_ID;
                document.querySelector('#person [value="' + person + '"]').selected = true;
                var branch = data.BRANCH_ID;
                document.querySelector('#brc [value="' + branch + '"]').selected = true
                $('[name="nama"]').val(data.SALES_NAME);
                $('[name="notlp"]').val(data.SALES_PHONE);
                $('[name="mail"]').val(data.SALES_EMAIL);
                $('[name="sts"]').val(data.SALES_DTSTS);
                $('[name="check"]').val("1");
                $('[name="tb"]').val("master_sales");
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Sales');
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
            url = "<?php echo site_url('administrator/Master/ajax_add_sls')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_sls')?>";
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
    function delete_sls(id)
    {
        if(confirm('Are you sure delete this data?'))
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_sls')?>/"+id,
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
    function gen_sls()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_sls')?>",
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
    function exp_sales()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_sales')?>",'_blank');
    }
    </script>
</body>
</html>