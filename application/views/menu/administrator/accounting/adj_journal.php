<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Accounting - Jurnal Penyesuaian</h1>
                    </div>
                </div>
                <div class="row">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#1" data-toggle="tab">Jurnal Penyesuaian</a>
                        </li>
                    </ul>
                    <form class="form-horizontal" id="form_appr" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="1">
                                <div class="form-group">
                                    <div class="col-xs-4 col-xs-offset-3 text-center">
                                        <h2>Data Jurnal</h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nomor Jurnal</label>
                                    <div class="col-sm-1">
                                        <a id="genbtn" href="javascript:void(0)" onclick="gen_jou()" class="btn btn-block btn-info">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="jou_code" readonly>
                                        <input type="hidden" name="jou_id" value="0">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Cabang</label>
                                    <div class="col-sm-1">
                                        <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                    </div>
                                    <div class="col-sm-7">
                                        <input class="form-control" type="text" name="jou_branch" readonly>
                                        <input type="hidden" name="jou_branchid">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nomor Bukti</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="jou_reff" placeholder="No Bukti/Referensi">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tanggal</label>
                                    <div class="col-sm-8">
                                        <div class='input-group date dtp' id='dtp1'>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            <input id="jou_date" type='text' class="form-control input-group-addon" name="jou_date" value="<?= date('Y-m-d')?>"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Keterangan</label>
                                    <div class="col-sm-8">
                                        <textarea name="jou_info" class="form-control" rows="2" style="resize: vertical;" placeholder="Keterangan"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nomor Rekening</label>
                                    <div class="col-sm-8">
                                        <select class="form-control text-center" name="jou_accdet" id="jou_accdet" data-live-search="true">
                                        </select>
                                        <input type="hidden" name="jou_coaid" value="0">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nominal Rekening</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control curr-num" name="jou_accdebetsum">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control curr-num" name="jou_acccreditsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-2">
                                        <a href="javascript:void(0)" onclick="add_joudet()" class="btn btn-block btn-primary">
                                            <span class="glyphicon glyphicon-plus"> Tambah</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="javascript:void(0)" onclick="add_joucredit()" class="btn btn-block btn-primary">
                                            <span class="glyphicon glyphicon-print"> Print</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="javascript:void(0)" onclick="new_jou()" class="btn btn-block btn-primary">
                                            <span class="glyphicon glyphicon-new-window"> Baru</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-11 col-xs-11 table-responsive">
                                        <table id="dtb_journaldet" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        No
                                                    </th>
                                                    <th class="text-center">
                                                        No Rek
                                                    </th>
                                                    <th class="text-center">
                                                        Nama Rek
                                                    </th>
                                                    <th class="text-center">
                                                        Keterangan
                                                    </th>
                                                    <th class="text-center">
                                                        Debet
                                                    </th>
                                                    <th class="text-center">
                                                        Kredit
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
                    </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <div class="modal fade" id="modal_branch" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_branch" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>                
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
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            dt_journaldet($('[name="jou_id"]').val());
            drop_coa();
        });

        function gen_jou()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/gen_journal')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="jou_id"]').val(data.id);
                    $('[name="jou_code"]').val(data.kode);
                    $('#genbtn').attr('disabled',true);
                    dt_journaldet(data.id);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Jurnal');
                }
            });
        }

        function add_joudet()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/add_joudetadj')?>",
                type: "POST",
                data: $('#form_appr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        // dt_journaldet($('[name="jou_id"]').val());
                        reload_table();
                        drop_coa();
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                        }
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function delete_joudet(id)
        {
            if(confirm('Are you sure delete this data?'))
            {               
                $.ajax({
                    url : "<?php echo site_url('administrator/Accounting/delete_joudet/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        dt_journaldet($('[name="jou_id"]').val());
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function new_jou()
        {
            $('#genbtn').attr('disabled',false);
            clean_();
        }

        function clean_()
        {
            $('input').val('');
            $('textarea').val('');
            $('[name="user_id"]').val('1');
            $('[name="jou_id"]').val('0');
            $('[name="jou_branchid"]').val('0');
            $('[name="jou_date"]').val('<?= date('Y-m-d')?>');
            drop_coa();
        }

        function reload_table()
        {
            $('#dtb_journaldet').DataTable().ajax.reload(null,false);            
        }
    </script>
    <!-- Showdata -->
    <script>
        function dt_journaldet(id)
        {            
            table = $('#dtb_journaldet').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_journal/')?>"+id,
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
    </script>
    <!-- Dropdown -->
    <script>
        function drop_coa()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getcoa')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#jou_accdet').empty();
                    var select = document.getElementById('jou_accdet');
                    var option;
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["COA_ID"]
                        option.text = data[i]["COA_ACC"]+'-'+data[i]["COA_ACCNAME"];
                        select.add(option);
                    }
                    $('#jou_accdet').selectpicker({
                        dropupAuto: false
                    });
                    $('#jou_accdet').selectpicker('refresh');                    
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <!-- Search -->
    <script>
        function srch_brc()
        {
            $('#modal_branch').modal('show');
            $('.modal-title').text('Cari Cabang');            
            table = $('#dtb_branch').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_branch')?>",
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
    </script>
    <!-- Pick -->
    <script>
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="jou_branchid"]').val(data.BRANCH_ID);
                    $('[name="jou_branch"]').val(data.BRANCH_NAME);
                    $('#modal_branch').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
</body>
</html>