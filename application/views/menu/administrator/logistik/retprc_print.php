<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Project Match Terpadu" content="Match Terpadu">
    <meta name="Author" content="Kaisha Satrio">
    <title><?php echo $title;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">   
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.css')?>" rel="stylesheet">
    <!-- sbadmin -->
    <link href="<?php echo base_url('assets/sbadmin/css/sb-admin-2.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.responsive.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.css')?>" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style type="text/css">
        body {
          background: rgb(204,204,204);
          font-size: 10px;
        }        
        page {          
          background: white;
          display: block;
          margin: 0 auto;
          margin-bottom: 0.5cm;
          box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] {  
          width: 21cm;
          height: 14.85cm; 
        }
        page[size="A4"][layout="portrait"] {
          width: 29.7cm;
          height: 21cm;  
        }
        @media print {
          body, page {
            margin: 0;
            box-shadow: 0;
          }
        }
    </style> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <page size="A4">
        <input type="hidden" name="idprc" value="<?php echo $id;?>">
        <div class="container-fluid">                
            <hr style="border: solid 2px; color: black; margin-top: 0; margin-bottom: 0;">
            <div class="text-center">
                <h5><strong><u>RETUR PEMBELIAN</u></strong></h5>
                <h5>No.<span name="no_retprc"></span></h5>
            </div>
            <div class="row">
                <div class="col-xs-5">
                    <address>
                        <strong>Dari:</strong><br>
                        Match Advertising<br>
                        JL. Lesti No.42, Surabaya 60241<br>
                        Telp. (031) 567 8346 (Hunting)<br>
                        Fax. (031) 568 0646<br>
                        Email : info@match-advertising.com<br>
                        Website :
                        www.match-advertising.com www.matchadonline.com
                    </address>
                </div>
                <div class="col-xs-3">
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
                        Lokasi <br><span name="loc_name"></span>, <span name="loc_det"></span><br>
                        <span name="prc_info"></span>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            <h5 class="panel-title"><strong>Order Summary</strong></h5>
                        </div> -->
                        <div class="panel-body">
                            <!-- <div class="col-sm-12 col-xs-12 table-responsive">
                                <table id="dtb_po" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Order</th>
                                            <th>Quantity</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div> -->
                            <div class="table-responsive">
                                <table id="tb_po" class="table table-condensed">
                                    <thead style="font-size: 9px">
                                        <tr>
                                            <th class="col-sm-1 col-xs-1" >No</th>
                                            <th class="col-sm-7 col-xs-7 text-center">Order</th>
                                            <th class="col-sm-2 col-xs-2 text-center">Quantity</th>
                                            <th class="col-sm-2 col-xs-2 text-center">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tb_content" style="font-size: 9px">
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 text-center">
                                    Pemesan
                                </div>
                                <div class="col-xs-3 text-center">
                                    Mengetahui
                                </div>
                                <div class="col-xs-3 text-center">
                                    Penerima
                                </div>
                                <div class="col-xs-3 text-center">
                                    Surabaya, <?php echo date('d-M-Y')?>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-xs-3 text-center">
                                    (.................)
                                </div>
                                <div class="col-xs-3 text-center">
                                    (.................)
                                </div>
                                <div class="col-xs-3 text-center">
                                    (.................)
                                </div>
                                <div class="col-xs-3 text-center">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <strong>Surat Order Asli HARUS dilampirkan saat penagihan</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    CC : Lembar 1: Supplier; Lembar 2: Accounting; Lembar 3: Direksi; Lembar 4: Purchasing
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </page>
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
            id=$('[name="idprc"]').val();            
            prc = 0; qty = 0; sub = 0;
            pick_prc(id);
            $('[name=po_qty]').on('input', function() {
                // hitung();
            });
        });

        function dtable()
        {
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
                    "url": "<?php echo site_url('administrator/Logistik/ajax_printpo')?>",
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
                    pick_retprcdet(data.RTPRC_ID);
                    $('#modal_po').modal('hide');
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
    </script>
</body>