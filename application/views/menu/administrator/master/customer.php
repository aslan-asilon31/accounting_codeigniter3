<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master Customer</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">
                                    <h4>Customer Eksternal</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">
                                    <h4>Customer Internal</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <div class="row"><br>
                            <div class="col-xs-2">
                                <button class="btn btn-success" onclick="add_cust()"><i class="glyphicon glyphicon-plus"></i> Tambah Customer</button>
                            </div>
                            <div class="col-xs-2" <?php echo (($this->session->userdata('user_level') != '1')? 'style="display:none"':''); ?>>
                                <button class="btn btn-block btn-info" onclick="exp_cust()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_cust" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                        <th class="text-center col-md-3">
                                            Alamat
                                        </th>
                                        <th class="text-center">
                                            Kota
                                        </th>
                                        <th class="text-center">
                                            No.Tlp
                                        </th>
                                        <th class="text-center">
                                            NPWP
                                        </th>
                                        <th class="text-center">
                                            NPKP
                                        </th>
                                        <th class="text-center col-md-2"">
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
                                <button class="btn btn-success" onclick="add_custin()"><i class="glyphicon glyphicon-plus"></i> Tambah Customer</button>
                            </div>
                        </div><br>
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_custin" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                        <th class="text-center col-md-3">
                                            Alamat
                                        </th>
                                        <th class="text-center">
                                            No.Tlp
                                        </th>
                                        <th class="text-center col-md-2"">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
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
                        <div class="row form-group">
                            <div class="col-sm-12 text-center">
                                <h2>Data Customer</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-2 col-xs-2 control-label">Kode</label>
                                <div class="col-sm-8 col-xs-8">
                                    <input class="form-control" type="text" name="code" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <button name="gen" type="button" onclick="gen_cust()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Nama</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" type="text" name="nama">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Kota</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" type="text" name="kota">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Alamat</label>
                                <div class="col-sm-10 col-xs-10">
                                    <textarea name="alamat" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Postal</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" type="text" name="area">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Provinsi</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" type="text" name="prov">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">No.Tlp</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" type="text" name="notlp">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Fax</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" type="text" name="fax">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Acc.Piutang</label>
                                <div class="col-sm-10 col-xs-10">
                                    <textarea name="accpiutang" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Acc.Piutang</label>
                                <div class="col-sm-10 col-xs-10">
                                    <select id="accpiutang" name="accpiutang" class="form-control text-center" data-live-search="true" data-dropup-auto="false" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12 text-center">
                                <h2>Data NPWP</h2>                            
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Nama</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="namanpwp">
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">NPWP</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="nonpwp">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Alamat</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="almtnpwp">
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">NPKP</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="npkp">
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form id="form_int">
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-8 col-xs-8">
                                    <input class="form-control" type="text" name="code_in" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <button name="genin" type="button" onclick="gen_custin()" class="btn btn-block btn-sm btn-info"><span class="glyphicon glyphicon-refresh"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Karyawan</label>
                                <div class="col-sm-10 col-xs-10">
                                    <select id="empl" name="empl" class="form-control text-center" data-live-search="true" data-dropup-auto="false" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Informasi</label>
                                <div class="col-sm-10 col-xs-10">
                                    <textarea name="custininfo" class="form-control" rows="2" style="resize:vertical;"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_in" value="">
                        <input type="hidden" name="tb_in" value="">
                        <input type="hidden" name="sts_in" value="">
                        <input type="hidden" name="check_in" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save_in()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
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
                        <div class="row form-group">
                            <div class="col-sm-12 text-center">
                                <h2>Data Customer</h2>                            
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="form-group">                                
                                <label class="col-sm-2 col-xs-2 control-label">Kode</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="vcode" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">Postal</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="varea" readonly>
                                    <span class="help-block"></span>
                                </div> 
                            </div>                                         
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Nama</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="vnama" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">No.Tlp</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="vnotlp" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Kota</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="vkota" readonly>
                                    <span class="help-block"></span>
                                </div>                            
                                <label class="col-sm-2 col-xs-2 control-label">Fax</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="vfax" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Alamat</label>
                                <div class="col-sm-4 col-xs-4">
                                    <textarea name="valamat" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">Acc.Piutang</label>
                                <div class="col-sm-4 col-xs-4">
                                    <textarea name="vaccpiutang" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12 text-center">
                                <h2>Data NPWP</h2>                            
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Nama</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="vnamanpwp" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">NPWP</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="vnonpwp" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Alamat</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="valmtnpwp" readonly>
                                    <span class="help-block"></span>
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">NPKP</label>
                                <div class="col-sm-4 col-xs-4">
                                    <input class="form-control" type="text" name="vnpkp" readonly>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form id="form_int">
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" type="text" name="vcode_in" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Karyawan</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input type="text" class="form-control" name="vempl" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Informasi</label>
                                <div class="col-sm-10 col-xs-10">
                                    <textarea name="vcustininfo" class="form-control" rows="2" style="resize:vertical;" readonly></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
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
            dt_cust();
            dt_custin();
            dropcoa();
            dropperson();
        });
        function dt_cust()
        {
            table = $('#dtb_cust').DataTable({ 
                "info": false,
                "responsive": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_cust')?>",
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
        function dt_custin()
        {
            table = $('#dtb_custin').DataTable({ 
                "info": false,
                "responsive": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showmaster_custintern')?>",
                    "type": "POST",                
                },            
                "columnDefs": [
                { 
                    "targets": [ 0 ], 
                    "orderable": false, 
                },
                {
                    "targets":['_all'],"className":"text-center"
                },
                ],
            });
        }
        function lihat_cust(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.CUST_ID);
                    $('[name="vcode"]').val(data.CUST_CODE);
                    $('[name="vnama"]').val(data.CUST_NAME);
                    $('[name="valamat"]').val(data.CUST_ADDRESS);
                    $('[name="vkota"]').val(data.CUST_CITY+', '+data.CUST_PROV);
                    $('[name="varea"]').val(data.CUST_POSTAL);
                    $('[name="vnotlp"]').val(data.CUST_PHONE);
                    $('[name="vfax"]').val(data.CUST_FAX);
                    // $('[name="vaccpiutang"]').val(data.CUST_ACC);
                    $('[name="vaccpiutang"]').val(data.COA_ACCNAME);
                    $('[name="vnamanpwp"]').val(data.CUST_NPWPNAME);
                    $('[name="vnonpwp"]').val(data.CUST_NPWPACC);
                    $('[name="valmtnpwp"]').val(data.CUST_NPWPADD);
                    $('[name="vnpkp"]').val(data.CUST_NPKP);
                    $('#modal_view').modal('show');
                    $('.modal-title').text('Edit Customer');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function lihat_custin(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_custin/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="vcode_in"]').val(data.CSTIN_CODE);
                    $('[name="vempl"]').val(data.PERSON_NAME+' '+data.PERSON_ADDRESS);
                    $('[name="vcustininfo"]').val(data.CSTIN_INFO);
                    $('#modal_view2').modal('show');
                    $('.modal-title').text('Edit Customer');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function add_cust()
        {
            save_method = 'add';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_form').modal('show');
            $('.modal-title').text('Tambah Customer');
            $('[name="tb"]').val("master_customer");
            $('[name="sts"]').val("1");
            $('[name="check"]').val("0");
            $('[name="gen"]').prop('disabled',false);
            $('#accpiutang').selectpicker('refresh');
            gen_cust();
            // $('[name="code"]').prop('readonly',false);
        }
        function add_custin()
        {
            save_method = 'add';
            $('#form_int')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_form2').modal('show');
            $('.modal-title').text('Tambah Customer Internal');
            $('[name="tb_in"]').val("master_cust_intern");
            $('[name="sts_in"]').val("1");
            $('[name="check_in"]').val("0");
            $('[name="genin"]').prop('disabled',false);
            $('#empl').selectpicker('refresh');
            gen_custin();
            // $('[name="code"]').prop('readonly',false);
        }
        function edit_cust(id)
        {
            save_method = 'update';
            $('#form')[0].reset();
            $('.formgroup').removeClass('has-error');
            $('.help-block').empty();
            $('[name="code"]').prop('readonly',true);
            $('[name="gen"]').prop('disabled',true);
            $('#accpiutang').selectpicker('refresh');
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id"]').val(data.CUST_ID);
                    $('[name="code"]').val(data.CUST_CODE);
                    $('[name="nama"]').val(data.CUST_NAME);
                    $('[name="alamat"]').val(data.CUST_ADDRESS);
                    $('[name="kota"]').val(data.CUST_CITY);
                    $('[name="area"]').val(data.CUST_POSTAL);
                    $('[name="prov"]').val(data.CUST_PROV);
                    $('[name="notlp"]').val(data.CUST_PHONE);
                    $('[name="fax"]').val(data.CUST_FAX);
                    $('#accpiutang').selectpicker('val', data.COA_ID);
                    // $('select#accpiutang').val(data.COA_ID);
                    // $('#accpiutang').selectpicker('refresh');
                    // $('[name="accpiutang"]').val(data.CUST_ACC);
                    $('[name="namanpwp"]').val(data.CUST_NPWPNAME);
                    $('[name="nonpwp"]').val(data.CUST_NPWPACC);
                    $('[name="almtnpwp"]').val(data.CUST_NPWPADD);
                    $('[name="npkp"]').val(data.CUST_NPKP);
                    $('[name="sts"]').val(data.CUST_DTSTS);
                    $('[name="check"]').val("1");
                    $('[name="tb"]').val("master_customer");
                    $('#modal_form').modal('show');
                    $('.modal-title').text('Edit Customer');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function edit_custin(id)
        {
            save_method = 'update';
            $('#form_int')[0].reset();
            $('.formgroup').removeClass('has-error');
            $('.help-block').empty();
            $('[name="code_in"]').prop('readonly',true);
            $('[name="genin"]').prop('disabled',true);
            $('#empl').selectpicker('refresh');
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_edit_custin/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id_in"]').val(data.CSTIN_ID);
                    $('[name="code_in"]').val(data.CSTIN_CODE);
                    $('#empl').selectpicker('val', data.PERSON_ID);
                    $('[name="custininfo"]').val(data.CSTIN_INFO);
                    $('[name="sts_in"]').val(data.CSTIN_DTSTS);
                    $('[name="check"]').val("1");
                    $('[name="tb_in"]').val("master_cust_intern");
                    $('#modal_form2').modal('show');
                    $('.modal-title').text('Edit Customer Internal');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function reload_table()
        {
            // table.ajax.reload(null,false);
            $('#dtb_cust').DataTable().ajax.reload(null,false);
            $('#dtb_custin').DataTable().ajax.reload(null,false);
        }
        function save()
        {
            $('#btnSave').text('saving...');
            $('#btnSave').attr('disabled',true);
            var url;        
            if(save_method == 'add') {
                url = "<?php echo site_url('administrator/Master/ajax_add_cust')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/ajax_update_cust')?>";
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
        function save_in()
        {
            $('#btnSave').text('saving...');
            $('#btnSave').attr('disabled',true);
            var url;        
            if(save_method == 'add') {
                url = "<?php echo site_url('administrator/Master/ajax_add_custin')?>";
            } else {
                url = "<?php echo site_url('administrator/Master/ajax_update_custin')?>";
            }
            $.ajax({
                url : url,
                type: "POST",
                data: $('#form_int').serialize(),
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
        function delete_cust(id)
        {
            if(confirm('Are you sure delete this data?'))
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_delete_cust')?>/"+id,
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
        function delete_custin(id)
        {
            if(confirm('Are you sure delete this data?'))
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_delete_custin')?>/"+id,
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
        function gen_cust()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/gen_cust')?>",
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
        function gen_custin()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/gen_custin')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                    
                    $('[name="code_in"]').val(data.kode);                
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error Generate Number');
                }
            });
        }
        function dropcoa()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Dropdown/drop_coa')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('accpiutang');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["COA_ID"]
                        option.text = data[i]["COA_ACC"]+' - '+data[i]["COA_ACCNAME"];
                        select.add(option);
                    }
                    $('#accpiutang').selectpicker({});
                    $('#accpiutang').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dropperson()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Dropdown/drop_person')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('empl');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["PERSON_ID"]
                        option.text = data[i]["PERSON_NAME"]+' '+data[i]["PERSON_ADDRESS"];
                        select.add(option);
                    }
                    $('#empl').selectpicker({});
                    $('#empl').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function exp_cust()
        {
            window.open ( "<?php echo site_url('administrator/Master/export_cust')?>",'_blank');
        }
    </script>
</body>
</html>