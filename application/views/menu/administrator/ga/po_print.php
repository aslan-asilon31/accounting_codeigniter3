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
        body 
        {
          /*background: rgb(204,204,204);*/
          background: white;
          /*font-size: 14px;
          font-family: 'times new roman';*/
        }        
        page 
        {
          background: white;
          display: block;
          margin: 0 auto;
          margin-bottom: 0.5cm;
          box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] 
        {
          width: 21cm;
          height: 14.85cm; 
        }
        page[size="A4"][layout="portrait"] 
        {
          width: 29.7cm;
          height: 21cm;  
        }
        /*@media print 
        {
          body, page 
          {
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
    <div class="container">
        <input type="hidden" name="idpo" value="<?php echo $id;?>">
        <div class="row">
            <div class="col-xs-4">
                <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-xs-4 text-center">
                <h3><strong><u>SURAT ORDER</u></strong></h3>
                <h4><strong>No.<span name="no_po"></span></strong></h4>
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
                    <span name="inv_suppinfo"></span>
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
    <!-- Select Bst -->
    <script src="<?php echo base_url('assets/addons/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
    <!-- Number to Money -->
    <script src="<?php echo base_url('assets/addons/jquery.number.js') ?>"></script>
    <!-- Addon -->
    <script src="<?php echo base_url('assets/addons/extra.js')?>"></script>
    <script>
        var id; var suppid; var prc; var qty; var sub;
        $(document).ready(function()
        {
            id=$('[name="idpo"]').val();            
            prc = 0; qty = 0; sub = 0;
            pick_po(id);
            $('[name=po_qty]').on('input', function() {
                // hitung();
            });
        });

        function pick_po(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_po/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="no_po"]').text(data.POGA_CODE);
                    $('[name="po_info"]').text(data.POGA_INFO);
                    var supp_id = data.SUPP_ID;
                    var poga_id = data.POGA_ID;
                    pick_supp(supp_id);
                    pick_podet(poga_id);
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
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_supp/')?>" + id,
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

        function pick_podet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_podet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-center">'+data[i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center">'+data[i]["PGDET_QTYUNIT"]+' '+data[i]["GD_MEASURE"]+'</td>'),                            
                            $('<td class="text-right chgnum">'+data[i]["PGDET_SUB"]+'</td>')
                            ).appendTo('#tb_content');
                    }
                    var $tr = $('<tr>').append(
                            $('<th colspan="3" class="text-right">Total Rp</th>'),
                            $('<th class="text-right chgnum">'+data[0]["POGA_GTOTAL"]+'</th>')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td colspan="4" class="text-left"><strong>Ket</strong> :<textarea class="tarea form-control" id="teks">'+data[0]["POGA_INFO"]+'</textarea></td>')
                            ).appendTo('#tb_content');
                    $('td.chgnum').number(true);
                    $('th.chgnum').number(true);
                    resizetarea('teks');
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