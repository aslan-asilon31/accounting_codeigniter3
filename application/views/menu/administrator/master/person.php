<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master User</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">
                                    <h4>Data Karyawan</h4>
                                </a>
                            </li>
                            <li <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <a href="#2" data-toggle="tab">
                                    <h4>Data User</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <div class="row"><br>
                            <div class="col-lg-2">
                                <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Tambah Karyawan</button>
                            </div>
                            <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <button class="btn btn-block btn-info" onclick="exp_person()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_prs" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                            Alamat
                                        </th>
                                        <th class="text-center">
                                            No.Tlp
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
                            <div class="col-lg-2">
                                <button class="btn btn-success" onclick="add_user()"><i class="glyphicon glyphicon-plus"></i> Tambah User</button>
                            </div>
                            <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <button class="btn btn-block btn-info" onclick="exp_user()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">                    
                            <table id="dtb_prs2" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                            Username
                                        </th>
                                        <th class="col-sm-3 col-xs-3 text-center">
                                            Cabang
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
                                    <button name="genperson" type="button" onclick="gen_person()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
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
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="alamat" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No Tlp</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="notlp">
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
                                    <input class="form-control" type="text" name="codeu" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="genuser" type="button" onclick="gen_user()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Karyawan</label>
                                <div class="col-sm-10">
                                    <select name="person" id="person" class="form-control text-center">
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
                                    <select name="branch" id="branch" class="form-control text-center">
                                        <option value="">--Pilih--</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Level</label>
                                <div class="col-sm-10">
                                    <select name="level" id="level" class="form-control text-center">
                                        <option value="">--Pilih--</option>
                                        <option value="1">Administrator</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Regular</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="username">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password">
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>
                        <input type="hidden" name="idu" value="">
                        <input type="hidden" name="tbu" value="">
                        <input type="hidden" name="stsu" value="">
                        <input type="hidden" name="checku" value="">
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
                    <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
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
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="valamat" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div> 
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No Tlp</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vnotlp" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="tb" value="">
                        <input type="hidden" name="sts" value="">
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
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vcodeu" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vnamau" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cabang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vbranchu" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Level</label>
                                <div class="col-sm-10">
                                    <select name="vlevelu" id="vlevelu" class="form-control text-center" readonly>
                                        <option value="">--Pilih--</option>
                                        <option value="1">Administrator</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Regular</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vusernameu" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="idu" value="">
                        <input type="hidden" name="tbu" value="">
                        <input type="hidden" name="stsu" value="">
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
        dt_person();
        dt_user();
        dropbranch();
    });
    function dt_person()
    {
        table = $('#dtb_prs').DataTable({
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_person')?>",
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
    function dt_user()
    {
        table = $('#dtb_prs2').DataTable({
            "info": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('administrator/Master/ajax_user')?>",
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
                option = document.createElement('option');
                    option.value = ''
                    option.text = '--Pilih--';
                    select.add(option);
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
                var select = document.getElementById('branch');
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
    function lihat_person(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_person/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.PERSON_ID);
                $('[name="vcode"]').val(data.PERSON_CODE);
                $('[name="vnama"]').val(data.PERSON_NAME);
                $('[name="valamat"]').val(data.PERSON_ADDRESS);                
                $('[name="vnotlp"]').val(data.PERSON_PHONE);
                $('[name="sts"]').val(data.PERSON_DTSTS);
                $('#modal_view').modal('show');
                $('.modal-title').text('Edit Person');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function lihat_user(id)
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_lihat_user/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="idu"]').val(data.USER_ID);
                $('[name="vcodeu"]').val(data.USER_CODE);
                $('[name="vnamau"]').val(data.PERSON_NAME);
                $('[name="vbranchu"]').val(data.BRANCH_NAME);
                $('[name="vusernameu"]').val(data.USER_NAME);
                $('select#vlevelu').val(data.USER_LEVEL);
                $('[name="stsu"]').val(data.USER_DTSTS);
                $('#modal_view2').modal('show');
                $('.modal-title').text('Lihat User');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function add_person()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Person');
        $('[name="tb"]').val("master_person");
        $('[name="sts"]').val("1");
        $('[name="check"]').val("0");
        $('[name="genperson"]').prop('disabled',false);
        gen_person();
        // $('[name="code"]').prop('readonly',false);
    }
    function add_user()
    {
        save_method = 'add';
        $('#form2')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form2').modal('show');
        $('#person').empty();
        dropperson();        
        $('.modal-title').text('Tambah User');
        $('[name="tbu"]').val("master_user");
        $('[name="stsu"]').val("1");
        $('[name="checku"]').val("0");
        $('[name="genuser"]').prop('disabled',false);
        gen_user();
        // $('[name="codeu"]').prop('readonly',false);
    }
    function edit_person(id)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="code"]').prop('readonly',true);
        $('[name="genperson"]').prop('disabled',true);        

        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_person/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.PERSON_ID);                
                $('[name="code"]').val(data.PERSON_CODE);
                $('[name="nama"]').val(data.PERSON_NAME);
                $('[name="alamat"]').val(data.PERSON_ADDRESS);                
                $('[name="notlp"]').val(data.PERSON_PHONE);
                $('[name="sts"]').val(data.PERSON_DTSTS);
                $('[name="check"]').val("1");
                $('[name="tb"]').val("master_person");
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Person');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function edit_user(id)
    {
        save_method = 'update';        
        $('#person').empty()        
        $('#form2')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('[name="codeu"]').prop('readonly',true);
        $('[name="genuser"]').prop('disabled',true);
        dropperson();

        $.ajax({
            url : "<?php echo site_url('administrator/Master/ajax_edit_user/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="idu"]').val(data.USER_ID);                
                $('[name="codeu"]').val(data.USER_CODE);
                var person = data.PERSON_ID;
                document.querySelector('#person [value="' + person + '"]').selected = true;
                var branch = data.BRANCH_ID;
                document.querySelector('#branch [value="' + branch + '"]').selected = true;
                $('[name="username"]').val(data.USER_NAME);
                $('select#level').val(data.USER_LEVEL);
                $('[name="stsu"]').val(data.USER_DTSTS);
                $('[name="checku"]').val("1");
                $('[name="tbu"]').val("master_user");
                $('#modal_form2').modal('show');
                $('.modal-title').text('Edit Person');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function reload_table()
    {
        $('#dtb_prs').DataTable().ajax.reload(null,false);
        $('#dtb_prs2').DataTable().ajax.reload(null,false);
    }
    function save()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled',true);
        var url;        
        if(save_method == 'add') {
            url = "<?php echo site_url('administrator/Master/ajax_add_person')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_person')?>";
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
            url = "<?php echo site_url('administrator/Master/ajax_add_user')?>";
        } else {
            url = "<?php echo site_url('administrator/Master/ajax_update_user')?>";
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
    function delete_person(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_person')?>/"+id,
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
    function delete_user(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_delete_user')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    $('#modal_form2').modal('hide');
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }
    function gen_person()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_person')?>",
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
    function gen_user()
    {
        $.ajax({
            url : "<?php echo site_url('administrator/Master/gen_user')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {                    
                $('[name="codeu"]').val(data.kode);                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error Generate Number');
            }
        });
    }
    function exp_person()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_person')?>",'_blank');
    }
    function exp_user()
    {
        window.open ( "<?php echo site_url('administrator/Master/export_user')?>",'_blank');
    }
    </script>
</body>
</html>