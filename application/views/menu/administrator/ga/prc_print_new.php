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
        .purchase
        {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 0px;
            font-family: Times New Roman;
        }
        .purchase header
        {
            padding: 0px 0px 0px 0px;
            margin-bottom: 0px;
            border-bottom: 1px solid #3989c6;
        }
        .purchase header img
        {
            max-width: 200px;
            margin-top: 0;
            margin-bottom: 0;
        }
        .purchase .company-details
        {
            text-align: right;
            margin-top: 0;
            margin-bottom: 0;
        }
        .purchase main
        {
            padding: 0px 0px 0px 0px;
            margin-bottom: 0px;
        }
        .purchase .to-details
        {
            text-align: left;
        }
        .purchase .to-name
        {
            font-weight: bold;
        }
        .purchase .to-name .to-address .to-city
        {
            margin-top: 0;
            margin-bottom: 0;
        }
        .purchase .purchase-reff
        {
            text-align: center;
        }        
        .purchase .purchase-info
        {
            text-align: right;
        }
        .purchase-info .reff-content
        {
            margin-top: 0;
            margin-bottom: 0;
        }
        .purchase-info .info-code
        {
            font-weight: bold;
        }
        .purchase-info .info-code .info-date
        {
            margin-top: 0;
            margin-bottom: 0;
        }
        .table thead th
        {
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            border: solid 1px black !important;
        }
        .table tfoot th
        {
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            border: solid 1px black !important;
        }
        .table .notice-row
        {
            height: 61px !important;
        }
        .table td
        {
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            border-top: none !important;
            border-bottom: none !important;
            border-left: solid 1px black !important;
            border-right: solid 1px black !important;            
        }
        .table .blank-row
        {
            height: 25px !important;
            background-color: #FFFFFF;
            border: none;
        }
        .purchase .loc-info .loc-notice
        {
            margin-top: 0;
            margin-bottom: 0;
        }
        footer
        {
            padding-top: -1000px;
        }
        footer .signature
        {
            padding-top: 20px;
            text-align: center;
        }
        footer .foot-notice
        {
            margin-top: 0;
            margin-bottom: 0;
        }
        @media print
        {
            .hidden-print
            {
                display: none;
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
    <div class="container hidden-print">
        <div class="row">
            <div class="col-sm-2 col-xs-3">
                <button class="btn btn-block btn-primary" type="button" onclick="printDiv()">Print</button>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="form-group">
                    <label>Lokasi Project</label>
                    <label class="radio-inline">
                        <input type="radio" name="showRadio" id="showRadio1" value="option1" onclick="checkRadio()" checked>Tampil
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="showRadio" id="showRadio2" value="option2" onclick="checkRadio()">Sembunyi
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="container purchase" id="purchase-div">
        <header>
            <div class="row">
                <div class="col-sm-3 col-xs-3">
                    <img id="img_logo" class="img-responsive" src="">
                </div>
                <div class="col-sm-9 col-xs-9 company-details">
                    <div><span name="comp-address"></span></div>
                    <div>Phone <span name="comp-phone"></span></div>
                    <div>Fax <span name="comp-fax"></span></div>
                </div>
            </div>
        </header>
        <main>
            <div class="row">
                <div class="col-sm-4 col-xs-4 to-details">
                    <div>DITUJUKAN UNTUK :</div>
                    <div class="to-name" name="inv_suppname"></div>
                    <div class="to-address"><span name="inv_suppaddr"></span></div>
                </div>
                <div class="col-sm-8 col-xs-8 purchase-info">
                    <h4 class="info-code" name="prc-code"></h4>
                    <div class="reff-content"><span name="po-code" style="margin-right: 10px;"></span> Tgl. BL : <span name="prc-date"></span></div>
                    <div class="info-date"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12 table-responsive">
                    <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center col-xs-1 col-sm-1">#</th>
                                <th class="text-center col-xs-7 col-sm-7">Deskripsi</th>
                                <th class="text-center col-xs-2 col-sm-2">Qty</th>
                                <th class="text-center col-xs-2 col-sm-2">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody id="tb_content"></tbody>
                        <tfoot id="tb_foot">
                            <tr>
                                <th rowspan="4" colspan="2">
                                    <div class="loc-notice">Notice : <span name="prc_info"></span></div>
                                </th>
                                <th class="text-right">Diskon Rp</th>
                                <th class="text-right chgnum" name="prc_disc"></th>
                            </tr>
                            <tr>
                                <th class="text-right">PPN Rp</th>
                                <th class="text-right chgnum" name="prc_tax"></th>
                            </tr>
                            <tr>
                                <th class="text-right">Biaya Rp</th>
                                <th class="text-right chgnum" name="prc_cost"></th>
                            </tr>
                            <tr>
                                <th class="text-right">Total Rp</th>
                                <th class="text-right chgnum" name="prc_gt"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </main>
        <footer>
            <div class="row text-center">
                <div class="col-xs-3 col-sm-3">
                    <div>Pemesan</div>
                </div>
                <div class="col-xs-3 col-sm-3">
                    <div>Mengetahui</div>
                </div>
                <div class="col-xs-3 col-sm-3">
                    <div>Penerima</div>
                </div>
                <div class="col-xs-3 col-sm-3">
                    Surabaya, <span name="prc_print_date"></span>
                </div>
            </div>
            <div class="row signature">
                <div class="col-xs-3 col-sm-3">
                    <div>(................)</div>
                </div>
                <div class="col-xs-3 col-sm-3">
                    <div>(................)</div>
                </div>
                <div class="col-xs-3 col-sm-3">
                    <div>(................)</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 text-center">
                    <div class="foot-notice"><strong>Surat Order Asli HARUS dilampirkan saat penagihan</strong></div>
                    <div class="foot-notice">CC : Lembar 1: Supplier; Lembar 2: Accounting; Lembar 3: Direksi; Lembar 4: Purchasing</div>
                </div>                
            </div>
        </footer>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            var suppid; var prc; var qty; var sub;
            var id=<?= $id ;?>;            
            prc = 0; qty = 0; sub = 0;
            pick_branch("<?= $this->session->userdata('user_branch')?>");
            pick_prc(id);
            checkRadio();
        });
        function checkRadio()
        {
            if($('#showRadio2').is(':checked'))
            {
                $('[name="loc-info"]').css({'display':'none'});
            }
            if($('#showRadio1').is(':checked'))
            {
                $('[name="loc-info"]').css({'display':'block'});
            }
        }
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
                    $('[name="comp-address"]').text(data.BRANCH_ADDRESS+', '+data.BRANCH_CITY);
                    $('[name="comp-phone"]').text(data.BRANCH_PHONE);
                    $('[name="comp-fax"]').text(data.BRANCH_FAX);
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
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_prc2/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="prc-code"]').text(data.PRCGA_CODE);
                    $('[name="prc-date"]').text(moment(data.PRCGA_DATE).locale('id').format('DD-MMM-YYYY'));
                    $('[name="prc_print_date"]').text(moment(data.PRCGA_DATE).locale('id').format('DD-MMM-YYYY'));
                    $('[name="prc_id"]').val(data.PRCGA_ID);
                    $('[name="prc_info"]').text(data.PRCGA_INFO);
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    pick_supp(data.SUPP_ID);
                    pick_prcdet(data.PRCGA_ID);
                    $('[name="po-code"]').text(data.POGA_CODE);
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
                    $('[name="inv_suppaddr"]').text(data.SUPP_ADDRESS+', '+data.SUPP_CITY);
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
                    var blankrow = 8-data.length;
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td class="text-center">'+(i+1)+'</td>'),
                            $('<td class="text-left text-uppercase">'+data[i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center">'+data[i]["PRCGADET_QTY"]+' '+data[i]["GD_MEASURE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data[i]["PRCGADET_SUB"]+'</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var j = 0; j < blankrow; j++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td class="blank-row"></td>'),
                            $('<td></td>'),$('<td></td>'),$('<td></td>')
                            ).appendTo('#tb_content');
                    }
                    $('[name="prc_disc"]').text(data[0]["PRCGA_DISC"]);
                    $('[name="prc_tax"]').text(data[0]["PRCGA_PPN"]);
                    $('[name="prc_cost"]').text(data[0]["PRCGA_COST"]);
                    $('[name="prc_gt"]').text(data[0]["PRCGA_GTOTAL"]);
                    $('td.chgnum').number(true);
                    $('th.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function printDiv()
        {
            window.print();
        }
    </script>
</body>