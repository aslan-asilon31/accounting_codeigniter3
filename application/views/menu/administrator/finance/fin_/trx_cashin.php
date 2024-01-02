        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kas Masuk</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_cash_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_cash_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_cash_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_cash_in()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#myKas" data-toggle="tab">Kas Masuk</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_kas">
                            <div class="tab-content">
                                <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                <div class="tab-pane fade in active" id="myKas">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Kas Masuk</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Kas Masuk</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_cashin()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="kas_nomor" readonly>
                                        </div>
                                        <input type="hidden" value='0' class="form-control" name="kas_id">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date dtp' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input type='text' class="form-control input-group-addon" name="kas_tgl" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Akun</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_acc()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="kas_acc" readonly>
                                        </div>
                                        <input class="form-control" type="hidden" name="acc_id">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <textarea name="kas_info" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Customer</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_cust()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="kas_kode_customer" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="kas_nama_customer" readonly>
                                        </div>
                                        <input class="form-control" type="hidden" name="kas_customer_id">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Mata Uang</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_curr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="curr_name" readonly>
                                            <input type="hidden" name="curr_id" value="0">
                                            <input type="hidden" name="curr_rate" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Detail Kas Masuk</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" onclick="hide_()" id="det_radio0" name="det_radio">Tampilkan</label>
                                            <label class="radio-inline"><input type="radio" onclick="hide_()" id="det_radio1" name="det_radio">Sembunyikan</label>
                                        </div>
                                    </div>
                                    <div id="det_cashin" class="col-sm-offset-3">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No Akun</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-info btn-block" onclick="srch_acc2()"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="acc_detail" readonly>
                                                <input type="hidden" name="acc_id_detail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No Reff</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-info btn-block" onclick="srch_inv()"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="no_jual">
                                                <input type="hidden" name="invoice_id">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Keterangan</label>
                                            <div class="col-sm-7">
                                                <textarea name="ket_detail" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nominal</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control curr-num-perc" name="nominal">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <a href="javascript:void(0)" onclick="save_cash_in_detail()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_kas_in_detail" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">No Acc</th>
                                                            <th class="text-center">No Reff</th>
                                                            <th class="text-center">Keterangan</th>
                                                            <th class="text-center">Nominal</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Total</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control curr-num-perc" name="grand_total" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="save_cash_in()" class="btn btn-block btn-primary btn-default btnCh">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                Simpan
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="javascript:void(0)" onclick="printPre()" class="btn btn-block btn-info btn-default">
                                                <span class="glyphicon glyphicon-print"></span>
                                                Cetak
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="approve_cash_in()" class="btn btn-block btn-primary btnApr" disabled>
                                                Approve
                                            </button>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="disapprove_cash_in()" class="btn btn-block btn-primary btnApr" disabled>
                                                Disapprove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- Modal Search -->
    <div class="modal fade" id="modal_cash_in_edit" name="modal_cash_in_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_cash_in_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kas Masuk</th>
                                        <th>Nama Customer</th>
                                        <th>Tanggal</th>  
                                        <th>Keterangan</th>                                      
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal Account -->
    <div class="modal fade" id="modal_account" name="modal_account" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="formku" action="<?php echo base_url('Finance/cash_in') ; ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <!-- <input type="text" class="form-control" name="dept"> -->
                    <div class="row">
                        <!-- <input type="text" name="id_meeting" >
                        <input type="text" name="title" >
                        <input type="text" name="tgl" >
                        <input type="text" name="jam" > -->
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <div class="maxh">
                            <table id="dtb_acc" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                                        
                            </table>
                        </div>
                        </div>
                    </div>                  
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" onclick="kirim_email()" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-send"></span> Send</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- modal account selesai -->
     <!-- Modal Customer -->
    <div class="modal fade" id="modal_cust" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_cust" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <!-- <th>Kota</th> -->
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                                <tbody id="tb_content"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal customer selesai -->
    <!-- Modal Currency -->
    <div class="modal fade" id="modal_curr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_curr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Rate</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal customer selesai -->
    <!-- Modal Invoice -->
    <div class="modal fade" id="modal_inv" name="modal_inv" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="formku" action="<?php echo base_url('Finance/f_pjk') ; ?>" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cari Invoice</h4>
                    </div>
                    <div class="modal-body">
                        <!-- <input type="text" class="form-control" name="dept"> -->
                        <div class="row">
                            <!-- <input type="text" name="id_meeting" >
                            <input type="text" name="title" >
                            <input type="text" name="tgl" >
                            <input type="text" name="jam" > -->
                            <div class="col-sm-12 col-xs-12 table-responsive">
                                <div class="maxh">
                                <table id="dtb_inv" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Invoice</th>
                                            <th>Tanggal</th>
                                            <th>Nama Customer</th>
                                            <th>Keterangan</th>
                                            <th>Pilih</th>
                                        </tr>
                                    </thead>
                                            
                                </table>
                            </div>
                            </div>
                        </div>                  
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal invoice selesai -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function() 
        {
            $('#det_radio0').prop('checked',true);
            $('#myDIV').css({'display':'none'});
            var id = $('[name="kas_id"]').val();
            kas_masuk_detail(id);
            gen_total(id);
        })
        function hide_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_cashin').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_cashin').css({'display':'block'});
            }
        }
        var sts;
        function edit_sch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    if (sts=='1')
                    {
                        $('[name="kas_acc"]').val(data.COA_ACC);
                        $('[name="acc_id"]').val(data.COA_ID);
                    } 
                    else 
                    {
                        $('[name="acc_detail"]').val(data.COA_ACC);
                        $('[name="acc_id_detail"]').val(data.COA_ID);
                    }
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function gen_cashin()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_cashin')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="kas_id"]').val(data.id);
                    $('[name="kas_nomor"]').val(data.kode);
                    $('#genbtn').attr('disabled',true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
        }
        function gen_total(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_total_cashin/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="grand_total"]').val(data.TOTAL);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
        }
        function edit_cst(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cst/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_kode_customer"]').val(data.CUST_CODE);
                    $('[name="kas_nama_customer"]').val(data.CUST_NAME);
                    $('[name="kas_customer_id"]').val(data.CUST_ID);
                    $('#modal_customer').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function add_gd()
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Daftar Account');
        }
        function add_cst()
        {
            $('#modal_customer').modal('show');
            $('.modal-title').text('Daftar Customer');
        }
        function myFunction() 
        {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") 
            {
                x.style.display = "block";
            }
            else
            {
                x.style.display = "none";
            }
        }
        function curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if (data.CURR_RATE=='NULL')
                    {
                        $('[name="kas_kurs"]').val('')
                    }
                    else
                    {
                        $('[name="kas_kurs"]').val(data.CURR_RATE);
                        $('[name="curr_id"]').val(data.CURR_ID);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_acc()
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Cari Account');
            table = $('#dtb_acc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_coa_cash')?>",
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
        function pick_coacash(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_coagb/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="kas_acc"]').val(data.COA_ACC +" - "+ data.COA_ACCNAME);
                    $('[name="acc_id"]').val(data.COA_ID);
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_acc2()
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Cari Account');
            table = $('#dtb_acc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_coabybrc')?>",
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
        function pick_coagb(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_coagb/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="acc_detail"]').val(data.COA_ACC +" - "+data.COA_ACCNAME);
                    $('[name="acc_id_detail"]').val(data.COA_ID);
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_acc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    if (sts=='1')
                    {
                        $('[name="kas_acc"]').val(data.COA_ACC +" - "+ data.COA_ACCNAME);
                        $('[name="acc_id"]').val(data.COA_ID);
                    }
                    else
                    {
                        $('[name="acc_detail"]').val(data.COA_ACC +" - "+data.COA_ACCNAME);
                        $('[name="acc_id_detail"]').val(data.COA_ID);
                    }
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_cust()
        {
            $('#modal_cust').modal('show');
            $('.modal-title').text('Cari Customer');
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/srch_custall')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data.length; i++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-center">'+data[i]["code"]+'</td>'),
                            $('<td class="text-center">'+data[i]["name"]+'</td>'),
                            $('<td class="text-center">'+data[i]["address"]+'</td>'),
                            $('<td class="text-center"><a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cust('+"'"+data[i]["code"]+"'"+')">Pilih</a></td>')
                        ).appendTo('#tb_content');
                    }
                    dt_cust();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dt_cust()
        {
            $('#dtb_cust').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
            });
        }
        function pick_cust(id)
        {
            var kd = id;
            var kode = kd.substr(0,4);
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if (kode!='CSTI')
                    {
                        $('[name="kas_kode_customer"]').val(data.CUST_CODE);
                        $('[name="kas_nama_customer"]').val(data.CUST_NAME);
                        $('[name="kas_customer_id"]').val(data.CUST_ID);
                    }
                    if (kode=='CSTI')
                    {
                        $('[name="kas_kode_customer"]').val(data.CSTIN_CODE);
                        $('[name="kas_nama_customer"]').val(data.PERSON_NAME);
                        $('[name="kas_customer_id"]').val(data.CSTIN_ID);
                    }
                    $('#modal_cust').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_curr()
        {
            $('#modal_curr').modal('show');
            $('.modal-title').text('Cari Rate Mata Uang');            
            table = $('#dtb_curr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_curr')?>",
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
        function pick_curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="curr_id"]').val(data.CURR_ID);                    
                    $('[name="curr_name"]').val(data.CURR_NAME);
                    $('[name="curr_rate"]').val(data.CURR_RATE);
                    $('#modal_curr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_inv()
        {
            $('#modal_inv').modal('show');
            $('.modal-title').text('Cari Invoice');  
            var id = $('[name="kas_customer_id"]').val();          
            table = $('#dtb_inv').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_invbyid/')?>" + id,
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
        function pick_inv(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_inv/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="no_jual"]').val(data.INV_CODE);
                    $('[name="invoice_id"]').val(data.INV_ID);
                    pick_inv_amount(id);
                    $('#modal_inv').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_inv_amount(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_subinvdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="nominal"]').val(data.gt1);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function printPre()
        {
            var ids = $('[name=kas_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_km/')?>"+ids,'_blank');
        }
        function save_cash_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_cash_in')?>",
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');                        
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function save_cash_in_detail()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_cash_in_detail')?>",
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');   
                        var id = $('[name="kas_id"]').val();
                        kas_masuk_detail(id);
                        gen_total(id);
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function approve_cash_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_approve_cash_in')?>",
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/cash_in')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disapprove_cash_in()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_disapprove_cash_in')?>",
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/cash_in')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function kas_masuk_detail(id)
        {
            table = $('#dtb_kas_in_detail').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_cashin')?>/"+id,
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
        function delete_cshindet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_hapus_cash_in_detail')?>/"+id,
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');   
                        var id = $('[name="kas_id"]').val();
                        kas_masuk_detail(id);
                        gen_total(id);
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function edit_cash_in()
        {
            $('#modal_cash_in_edit').modal('show');
            $('.modal-title').text('Cari Kas Masuk');
            table = $('#dtb_cash_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cash_in_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '0';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '0';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function open_cash_in()
        {
            $('#modal_cash_in_edit').modal('show');
            $('.modal-title').text('Cari Kas Masuk');
            table = $('#dtb_cash_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cash_in_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '1';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function check_cash_in()
        {
            $('#modal_cash_in_edit').modal('show');
            $('.modal-title').text('Cari Kas Masuk');
            table = $('#dtb_cash_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cash_in_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '2';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function apr_cash_in()
        {
            $('#modal_cash_in_edit').modal('show');
            $('.modal-title').text('Cari Kas Masuk');
            table = $('#dtb_cash_in_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cash_in_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '2';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '3';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_cashinopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/open_cashin/')?>" + id,
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Kas Masuk Sukses Dibuka');
                        $('#modal_cash_in_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Kas Masuk masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cashinedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cashingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_kas')[0].reset();
                    $('[name="kas_id"]').val(data.CSH_ID);
                    $('[name="kas_nomor"]').val(data.CSH_CODE);
                    $('[name="kas_tgl"]').val(data.CSH_DATE);
                    pick_coacash(data.COA_ID);
                    $('[name="kas_info"]').val(data.CSH_INFO);
                    cust = (data.CUST_ID != null)?data.CUST_ID:data.CSTIN_ID;
                    md = (data.CUST_ID != null)?'0':'1';
                    pick_custedit(md,cust);
                    pick_curr(data.CURR_ID)
                    kas_masuk_detail(data.CSH_ID);
                    gen_total(data.CSH_ID);
                    $('#modal_cash_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cashinchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cashingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_kas')[0].reset();
                    $('[name="kas_id"]').val(data.CSH_ID);
                    $('[name="kas_nomor"]').val(data.CSH_CODE);
                    $('[name="kas_tgl"]').val(data.CSH_DATE);
                    pick_coacash(data.COA_ID);
                    $('[name="kas_info"]').val(data.CSH_INFO);
                    cust = (data.CUST_ID != null)?data.CUST_ID:data.CSTIN_ID;
                    md = (data.CUST_ID != null)?'0':'1';
                    pick_custedit(md,cust);
                    pick_curr(data.CURR_ID)
                    kas_masuk_detail(data.CSH_ID);
                    gen_total(data.CSH_ID);
                    $('.btnCh').css({'display':'none'});
                    $('#modal_cash_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cashinapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cashingb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_kas')[0].reset();
                    $('[name="kas_id"]').val(data.CSH_ID);
                    $('[name="kas_nomor"]').val(data.CSH_CODE);
                    $('[name="kas_tgl"]').val(data.CSH_DATE);
                    pick_coacash(data.COA_ID);
                    $('[name="kas_info"]').val(data.CSH_INFO);
                    cust = (data.CUST_ID != null)?data.CUST_ID:data.CSTIN_ID;
                    md = (data.CUST_ID != null)?'0':'1';
                    pick_custedit(md,cust);
                    pick_curr(data.CURR_ID)
                    kas_masuk_detail(data.CSH_ID);
                    gen_total(data.CSH_ID);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_cash_in_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_custedit(md,id)
        {
            if(md != '0')
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Searchdata/pick_custint/')?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {   
                        $('[name="kas_kode_customer"]').val(data.CSTIN_CODE);
                        $('[name="kas_nama_customer"]').val(data.PERSON_NAME);
                        $('[name="kas_customer_id"]').val(data.CSTIN_ID);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }
            else
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Searchdata/pick_cust/')?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {   
                        $('[name="kas_kode_customer"]').val(data.CUST_CODE);
                        $('[name="kas_nama_customer"]').val(data.CUST_NAME);
                        $('[name="kas_customer_id"]').val(data.CUST_ID);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }
        }
    </script>
</body>
</html>