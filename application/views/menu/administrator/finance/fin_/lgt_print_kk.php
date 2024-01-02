<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak Kas Keluar</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form id="form_printkk" method="post" action="#" class="form-horizontal">
                            <div class="form-group">                              
                                <label class="col-sm-3 control-label">Nomor KK</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="kk_code" readonly>
                                    <input type="hidden" name="kk_id">
                                   <!--  <input type="hidden" name="appr_id"> -->
                                    <input type="hidden" name="supp_id">
                                    <input type="hidden" name="kas_total">
                                    <!-- <input type="hidden" name="kas_info"> -->
                                    <!-- <input type="hidden" name="podet_id">
                                    <input type="hidden" name="gd_id"> -->
                                </div>
                                <div class="col-sm-1">
                                    <a href="javascript:void(0)" onclick="srch_kk()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
                <div class="row" id="printArea">
                    <hr style="border: solid 2px; color: black;"">
                    <div class="text-center">
                        <h3><strong><u>BUKTI KAS KELUAR</u></strong></h3>
                        <h3>No.<span name="no_kk"></span></h3>
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
                                <span name="kas_suppname"></span><br>
                                <span name="kas_suppaddr"></span>&nbsp;<span name="kas_suppcity"></span><br>
                                <span name="kas_suppphone"></span><br>
                                <span name="kas_suppinfo"></span>
                            </address>
                        </div>
                        <div class="col-xs-4">
                            <address>
                                <span>Tanggal :</span>&nbsp;<span name="kas_tgl"></span> 
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
                                        <input type="hidden" name="kas_total">
                                        <input type="hidden" name="kas_info">
                                        <input type="hidden" name="kas_terbilang">
                                        <input type="hidden" name="curr_name">
                                        <table id="tb_km" class="table table-condensed">
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
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-2 col-xs-2 text center">Pembukuan</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Mengetahui</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Menyetujui</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Kasir</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Yang Menyerahkan</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tb_footer">

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
    <!-- Modal Search -->
    <div class="modal fade" id="modal_kk" name="modal_kk" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_kk" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kas Masuk</th>
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
            id=$('[name="km_id"]').val();            
            prc = 0; qty = 0; sub = 0;

            // $('[name=po_qty]').on('input', function() {
            //     // hitung();
            // });
        });

        function hitung()
        {
            prc = $('[name="gd_price"]').val();
            qty = $('[name="po_qty"]').val();
            sub = qty * prc;
            $('[name="po_sub"]').val(sub);
        }

        function sub_total(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_sub/')?>/" + id,
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

        function printPre()
        {
            var ids = $('[name=kk_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_kk/')?>"+ids,'_blank');
        }

        function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        function srch_kk()
        {            
            $('#modal_kk').modal('show');
            $('.modal-title').text('Cari Kas Keluar'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_kk').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_kk')?>",
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

        function pick_kk(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_kk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kk_id"]').val(data.CSHO_ID);
                    search_acc(data.COA_ID);
                    $('[name="kk_code"]').val(data.CSHO_CODE);
                    $('[name="no_kk"]').text(data.CSHO_CODE);
                    $('[name="no_kk"]').text(data.CSHO_CODE);
                    $('[name="kas_tgl"]').text(data.CSHO_DATE);
                    $('[name="kas_info"]').val(data.CSHO_INFO);
                    // $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="supp_id"]').val(data.CSHO_SUPP);
                    $('[name="pass"]').text(data.CSHO_ID);
                    if (($('[name="supp_id"]').val()) != ''){
                        pick_supp($('[name="supp_id"]').val());
                    };
                    pick_sum_total_kk($('[name="kk_id"]').val());
                    pick_curr(data.CURR_ID);
                    // pick_kmdet($('[name="km_id"]').val());
                    // if(data.APPR_ID != null)
                    // {
                    //     pick_appr($('[name="appr_id"]').val());
                    // }
                    $('#modal_kk').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    
        function pick_kkdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_kkdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    var total= $('[name="kas_total"]').val();
                    if (total == '') {
                        total=0;
                    }
                    var info = $('[name="kas_info"]').val();
                    var curr = $('[name="curr_name"]').val();
                    if (total > 0) {
                       var terbi = $('[name="kas_terbilang"]').val() + ' ' + curr;
                    }
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td>').text(data[i]["COA_ACC"]+' - '+data[i]["COA_ACCNAME"]),
                            $('<td>').text(data[i]["CSHODET_INFO"]),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["CSHODET_AMOUNT"],".",",",2))
                            // $('<td>').css('text-align','right').text(data[i]["PODET_SUB"])
                            ).appendTo('#tb_content');
                    }
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
                    var $tr = $('<tr>').append(
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''), 
                            $('<br>').css({'font-weight':'bold','text-align':'center'}).text('')
                            ).appendTo('#tb_footer');
                    var $tr = $('<tr>').append(
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''), 
                            $('<br>').css({'font-weight':'bold','text-align':'center'}).text('')
                            ).appendTo('#tb_footer');
                    var $tr = $('<tr>').append(
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text(''), 
                            $('<br>').css({'font-weight':'bold','text-align':'center'}).text('')
                            ).appendTo('#tb_footer');
                     var $tr = $('<tr>').append(
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text('(...............)(................)'),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text('(...............)'),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text('(...............)'),
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text('(...............)'), 
                            $('<td>').css({'font-weight':'bold','text-align':'center'}).text('(...............)')
                            ).appendTo('#tb_footer');
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
                url : "<?php echo site_url('administrator/Finance/ajax_pick_supp/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_suppname"]').text(data.SUPP_NAME);
                    $('[name="kas_suppaddr"]').text(data.SUPP_ADDRESS);
                    $('[name="kas_suppcity"]').text(data.SUPP_CITY);
                    $('[name="kas_suppphone"]').text(data.SUPP_PHONE);
                    // $('[name="inv_custinfo"]').text(data.CUST_OTHERCTC);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_sum_total_kk(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_kk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_total"]').val(data.SubTotal);
                    pick_terbilang_total_kk(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_terbilang_total_kk(total)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_terbilang"]').val(data.terbilang);
                    pick_kkdet($('[name="kk_id"]').val());                    
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

        function pick_curr(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    // $('[name="curr_id"]').val(data.CURR_ID);                    
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