<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Purchasing General Affairs - Retur Pembelian</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#po" data-toggle="tab">Data Retur</a>
                            </li>
                            <li>
                                <a href="#barang" data-toggle="tab">Data Barang</a>
                            </li>
                            <li>
                                <a href="#biaya" data-toggle="tab">Data Biaya</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_po">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="po">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Retur</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor Retur BL</label>
                                        <div class="col-sm-4">
                                            <!-- <input class="form-control" type="text" name="ret_code" value="<?php echo $rb->RTPRC_CODE;?>" readonly>
                                            <input type="hidden" name="ret_id" value="<?php echo $rb->RTPRC_ID;?>">
                                            <input type="hidden" name="user_id" value="1"> -->

                                            <input class="form-control" type="text" name="ret_code" value="" readonly>
                                            <input type="hidden" name="ret_id" value="0">
                                            <input type="hidden" name="user_id" value="1">
                                        </div>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="tambah()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp1'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="po_tgl" type='text' class="form-control" name="retprc_tgl" placeholder="Tanggal" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Nomor BL</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="prc_code" readonly>
                                            <input type="hidden" name="prc_id">
                                        </div>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_prc()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor PO</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="po_code" readonly>
                                            <input type="hidden" name="po_id">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Nomor Approval</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="appr_code" readonly>
                                            <input type="hidden" name="appr_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="loc_name" readonly>
                                        </div>
                                    </div> -->
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Supplier</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="supp_name" readonly>
                                            <input type="hidden" name="supp_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="supp_address" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kota</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="supp_city" readonly>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="tab-pane fade" id="biaya">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Biaya</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Termin</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="po_term">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info</label>
                                        <div class="col-sm-4">
                                            <textarea name="po_info" class="form-control" rows="2" style="resize: vertical;"></textarea>       
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="fgroup">
                                            <label class="col-sm-3 control-label">Mata Uang || Rate</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="curr_name" readonly>
                                                <input type="hidden" name="curr_id" value="">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="curr_rate" readonly>
                                            </div>
                                            <div class="col-sm-1">
                                                <a href="javascript:void(0)" onclick="srch_curr()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Sub Total</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="po_subs" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Discount</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="disc_perc">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="prc_disc" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">PPN</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="ppn_perc">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="prc_ppn" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Biaya</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="prc_cost">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Grand Total</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="prc_gtotal" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="saveretprc()" class="btn btn-block btn-primary btn-default">Simpan</a>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <a href="#" class="btn btn-block btn-danger btn-default">Batal</a>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="tab-pane fade" id="barang">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Barang</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h4>Daftar Pembelian</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="data_prc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Nama
                                                        </th>
                                                        <th class="text-center">
                                                            Harga Pokok
                                                        </th>
                                                        <th class="text-center">
                                                            Jumlah
                                                        </th>
                                                        <th class="text-center">
                                                            Harga
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Barang</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_name" readonly>
                                            <input type="hidden" name="gd_id" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Harga Satuan</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="gd_price" readonly>
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="gd_unit1" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jumlah Beli</label>
                                        <div class="col-sm-2">
                                            <input onchange="hitung()" class="form-control" type="text" name="ret_qty">
                                            <span class="help-block"></span>
                                            <input type="hidden" name="ret_qty_old">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="gd_unit2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Sub Total</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="ret_sub" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-4">
                                            <a href="javascript:void(0)" onclick="add_barang()" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_barang" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Nama
                                                        </th>
                                                        <th class="text-center">
                                                            Harga Pokok
                                                        </th>
                                                        <th class="text-center">
                                                            Jumlah
                                                        </th>
                                                        <th class="text-center">
                                                            Harga
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <br><br>
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
    <div class="modal fade" id="modal_supp" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_supp" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>No.Tlp</th>
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
    <div class="modal fade" id="modal_barang" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_brg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Ukuran</th>
                                        <th>Info</th>
                                        <th>Harga</th>
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
    <div class="modal fade" id="modal_prc" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_prc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No.BL</th>
                                        <th>No.PO</th>
                                        <th>Invoice</th>
                                        <th>Tanggal</th>                                        
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
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.js')?>"></script>
    <!-- Datetime -->
    <script src="<?php echo base_url('assets/addons/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.responsive.js')?>"></script>
    <script>

        function tambah(){
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_ret_ga') ?>",
                type : "GET",
                dataType : "JSON",
                success : function(data)
                {
                    $('[name="ret_code"]').val(data.kode);
                    $('[name="ret_id"]').val(data.id);

                },
                error : function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            })
        }

        var id; var suppid; var prc; var qty; var sub;
        $(document).ready(function()
        {
            $('#dtp1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            id=$('[name="ret_id"]').val();            
            barang(id);            
            prc = 0; qty = 0; sub = 0;

            $('[name=ret_qty]').on('input', function() {
                hitung();
                gtotal();
            });

            $('[name=disc_perc]').on('input', function() {
                disc();
                gtotal();
            });

            $('[name=ppn_perc]').on('input', function() {
                ppn();
                gtotal();
            });

            $('[name=prc_cost]').on('input', function() {
                gtotal();
            });

            $("input").change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
        });

        function saveretprc()
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_simpanretprc')?>",
                type: "POST",
                data: $('#form_po').serialize(),
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

        function hitung()
        {
            prc = $('[name="gd_price"]').val();
            qty = $('[name="ret_qty"]').val();
            sub = qty * prc;
            $('[name="ret_sub"]').val(sub);            
        }

        function gtotal()
        {
            var total = 0;
            var sub = $('[name=po_subs]').val();
            var disc = $('[name=prc_disc]').val();
            total = sub - disc;
            var ppn = $('[name=prc_ppn]').val();
            var total2 = 0;
            total2 = total + (ppn*1);
            var cost = $('[name=prc_cost]').val();
            var total3 = 0;
            total3 = total2 + (cost*1);
            $('[name=prc_gtotal]').val(total3);
        }

        function disc()
        {
            var disc = $('[name=disc_perc]').val();
            var subt = $('[name=po_subs]').val();
            var sum = disc/100 * subt;
            $('[name=prc_disc]').val(sum);
        }

        function ppn()
        {
            var disc = $('[name=ppn_perc]').val();
            var subt = $('[name=po_subs]').val();
            var sum = disc/100 * subt;
            $('[name=prc_ppn]').val(sum);
        }

        function sub_total(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_subretgabl/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_subs"]').val(data.Subtotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function brg_prc(id)
        {            
            table = $('#data_prc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Genaff/ajax_dtprc_ga/')?>"+id,
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

        function barang(id)
        {
            table = $('#dtb_barang').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Genaff/ajax_brg_retprc/')?>"+id,
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

        function add_barang()
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_add_brgretprc')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Ditambahkan');
                        id = $('[name="ret_id"]').val();
                        barang(id);
                        sub_total(id);
                        bersih();
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                            $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                        }
                    }                 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function del_brg(id)
        {
            if(confirm('Are you sure delete this data?'))
            {
                // ajax delete data to database
                $.ajax({
                    url : "<?php echo site_url('administrator/Genaff/ajax_del_brgretprc')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="ret_id"]').val();
                        barang(id);
                        sub_total(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function srch_prc()
        {            
            $('#modal_prc').modal('show');
            $('.modal-title').text('Cari Order Pembelian'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_prc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Genaff/ajax_srch_prc')?>",
                    "type": "POST",                
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                { 
                    "targets": [ 0 ], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                ],
            });
        }

        function pick_prc(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_prc2/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="prc_id"]').val(data.PRCGA_ID);
                    $('[name="prc_code"]').val(data.PRCGA_CODE);
                    $('[name="po_id"]').val(data.POGA_ID);                   
                    // $('[name="po_so"]').val(data.PO_ORDNUM);
                    pick_po(data.POGA_ID);
                    // pick_podet($('[name="po_id"]').val());
                    // pick_appr($('[name="appr_id"]').val());                    
                    // pick_supp($('[name="supp_id"]').val());
                    brg_prc($('[name="prc_id"]').val());
                    $('#modal_prc').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function srch_brg()
        {
            suppid = $('[name="supp_id"]').val();
            $('#modal_barang').modal('show');
            $('.modal-title').text('Cari Barang'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_brg').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_brg')?>/"+suppid,
                    "type": "POST",                
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                { 
                    "targets": [ 0 ], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                ],
            });
        }

        function pick_brg(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_brg/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="gd_id"]').val(data.GD_ID);
                    $('[name="gd_name"]').val(data.GD_NAME);
                    $('[name="gd_unit1"]').val(' / ' +data.GD_MEASURE+' '+data.GD_UNIT);
                    $('[name="gd_price"]').val(data.GD_PRICE);
                    prc = $('[name="gd_price"]').val();
                    $('[name="gd_unit2"]').val(data.GD_UNIT);                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_supp(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_supp/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    $('[name="supp_name"]').val(data.SUPP_NAME);
                    $('[name="supp_address"]').val(data.SUPP_ADDRESS);
                    $('[name="supp_city"]').val(data.SUPP_CITY);                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_appr(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_appr/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_code"]').val(data.APPR_CODE);
                    $('[name="loc_name"]').val(data.LOC_NAME);                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_po(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_po/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_code"]').val(data.POGA_CODE);
                    $('[name="po_id"]').val(data.POGA_ID);
                    // $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    // pick_appr(data.APPR_ID);                    
                    pick_supp($('[name="supp_id"]').val());
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
            $('.modal-title').text('Cari Rate Mata Uang'); // Set title to Bootstrap modal title        
            //datatables        
            table = $('#dtb_curr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_curr')?>",
                    "type": "POST",                
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                { 
                    "targets": [ 0 ], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                ],
            });
        }

        function pick_curr(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_curr/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="curr_id"]').val(data.CURR_ID);                    
                    $('[name="curr_name"]').val(data.CURR_NAME);
                    $('[name="curr_rate"]').val(data.CURR_RATE);
                    $('#modal_curr').modal('hide'); // show bootstrap modal when complete loaded
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_prcdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_prcdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="gd_id"]').val(data[0]["GD_ID"]);
                    $('[name="gd_name"]').val(data[0]["GD_NAME"]);
                    $('[name="gd_unit1"]').val(' / '+data[0]["GD_MEASURE"]+' '+data[0]["GD_UNIT"]);
                    $('[name="gd_price"]').val(data[0]["GD_PRICE"]);
                    $('[name="gd_unit2"]').val(data[0]["GD_UNIT"]);
                    $('[name="ret_qty"]').val(data[0]["PRCDET_QTY"]);
                    $('[name="ret_qty_old"]').val(data[0]["PRCDET_QTY"]);
                    hitung();                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_retprc(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_prcdet2/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="gd_id"]').val(data[0]["GD_ID"]);
                    $('[name="gd_name"]').val(data[0]["GD_NAME"]);
                    $('[name="gd_unit1"]').val(' / '+data[0]["GD_MEASURE"]+' '+data[0]["GD_UNIT"]);
                    $('[name="gd_price"]').val(data[0]["GD_PRICE"]);
                    $('[name="gd_unit2"]').val(data[0]["GD_UNIT"]);
                    $('[name="ret_qty"]').val(data[0]["PRCGADET_QTY"]);
                    $('[name="ret_qty_old"]').val(data[0]["PRCGADET_QTY"]);
                    hitung();                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function bersih()
        {
            $('[name="gd_id"]').val('');
            $('[name="gd_name"]').val('');
            $('[name="gd_unit1"]').val('');
            $('[name="gd_price"]').val('');
            $('[name="gd_unit2"]').val('');
            $('[name="ret_qty"]').val('');
            $('[name="ret_qty_old"]').val('');
            $('[name="ret_sub"]').val('');
        }
    </script>
</body>
</html>