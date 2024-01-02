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
    <style>
        body
        {
            background: white;
            font-size: 13px;
        }
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
            min-height: 560px;
        }
        .row-bd-bottom
        {
            border-bottom: solid 2px black;
        }
        .row-tb-cont
        {
            margin-top: 10px;
            min-height: 400px;
        }
        .lb-margin
        {
            margin-left: 10px;
        }
        .table th
        {
            border: solid 1px black !important;
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .table td
        {
            border: solid 1px black !important;
            font-size: 12px;
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .form-group
        {
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        @media print
        {
            body
            {
                font-size: 11px;
            }
            h3
            {
                font-size: 13px;
            }
            .logo
            {
                width: 60%;
                height: auto;
            }
            .table td
            {
                font-size: 10px;
            }
            .con-prime
            {
                min-height: 410px;
            }
            .row-tb-cont
            {
                margin-top: 10px;
                min-height: 250px;
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
    <div class="container">
        <div class="col-xs-6">
            <img class="logo" src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
        </div> 
    </div>
    <div class="container con-prime">
        <div class="row row-bd-bottom">
            <div class="col-xs-12 text-center">
                <h3><strong>FORM PENGAJUAN PERMINTAAN BARANG MATCHAD</strong></h3>
            </div>
        </div>
        <div class="row row-bd-bottom">
            <form class="form-horizontal">
                <input type="hidden" name="idusg" value="<?php echo $id;?>">
                <div class="form-group">
                    <label class="col-xs-2 lb-margin">NAMA</label>
                    <div class="col-xs-4">
                        <b>: </b><span name="pr-usg-info"></span>
                    </div>
                    <label class="col-xs-2">NOMOR</label>
                    <div class="col-xs-3">
                        <b>: </b><span name="pr-usg-code"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 lb-margin">PROYEK</label>
                    <div class="col-xs-4">
                        <b>: </b><span name="pr-usg-prj"></span>
                    </div>
                    <label class="col-xs-2">TANGGAL</label>
                    <div class="col-xs-3">
                        <b>: </b><span name="pr-usg-date"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="row row-tb-cont">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptpappr" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Barang</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Quantity</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptpappr" class="table table-bordered" cellspacing="0" width="100%">
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
            pick_usg($('[name="idusg"]').val());
            pick_usgdet($('[name="idusg"]').val());
        });

        function pick_usg(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_usage/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var appr = (data.APPR_CODE == null) ?  '-' : data.APPR_CODE;
                    var loc = (data.LOC_NAME == null) ? '-' : data.LOC_NAME;
                    $('[name="pr-usg-code"]').text(data.USG_CODE);
                    $('[name="pr-usg-info"]').text(data.USG_INFO);
                    $('[name="pr-usg-date"]').text(moment(data.USG_DATE).format('DD-MMM-YYYY'));
                    $('[name="pr-usg-prj"]').text(appr+', '+loc);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_usgdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_usgdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-center">'+data[i]['GD_CODE']+'</td>'),
                            $('<td class="text-center">'+data[i]['GD_NAME']+'</td>'),
                            $('<td class="text-center chgnum">'+data[i]["USGDET_QTY"]+' '+data[i]["GD_MEASURE"]+'</td>')
                            ).appendTo('#tb_content');
                    }                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_appr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_appr/')?>" + id,
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
        function pick_loc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_loc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="loc_name"]').val(data.LOC_NAME);
                    $('[name="loc_det"]').text(data.LOC_ADDRESS+', '+data.LOC_CITY);
                    $('#modal_loc').modal('hide');
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