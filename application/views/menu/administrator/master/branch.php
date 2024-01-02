<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-header">Master Cabang</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-block btn-success" onclick="add_brc()"><i class="glyphicon glyphicon-plus"></i> Tambah Cabang</button>
                    </div>
                    <div class="col-xs-2">
                        <button class="btn btn-block btn-info" onclick="exp_branch()" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div>
                </div><br>
                <div class="col-sm-12 col-xs-12 table-responsive">                    
                    <table id="dtb_brc" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    Kota
                                </th>
                                <th class="text-center">
                                    No.Tlp
                                </th>
                                <th>
                                    Logo
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
                                    <button name="gen" type="button" onclick="gen_brc()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
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
                                <label class="col-sm-2 control-label">Inisial</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="inisial">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control text-center" name="stat" id="stat">
                                        <option value="0">Pusat</option>
                                        <option value="1">Cabang</option>
                                    </select>                                    
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
                                <label class="col-sm-2 control-label">Kota</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="kota">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No Tlp</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="notlp">
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 control-label">Fax</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="fax">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="logo" id="logo">
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
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vnama" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Inisial</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vinisial" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vstat" readonly>
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
                                <label class="col-sm-2 control-label">Kota</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vkota" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No Tlp</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="vnotlp" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 control-label">Fax</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="vfax" readonly>
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
    <?php include 'application/views/layout/administrator/jspack.php'; ?>
    <script>
        $(document).ready(function() 
        {
            dt_branch();
        });
        function dt_branch()
        {
            table = $('#dtb_brc').DataTable({ 
                "info": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_brc')?>",
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
        function add_brc()
        {
            save_method = 'add';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_form').modal('show');
            $('.modal-title').text('Tambah Cabang');
            $('[name="tb"]').val("master_branch");
            $('[name="sts"]').val("1");
            $('[name="check"]').val("0");
            $('[name="gen"]').prop('disabled',false);
            gen_brc();
            // $('[name="code"]').prop('readonly',false);
        }
        function edit_brc(id)
        {
            save_method = 'update';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('[name="code"]').prop('readonly',true);
            $('[name="gen"]').prop('disabled',true);

            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_brc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.BRANCH_ID);
                    $('[name="code"]').val(data.BRANCH_CODE);
                    $('[name="nama"]').val(data.BRANCH_NAME);
                    $('[name="inisial"]').val(data.BRANCH_INIT);
                    var sts = data.BRANCH_STATUS;
                    document.querySelector('#stat [value="' + sts + '"]').selected = true;
                    $('[name="alamat"]').val(data.BRANCH_ADDRESS);
                    $('[name="kota"]').val(data.BRANCH_CITY);
                    $('[name="notlp"]').val(data.BRANCH_PHONE);
                    $('[name="fax"]').val(data.BRANCH_FAX);
                    $('[name="sts"]').val(data.BRANCH_DTSTS);
                    $('[name="check"]').val("1");
                    $('[name="tb"]').val("master_branch");
                    $('#modal_form').modal('show');
                    $('.modal-title').text('Edit Cabang');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function lihat_brc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_brc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.BRANCH_ID);
                    $('[name="vcode"]').val(data.BRANCH_CODE);
                    $('[name="vnama"]').val(data.BRANCH_NAME);
                    $('[name="vinisial"]').val(data.BRANCH_INIT);
                    var status = data.BRANCH_STATUS;
                    if(status == '0')
                    {
                        $('[name="vstat"]').val('Pusat');
                    }
                    if(status == '1')
                    {
                        $('[name="vstat"]').val('Cabang');
                    }                
                    $('[name="valamat"]').val(data.BRANCH_ADDRESS);
                    $('[name="vkota"]').val(data.BRANCH_CITY);
                    $('[name="vnotlp"]').val(data.BRANCH_PHONE);
                    $('[name="vfax"]').val(data.BRANCH_FAX);
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
                url = "<?php echo site_url('administrator/Master/ajax_add_brc')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/ajax_update_brc')?>";
            }

            var fd = new FormData();
            var file_data = $('#logo').prop('files')[0];
            fd.append("file", file_data);
            var other_data = $('#form').serializeArray();
            $.each(other_data,function(key,input)
            {
                fd.append(input.name,input.value);
            });

            $.ajax({
                url : url,
                type: "POST",
                // data: $('#form').serialize(),
                contentType: false,
                processData: false,
                data: fd,
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
        function delete_brc(id)
        {
            if(confirm('Are you sure delete this data?'))
            {            
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_delete_brc/')?>"+id,
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
        function gen_brc()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/gen_brc')?>",
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
        function exp_branch()
        {
            window.open ( "<?php echo site_url('administrator/Master/export_branch')?>",'_blank');
        }
    </script>
</body>
</html>