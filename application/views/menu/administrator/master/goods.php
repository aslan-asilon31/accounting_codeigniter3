<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-header">Master Barang</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-block btn-success" onclick="add_gd()"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</button>
                    </div>
                    <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                        <button class="btn btn-block btn-info" onclick="exp_barang()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div>
                </div><br>
                <div class="col-sm-12 col-xs-12 table-responsive">
                    <table id="dtb_goods" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th class="text-center">
                                    Kode
                                </th>
                                <th class="text-center">
                                    Supplier
                                </th>
                                <th class="text-center">
                                    Barang
                                </th>
                                <th class="text-center">
                                    Satuan
                                </th>
                                <th class="text-center">
                                    Ukuran
                                </th>
                                <th class="text-center">
                                    Harga
                                </th>
                                <th class="col-xs-2 text-center">
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
                                <label class="col-sm-3 control-label">Kode</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="code" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2">
                                    <button name="gen" type="button" onclick="gen_gd()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cabang</label>
                                <div class="col-sm-9">
                                    <select id="branch" name="branch" class="form-control text-center" data-live-search="true" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Supplier</label>
                                <div class="col-sm-9">
                                    <select id="supp" name="supp" class="form-control text-center" data-live-search="true" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Barang</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nama">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Satuan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="unit">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ukuran</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="ukuran">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Harga</label>
                                <div class="col-sm-9">
                                    <input class="form-control curr-num-perc" type="text" name="harga">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Info</label>
                                <div class="col-sm-9">
                                    <textarea name="info" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select id="stats" name="stats" class="form-control" required>
                                        <option value="">Pilih</option>
                                        <option value="Baru">Baru</option>
                                        <option value="Bekas">Bekas</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select id="jenis" name="jenis" class="form-control" required>
                                        <option value="">Pilih</option>
                                        <option value="Barang">Barang</option>
                                        <option value="Jasa">Jasa</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jenis Stock</label>
                                <div class="col-sm-9">
                                    <select id="jstock" name="jstock" class="form-control" required>
                                        <option value="">Pilih</option>
                                        <option value="0">Stock</option>
                                        <option value="1">NonStock</option>
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
                                <label class="col-sm-3 control-label">Cabang</label>
                                <div class="col-sm-9">
                                    <select id="vbranch" name="vbranch" class="form-control" disabled>
                                        <option value="">Pilih</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Supplier</label>
                                <div class="col-sm-9">
                                    <select id="vsupp" name="vsupp" class="form-control" required disabled>
                                        <option value="">Pilih</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Barang</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vnama" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Satuan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vunit" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ukuran</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vukuran" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Harga</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vharga" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Info</label>
                                <div class="col-sm-9">
                                    <textarea name="vinfo" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vstats" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jenis</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="vjenis" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jenis Stock</label>
                                <div class="col-sm-9">
                                    <select id="vjstock" name="vjstock" class="form-control" readonly>
                                        <option value="">Pilih</option>
                                        <option value="0">Stock</option>
                                        <option value="1">NonStock</option>
                                    </select>
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
            dt_goods();
            dropsupp();
            dropsupp2();
            dropbranch();
            dropbranch2();
        });
        function dt_goods()
        {
            table = $('#dtb_goods').DataTable({ 
                "info": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_gd')?>",
                    "type": "POST",                
                },            
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "className":"text-right", "targets": [6],
                },
                {
                    "className":"text-center", "targets": [0,1,2,3,4,5,7],
                },
                ],
            });        
        }
        function dropsupp()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getsupp')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('supp');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["SUPP_ID"]
                        option.text = data[i]["SUPP_NAME"];
                        select.add(option);
                    }
                    $('#supp').selectpicker({});
                    $('#supp').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dropsupp2()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getsupp')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('vsupp');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["SUPP_ID"]
                        option.text = data[i]["SUPP_NAME"];
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
            url : "<?php echo site_url('administrator/Dropdown/drop_branch')?>",
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
                    $('#branch').selectpicker({});
                    $('#branch').selectpicker('refresh');
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
            url : "<?php echo site_url('administrator/Dropdown/drop_branch')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('vbranch');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["BRANCH_ID"]
                        option.text = data[i]["BRANCH_NAME"];
                        select.add(option);
                    }
                    $('#branch').selectpicker({});
                    $('#branch').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function lihat_gd(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_gd/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.GD_ID);
                    $('[name="vcode"]').val(data.GD_CODE);
                    // var supp = data.SUPP_ID;
                    // document.querySelector('#vsupp [value="' + supp + '"]').selected = true;
                    $('select#vsupp').val(data.SUPP_ID);
                    $('select#vbranch').val(data.BRANCH_ID);
                    // $('#vsupp').selectpicker('refresh');
                    $('[name="vnama"]').val(data.GD_NAME);
                    $('[name="vunit"]').val(data.GD_UNIT);
                    $('[name="vukuran"]').val(data.GD_MEASURE);
                    $('[name="vharga"]').val(data.GD_PRICE);
                    $('[name="vinfo"]').val(data.GD_INFO);
                    $('[name="vstats"]').val(data.GD_STS);
                    $('[name="vjenis"]').val(data.GD_TYPE);
                    $('select#vjstock').val(data.GD_TYPESTOCK);
                    $('#modal_view').modal('show');
                    $('.modal-title').text('Edit Barang');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function add_gd()
        {
            save_method = 'add';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_form').modal('show');
            $('.modal-title').text('Tambah Barang');
            $('[name="tb"]').val("master_goods");
            $('[name="sts"]').val("1");
            $('[name="check"]').val("0");
            $('[name="gen"]').prop('disabled',false);
            $('#supp').selectpicker('refresh');
            $('#branch').selectpicker('refresh');
            gen_gd();
            // $('[name="code"]').prop('readonly',false);
        }
        function edit_gd(id)
        {
            save_method = 'update';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('[name="code"]').prop('readonly',true);
            $('[name="gen"]').prop('disabled',true);
            $('#supp').selectpicker('refresh');
            $('#branch').selectpicker('refresh');
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_gd/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.GD_ID);
                    $('[name="code"]').val(data.GD_CODE);
                    // var supp = data.SUPP_ID;
                    // document.querySelector('#supp [value="' + supp + '"]').selected = true;
                    $('#supp').selectpicker('val', data.SUPP_ID);
                    $('#branch').selectpicker('val', data.BRANCH_ID);
                    // $('select#supp').val(data.SUPP_ID);
                    // $('select#branch').val(data.BRANCH_ID);
                    // $('#supp').selectpicker('refresh');
                    // $('#branch').selectpicker('refresh');
                    $('[name="nama"]').val(data.GD_NAME);
                    $('[name="unit"]').val(data.GD_UNIT);
                    $('[name="ukuran"]').val(data.GD_MEASURE);
                    $('[name="harga"]').val(data.GD_PRICE);
                    $('[name="info"]').val(data.GD_INFO);
                    $('[name="stats"]').val(data.GD_STS);
                    $('[name="jenis"]').val(data.GD_TYPE);
                    $('select#jstock').val(data.GD_TYPESTOCK);
                    $('[name="check"]').val("1");
                    $('[name="tb"]').val("master_goods");
                    $('#modal_form').modal('show');
                    $('.modal-title').text('Edit Barang');
                    $('#supp').selectpicker('refresh');
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
                url = "<?php echo site_url('administrator/Master/ajax_add_gd')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/ajax_update_gd')?>";
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
        function delete_gd(id)
        {
            if(confirm('Are you sure delete this data?'))
            {            
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_delete_gd')?>/"+id,
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
        function gen_gd()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/gen_gd')?>",
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
        function exp_barang()
        {
            window.open ( "<?php echo site_url('administrator/Master/export_goods')?>",'_blank');
        }
    </script>
</body>
</html>