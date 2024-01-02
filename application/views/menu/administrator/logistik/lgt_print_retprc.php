<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak Retur Pembelian</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form id="form_printpo" method="post" action="#" class="form-horizontal">
                            <div class="form-group">                              
                                <label class="col-sm-3 control-label">Nomor Retur Pembelian</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="retprc_code" readonly>
                                    <input type="hidden" name="retprc_id">
                                    <input type="hidden" name="prc_id">
                                    <input type="hidden" name="po_id">
                                    <input type="hidden" name="supp_id">
                                    <input type="hidden" name="retprcdet_id">
                                    <input type="hidden" name="gd_id">
                                    <input type="hidden" name="appr_id">
                                </div>
                                <div class="col-sm-1">
                                    <a href="javascript:void(0)" onclick="srch_retprc()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
                <div class="row" id="printArea">
                    <hr style="border: solid 2px; color: black;"">
                    <div class="text-center">
                        <h3><strong><u>RETUR PEMBELIAN</u></strong></h3>
                        <h3>No.<span name="no_retprc"></span></h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <address>
                                <strong>Dari:</strong><br>
                                Match Advertising<br>
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
                                <strong>Kepada Yth:</strong><br>
                                <span name="inv_suppname"></span><br>
                                <span name="inv_suppaddr"></span>&nbsp;<span name="inv_suppcity"></span><br>
                                <span name="inv_suppphone"></span><br>
                                <span name="inv_suppinfo"></span>
                            </address>
                        </div>
                        <div class="col-xs-4">
                            <address>
                                <strong>Info:</strong><br> 
                                Lokasi <span name="loc_name"></span>, <span name="loc_det"></span><br>
                                <span name="prc_info"></span>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Order Summary</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="tb_po" class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-1 col-xs-1">No</th>
                                                    <th class="col-sm-7 col-xs-7 text-center">Order</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Quantity</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Harga</th>
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
    <!-- Modal Search -->
    <div class="modal fade" id="modal_po" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_po" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No.Retur</th>
                                        <th>No.BL</th>
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
            id=$('[name="po_id"]').val();            
            prc = 0; qty = 0; sub = 0;

            $('[name=po_qty]').on('input', function() {
                // hitung();
            });
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
                url : "<?php echo site_url('administrator/Logistik/ajax_sub/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_subs"]').val(data.Subtotal);
                    alert(data.Subtotal);               
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function printPre()
        {
            var ids = $('[name=prc_id]').val();
            window.open ( "<?php echo site_url('administrator/Logistik/pageprint_retprc/')?>/"+ids,'_blank');
        }

        function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        function srch_retprc()
        {            
            $('#modal_po').modal('show');
            $('.modal-title').text('Cari Retur Pembelian'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_po').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_retprc')?>",
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

        function pick_retprc(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_retprc/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_id"]').val(data.PO_ID);
                    $('[name="prc_code"]').val(data.PRC_CODE);
                    $('[name="no_retprc"]').text(data.RTPRC_CODE);
                    $('[name="prc_info"]').text(data.RTPRC_INFO);
                    $('[name="prc_id"]').val(data.PRC_ID);
                    pick_po(data.PO_ID);
                    // $('[name="supp_id"]').val(data.SUPP_ID);
                    // $('[name="appr_id"]').val(data.APPR_ID);                    
                    // pick_supp($('[name="supp_id"]').val());
                    pick_retprcdet(data.RTPRC_ID);
                    // pick_appr($('[name="appr_id"]').val());
                    $('#modal_po').modal('hide');
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
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_po/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    $('[name="appr_id"]').val(data.APPR_ID);
                    pick_supp(data.SUPP_ID);
                    pick_appr(data.APPR_ID);
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
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_supp/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_suppname"]').text(data.SUPP_NAME);
                    $('[name="inv_suppaddr"]').text(data.SUPP_ADDRESS);
                    $('[name="inv_suppcity"]').text(data.SUPP_CITY);
                    $('[name="inv_suppphone"]').text(data.SUPP_PHONE);
                    $('[name="inv_suppinfo"]').text(data.SUPP_OTHERCTC);
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
                    $('[name="loc_name"]').text(data.LOC_NAME);
                    $('[name="loc_det"]').text(data.LOC_ADDRESS+', '+data.LOC_CITY);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_retprcdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_retprcdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td>').text(i+1),
                            $('<td>').text(data[i]["GD_NAME"]),
                            $('<td>').css('text-align','center').text(data[i]["RETPRCDET_QTY"]+' '+data[i]["GD_UNIT"]),
                            $('<td>').css('text-align','right').text(data[i]["RETPRCDET_SUB"])
                            ).appendTo('#tb_content');
                    }
                    var $tr1 = $('<tr>').append(
                            $('<td>').css('border-top','2px solid').text(''),
                            $('<td>').css('border-top','2px solid').text(''),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text('Sub Total Rp'),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text(data[0]["RTPRC_SUB"])
                            ).appendTo('#tb_content');
                    var $tr2 = $('<tr>').append(
                            $('<td>').css({'border-bottom':'none','border-top':'none'}).text(''),
                            $('<td>').css({'border-bottom':'none','border-top':'none'}).text(''),
                            $('<td>').css({'border-bottom':'none','border-top':'none','font-weight':'bold','text-align':'right'}).text('Diskon Rp'),
                            $('<td>').css({'border-bottom':'none','border-top':'none','font-weight':'bold','text-align':'right'}).text(data[0]["RTPRC_DISC"])
                            ).appendTo('#tb_content');
                    var $tr3 = $('<tr>').append(
                            $('<td>').css({'border-bottom':'none','border-top':'none'}).text(''),
                            $('<td>').css({'border-bottom':'none','border-top':'none'}).text(''),
                            $('<td>').css({'border-bottom':'none','border-top':'none','font-weight':'bold','text-align':'right'}).text('PPN Rp'),
                            $('<td>').css({'border-bottom':'none','border-top':'none','font-weight':'bold','text-align':'right'}).text(data[0]["RTPRC_PPN"])
                            ).appendTo('#tb_content');
                    var $tr4 = $('<tr>').append(
                            $('<td>').css({'border-bottom':'none','border-top':'none'}).text(''),
                            $('<td>').css({'border-bottom':'none','border-top':'none'}).text(''),
                            $('<td>').css({'border-bottom':'none','border-top':'none','font-weight':'bold','text-align':'right'}).text('Biaya Rp'),
                            $('<td>').css({'border-bottom':'none','border-top':'none','font-weight':'bold','text-align':'right'}).text(data[0]["RTPRC_COST"])
                            ).appendTo('#tb_content');
                    var $tr5 = $('<tr>').append(
                            $('<td>').css({'border-bottom':'none','border-top':'none'}).text(''),
                            $('<td>').css({'border-bottom':'none','border-top':'none'}).text(''),
                            $('<td>').css({'border-bottom':'none','border-top':'none','font-weight':'bold','text-align':'right'}).text('Total Rp'),
                            $('<td>').css({'border-bottom':'none','border-top':'none','font-weight':'bold','text-align':'right'}).text(data[0]["RTPRC_GTOTAL"])
                            ).appendTo('#tb_content');
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
    </script>
</body>
</html>