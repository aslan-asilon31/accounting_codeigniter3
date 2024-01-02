<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak Anggaran</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form id="form_printkm" method="post" action="#" class="form-horizontal">
                            <div class="form-group">                              
                                <label class="col-sm-3 control-label">Nomor Anggaran</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Budget_code" readonly>
                                    <input type="hidden" name="Budget_id">
                                   <!--  <input type="hidden" name="appr_id"> -->
                                    <!-- <input type="hidden" name="supp_id"> -->
                                    <!-- <input type="hidden" name="kas_total">
                                    <input type="hidden" name="kas_info"> -->
                                    <!-- <input type="hidden" name="podet_id">
                                    <input type="hidden" name="gd_id"> -->
                                </div>
                                <div class="col-sm-1">
                                    <a href="javascript:void(0)" onclick="srch_ra()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
                <div class="row" id="printArea">
                    <hr style="border: solid 2px; color: black;"">
                    <div class="text-center">
                        <h3><strong><u>Form Anggaran Pengeluaran</u></strong></h3>
                        <h3>No.<span name="no_ra"></span></h3>
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
                        <!-- <div class="col-xs-4">
                            <address>
                                <strong>Kepada :</strong><br>
                                <span name="bank_suppname"></span><br>
                                <span name="bank_suppaddr"></span>&nbsp;<span name="bank_suppcity"></span><br>
                                <span name="bank_suppphone"></span><br>
                                <span name="bank_suppinfo"></span>
                            </address>
                        </div> -->
                        <div class="col-xs-5">
                            <address>
                                    <span>Tanggal :</span>&nbsp;<span name="Budget_tgl"></span> 
                                    <br>
                                    <span>No. Approval</span>&nbsp;<span name=Budget_appr></span>&nbsp;<span>Lokasi :</span>&nbsp;<span name=loc_name></span>
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
                                        <input type="hidden" name="Budget_DATE">
                                        <input type="hidden" name="Budget_AMOUNT">
                                        <input type="hidden" name="Budget_total">
                                        <input type="hidden" name="Budget_info">
                                        <input type="hidden" name="Budget_terbilang">
                                        <!-- <input type="hidden" name="curr_name"> -->
                                        <table id="tb_ra" class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-1 col-xs-1">No.</th>
                                                    <th class="col-sm-7 col-xs-7 text-center">Keterangan</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Jumlah</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Harga</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Total</th>
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
                                        <span>Surabaya,</span>&nbsp;<span name="tgl_dibuat"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3 text-center">
                                             dibuat oleh,
                                        </div>
                                        <div class="col-xs-2 text-center">
                                             
                                        </div>
                                        <div class="col-xs-2 text-center">
                                             
                                        </div>
                                        <div class="col-xs-2 text-center">
                                             disetujui oleh,
                                        </div>
                                        <div class="col-xs-3 text-center">
                                            
                                        </div>
                                    </div>   
                                    <br><br><br>
                                    <div class="row">
                                         <div class="col-xs-3 text-center">
                                               (.................)  
                                         </div>
                                         <div class="col-xs-2 text-center">
                                               
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
    <div class="modal fade" id="modal_ra" name="modal_ra" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_ra" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Anggaran</th>
                                        <th>Tanggal</th>
                                        <th>No. Approval</th>  
                                        <th>Lokasi</th> 
                                        <th>Alamat Lokasi</th>                                      
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
            id=$('[name="Budget_id"]').val();            
            prc = 0; qty = 0; sub = 0;

        });

        function printPre()
        {
            var ids = $('[name=Budget_id]').val();
            alert(ids);
            window.open ( "<?php echo site_url('administrator/Transaction/pageprint_ra/')?>"+ids,'_blank');
        }

        function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        function srch_ra()
        {            
            $('#modal_ra').modal('show');
            $('.modal-title').text('Cari Anggaran'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_ra').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Transaction/ajax_srch_ra')?>",
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

        function pick_ra(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_pick_ra/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    var tgl = moment().format("DD-MM-YYYY");
                    $('[name="Budget_id"]').val(data.BUD_ID);
                    $('[name="Budget_code"]').val(data.BUD_CODE);
                    $('[name="no_ra"]').text(data.BUD_CODE);
                    $('[name="Budget_tgl"]').text(data.BUD_DATE);
                    $('[name="Budget_appr"]').text(data.APPR_CODE);
                    $('[name="loc_name"]').text(data.BUD_ADDRESS);
                    $('[name="Budget_info"]').val(data.BUD_INFO);
                    $('[name="tgl_dibuat"]').text(tgl);
                    $('[name="pass"]').text(data.BUD_ID);
                    pick_sum_total_ra($('[name="Budget_id"]').val());
                    $('#modal_ra').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    
        function pick_budgetdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_pick_budgetdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    var total= $('[name="Budget_total"]').val();
                    var info = $('[name="Budget_info"]').val();
                    // var curr = $('[name="curr_name"]').val();
                    // var terbi = $('[name="Budget_terbilang"]').val() + '\xa0' + curr;
                    var stotal=0;
                    for (var i = 0; i < data.length; i++) {
                      stotal = data[i]["BUDDET_SUM"] * data[i]["BUDDET_AMOUNT"];
                      var $tr = $('<tr>').append(
                            $('<td>').text(i+1),
                            $('<td>').text(data[i]["BUDDET_INFO"]),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["BUDDET_SUM"],".",",",2)),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["BUDDET_AMOUNT"],".",",",2)),
                            $('<td>').css('text-align','right').text(formatCurrency(stotal,".",",",2))
                            ).appendTo('#tb_content');
                    };
                    
                    // var trxnum = $('[name="BNKTRX_NUM"]').val();
                    var trxdate = moment($('[name="Budget_DATE"]').val()).format('DD/MM/YY');
                    var trxamount = $('[name="Budget_AMOUNT"]').val();
                    var $tr = $('<tr>').append(
                            $('<td colspan="2">').css({'font-weight':'bold','text-align':'left'}).text('Keterangan :' + info),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        // function pick_bktrxdet(id)
        // {            
        //     //Ajax Load data from ajax
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Finance/ajax_pick_bktrxdet/')?>/" + id,
        //         type: "GET",
        //         dataType: "JSON",
        //         success: function(data)
        //         { 
        //            $('[name="BNKTRX_NUM"]').val(data.BNKTRXO_NUM); 
        //            $('[name="BNKTRX_DATE"]').val(data.BNKTRXO_DATE); 
        //            $('[name="BNKTRX_AMOUNT"]').val(data.BNKTRXO_AMOUNT);
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }
        
        function pick_supp(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_supp/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_suppname"]').text(data.SUPP_NAME);
                    $('[name="bank_suppaddr"]').text(data.SUPP_ADDRESS);
                    $('[name="bank_suppcity"]').text(data.SUPP_CITY);
                    $('[name="bank_suppphone"]').text(data.SUPP_PHONE);
                    // $('[name="inv_custinfo"]').text(data.CUST_OTHERCTC);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_sum_total_ra(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_pick_sum_ra/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="Budget_total"]').val(data.SubTotal);
                    pick_terbilang_total_ra(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_terbilang_total_ra(total)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="Budget_terbilang"]').val(data.terbilang);   
                    // pick_bktrxdet($('[name="bud_id"]').val()); 
                    pick_budgetdet($('[name="Budget_id"]').val());        
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