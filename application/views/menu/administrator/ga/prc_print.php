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
          background: white;
          /*font-size: 10px;*/
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
        /*@media print {
          body, page {
            margin: 0;
            box-shadow: 0;
          }
        }*/
    </style>
    <style>
        .row-content
        {
            margin-top: 10px;
            min-height: 250px;
        }
        .table th
        {
            border: solid 1px black !important;
        }
        .table td
        {
            border: solid 1px black !important;
        }
        .head-font
        {
            font-family:"times new roman";
            font-size: 14px;
        }
        .content-font
        {
            font-family: "Arial";
            font-size: 10px;
        }
        .foot-font
        {
            font-family:"times new roman";
            font-size: 12px;
        }
        .tarea
        {
            border: none;
            overflow: auto;
            outline: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            resize: none;
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
    <!-- <page size="A4">
        <div id="ygdiprint">
            <input type="hidden" name="idprc" value="<?php echo $id;?>">
            <div class="container-fluid">                
                <hr style="border: solid 2px; color: black; margin-top: 0; margin-bottom: 0;">
                <div class="text-center">
                    <h5><strong><u>ORDER PEMBELIAN</u></strong></h5>
                    <h5>No.<span name="no_prc"></span></h5>
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
                            <span name="prc_info"></span>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
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
        </div>
        <button type="button" id="print" class="btn btn-primary col-md-6 col-md-offset-3" data-toggle="modal" onclick="printContent('ygdiprint'); window.location.reload();return false;"><span class="glyphicon glyphicon-print"></span> Print / Save</button>
    </page> -->
    <div class="container">
        <input type="hidden" name="idprc" value="<?php echo $id;?>">
        <div class="row">
            <div class="col-xs-4">
                <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-xs-4 text-center">
                <h3><strong><u>ORDER PEMBELIAN</u></strong></h3>
                <h4><strong>No.<span name="no_prc"></span></strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 head-font">
                <address>
                    <strong>Dari:</strong><br>
                    Match Advertising<br>
                    JL. Lesti No.42, Surabaya 60241<br>
                    Telp. (031) 567 8346 (Hunting)<br>
                    Fax. (031) 568 0646<br>
                    Email : info@match-advertising.com<br>
                    <!-- Website :<br>
                    www.match-advertising.com - www.matchadonline.com -->
                </address>
            </div>
            <div class="col-xs-offset-4 col-xs-4 head-font">
                <address>
                    <strong>Kepada Yth:</strong><br>
                    <span name="inv_suppname"></span><br>
                    <span name="inv_suppaddr"></span>&nbsp;<span name="inv_suppcity"></span><br>
                    <span name="inv_suppphone"></span><br>
                    <span name="inv_suppinfo"></span><br>
                    <span name="prc_info"></span>
                </address>
            </div>
        </div>
        <div class="row row-content content-font">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptpappr" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="col-xs-1 text-center" >No</th>
                            <th class="col-xs-7 text-center">Order</th>
                            <th class="col-xs-2 text-center">Quantity</th>
                            <th class="col-xs-2 text-center">Harga</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                </table>
            </div>
        </div>
        <div class="row foot-font">
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
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
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
        function pick_prc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_prc2/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_id"]').val(data.POGA_ID);
                    $('[name="prc_code"]').val(data.PRCGA_CODE);
                    $('[name="no_prc"]').text(data.PRCGA_CODE);
                    $('[name="prc_info"]').text(data.PRCGA_INFO);
                    $('[name="prc_id"]').val(data.PRCGA_ID);
                    $('[name="supp_id"]').val(data.SUPP_ID);                    
                    var prc_id = data.PRCGA_ID;
                    pick_supp(data.SUPP_ID);
                    pick_prcdet(prc_id);
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
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_supp/')?>" + id,
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
        function pick_prcdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_prcdet2/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-center">'+data[i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center">'+data[i]["PRCGADET_QTY"]+' '+data[i]["GD_MEASURE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data[i]["PRCGADET_SUB"]+'</td>')
                            ).appendTo('#tb_content');
                    }
                    var $tr1 = $('<tr>').append(
                            $('<th colspan="3" class="text-right">Sub Total Rp</th>'),
                            $('<th class="text-right chgnum">'+data[0]["PRCGA_SUB"]+'</th>')
                            ).appendTo('#tb_content');
                    var $tr2 = $('<tr>').append(
                            $('<th colspan="3" class="text-right">Diskon Rp</th>'),
                            $('<th class="text-right chgnum">'+data[0]["PRCGA_DISC"]+'</th>')
                            ).appendTo('#tb_content');
                    var $tr3 = $('<tr>').append(
                            $('<th colspan="3" class="text-right">PPN Rp</th>'),
                            $('<th class="text-right chgnum">'+data[0]["PRCGA_PPN"]+'</th>')
                            ).appendTo('#tb_content');
                    var $tr4 = $('<tr>').append(
                            $('<th colspan="3" class="text-right">Biaya Rp</th>'),
                            $('<th class="text-right chgnum" >'+data[0]["PRCGA_COST"]+'</th>')
                            ).appendTo('#tb_content');
                    var $tr5 = $('<tr>').append(
                            $('<th colspan="3" class="text-right">Total Rp</th>'),
                            $('<th class="text-right chgnum">'+data[0]["PRCGA_GTOTAL"]+'</th>')
                            ).appendTo('#tb_content');
                    $('td.chgnum').number(true);
                    $('th.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <!-- print area -->
    <script type="text/javascript">
    function printContent(printpage){
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr+newstr+footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
    </script>
</body>