<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak Laporan Giro Sudah Cair</h1>
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
                        <h3><strong><u>LAPORAN Giro Sudah Cair</u></strong></h3>
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
                                                    <th class="col-sm-2 col-xs-2 text-center">No. Giro</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Tgl. Terima</th>
                                                    <th class="col-sm-1 col-xs-1 text-center">Tgl. Giro</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Tgl. Cair</th> 
                                                    <th class="col-sm-2 col-xs-2 text-center">Customer / Supplier</th> 
                                                    <th class="col-sm-1 col-xs-1 text-center">Nominal</th> 
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
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_giro_sdh_cr/')?>"+seg1+'/'+seg2,'_blank');
        }

        function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
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
                url : "<?php echo site_url('administrator/Finance/show_giro_sdh_cair/')?>/",
                type: "POST",
                data: $('#form_printbgiro').serialize(),
                dataType: "JSON",
                success: function(data)
                {                    
                    var tgl1 = $('[name="tgl1"]').val();
                    var tgl2 = $('[name="tgl2"]').val();
                    var periode = formattanggal(tgl1) + ' s/d ' + formattanggal(tgl2);
                    $('[name="periode"]').text(periode);
                    var bank = "";
                    var nama_bank = "";
                    var giro = "";
                    var gkm = "";
                    var tdebet = 0;
                    var tkredit = 0;
                    var total = 0;
                    for (var i = 0; i < data.length; i++) {
                        var jenis = data[i]["BNK_CODE"];
                        giro = jenis.substring(0,2);
                        
                        if ((gkm !="") && ((bank != data[i]["BANK_ID"]) || (gkm != giro))) {
                                if (gkm == "BK") {
                                    var $st = $('<tr>').append(
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').css({'text-align':'right','font-weight':'bold'}).text('Total'+' '+nama_bank+' :'),
                                        $('<td>').css({'border-top':'2px solid','text-align':'right','font-weight':'bold'}).text(formatCurrency(tkredit,".",",",2))
                                      ).appendTo('#tb_content');
                                    tkredit = 0;

                                }
                                if (gkm == "BM") {
                                     var $st = $('<tr>').append(
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').css({'text-align':'right','font-weight':'bold'}).text('Total'+' '+nama_bank+' :'),
                                        $('<td>').css({'border-top':'2px solid','text-align':'right','font-weight':'bold'}).text(formatCurrency(tdebet,".",",",2))
                                      ).appendTo('#tb_content');
                                     tdebet = 0;
                                }
                                if (gkm != giro) {
                                    if (gkm =="BK") {
                                        var $st = $('<tr>').append(
                                                  $('<td>').text(''),
                                                  $('<td>').text(''),
                                                  $('<td>').text(''),
                                                  $('<td>').text(''),
                                                  $('<td>').css({'text-align':'right','font-weight':'bold'}).text('Total Giro Keluar :'),
                                                  $('<td>').css({'border-top':'2px solid','text-align':'right','border-bottom':'double','font-weight':'bold'}).text(formatCurrency(total,".",",",2))
                                      ).appendTo('#tb_content');
                                    }
                                    if (gkm =="BM") {
                                        var $st = $('<tr>').append(
                                                  $('<td>').text(''),
                                                  $('<td>').text(''),
                                                  $('<td>').text(''),
                                                  $('<td>').text(''),
                                                  $('<td>').css({'text-align':'right','font-weight':'bold'}).text('Total Giro Masuk :'),
                                                  $('<td>').css({'border-top':'2px solid','text-align':'right','border-bottom':'double','font-weight':'bold'}).text(formatCurrency(total,".",",",2))
                                      ).appendTo('#tb_content');
                                    }
                                    total = 0;
                                }
                                
                        }
                        if (gkm != giro) {
                            if ((gkm == "") && (giro == "BK")) {
                                alert(giro);
                                var $tr = $('<tr>').append(
                                          $('<td>').css({'font-weight':'bold'}).text('GIRO KELUAR'),
                                        ).appendTo('#tb_content');
                            }
                            if (giro == "BM") {
                                var $tr = $('<tr>').append(
                                          $('<td>').css({'font-weight':'bold'}).text('GIRO Masuk'),
                                        ).appendTo('#tb_content');
                                bank = "";
                            }
                        }
                        gkm = jenis.substring(0,2);

                        if (bank != data[i]["BANK_ID"]) {
                            var $tr = $('<tr>').append(
                                      $('<td>').css({'font-weight':'bold'}).text(data[i]["BANK_NAME"])
                                      ).appendTo('#tb_content');
                            bank = data[i]["BANK_ID"];
                            nama_bank = data[i]["BANK_NAME"]
                        }
                        
                        if (giro !="BM"){
                            tkredit = tkredit + (data[i]["GR_AMOUNT"] * 1);
                            total = total + (data[i]["GR_AMOUNT"] * 1);
                            var $tr = $('<tr>').append(
                                      $('<td>').text(data[i]["GR_NUMBER"]),
                                      $('<td>').text(data[i]["RECEIVE_DATE"]), 
                                      $('<td>').text(data[i]["GIRO_DATE"]),
                                      $('<td>').text(data[i]["CAIR_DATE"]), 
                                      $('<td>').text(data[i]["SUPP_CODE"]+' '+data[i]["SUPP_NAME"]),    
                                      $('<td>').css('text-align','right').text(formatCurrency(data[i]["GR_AMOUNT"],".",",",2))
                                      // $('<td>').text(sts_cair)
                            ).appendTo('#tb_content');
                            var $tr2 = $('<tr>').append(
                                      $('<td>').text(''),
                                      $('<td>').text(data[i]["BNK_CODE"]), 
                                      $('<td>').text(''), 
                                      $('<td>').css('text-align','right').text(data[i]["GR_CODE"]),
                                      $('<td>').css('text-align','right').text(''),
                                      $('<td>').css('text-align','right').text('')
                            
                            ).appendTo('#tb_content');
                        }

                        if (jenis.substring(0,2)!="BK")
                        {
                            tdebet = tdebet + (data[i]["GR_AMOUNT"] * 1);
                            total = total + (data[i]["GR_AMOUNT"] * 1);
                            var $tr = $('<tr>').append(
                                      $('<td>').text(data[i]["GR_NUMBER"]),
                                      $('<td>').text(data[i]["RECEIVE_DATE"]), 
                                      $('<td>').text(data[i]["GIRO_DATE"]),
                                      $('<td>').text(data[i]["CAIR_DATE"]),
                                      $('<td>').text(data[i]["CUST_CODE"]+' '+data[i]["CUST_NAME"]), 
                                      $('<td>').css('text-align','right').text(formatCurrency(data[i]["GR_AMOUNT"],".",",",2))
                            ).appendTo('#tb_content');
                            var $tr2 = $('<tr>').append(
                                      $('<td>').text(''),
                                      $('<td>').text(data[i]["BNK_CODE"]), 
                                      $('<td>').text(''), 
                                      $('<td>').css('text-align','right').text(data[i]["GR_CODE"]),
                                      $('<td>').css('text-align','right').text(''),
                                      $('<td>').css('text-align','right').text('')
                            ).appendTo('#tb_content');
                        }
                    };

                    if (gkm == "BK") {
                                    var $st = $('<tr>').append(
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').text(''),
                                        $('<td>').css({'text-align':'right','font-weight':'bold'}).text('Total'+' '+nama_bank+' :'),
                                        $('<td>').css({'border-top':'2px solid','text-align':'right','font-weight':'bold'}).text(formatCurrency(tkredit,".",",",2))
                                      ).appendTo('#tb_content');
                                    tkredit = 0;

                    }
                    if (gkm == "BM") {
                        var $st = $('<tr>').append(
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').css({'text-align':'right','font-weight':'bold'}).text('Total'+' '+nama_bank+' :'),
                                  $('<td>').css({'border-top':'2px solid','text-align':'right','font-weight':'bold'}).text(formatCurrency(tdebet,".",",",2))
                                 ).appendTo('#tb_content');
                        tdebet = 0;
                    }
                    
                    if (gkm =="BK") {
                        var $st = $('<tr>').append(
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').css({'text-align':'right','font-weight':'bold'}).text('Total Giro Keluar :'),
                                  $('<td>').css({'border-top':'2px solid','text-align':'right','border-bottom':'double','font-weight':'bold'}).text(formatCurrency(total,".",",",2))
                                ).appendTo('#tb_content');
                    }
                    if (gkm =="BM") {
                        var $st = $('<tr>').append(
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').text(''),
                                  $('<td>').css({'text-align':'right','font-weight':'bold'}).text('Total Giro Masuk :'),
                                  $('<td>').css({'border-top':'2px solid','text-align':'right','border-bottom':'double','font-weight':'bold'}).text(formatCurrency(total,".",",",2))
                                ).appendTo('#tb_content');
                    }
                    total = 0;
                   
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