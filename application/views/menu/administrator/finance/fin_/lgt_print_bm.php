<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak Bank Masuk</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form id="form_printkm" method="post" action="#" class="form-horizontal">
                            <div class="form-group">                              
                                <label class="col-sm-3 control-label">Nomor BM</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="bm_code" readonly>
                                    <input type="hidden" name="bm_id">
                                   <!--  <input type="hidden" name="appr_id"> -->
                                    <input type="hidden" name="cust_id">
                                    <!-- <input type="hidden" name="kas_total">
                                    <input type="hidden" name="kas_info"> -->
                                    <!-- <input type="hidden" name="podet_id">
                                    <input type="hidden" name="gd_id"> -->
                                </div>
                                <div class="col-sm-1">
                                    <a href="javascript:void(0)" onclick="srch_bm()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
                <div class="row" id="printArea">
                    <hr style="border: solid 2px; color: black;"">
                    <div class="text-center">
                        <h3><strong><u>BUKTI BANK MASUK</u></strong></h3>
                        <h3>No.<span name="no_bm"></span></h3>
                        <span name="acc_header"></span>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <address>
                                <!-- <strong>Dari:</strong><br> -->
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
                        <div class="col-xs-4">
                            <address>
                                <strong>Kepada :</strong><br>
                                <span name="bank_custname"></span><br>
                                <span name="bank_custaddr"></span>&nbsp;<span name="bank_custcity"></span><br>
                                <span name="bank_custphone"></span><br>
                                <span name="bank_custinfo"></span>
                            </address>
                        </div>
                        <div class="col-xs-4">
                            <address>
                                <span>Tanggal :</span>&nbsp;<span name="bank_tgl"></span> 
                                <!-- <strong>Info:</strong><br> 
                                Lokasi <span name="loc_name"></span>, <span name="loc_det"></span><br>
                                <span name="km_info"></span> -->
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Kas Masuk Summary</strong></h3>
                                </div> -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <input type="hidden" name="BNKTRX_NUM">
                                        <input type="hidden" name="BNKTRX_DATE">
                                        <input type="hidden" name="BNKTRX_AMOUNT">
                                        <input type="hidden" name="bank_total">
                                        <input type="hidden" name="bank_info">
                                        <input type="hidden" name="bank_terbilang">
                                        <input type="hidden" name="curr_name">
                                        <table id="tb_bm" class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-2 col-xs-2">Perkiraan</th>
                                                    <th class="col-sm-7 col-xs-7 text-center">Uraian</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Jumlah</th>
                                                    <!-- <th class="col-sm-2 col-xs-2 text-center">Harga</th> -->
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
                                    <div class="row">
                                        <div class="col-xs-3 text-center">
                                             Pembukuan
                                        </div>
                                        <div class="col-xs-2 text-center">
                                             Mengetahui
                                        </div>
                                        <div class="col-xs-2 text-center">
                                             Disetujui
                                        </div>
                                        <div class="col-xs-2 text-center">
                                             Dibuat
                                        </div>
                                        <div class="col-xs-3 text-center">
                                             Diterima
                                        </div>
                                    </div>   
                                    <br><br><br>
                                    <div class="row">
                                         <div class="col-xs-3 text-center">
                                               (.................)  (.................)
                                         </div>
                                         <div class="col-xs-2 text-center">
                                               (.................)
                                         </div>
                                        <div class="col-xs-2 text-center">
                                               (.................)
                                        </div>
                                        <div class="col-xs-2 text-center">
                                               (.................)
                                        </div>
                                        <div class="col-xs-3 text-center">
                                               (.................)
                                        </div>
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
    <!-- Modal Search -->
    <div class="modal fade" id="modal_bm" name="modal_bm" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_bm" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Bank Masuk</th>
                                        <th>Nama Customer</th>
                                        <!-- <th>Approval</th>
                                        <th>Nama Klien</th>
                                        <th>SO</th> -->
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
            id=$('[name="bm_id"]').val();            
            prc = 0; qty = 0; sub = 0;

            // $('[name=po_qty]').on('input', function() {
            //     // hitung();
            // });
        });

        function printPre()
        {
            var ids = $('[name=bm_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_bm/')?>"+ids,'_blank');
        }

        function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        function srch_bm()
        {            
            $('#modal_bm').modal('show');
            $('.modal-title').text('Cari Bank Masuk'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_bm').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_bm')?>",
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

        function pick_bm(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bm/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bm_id"]').val(data.BNK_ID);
                    search_acc(data.COA_ID);
                    $('[name="bm_code"]').val(data.BNK_CODE);
                    $('[name="no_bm"]').text(data.BNK_CODE);
                    $('[name="no_bm"]').text(data.BNK_CODE);
                    $('[name="bank_tgl"]').text(data.BNK_DATE);
                    $('[name="bank_info"]').val(data.BNK_INFO);
                    // $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="cust_id"]').val(data.CUST_ID);
                    $('[name="pass"]').text(data.BNK_ID);
                    if (($('[name="cust_id"]').val()) != ''){
                         pick_cust($('[name="cust_id"]').val());
                    }
                    pick_sum_total_bm($('[name="bm_id"]').val());
                    pick_curr(data.CURR_ID);
                          
                     
                    // pick_kmdet($('[name="km_id"]').val());
                    // if(data.APPR_ID != null)
                    // {
                    //     pick_appr($('[name="appr_id"]').val());
                    // }
                    $('#modal_bm').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    
        function pick_bmdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bmdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    var total= $('[name="bank_total"]').val();
                    var info = $('[name="bank_info"]').val();
                    var curr = $('[name="curr_name"]').val();
                    var terbi = $('[name="bank_terbilang"]').val() + ' ' + curr;
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td>').text(data[i]["COA_ACC"]+' - '+data[i]["COA_ACCNAME"]),
                            $('<td>').text(data[i]["BNKDET_INFO"]),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["BNKDET_AMOUNT"],".",",",2))
                            // $('<td>').css('text-align','right').text(data[i]["PODET_SUB"])
                            ).appendTo('#tb_content');
                    };
                    
                    var trxnum = $('[name="BNKTRX_NUM"]').val();
                    var trxdate = moment($('[name="BNKTRX_DATE"]').val()).format('DD/MM/YY');
                    var trxamount = $('[name="BNKTRX_AMOUNT"]').val();
                    // alert($('[name="BNKTRX_AMOUNT"]').val());
                    var $tr = $('<tr>').append(
                            $('<td>').text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(trxnum + '\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0' + trxdate + '\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0' + formatCurrency(trxamount,".",",",2)),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').css('border-top','2px solid').text(''),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text('Total Rp'),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text(formatCurrency(total,".",".",2))
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').text('Keterangan :'),
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(info),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').text('Terbilang :'),
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(terbi),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_bmtrxdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bmtrxdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                { 
                   $('[name="BNKTRX_NUM"]').val(data.BNKTRX_NUM); 
                   $('[name="BNKTRX_DATE"]').val(data.BNKTRX_DATE); 
                   $('[name="BNKTRX_AMOUNT"]').val(data.BNKTRX_AMOUNT);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        
        function pick_cust(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cust/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_custname"]').text(data.CUST_NAME);
                    $('[name="bank_custaddr"]').text(data.CUST_ADDRESS);
                    $('[name="bank_custcity"]').text(data.CUST_CITY);
                    $('[name="bank_custphone"]').text(data.CUST_PHONE);
                    // $('[name="inv_custinfo"]').text(data.CUST_OTHERCTC);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_sum_total_bm(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_bm/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_total"]').val(data.SubTotal);
                    pick_terbilang_total_bm(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_terbilang_total_bm(total)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_terbilang"]').val(data.terbilang);    
                    pick_bmtrxdet($('[name="bm_id"]').val()); 
                    pick_bmdet($('[name="bm_id"]').val());       
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function search_acc(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                       $('[name="acc_header"]').text(data.COA_ACC +" - "+ data.COA_ACCNAME);
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
    </script>
</body>
</html>