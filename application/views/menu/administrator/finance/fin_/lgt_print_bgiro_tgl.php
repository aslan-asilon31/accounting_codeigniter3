<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak Laporan Giro Per Tanggal Giro</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form id="form_printbgiro" method="post" action="#" class="form-horizontal">
                            <div class="form-group">                              
                                <label class="col-sm-3 control-label">Periode</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="date" name="tgl1">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="date" name="tgl2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cabang</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="kode_cabang" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="nama_cabang" readonly>
                                </div>
                                <div class="col-sm-1">
                                    <a href="javascript:void(0)" onclick="srch_branch()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-5 col-sm-2">
                                    <a href="javascript:void(0)" onclick="show_gr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span> Preview</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>                
                <div class="row" id="printArea">
                    <hr style="border: solid 2px; color: black;"">
                    <div class="text-center">
                        <h3><strong><u>LAPORAN Giro Per Tanggal Giro</u></strong></h3>
                        <h3>Tgl. Terima :<span name="periode"></span></h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <address>
                                <strong>Match Advertising</strong><br>
                                JL. Lesti No.42, Surabaya 60241<br>
                                Telp. (031) 567 8346 (Hunting)<br>
                                Fax. (031) 568 0646<br>
                                Email : info@match-advertising.com<br>
                                Website : www.match-advertising.com<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                www.matchadonline.com
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <input type="hidden" name="csh_id">
                                        <input type="hidden" name="csh_code">
                                        <input type="hidden" name="tgl1">
                                        <input type="hidden" name="tgl2">
                                        <input type="hidden" name="csh_tgl">
                                        <input type="hidden" name="COA_ACC">
                                        <input type="hidden" name="csh_info">
                                        <input type="hidden" name="csh_amount">
                                        <input type="hidden" name="csh_terbilang">
                                        <input type="hidden" name="curr_name">
                                        <table id="tb_gm" class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-2 col-xs-2">Tgl. Giro</th>
                                                    <th class="col-sm-1 col-xs-1"></th>
                                                    <th class="col-sm-1 col-xs-1"></th>
                                                    <th class="col-sm-1 col-xs-1"></th>
                                                    <th class="col-sm-2 col-xs-2"></th>
                                                    <th colspan="2" class="col-sm-1 col-xs-1 text-center">Nominal</th>
                                                    <th class="col-sm-1 col-xs-1"></th>
                                                    <th class="col-sm-2 col-xs-2"></th>
                                                    <th class="col-sm-1 col-xs-1"></th>
                                                </tr>
                                                <tr>
                                                    <th class="col-sm-2 col-xs-2 text-center">No. Giro</th>
                                                    <th class="col-sm-1 col-xs-1 text-center">Tgl. Terima</th>
                                                    <th class="col-sm-1 col-xs-1 text-center">No. Bank</th>
                                                    <th colspan="2" class="col-sm-3 col-xs-3 text-center">Giro Dari / Ke</th> 
                                                    <th class="col-sm-1 col-xs-1 text-center">Masuk</th> 
                                                    <th class="col-sm-1 col-xs-1 text-center">Keluar</th> 
                                                    <th class="col-sm-2 col-xs-2">Keterangan</th>
                                                    <th class="col-sm-1 col-xs-1">Tgl Cair</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tb_content">
                                                <!-- <tr>
                                                    <td style="border-top: 2px solid;"></td>
                                                    <td style="border-top: 2px solid;"></td>
                                                    <td class="text-center" style="border-top: 2px solid;"><strong>Total</strong></td>
                                                    <td style="border-top: 2px solid;"><strong>Harga</strong></td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <hr style="border: solid 2px; color: black;">
                </div>
                <div class="row">
                        <div class="col-xs-3 col-xs-offset-9 text-right">
                            <a href="javascript:void(0)" type="button" class="btn btn-default" onclick="printDiv('printArea')" ><span class="glyphicon glyphicon-print"></span> Print</a>
                            <a href="javascript:void(0)" type="button" class="btn btn-default" onclick="printPre()"><span class="glyphicon glyphicon-print"></span> Print</a>
                            <br><br>
                        </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
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
                </form>
            </div>
        </div>
    </div>
    <!-- modal account selesai -->

     <!-- Modal Branch -->
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
    <!-- modal Branch selesai -->

    <!-- Modal Search -->
    <div class="modal fade" id="modal_gk" name="modal_gk" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_gk" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Giro Masuk</th>
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
        var id; var suppid; var prc; var qty; var sub;
        $(document).ready(function()
        {
            $('#dtp1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            id=$('[name="gk_id"]').val();            
            prc = 0; qty = 0; sub = 0; 
        });

        function printPre()
        {
            var seg1 = $('[name="tgl1"]').val()?$('[name="tgl1"]').val():'null';
            var seg2 = $('[name="tgl2"]').val()?$('[name="tgl2"]').val():'null';
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_giro_tgl/')?>"+seg1+'/'+seg2,'_blank');
        }

        function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
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
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_acc')?>",
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

        function pick_acc(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="acc"]').val(data.COA_ACC);                    
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function srch_branch()
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

        function pick_branch(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kode_cabang"]').val(data.BRANCH_CODE);    
                    $('[name="nama_cabang"]').val(data.BRANCH_NAME);                 
                    $('#modal_branch').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    
        function show_gr()
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/show_giro_tgl_giro/')?>/",
                type: "POST",
                data: $('#form_printbgiro').serialize(),
                dataType: "JSON",
                success: function(data)
                {                    
                    var tgl1 = $('[name="tgl1"]').val();
                    var tgl2 = $('[name="tgl2"]').val();
                    var periode = formattanggal(tgl1) + ' s/d ' + formattanggal(tgl2);
                    $('[name="periode"]').text(periode);
                    var cabang = "";
                    var tgl = "";
                    var tdebet = 0;
                    var tkredit = 0;
                    var total = 0;
                    for (var i = 0; i < data.length; i++) {
                        var jenis = data[i]["BNK_CODE"];
                        if (tgl != data[i]["GR_DATE"]){
                            if ((cabang != "") && (tgl != "")) {
                              var $st = $('<tr>').append(
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text('Total'+' '+formattanggal(tgl)),
                                        $('<td>').css({'border-top':'2px solid','text-align':'right'}).text(formatCurrency(tdebet,".",",",2)),
                                        $('<td>').css({'border-top':'2px solid','text-align':'right'}).text(formatCurrency(tkredit,".",",",2))
                                      ).appendTo('#tb_content');
                            // var $tot = $('<tr>').append(
                            //             $('<td colspan="7">').css('text-align','right').text(formatCurrency(total,".",",",2)+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0')
                            //           ).appendTo('#tb_content');
                            }
                            if (cabang != data[i]["BRANCH_NAME"]) {
                               var $tr = $('<tr>').append(
                                         $('<td>').text(data[i]["BRANCH_NAME"])
                                        ).appendTo('#tb_content');
                               cabang=data[i]["BRANCH_NAME"];
                            }
                            var $tr = $('<tr>').append(
                                      $('<td>').text(formattanggal(data[i]["GR_DATE"]))
                                      ).appendTo('#tb_content');
                            tgl=data[i]["GR_DATE"];
                            tdebet = 0;
                            tkredit = 0;
                            total = 0;
                        }

                        var sts_cair='';
                        if (data[i]["CAIR_STS"] != 1){
                            if (data[i]["BLOKIR_STS"] != 0){
                                    sts_cair='Blokir';
                            } else {
                                    sts_cair='Belum Cair';
                            }
                        } else {sts_cair='Sudah Cair';}
                        if (jenis.substring(0,2)=="BM")
                        {
                            tdebet = tdebet + (data[i]["GR_AMOUNT"] * 1);
                            total = total + (data[i]["GR_AMOUNT"] * 1);
                            var $tr = $('<tr>').append(
                                      $('<td>').text(data[i]["GR_NUMBER"]),
                                      $('<td>').text(data[i]["RECEIVE_DATE"]), 
                                      $('<td>').text(data[i]["BNK_CODE"]), 
                                      $('<td>').text(data[i]["CUST_CODE"]),    
                                      $('<td>').text(data[i]["CUST_NAME"]),
                                      $('<td>').css('text-align','right').text(formatCurrency(data[i]["GR_AMOUNT"],".",",",2)),
                                      $('<td>').css('text-align','right').text('0.00'),
                                      $('<td>').text(sts_cair)
                            
                            ).appendTo('#tb_content');
                        }
                        if (jenis.substring(0,2)=="BK")
                        {
                            tkredit = tkredit + (data[i]["GR_AMOUNT"] * 1);
                            total = total - (data[i]["GR_AMOUNT"] * 1);
                            var $tr = $('<tr>').append(
                                      $('<td>').text(data[i]["GR_NUMBER"]),
                                      $('<td>').text(data[i]["RECEIVE_DATE"]), 
                                      $('<td>').text(data[i]["BNK_CODE"]), 
                                      $('<td>').text(data[i]["SUPP_CODE"]),    
                                      $('<td>').text(data[i]["SUPP_NAME"]),
                                      $('<td>').css('text-align','right').text('0.00'),
                                      $('<td>').css('text-align','right').text(formatCurrency(data[i]["GR_AMOUNT"],".",",",2)),
                                      $('<td>').text(sts_cair)
                            ).appendTo('#tb_content');
                        }

                    };
                    var $st = $('<tr>').append(
                              $('<td>').text(''),
                              $('<td>').text(''),
                              $('<td>').text(''),
                              $('<td>').text(''),
                              $('<td>').text('Total'+' '+formattanggal(tgl)),
                              $('<td align="right">').css({'border-top':'2px solid','text-align':'right'}).text(formatCurrency(tdebet,".",",",2)),
                              $('<td align="right">').css({'border-top':'2px solid','text-align':'right'}).text(formatCurrency(tkredit,".",",",2)),
                              ).appendTo('#tb_content');
                    // var $tot = $('<tr>').append(
                    //            $('<td colspan="7">').css('text-align','right').text(formatCurrency(total,".",",",2)+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0'+'\xa0')
                    //            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function show_bkk()
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/show_kas_keluar/')?>/",
                type: "POST",
                data: $('#form_printbkas').serialize(),
                dataType: "JSON",
                success: function(data)
                {                       
                    for (var i = 0; i < data.length; i++) {
                            var $tr = $('<tr>').append(
                            $('<td>').text(data[i]["CSHO_CODE"]),    
                            $('<td>').text(data[i]["CSHO_DATE"]),  
                            $('<td>').text(data[i]["COA_ACC"]),
                            $('<td>').text(data[i]["CSHODET_INFO"]),
                            $('<td>').css('text-align','right').text('0.00'),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["CSHODET_AMOUNT"],".",",",2))
                            ).appendTo('#tb_content');
                    };
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_sum_total_gk(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_gk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="giro_total"]').val(data.SubTotal);
                    pick_terbilang_total_gk(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_terbilang_total_gk(total)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="giro_terbilang"]').val(data.terbilang);    
                    // pick_bmtrxdet($('[name="bm_id"]').val()); 
                    pick_gkdet($('[name="gk_id"]').val());       
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
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_curr')?>",
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
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>/" + id,
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

        function formatCurrency(amount, decimalSeparator, thousandsSeparator, nDecimalDigits)
        {  
            var num = parseFloat( amount ); //convert to float  
            //default values  
            decimalSeparator = decimalSeparator || '.';  
            thousandsSeparator = thousandsSeparator || ',';  
            nDecimalDigits = nDecimalDigits == null? 2 : nDecimalDigits;  
      
            var fixed = num.toFixed(nDecimalDigits); //limit or add decimal digits  
            //separate begin [$1], middle [$2] and decimal digits [$4]  
            var parts = new RegExp('^(-?\\d{1,3})((?:\\d{3})+)(\\.(\\d{' + nDecimalDigits + '}))?$').exec(fixed);   
      
            if(parts){ //num >= 1000 || num < = -1000  
                 return parts[1] + parts[2].replace(/\d{3}/g, thousandsSeparator + '$&') + (parts[4] ? decimalSeparator + parts[4] : '');  
            }else{  
                 return fixed.replace('.', decimalSeparator);  
            }  
        }  

        function formattanggal(tanggal)
        {
            var today = tanggal; 
            var dd = today.substr(8,2); 
            var mm = today.substr(5,2); 
            var yyyy = today.substr(0,4); 
            var todaynew = dd+'/'+mm+'/'+yyyy; 
            return todaynew;
        }
    </script>
</body>
</html>