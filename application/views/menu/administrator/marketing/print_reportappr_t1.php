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
    <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.responsive.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/rowGroup.dataTables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.css')?>" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style type="text/css">
        body 
        {
            background-color: white;
            font-family: 'Times New Roman';
        }
        /*.bg-table
        {
            min-height: 1000px;
        }
        .bt-border
        {
            border-bottom: solid 2px black;
        }
        .border-pay
        {
            border: solid 2px black;
            min-height: 50px;
        }
        tr.group,
        tr.group:hover {
            background-color: #ddd !important;
        }

        tr.subgroup,
        tr.subgroup {
           background-color: cornsilk !important;
        }*/
        .row-start
        {
            display: none;
        }
        .table th
        {
            border: solid 1px black !important;
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            font-size: 16px;
        }
        .table td
        {
            border: solid 1px black !important;
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            font-size: 14px;
        }
        .logos
        {
            padding-top: 10px;
        }

        @media print
        {
            @page
            {
                margin-left: 0px;
                margin-right: 0px;
            }
            h2
            {
                font-size: 20px;
                font-weight: bold;
            }
            h3
            {
                font-size: 18px;
                font-weight: bold;
            }
            h4
            {
                font-size: 16px;
                font-weight: bold;
            }
            .table th
            {
                border: solid 1px black !important;
                margin: 0 !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
                font-size: 16px;
            }
            .table td
            {
                border: solid 1px black !important;
                margin: 0 !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="form_rptappr">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="custid" value="<?php echo $cust; ?>">
            <input type="hidden" name="locid" value="<?php echo $location; ?>">
            <input type="hidden" name="slsid" value="<?php echo $sales; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="rpt_type" value="<?php echo $rpt_type; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-2 col-xs-2">
                <img class="img-responsive logos" src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-8 col-xs-8">
                <h2 class="text-center"><u>LAPORAN <span name="rptappr_type2"></span> APPROVAL BILLBOARD <span name="rptappr_type"></span> </u></h2>
                <h3 class="text-center" name="rptappr_branch"></h3>
                <h4 class="text-center" name="rptappr_period"></h4>
            </div>
        </div>
        <div id="tp1" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptappr_t1" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Approval
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>                            
                            <th class="text-center">
                                Customer
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                Kontrak
                            </th>
                            <th class="text-center">
                                Ijin
                            </th>
                            <th class="text-center">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp1"></tbody>
                </table>
            </div>
        </div>
        <div id="tp2" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptappr_t2" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Approval
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th> 
                            <th class="text-center">
                                Customer
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp2"></tbody>
                </table>
            </div>
        </div>
        <div id="tp3a" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptappr_t3a" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Approval
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th> 
                            <th class="text-center">
                                Customer
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                Invoice
                            </th>
                            <th class="text-center">
                                Sub Invoice
                            </th>
                            <th class="text-center">
                                Nilai Approval
                            </th>
                            <th class="text-center">
                                Sisa
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp3a"></tbody>
                </table>
            </div>
        </div>
        <div id="tp3b" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptappr_t3b" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Cabang
                            </th>
                            <th class="text-center">
                                Approval
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>                            
                            <th class="text-center">
                                Customer
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp3b"></tbody>
                </table>
            </div>
        </div>
        <div id="tp4" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptappr_t4" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Sales
                            </th> 
                            <th class="text-center">
                                Approval
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>                            
                            <th class="text-center">
                                Customer
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                Kontrak
                            </th>
                            <th class="text-center">
                                Ijin
                            </th> 
                            <th class="text-center">
                                Total
                            </th> 
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp4"></tbody>
                </table>
            </div>
        </div>
        <div id="tp5" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptappr_t5" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Cabang
                            </th>
                            <th class="text-center">
                                Kode
                            </th>
                            <th class="text-center">
                                Nama
                            </th> 
                            <th class="text-center">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp5"></tbody>
                </table>
            </div>
        </div>
        <div id="tp6" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptappr_t6" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Approval
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>                            
                            <th class="text-center">
                                Customer
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                No PO
                            </th>
                            <th class="text-center">
                                No BAPP
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp6"></tbody>
                </table>
            </div>
        </div>
        <div id="tp7" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptappr_t7" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Approval
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>                            
                            <th class="text-center">
                                Customer
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                Kontrak
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp7"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php'; ?>
    <script>
        $(document).ready(function()
        {
            check_();
            $('[name="rptappr_period"]').text(moment($('[name="date_start"]').val()).locale('id').format('DD-MMM-YYYY')+' s/d '+moment($('[name="date_end"]').val()).locale('id').format('DD-MMM-YYYY'));
            if($('[name="branch"]').val() != '')
            {
                pick_branch($('[name="branch"]').val());
            }
        });
        function check_()
        {
            var tp = $('[name="rpt_type"]').val();
            if(tp == '1')
            {
                $('#tp1').removeClass('row-start');
                $('[name="rptappr_type"]').text('PER NOMOR');
                gen_tp1(0,'appr_code');
            }
            if(tp == '2')
            {
                $('#tp1').removeClass('row-start');
                $('[name="rptappr_type"]').text('PER LOKASI');
                gen_tp1(3,'loc_id');
            }
            if(tp == '3')
            {
                $('#tp1').removeClass('row-start');
                $('[name="rptappr_type"]').text('PER CUSTOMER');
                gen_tp1(2,'cust_id');
            }
            if(tp == '4')
            {
                $('#tp2').removeClass('row-start');
                $('[name="rptappr_type"]').text('TANPA PO');
                gen_tp2('appr_code');
            }
            if(tp == '5')
            {
                $('#tp3a').removeClass('row-start');
                $('[name="rptappr_type"]').text('SUDAH INVOICE');
                gen_tp3a(0);
            }
            if(tp == '6')
            {
                $('#tp3b').removeClass('row-start');
                $('[name="rptappr_type"]').text('BELUM INVOICE');
                gen_tp3b(0);
            }
            if(tp == '7')
            {
                $('#tp4').removeClass('row-start');
                $('[name="rptappr_type"]').text('PER SALES DETAIL');
                gen_tp4(0);
            }
            if(tp == '8')
            {
                $('#tp5').removeClass('row-start');
                $('[name="rptappr_type"]').text('PER SALES SUMMARY');
                gen_tp5(0);
            }
            if(tp == '9')
            {
                $('#tp6').removeClass('row-start');
                $('[name="rptappr_type"]').text('SUDAH BAPP');
                gen_tp6('null','');
            }
            if(tp == '10')
            {
                $('#tp6').removeClass('row-start');
                $('[name="rptappr_type"]').text('BELUM BAPP');
                gen_tp6('left',5);
            }
            if(tp == '11')
            {
                $('#tp7').removeClass('row-start');
                $('[name="rptappr_type"]').text('');
                $('[name="rptappr_type2"]').text('JATUH TEMPO');
                gen_tp7('appr_code');
            }
        }
        function gen_tp1(v,order)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptappr_t1/')?>"+order,
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_DATE"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CUST_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+' - '+data['a'][i]["LOC_ADDRESS"]+', '+data['a'][i]["LOC_CITY"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_CONTRACT_START"]).locale('id').format('DD-MMMM-YYYY')+' s/d '+moment(data['a'][i]["APPR_CONTRACT_END"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center" name="tdijin'+data['a'][i]["APPR_ID"]+'"></td>'),
                            $('<td class="text-center chgnum">'+data['a'][i]["APPR_TOT_INCOME"]+'</td>')
                            ).appendTo('#tb_content_tp1');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        $('[name="tdijin'+data['b'][i]["appr_id"]+'"]').text(data['b'][i]["ijin"]);
                    }
                    dt_tp1(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp2(order)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptappr_t1/')?>"+order,
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_DATE"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CUST_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+' - '+data['a'][i]["LOC_ADDRESS"]+', '+data['a'][i]["LOC_CITY"]+'</td>')
                            ).appendTo('#tb_content_tp2');
                    }
                    dt_tp2();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp3a(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptappr_t3a')?>",
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var sub = data['a'][i]["sub"];
                        var tot = data['a'][i]["APPR_TOT_INCOME"];
                        var sisa = parseInt(tot) - parseInt(sub);
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_DATE"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CUST_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+' - '+data['a'][i]["LOC_ADDRESS"]+', '+data['a'][i]["LOC_CITY"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["inv"]+'</td>'),
                            $('<td class="text-right chgnum">'+sub+'</td>'),
                            $('<td class="text-right chgnum">'+tot+'</td>'),
                            $('<td class="text-right chgnum">'+sisa+'</td>')
                            ).appendTo('#tb_content_tp3a');
                    }
                    dt_tp3a(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp3b(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptappr_t3b')?>",
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["BRANCH_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_DATE"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CUST_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+' - '+data['a'][i]["LOC_ADDRESS"]+', '+data['a'][i]["LOC_CITY"]+'</td>'),
                            $('<td class="text-center chgnum">'+data['a'][i]["APPR_TOT_INCOME"]+'</td>')
                            ).appendTo('#tb_content_tp3b');
                    }
                    dt_tp3b(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp4(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptappr_t4')?>",
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["SALES_CODE"]+' - '+data['a'][i]["PERSON_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_DATE"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CUST_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+' - '+data['a'][i]["LOC_ADDRESS"]+', '+data['a'][i]["LOC_CITY"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_CONTRACT_START"]).locale('id').format('DD-MMMM-YYYY')+' s/d '+moment(data['a'][i]["APPR_CONTRACT_END"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center" name="tdijin'+data['a'][i]["APPR_ID"]+'"></td>'),
                            $('<td class="text-center chgnum">'+data['a'][i]["APPR_TOT_INCOME"]+'</td>')
                            ).appendTo('#tb_content_tp4');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        $('[name="tdijin'+data['b'][i]["appr_id"]+'"]').text(data['b'][i]["ijin"]);
                    }
                    dt_tp4(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp5(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptappr_t5')?>",
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["BRC"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CODE"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["NAME"]+'</td>'),
                            $('<td class="text-center chgnum">'+data['a'][i]["TOTAL"]+'</td>')
                            ).appendTo('#tb_content_tp5');
                    }
                    dt_tp5(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp6(v1,v2)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptappr_t6/')?>"+v1,
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var po = (data['a'][i]["PO_CODE"] == null) ? '-' : data['a'][i]["PO_CODE"];
                        var bapp = (data['a'][i]["BAPP_CODE"] == null) ? '-' : data['a'][i]["BAPP_CODE"];
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_DATE"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CUST_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+' - '+data['a'][i]["LOC_ADDRESS"]+', '+data['a'][i]["LOC_CITY"]+'</td>'),
                            $('<td class="text-center">'+po+'</td>'),
                            $('<td class="text-center">'+bapp+'</td>')
                            ).appendTo('#tb_content_tp6');
                    }
                    dt_tp6(v2);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp7(order)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptappr_t1/')?>"+order,
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_DATE"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CUST_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+' - '+data['a'][i]["LOC_ADDRESS"]+', '+data['a'][i]["LOC_CITY"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_CONTRACT_START"]).locale('id').format('DD-MMMM-YYYY')+' s/d '+moment(data['a'][i]["APPR_CONTRACT_END"]).locale('id').format('DD-MMMM-YYYY')+'</td>'),
                            ).appendTo('#tb_content_tp7');
                    }
                    dt_tp7();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function tes()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/gen_balancesheet')?>",
                type: "POST",
                data: $('#form_trbal').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var slc = (data['a'][i]["saldo"] < 0)? 0 : data['a'][i]["saldo"];
                        var sld = (data['a'][i]["saldo"] < 0)? Math.abs(data['a'][i]["saldo"]) : 0;
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["PAR_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),
                            // $('<td name="debet'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">0</td>'),
                            // $('<td name="credit'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">'+data['a'][i]["saldo"]+'</td>')
                            $('<td name="debet'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">'+sld+'</td>'),
                            $('<td name="credit'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">'+slc+'</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        var sld = (data['b'][i]["saldo"] < 0)? 0 : data['b'][i]["saldo"];
                        var slc = (data['b'][i]["saldo"] < 0)? Math.abs(data['b'][i]["saldo"]) : 0;
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['b'][i]["PAR_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COA_ACC"]+' - '+data['b'][i]["COA_ACCNAME"]+'</td>'),
                            // $('<td name="debet'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">'+data['b'][i]["saldo"]+'</td>'),
                            // $('<td name="credit'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">0</td>')
                            $('<td name="debet'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">'+sld+'</td>'),
                            $('<td name="credit'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">'+slc+'</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_journal2();
                    $('td.chgnum').number(true);                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function dt_tp1(v)
        {
            $('#dtb_rptappr_t1').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    dataSrc: v
                },
            });
        }
        function dt_tp2()
        {
            $('#dtb_rptappr_t2').DataTable({
                info: false,
                searching: false,                
                bLengthChange: false,
                paging: false,
                // responsive: true,
                columnDefs:
                [
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                ordering: false
            });
        }
        function dt_tp3a(v)
        {
            $('#dtb_rptappr_t3a').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    dataSrc: v
                },
            });
        }
        function dt_tp3b(v)
        {
            $('#dtb_rptappr_t3b').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(5)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                            // return a+b*1;
                        }, 0);
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        return $('<tr/>')                        
                        .append( '<td colspan="4" class="text-right">Total</td>' )
                        .append( '<td class="text-right">'+sum+'</td>');
                    },
                    dataSrc: v
                },
            });
        }
        function dt_tp4(v)
        {
            $('#dtb_rptappr_t4').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    dataSrc: v
                },
            });
        }
        function dt_tp5(v)
        {
            $('#dtb_rptappr_t5').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    dataSrc: v
                },
            });
        }
        function dt_tp6(v)
        {
            $('#dtb_rptappr_t6').DataTable({
                info: false,
                searching: false,                
                bLengthChange: false,
                paging: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},
                    {orderable: false, targets: '_all'}            
                ],
                // order: [[0, 'asc']],
                ordering: false
            });
        }
        function dt_tp7()
        {
            $('#dtb_rptappr_t7').DataTable({
                info: false,
                searching: false,                
                bLengthChange: false,
                paging: false,
                // responsive: true,
                columnDefs:
                [
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                ordering: false
            });
        }
        function dt_journal()
        {
            $('#dtb_rptbalsh').DataTable({
                info: false,
                searching: false,                
                bLengthChange: false,
                paging: false,
                // responsive: true,
                columnDefs:
                [   
                    // {visible: false, targets: 7},
                    // {visible: false, targets: 8},
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                ordering: false,
                drawCallback: function(settings)
                {
                    var api = this.api(), data;
                    total = api.column(2).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);
                    total2 = api.column(3).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);
                    total3 = Math.abs(total2) - total;
                    (total3 > 0) ? txt = 'LABA' : txt = 'RUGI';
                    sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total);
                    sum2 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(Math.abs(total2));
                    sum3 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(Math.abs(total3));
                    $('[name="saldodebit"]').text(sum);
                    $('[name="saldocredit"]').text(sum2);
                    $('[name="saldostatus"]').text(txt);
                    $('[name="saldoend"]').text(sum3);
                }
            });
        }
        function dt_journal2()
        {
            $('#dtb_rptbalsh').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: 0},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(2)
                        .reduce(function(a,b)
                        {
                            // return a+b.replace(/[^\d]/g, '')*1;
                            return a+b*1;
                        }, 0);
                        
                        var sum2 = rows.data().pluck(3)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);

                        // var sum3 = sum+sum2;
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        sum2 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum2);
                        // sum3 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum3);

                        return $('<tr/>')                        
                        .append( '<td>'+group+'</td>' )
                        .append( '<td class="text-right">'+sum+'</td>')
                        .append( '<td class="text-right">'+sum2+'</td>' );
                    },
                    dataSrc: 0
                },
                drawCallback: function(settings)
                {
                    var api = this.api(), data;
                    total = api.column(2).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);
                    total2 = api.column(3).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);
                    total3 = Math.abs(total2) - total;
                    (total3 > 0) ? txt = 'LABA' : txt = 'RUGI';
                    sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total);
                    sum2 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(Math.abs(total2));
                    sum3 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(Math.abs(total3));
                    $('[name="saldodebit"]').text(sum);
                    $('[name="saldocredit"]').text(sum2);
                    $('[name="saldostatus"]').text(txt);
                    $('[name="saldoend"]').text(sum3);
                }
            });
        }
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="rptappr_branch"]').text(data.BRANCH_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })
        }
    </script>
</body>
</html>