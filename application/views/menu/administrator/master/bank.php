<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-header">Master Bank</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-block btn-success" onclick="add_bank()"><i class="glyphicon glyphicon-plus"></i> Tambah Bank</button>
                    </div>
                    <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                        <button class="btn btn-block btn-info" onclick="exp_bank()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div>
                </div><br>
                <div class="col-sm-12 col-xs-12 table-responsive">
                    <table id="dtb_bank" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    Rekening
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
                                    <button name="gen" type="button" onclick="gen_bank()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
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
                                <label class="col-sm-2 control-label">No Rekening</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="rekening">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Atas Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="rekatsnama">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jenis Produk Bank</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenisproduk">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cabang Bank</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cabang">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mata Uang Rek.</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kurensi">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akun Bank</label>
                                <div class="col-sm-10">
                                    <select class="form-control text-center" name="acc_bank" id="acc_bank" data-live-search="true">
                                        <option value="">Pilih</option>
                                    </select>                                    
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
                                <label class="col-sm-2 control-label">Akun Bank</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vacc_bank" readonly>
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
    <script>
        $(document).ready(function() 
        {
            dt_bank();
            drop_acc();
        });
        function dt_bank()
        {
            table = $('#dtb_bank').DataTable({ 
                "info": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showmaster_bank')?>",
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "className": "text-center", "targets": ['_all']
                }
                ],
            });
        }
        function reload_table()
        {
            table.ajax.reload(null,false);
        }
        function add_bank()
        {
            save_method = 'add';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_form').modal('show');
            $('.modal-title').text('Tambah Bank');
            $('[name="tb"]').val("master_bank");
            $('[name="sts"]').val("1");
            $('[name="check"]').val("0");
            $('[name="gen"]').prop('disabled',false);
            $('#acc_bank').selectpicker('refresh');
            gen_bank();        
        }
        function edit_bank(id)
        {
            save_method = 'update';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('[name="code"]').prop('readonly',true);
            $('[name="gen"]').prop('disabled',true);
            $('#acc_bank').selectpicker('refresh');
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_bank/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.BANK_ID);
                    $('[name="code"]').val(data.BANK_CODE);
                    $('[name="nama"]').val(data.BANK_NAME);
                    var sts = data.COA_ID;
                    // document.querySelector('#acc_bank [value="' + sts + '"]').selected = true;
                    $('#acc_bank').selectpicker('val', sts);
                    $('[name="rekening"]').val(data.BANK_ACC);
                    $('[name="rekatsnama"]').val(data.BANK_ACCNAME);
                    $('[name="jenisproduk"]').val(data.BANK_PRODTYPE);
                    $('[name="cabang"]').val(data.BANK_BRANCH);
                    $('[name="kurensi"]').val(data.BANK_CURR);
                    $('[name="info"]').val(data.BANK_INFO);
                    $('[name="sts"]').val(data.BANK_DTSTS);
                    $('[name="check"]').val("1");
                    $('[name="tb"]').val("master_bank");
                    $('#modal_form').modal('show');
                    $('.modal-title').text('Edit Bank');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function lihat_bank(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_bank/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.BANK_ID);
                    $('[name="vcode"]').val(data.BANK_CODE);
                    $('[name="vnama"]').val(data.BANK_NAME);              
                    $('[name="vacc_bank"]').val(data.COA_ACC+' - '+data.COA_ACCNAME);
                    $('[name="vinfo"]').val('No Rekening '+data.BANK_ACC+' A/N '+data.BANK_ACCNAME+', Cabang '+data.BANK_BRANCH+'\nJenis Produk '+data.BANK_PRODTYPE+', '+data.BANK_INFO);
                    $('#modal_view').modal('show');
                    $('.modal-title').text('Lihat Bank');
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
                url = "<?php echo site_url('administrator/Master/ajax_add_bank')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/ajax_update_bank')?>";
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
        function delete_bank(id)
        {
            if(confirm('Are you sure delete this data?'))
            {            
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_delete_bank/')?>"+id,
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
        function drop_acc()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getcoa')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('acc_bank');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["COA_ID"]
                        option.text = data[i]["COA_ACC"]+'-'+data[i]["COA_ACCNAME"];
                        select.add(option);
                    }
                    $('#acc_bank').selectpicker({});
                    $('#acc_bank').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function gen_bank()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/gen_bank')?>",
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
        function exp_bank()
        {
            window.open ( "<?php echo site_url('administrator/Master/export_bank')?>",'_blank');
        }
    </script>
</body>
</html>