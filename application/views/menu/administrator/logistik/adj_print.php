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
          /*background: rgb(204,204,204);*/
          background: white;
          font-size: 13px;
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
        .print-body
        {
            min-height: 560px;
        }
        .con-border
        {
            border: solid 2px black;
            min-height: 560px;
        }
        .row-border
        {
            border-bottom: solid 2px black;
        }
        .row-table
        {
            min-height: 300px;
        }
        .con-prime
        {
            border: solid 2px black;
        }
        .row-bd-bottom
        {
            border-bottom: solid 2px black;
        }
        .row-tb-cont
        {
            margin-top: 10px;
            min-height: 200px;
        }
        .lb-margin
        {
            margin-left: 10px;
        }
        .table th
        {
            border: solid 2px black !important;
        }
        .table td
        {
            border: solid 2px black !important;
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
        <div class="col-xs-6">
            <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
        </div>        
    </div>
    <div class="container con-prime">
        <div class="row row-bd-bottom">
            <div class="col-xs-12 text-center">
                <h3><strong>FORM PENYESUAIAN BARANG MATCHAD</strong></h3>
            </div>
        </div>
        <div class="row row-bd-bottom">
            <form class="form-horizontal">
                <input type="hidden" name="idadj" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label class="col-xs-2 lb-margin">NOMOR</label>
                    <div class="col-xs-9">
                        <b>: </b><span name="pr-adj-code"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 lb-margin">TANGGAL</label>
                    <div class="col-xs-9">
                        <b>: </b><span name="pr-adj-date"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 lb-margin">KETERANGAN</label>
                    <div class="col-xs-9">
                        <b>: </b><span name="pr-adj-info"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="row row-tb-cont">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_pradj" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">Kode Barang</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Stock Awal</th>
                            <th class="text-center">Stock Opname</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">PEMOHON</th>
                            <th class="text-center">KEPALA WORKSHOP</th>
                            <th class="text-center">PLT WORKSHOP</th>
                            <th class="text-center">PURCHASING</th>
                            <th class="text-center">PRODUKSI</th>
                            <th class="text-center">FINANCE</th>
                            <th class="text-center">GENERAL MANAGER</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><br><br></th>
                            <th><br><br></th>
                            <th><br><br></th>
                            <th><br><br></th>
                            <th><br><br></th>
                            <th><br><br></th>
                            <th><br><br></th>
                        </tr>
                    </tbody>
                </table>
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
    <!-- Number to Money -->
    <script src="<?php echo base_url('assets/addons/jquery.number.js') ?>"></script>
    <script>        
        $(document).ready(function()
        {
            pick_adj($('[name="idadj"]').val());
        });

        function pick_adj(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_adj/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="pr-adj-code"]').text(data.ADJ_CODE);
                    $('[name="pr-adj-info"]').text(data.ADJ_INFO);
                    $('[name="pr-adj-date"]').text(moment(data.ADJ_DATE).format('DD-MMM-YYYY'));
                    var $tr = $('<tr>').append(                            
                            $('<td class="text-center">'+data.GD_CODE+'</td>'),
                            $('<td class="text-center">'+data.GD_NAME+'</td>'),
                            $('<td class="text-center">'+data.ADJ_OLDQTY+' '+data.GD_MEASURE+'</td>'),
                            $('<td class="text-center">'+data.ADJ_CURQTY+' '+data.GD_MEASURE+'</td>')
                            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_adjdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_adjdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    for (var i = 0; i < data.length; i++) {
                        var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-center">'+data[i]['GD_CODE']+'</td>'),
                            $('<td class="text-center">'+data[i]['GD_NAME']+'</td>'),
                            $('<td class="text-center chgnum">'+data[i]["USGGADET_QTY"]+' '+data[i]["GD_MEASURE"]+'</td>')
                            ).appendTo('#tb_content');
                    }                    
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
        function printContent(printpage)
        {
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