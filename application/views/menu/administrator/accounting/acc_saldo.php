<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Accounting - Saldo Awal</h1>
                    </div>
                </div>
                <div class="row">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#1" data-toggle="tab">Saldo Awal</a>
                        </li>
                    </ul>
                    <form class="form-horizontal" id="form_saldoacc" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="1">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="1"><br>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Akun</label>
                                    <div class="col-sm-8">
                                        <select class="form-control text-center" name="salstr_acc" id="salstr_acc" data-live-search="true">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nominal Rekening</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control curr-num-perc" name="sal_accdebetsum" placeholder="Debit">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control curr-num-perc" name="sal_acccreditsum" placeholder="Kredit">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-2">
                                        <a href="javascript:void(0)" onclick="save_saldoacc()" class="btn btn-block btn-primary">
                                            Simpan
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-11 col-xs-11 table-responsive">
                                        <table id="dtb_saldoacc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Akun</th>
                                                    <th class="text-center">Saldo Awal Debet</th>
                                                    <th class="text-center">Saldo Awal Kredit</th>
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
            dt_saldoacc();
            drop_coa('salstr_acc');
        });
        function dt_saldoacc(id)
        {
            table = $('#dtb_saldoacc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showcoa_saldo')?>",
                    "type": "POST",
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "targets": [0,1],'className': 'text-center'
                },
                {
                    "targets": [2,3],'className': 'text-right'
                },
                ],
            });
        }
        function reload_table()
        {
            table.ajax.reload(null,false);
        }
        function save_saldoacc()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/save_saldoacc')?>",
                type: "POST",
                data: $('#form_saldoacc').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        reload_table();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function drop_coa(parid)
        {
            $.ajax({            
            url : "<?php echo site_url('administrator/Master/getcoa')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#'+parid).empty();
                    var select = document.getElementById(parid);
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
                    $('#'+parid).selectpicker({
                        dropupAuto: false
                    });
                    $('#'+parid).selectpicker('refresh');                    
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop coa');
                }
            });
        }
    </script>
</body>
</html>