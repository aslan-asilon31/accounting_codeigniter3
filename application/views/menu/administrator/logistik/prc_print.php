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
        }
        .row-content
        {
            margin-top: 10px;
            min-height: 320px;
            margin-top: -10px !important;
            margin-bottom: -10px !important;
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
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .head-font
        {
            font-family:"times new roman";
            font-size: 18px;
        }
        .content-font
        {
            font-family: "Arial";
            font-size: 12px;
        }
        .foot-font
        {
            font-family:"times new roman";
            font-size: 16px;
        }
        .col-foot
        {
            min-height: 30px;
        }

        @media print
        {
            h3, h4 
            {
                font-size: 14px;
            }
            .logo
            {
                width: 60%;
                height: auto;
            }
            .row-content
            {
                min-height: 205px;
                margin-top: -10px !important;
                margin-bottom: -10px !important;
            }
            .head-font
            {
                font-family:"times new roman";
                font-size: 12px;
            }
            .content-font
            {
                font-family: "times new roman";
                font-size: 12px;
            }
            .foot-font
            {
                font-family:"times new roman";
                font-size: 10px;
            }
            .col-foot
            {
                min-height: 20px;
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
        <input type="hidden" name="idprc" value="<?php echo $id;?>">
        <div class="row">
            <div class="col-xs-4">
                <img id="img_logo" class="img-responsive logo" src="">
            </div>
            <div class="col-xs-4 text-center">
                <h3><strong><u>ORDER PEMBELIAN</u></strong></h3>
                <h4><strong>No.<span name="no_prc"></span></strong></h4>
            </div>
        </div>
        <div class="row" style="padding-bottom: 2px;">
            <div class="col-xs-4 head-font">
                <strong>Dari:</strong><br>
                Match Advertising<br>
                JL. Lesti No.42, Surabaya 60241<br>
                Telp. (031) 567 8346 (Hunting)<br>
                Fax. (031) 568 0646<br>
                Email : info@match-advertising.com
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
            <!-- <div class="col-xs-4 head-font">
                <address>
                    <strong>Info:</strong><br> 
                    Lokasi <br><span name="loc_name"></span>, <span name="loc_det"></span><br>
                    <span name="prc_info"></span>
                </address>
            </div> -->
        </div>
        <div class="row" style="padding-top: 2px;">
            <div class="col-xs-3">
                <span>No PO : </span><span name="po_codes">PO/1811/000001</span>
            </div>
            <div class="col-xs-3">
                <span>No Approval : </span><span name="appr_codes">AB/1811/000001</span>
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
                    <tfoot id="tb_foot"></tfoot>
                </table>
            </div>
        </div>
        <div class="row foot-font">
            <div class="col-xs-3 text-center col-foot">
                Pemesan
            </div>
            <div class="col-xs-3 text-center col-foot">
                Mengetahui
            </div>
            <div class="col-xs-3 text-center col-foot">
                Penerima
            </div>
            <div class="col-xs-3 text-center">
                Surabaya, <?php echo date('d-M-Y')?>
            </div>
        </div>
        <br>
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
        <div class="row foot-font">
            <div class="col-xs-12 text-left">
                <strong>Surat Order Asli HARUS dilampirkan saat penagihan</strong>
            </div>
        </div>
        <div class="row foot-font">
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
            pick_branch("<?= $this->session->userdata('user_branch')?>");
            pick_prc(id);
        });
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var newSrc = "<?php echo base_url()?>/assets/img/branchlogo/"+data.BRANCH_LOGO;
                    $('#img_logo').attr('src', newSrc);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })
        }
        function pick_prc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_prc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_id"]').val(data.PO_ID);
                    $('[name="prc_code"]').val(data.PRC_CODE);
                    $('[name="no_prc"]').text(data.PRC_CODE);
                    // $('[name="prc_info"]').text(data.PRC_INFO);
                    $('[name="prc_id"]').val(data.PRC_ID);
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    $('[name="appr_id"]').val(data.APPR_ID);
                    var appr_id = data.APPR_ID;
                    var prc_id = data.PRC_ID;
                    pick_supp(data.SUPP_ID);
                    pick_prcdet(prc_id);
                    pick_loc(data.LOC_ID);
                    if(appr_id != null)
                    {
                        pick_appr(appr_id);
                    }
                    $('[name="po_codes"]').text(data.PO_CODE);
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
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_prcdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-left text-uppercase">'+data[i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center">'+data[i]["PRCDET_QTY"]+' '+data[i]["GD_MEASURE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data[i]["PRCDET_SUB"]+'</td>')
                            ).appendTo('#tb_content');
                    }
                    if (data.length > 5)
                    {
                        var $trexp1 = $('<tr>').append(
                            $('<th rowspan="3" colspan="2">'+'Lokasi<br><span name="loc_name"></span>,<span name="loc_det"></span><br><span name="prc_info">'+data[0]["PRC_INFO"]+'</span>'+'</th>'),
                            $('<th  class="text-right">Sub Total Rp</th>'),
                            $('<th class="text-right chgnum">'+data[0]["PRC_SUB"]+'</th>')
                            ).appendTo('#tb_foot');
                        var $trexp2 = $('<tr>').append(
                            $('<th  class="text-right">(Diskon,PPN,Biaya) Rp</th>'),
                            $('<th class="text-right chgnum">'+(Math.abs(data[0]["PRC_DISC"])-Math.abs(data[0]["PRC_PPN"])+Math.abs(data[0]["PRC_COST"]))+'</th>')
                            ).appendTo('#tb_foot');
                        var $trexp3 = $('<tr>').append(
                            $('<th  class="text-right">Grand Total Rp</th>'),
                            $('<th class="text-right chgnum">'+data[0]["PRC_GTOTAL"]+'</th>')
                            ).appendTo('#tb_foot');
                    }
                    else
                    {
                        var $tr1 = $('<tr>').append(
                            $('<th rowspan="5" colspan="2">'+'Lokasi<br><span name="loc_name"></span>,<span name="loc_det"></span><br><span name="prc_info">'+data[0]["PRC_INFO"]+'</span>'+'</th>'),
                            $('<th  class="text-right">Sub Total Rp</th>'),
                            $('<th class="text-right chgnum">'+data[0]["PRC_SUB"]+'</th>')
                            ).appendTo('#tb_foot');
                        var $tr2 = $('<tr>').append(
                                $('<th  class="text-right">Diskon Rp</th>'),
                                $('<th class="text-right chgnum">'+data[0]["PRC_DISC"]+'</th>')
                                ).appendTo('#tb_foot');
                        var $tr3 = $('<tr>').append(
                                $('<th  class="text-right">PPN Rp</th>'),
                                $('<th class="text-right chgnum">'+data[0]["PRC_PPN"]+'</th>')
                                ).appendTo('#tb_foot');
                        var $tr4 = $('<tr>').append(
                                $('<th  class="text-right">Biaya Rp</th>'),
                                $('<th class="text-right chgnum">'+data[0]["PRC_COST"]+'</th>')
                                ).appendTo('#tb_foot');
                        var $tr5 = $('<tr>').append(
                                $('<th  class="text-right">Grand Total Rp</th>'),
                                $('<th class="text-right chgnum">'+data[0]["PRC_GTOTAL"]+'</th>')
                                ).appendTo('#tb_foot');
                    }
                    $('td.chgnum').number(true);
                    $('th.chgnum').number(true);
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
                    $('[name="appr_codes"]').text(data.APPR_CODE);
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
</body>