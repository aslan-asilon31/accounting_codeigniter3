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
    <link href="<?php echo base_url('assets/datatables/css/responsive.dataTables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.css')?>" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> -->
    <!-- <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet"> -->
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
            min-height: 320px;
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
            font-size: 15px;
        }
        .foot-font
        {
            font-family:"times new roman";
            font-size: 16px;
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
                min-height: 200px;
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
                <img id="img_logo" class="img-responsive logo" src="">
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
                            <th class="col-xs-1 text-center">No</th>
                            <th class="col-xs-7 text-center">Order</th>
                            <th class="col-xs-2 text-center">Quantity</th>
                            <th class="col-xs-2 text-center">Harga</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                    <tfoot id="tb_foot">
                        <tr>
                            <th colspan="2">
                                Lokasi : <span name="loc_name"></span>, <span name="loc_det"></span><br>
                                <span name="po_info"></span>
                            </th>
                            <th class="text-right">Total</th>
                            <th class="text-right chgnum" name="gt"></th>
                        </tr>
                    </tfoot>
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
                Surabaya, <span name="podate"></span>
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
        <div class="row foot-font">
            <div class="col-xs-5 text-left" style="border: solid 1px black;">
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
            id=$('[name="idpo"]').val();            
            prc = 0; qty = 0; sub = 0;
            pick_branch("<?= $this->session->userdata('user_branch')?>");
            pick_po(id);
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
        function dtable()
        {
            table = $('#dtb_po').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_printpo')?>",
                    "type": "POST",                
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_po(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_po/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="po_id"]').val(data.PO_ID);
                    $('[name="po_code"]').val(data.PO_CODE);
                    $('[name="no_po"]').text(data.PO_CODE);
                    $('[name="podate"]').text(moment(data.PO_DATE).locale('id').format('DD-MMM-YYYY'));
                    $('[name="po_info"]').text(data.PO_INFO);
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    var appr_id = data.APPR_ID;
                    var po_id = data.PO_ID;
                    pick_supp(data.SUPP_ID);
                    pick_podet(po_id);
                    pick_loc(data.LOC_ID);
                    if(appr_id != null)
                    {
                        pick_appr(appr_id);
                    }                    
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
                    // $('[name="inv_suppdue"]').text(data.SUPP_DUE);
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
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_podet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    for (var i = 0; i < data.length; i++)
                    {
                      var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-center text-uppercase">'+data[i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center">'+data[i]["PODET_QTYUNIT"]+' '+data[i]["GD_MEASURE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data[i]["PODET_SUB"]+'</td>')
                            ).appendTo('#tb_content');
                    }
                    $('[name="gt"]').text(data[0]["PO_GTOTAL"]);
                    // var $tr = $('<tr>').append(
                    //         $('<th colspan="3" class="text-right">Total Rp </th>'),
                    //         $('<th class="text-right chgnum">'+data[0]["PO_GTOTAL"]+'</th>')
                    //         ).appendTo('#tb_content');
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