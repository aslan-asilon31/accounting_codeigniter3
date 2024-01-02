<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-header">Master Supplier</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-success" onclick="add_supp()"><i class="glyphicon glyphicon-plus"></i> Tambah Supplier</button>
                    </div>
                    <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                        <button class="btn btn-block btn-info" onclick="exp_supp()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div>
                </div><br>
                <div class="col-sm-12 col-xs-12 table-responsive">
                    <table id="dtb_supp" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    Alamat
                                </th>
                                <th class="text-center">
                                    Kota
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
                                    <button name="gen" type="button" onclick="gen_supp()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nama">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Alamat</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="alamat">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Kota</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="kota">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Kode Pos</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="postal">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Telepon</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="phone">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fax</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="fax">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jatuh Tempo</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="jtempo">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama NPWP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="npwpname">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Alamat NPWP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="npwpadd">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nomor NPWP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="npwpacc">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nomor NPPKP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nppkpacc">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <textarea name="other" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rek. Akuntansi</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="acc">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Acc.Piutang</label>
                                <div class="col-sm-9">
                                    <select id="acc" name="acc" class="form-control text-center" data-live-search="true" data-dropup-auto="false" required>
                                        <option value="">Pilih</option>
                                    </select>
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
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vnama" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Alamat</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="valamat" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Kota</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vkota" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Kode Pos</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vpostal" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Telepon</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vphone" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fax</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vfax" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jatuh Tempo</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vjtempo" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">NPWP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vnpwp" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">NPPKP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vnppkp" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <textarea name="vother" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rek. Akuntansi</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vacc" readonly>
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
        $(document).ready(function() 
        {
            dt_supp();
            dropcoa();
        });
        function dropcoa()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Dropdown/drop_coa')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('acc');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["COA_ID"]
                        option.text = data[i]["COA_ACC"]+' - '+data[i]["COA_ACCNAME"];
                        select.add(option);
                    }
                    $('#acc').selectpicker({});
                    $('#acc').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dt_supp()
        {
            table = $('#dtb_supp').DataTable({ 
                "info": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],            
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_sup')?>",
                    "type": "POST",                
                },            
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "targets":['_all'],"className":"text-center"
                }
                ],
            });
        }
        function lihat_supp(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_sup/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.SUPP_ID);
                    $('[name="vcode"]').val(data.SUPP_CODE);
                    $('[name="vnama"]').val(data.SUPP_NAME);
                    $('[name="valamat"]').val(data.SUPP_ADDRESS);
                    $('[name="vkota"]').val(data.SUPP_CITY);
                    $('[name="vpostal"]').val(data.SUPP_POSTAL);
                    $('[name="vphone"]').val(data.SUPP_PHONE);
                    $('[name="vfax"]').val(data.SUPP_FAX);
                    $('[name="vjtempo"]').val(data.SUPP_DUE);
                    $('[name="vnpwp"]').val(data.SUPP_NPWPNAME+' - '+data.SUPP_NPWPCODE);
                    $('[name="vnppkp"]').val(data.SUPP_NPPKPCODE);
                    $('[name="vother"]').val(data.SUPP_OTHERCTC);
                    $('[name="vacc"]').val(data.COA_ACCNAME);
                    $('#modal_view').modal('show');
                    $('.modal-title').text('Edit Supplier');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function add_supp()
        {
            save_method = 'add';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_form').modal('show');
            $('.modal-title').text('Tambah Supplier');
            $('[name="tb"]').val("master_supplier");
            $('[name="sts"]').val("1");
            $('[name="check"]').val("0");
            $('[name="gen"]').prop('disabled',false);
            $('#acc').selectpicker('refresh');
            gen_supp();
            // $('[name="code"]').prop('readonly',false);
        }
        function edit_supp(id)
        {
            save_method = 'update';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('[name="code"]').prop('readonly',true);
            $('[name="gen"]').prop('disabled',true);
            $('#acc').selectpicker('refresh');
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_sup/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.SUPP_ID);
                    $('[name="code"]').val(data.SUPP_CODE);
                    $('[name="nama"]').val(data.SUPP_NAME);
                    $('[name="alamat"]').val(data.SUPP_ADDRESS);
                    $('[name="kota"]').val(data.SUPP_CITY);
                    $('[name="postal"]').val(data.SUPP_POSTAL);
                    $('[name="phone"]').val(data.SUPP_PHONE);
                    $('[name="fax"]').val(data.SUPP_FAX);
                    $('[name="jtempo"]').val(data.SUPP_DUE);
                    $('[name="npwpname"]').val(data.SUPP_NPWPNAME);
                    $('[name="npwpadd"]').val(data.SUPP_NPWPADD);
                    $('[name="npwpacc"]').val(data.SUPP_NPWPCODE);
                    $('[name="nppkpacc"]').val(data.SUPP_NPPKPCODE);
                    $('[name="other"]').val(data.SUPP_OTHERCTC);
                    // $('[name="acc"]').val(data.SUPP_ACC);
                    // $('select#acc').val(data.COA_ID);
                    $('#acc').selectpicker('val',data.COA_ID);
                    $('[name="sts"]').val(data.SUPP_DTSTS);
                    $('[name="check"]').val("1");
                    $('[name="tb"]').val("master_supplier");
                    $('#modal_form').modal('show');
                    $('.modal-title').text('Edit Supplier');
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
                url = "<?php echo site_url('administrator/Master/ajax_add_sup')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/ajax_update_sup')?>";
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
        function delete_supp(id)
        {
            if(confirm('Are you sure delete this data?'))
            {            
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_delete_sup')?>/"+id,
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
        function gen_supp()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/gen_supp')?>",
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
        function exp_supp()
        {
            window.open ( "<?php echo site_url('administrator/Master/export_supp')?>",'_blank');
        }
    </script>
</body>
</html>