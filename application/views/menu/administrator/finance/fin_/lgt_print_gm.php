<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak Giro Masuk</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form id="form_printgm" method="post" action="#" class="form-horizontal">
                            <div class="form-group">                              
                                <label class="col-sm-3 control-label">Nomor GM</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="gm_code" readonly>
                                    <input type="hidden" name="gm_id">
                                    <!-- <input type="hidden" name="cust_id"> -->
                                </div>
                                <div class="col-sm-1">
                                    <a href="javascript:void(0)" onclick="srch_gm()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
                <div class="row" id="printArea">
                    <hr style="border: solid 2px; color: black;"">
                    <div class="text-center">
                        <h3><strong><u>BUKTI GIRO MASUK</u></strong></h3>
                        <h3>No.<span name="no_gm"></span></h3>
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
                        <!-- <div class="col-xs-4">
                            <address>
                                <strong>Kepada :</strong><br>
                                <span name="giro_custname"></span><br>
                                <span name="giro_custaddr"></span>&nbsp;<span name="bank_girocity"></span><br>
                                <span name="giro_custphone"></span><br>
                                <span name="giro_custinfo"></span>
                            </address>
                        </div> -->
                        <div class="col-xs-4">
                            <address>
                                <span>Tanggal :</span>&nbsp;<span name="giro_tgl"></span> 
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <input type="hidden" name="gir_id">
                                        <input type="hidden" name="bnktrx_id">
                                        <input type="hidden" name="bnk_id">
                                        <input type="hidden" name="cust_id">
                                        <input type="hidden" name="giro_custname">
                                        <input type="hidden" name="giro_total">
                                        <input type="hidden" name="giro_info">
                                        <input type="hidden" name="giro_terbilang">
                                        <input type="hidden" name="curr_name">
                                        <table id="tb_gm" class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-4 col-xs-4">Customer</th>
                                                    <th class="col-sm-3 col-xs-3 text-center">No. Giro</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Tgl. Giro</th>
                                                    <th class="col-sm-3 col-xs-3 text-center">Jumlah</th> 
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
                                             Menyetujui
                                        </div>
                                        <div class="col-xs-2 text-center">
                                             Kasir
                                        </div>
                                        <div class="col-xs-3 text-center">
                                             Penerima
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
    <div class="modal fade" id="modal_gm" name="modal_gm" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_gm" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
            id=$('[name="bm_id"]').val();            
            prc = 0; qty = 0; sub = 0;
        });

        function printPre()
        {
            var ids = $('[name=gm_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_gm/')?>"+ids,'_blank');
        }

        function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        function srch_gm()
        {            
            $('#modal_gm').modal('show');
            $('.modal-title').text('Cari Giro Masuk'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_gm').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_gm')?>",
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

        function pick_gm(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_gm/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="gm_id"]').val(data.GRIN_ID);
                    $('[name="gm_code"]').val(data.GRIN_CODE);
                    $('[name="no_gm"]').text(data.GRIN_CODE);
                    $('[name="giro_tgl"]').text(data.GRIN_DATE);
                    $('[name="giro_info"]').val(data.GRIN_INFO);
                    // $('[name="appr_id"]').val(data.APPR_ID);
                    // $('[name="cust_id"]').val(data.CUST_ID);
                    $('[name="pass"]').text(data.GRIN_ID);
                    // if (($('[name="cust_id"]').val()) != ''){
                    //      pick_cust($('[name="cust_id"]').val());
                    // }
                    
                    pick_sum_total_gm($('[name="gm_id"]').val());
                    // pick_curr(data.CURR_ID);
                          
                    $('#modal_gm').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    
        function pick_gmdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/show_gmdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    var total= $('[name="giro_total"]').val();
                    var info = $('[name="giro_info"]').val();
                    var curr = $('[name="curr_name"]').val();
                    var terbi = $('[name="giro_terbilang"]').val() + ' ' + curr;
                    for (var i = 0; i < data.length; i++) {
                            var $tr = $('<tr>').append(
                            $('<td>').text(data[i]["CUST_CODE"] + '\xa0' + data[i]["CUST_NAME"]),    
                            $('<td>').text(data[i]["GRINDET_CODE"]),    
                            $('<td>').text(data[i]["GRINDET_DATE"]),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["GRINDET_AMOUNT"],".",",",2))
                            ).appendTo('#tb_content');
                    };
                    
                    var $tr = $('<tr>').append(
                            $('<td>').css('border-top','2px solid').text(''),
                            $('<td>').css('border-top','2px solid').text(''),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text('Total Rp'),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text(formatCurrency(total,".",".",2))
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').text('Keterangan : '+ info)
                            // $('<td>').css({'font-weight':'bold','text-align':'left'}).text(info),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').text('Terbilang : ' + terbi)
                            // $('<td>').css({'font-weight':'bold','text-align':'left'}).text(terbi),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        
        function pick_giroin_record(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_giroin_record/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bnktrx_id"]').text(data.BNKTRX_ID);
                    pick_bankin_trxdet(data.BNKTRX_ID);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_bankin_trxdet(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bankin_trxdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bnk_id"]').text(data.BNK_ID);
                    pick_trx_bankin(data.BNK_ID);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_trx_bankin(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_trx_bankin/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="cust_id"]').text(data.CUST_ID);
                    pick_cust(data.CUST_ID);
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
                    $('[name="giro_custname"]').text(data.CUST_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_sum_total_gm(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_gm/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="giro_total"]').val(data.SubTotal);
                    pick_terbilang_total_gm(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_terbilang_total_gm(total)
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
                    pick_gmdet($('[name="gm_id"]').val());       
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