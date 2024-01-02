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
            background-color: white;
        }
        .happroval 
        {
            text-align: right;
            font-weight: 800;
        }
        .border-prime
        {
            border: solid 2px blue;
        }
        .font-pr
        {
           font-size: 18px; 
        }
        .font-nd
        {
            font-size: 16px;
        }
        .font-3rd
        {
            font-size: 14px;
            font-weight: bold;
            font-family: 'arial black'
        }
        .font-txt
        {
            font-size: 16px;
        }
        .font-foot
        {
            font-size: 15px;
            color: blue;
        }
        .font-red
        {
            color: red;
        }
        .top-row
        {
            border-top: solid 2px blue;
        }
        .top-row-count
        {
            border-top: solid 2px black;
        }
        .row-ins
        {
            margin-left: 10px;
        }
        .row-ins-tb
        {
            margin-left: 10px;
            margin-right: 10px;
        }
        .left-bd
        {
            border-left: solid 2px blue;
        }
        .div-height
        {
            height: 150px;
        }
        .signage
        {
            position: absolute;
            bottom: 0;
        }
        .div-bd
        {
            height: 150px;
            border-left: solid 2px blue;
        }
        .col-height
        {
            min-height: 130px;
        }
        .col-height-cost
        {
            min-height: 600px;
        }
        .td-amount
        {
            text-align: right;
        }
        .td-center
        {
            text-align: center;
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

        @media print
        {
            .logo
            {
                width: 50%;
            }
            .happroval 
            {
                text-align: right;
                font-weight: 600;
            }
            .row-ins
            {
                margin-left: 5px;
            }
            .row-ins-tb
            {
                margin-left: 5px;
                margin-right: 5px;
            }
            .font-pr
            {
               font-size: 14px; 
            }
            .font-nd
            {
                font-size: 13px;
            }
            .font-3rd
            {
                font-size: 12px;
                font-weight: bold;
                font-family: 'arial black'
            }
            .font-txt
            {
                font-size: 13px;
            }
            .font-foot
            {
                font-size: 12px;
                color: blue !important;
            }
            .font-red
            {
                color: red !important;
            }
            .col-height
            {
                min-height: 70px;
            }
            .col-height-cost
            {
                min-height: 450px;
            }
            .div-height
            {
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <input type="hidden" name="appr_id" value="<?php echo $id; ?>">
        <div class="row">
            <div class="col-xs-6">
                <img id="img_logo" class="img-responsive logo" src="">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h1 class="happroval">A P P R O V A L</h1>
            </div>
        </div>
    </div>
    <div class="container border-prime">
        <div class="row">
            <div class="col-sm-2 col-xs-2">
                <label class="font-pr">CLIENT</label>
            </div>
            <div class="col-sm-10 col-xs-10">
                <label class="font-pr">: </label>
                <span class="font-txt" name="print_clientname"> aaaaa</span>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-sm-2 col-xs-2">
                <label class="font-pr">NPWP</label>
            </div>
            <div class="col-sm-10 col-xs-10">
                <label class="font-pr">: </label>
                <span class="font-txt" name="print_clientnpwp"> 1234578</span>
            </div>
        </div> -->
        <div class="row">
            <div class="col-sm-2 col-xs-2">
                <label class="font-pr">ALAMAT</label>
            </div>
            <div class="col-sm-10 col-xs-10">
                <label class="font-pr">: </label>
                <span class="font-txt" name="print_clientadd"> 1234578</span><br>
                <span class="font-txt" name="print_clientphone"> 1234578</span>
            </div>
        </div>
        <div class="row top-row">
            <div class="col-sm-2 col-xs-2">
                <label class="font-pr">APPROVAL NO</label>
            </div>
            <div class="col-sm-5 col-xs-5">
                <label class="font-pr">: </label>
                <span class="font-txt" name="print_apprcode"> aaaaa</span>
            </div>
            <div class="col-sm-1 col-xs-1">
                <label class="font-pr">DATE</label>
            </div>
            <div class="col-sm-3 col-xs-3">
                <label class="font-pr">: </label>
                <span class="font-txt" name="print_apprdate"> 14-12-2017</span>
            </div>
        </div>
        <div class="row top-row col-height">
            <div class="col-sm-2 col-xs-2">
                <label class="font-pr">JOB DESCRIPTION</label>
            </div>
            <div class="col-sm-10 col-xs-10">
                <label class="font-pr">: </label>
                <span class="font-txt" name="print_apprinfo">
                    Perpanjangan Penggunaan Billboard selama 1 Tahun
                    Perpanjangan Penggunaan Billboard selama 1 Tahun
                    Perpanjangan Penggunaan Billboard selama 1 Tahun
                    Perpanjangan Penggunaan Billboard selama 1 Tahun
                </span>
            </div>
        </div>
        <div class="row top-row col-height-cost">
            <div class="col-sm-2 col-xs-2">
                <label class="font-pr">COST</label>
            </div>
            <div class="col-sm-10 col-xs-10">
                <label class="font-pr">: </label>
            </div>
            <div class="row row-ins">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Lokasi</label>
                </div>
                <div class="col-sm-9 col-xs-9">
                    <label class="font-nd">: </label>
                    <span class="font-txt text-uppercase" name="print_apprloc"> DEPAN PASAR LAWANG</span>
                </div>
            </div>
            <div class="row row-ins">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Tanggal</label>
                </div>
                <div class="col-sm-9 col-xs-9">
                    <label class="font-nd">: </label>
                    <span class="font-txt text-uppercase" name="print_apprcontract"> 18-12-2017 s/d 18-03-2018</span>
                </div>
            </div>
            <div class="row row-ins">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Materi</label>
                </div>
                <div class="col-sm-9 col-xs-9">
                    <label class="font-nd">: </label>
                    <span class="font-txt text-uppercase" name="print_apprvis"> SEKAR LAUT ALL BRANDS</span>
                </div>
            </div>
            <div class="row row-ins">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Media Placement Sebelum Discount</label>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">: </label>
                    <span class="font-txt pull-right" name="print_apprdpp"></span>
                </div>
            </div>
            <div class="row row-ins">
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">Disc 1</label>
                </div>
                <div class="col-sm-1 col-xs-1">
                    <!-- <span class="font-txt" name="print_apprdiscperc1"></span> -->
                </div>
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">: </label>
                    <span class="font-txt font-red pull-right" name="print_apprdiscsum1"></span>
                </div>
            </div>
            <!-- <div class="row row-ins">
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">Disc 2</label>
                </div>
                <div class="col-sm-1 col-xs-1">
                    <span class="font-txt" name="print_apprdiscperc2"></span>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">: </label>
                    <span class="font-txt font-red pull-right" name="print_apprdiscsum2"></span>
                </div>
            </div> -->
            <!-- <div class="row row-ins">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Media Placement Sesudah Discount</label>
                </div>
                <div class="col-sm-2 col-xs-2 top-row-count">
                    <label class="font-nd">: </label>
                    <span class="font-txt pull-right" name="print_apprdppafterdisc"></span>
                </div>
            </div>
            <div class="row row-ins">
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">PPN</label>
                </div>
                <div class="col-sm-1 col-xs-1">
                    <span class="font-txt" name="print_apprppnperc"></span>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">: </label>
                    <span class="font-txt pull-right" name="print_apprppnsum"></span>
                </div>
            </div>
            <div class="row row-ins tax-hid">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Pajak Reklame</label>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">: </label>
                    <span class="font-txt pull-right" name="print_apprbbtax"></span>
                </div>
            </div>
            <div class="row row-ins">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Media Placement Setelah Pajak</label>
                </div>
                <div class="col-sm-2 col-xs-2 top-row-count">
                    <label class="font-nd">: </label>
                    <span class="font-txt pull-right" name="print_apprdppaftertax1"></span>
                </div>
            </div>
            <div class="row row-ins">
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">PPH</label>
                </div>
                <div class="col-sm-1 col-xs-1">
                    <span class="font-txt" name="print_apprpphperc"></span>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <label class="font-nd">: </label>
                    <span class="font-txt font-red pull-right" name="print_apprpphsum"></span>
                </div>
            </div> -->
            <div class="row row-ins">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Total</label>
                </div>
                <div class="col-sm-2 col-xs-2 top-row-count">
                    <label class="font-nd">: </label>
                    <span class="font-txt pull-right" name="print_apprgrandtotal"></span>
                </div>
            </div>
            <div class="row row-ins">
                <div class="col-sm-3 col-xs-3">
                    <label class="font-nd">Terbilang</label>
                </div>
                <div class="col-sm-9 col-xs-9">
                    <label class="font-nd">: </label>
                    <span class="font-txt text-uppercase" name="print_apprterbilang">
                    </span>
                </div>
            </div>
            <div class="row row-ins-tb">
                <div class="col-sm-12 col-xs-12">
                    <!-- <table class="table table-bordered tb-body">
                        <thead>
                            <th class="col-sm-1 col-xs-1 td-center">No</th>
                            <th class="col-sm-9 col-xs-9 td-center">Description</th>
                            <th class="col-sm-2 col-xs-2 td-center">Amount</th>
                        </thead>
                        <tbody id="tb_content">
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <h4 class="font-3rd">www.wiklan.com</h4>
            </div>
        </div>
        <div class="row top-row col-height">
            <div class="col-sm-2 col-xs-2">
                <label class="font-pr">PAYMENT</label>
            </div>
            <div class="col-sm-10 col-xs-10">
                <label class="font-pr">: </label>
                <span class="font-txt" name="print_apprrecov"></span>
                <br>
                <p class="font-txt" id="pcontent">
                    <!-- TERMIN I : PEMBAYARAN 35% SETELAH APPROVAL<br />
                    TERMIN II : PEMBAYARAN 65% SETELAH BAPP -->
                </p>
            </div>
        </div>
        <div class="row top-row">
            <div class="col-sm-3 col-xs-3 text-center">
                <label class="font-3rd">CEO</label>
            </div>
            <div class="col-sm-3 col-xs-3 text-center left-bd">
                <label class="font-3rd">Finance Dept.</label>
            </div>
            <!-- <div class="col-sm-2 col-xs-2 left-bd text-center">
                <label class="font-3rd">COO</label>
            </div>
            <div class="col-sm-3 col-xs-3 left-bd text-center">
                <label class="font-3rd">Corp. Secretary</label>
            </div> -->
            <div class="col-sm-3 col-xs-3 left-bd text-center">
                <label class="font-3rd">Komisaris</label>
            </div>
            <div class="col-sm-3 col-xs-3 left-bd text-center">
                <label class="font-3rd">CLIENT APPROVAL</label>
            </div>
        </div>
        <div class="row top-row">
            <div class="col-sm-3 col-xs-3 div-height">
                <div class="col-sm-12 col-xs-12 text-center signage">
                    YOHANES SETIYO
                </div>
            </div>
            <div class="col-sm-3 col-xs-3 div-height div-bd">
                <div class="col-sm-12 col-xs-12 text-center signage">
                    SEPTA PERMATA K.
                </div>
            </div>
            <!-- <div class="col-sm-2 col-xs-2 div-height div-bd text-center">
                
            </div>
            <div class="col-sm-3 col-xs-3 div-height div-bd text-center">
                
            </div> -->
            <div class="col-sm-3 col-xs-3 div-height div-bd">
                <div class="col-sm-12 col-xs-12 text-center signage">
                    RUDY WIJAYA
                </div>
            </div>
            <div class="col-sm-3 col-xs-3 div-height div-bd">
                <label class="font-nd">DATE</label><br>
                <label class="font-nd">REMARKS</label>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <address class="font-foot">
                    Head Office : Jl. Adityawarman No.2 Surabaya 60241 - Telp.(031)51201088, WA. 0822-3111-3648 <br>
                </address>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            var id = $('[name="appr_id"]').val();
            pick_branch("<?= $this->session->userdata('user_branch')?>");
            pick_appr(id);
        });
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    // $('[name="img_logo"]').text(data.BRANCH_NAME);
                    var newSrc = "<?php echo base_url()?>/assets/img/branchlogo/"+data.BRANCH_LOGO;
                    $('#img_logo').attr('src', newSrc);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })
        }
        function pick_appr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_appr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    pick_spelledtotal(data.APPR_TOT_INCOME);
                    $('[name="appr_id"]').val(data.APPR_ID);
                    pick_cust(data.CUST_ID);
                    $('[name="print_apprcode"]').text(data.APPR_CODE);
                    $('[name="print_apprdate"]').text(moment(data.APPR_DATE).locale('id').format('DD-MMMM-YYYY'));
                    $('[name="print_apprinfo"]').text(data.APPR_INFO);
                    var size = 'Lebar: ' + data.APPR_WIDTH + 'm, Panjang: ' + data.APPR_LENGTH + 'm, Sisi: ' + data.APPR_SIDE + 'mk';
                    $('[name="print_apprsize"]').text(size);
                    pick_loc(data.LOC_ID);
                    var ctr = moment(data.APPR_CONTRACT_START).locale('id').format('DD-MMMM-YYYY') + ' s/d ' + moment(data.APPR_CONTRACT_END).locale('id').format('DD-MMMM-YYYY');
                    $('[name="print_apprcontract"]').text(ctr);
                    $('[name="print_apprvis"]').text(data.APPR_VISUAL);
                    $('[name="print_apprdpp"]').text(money_conv(data.APPR_DPP_INCOME));
                    $('[name="print_apprdiscperc1"]').text(data.APPR_DISC_PERC1+'%');
                    $('[name="print_apprdiscsum1"]').text(money_conv(data.APPR_DISC_SUM1));
                    $('[name="print_apprdiscperc2"]').text(data.APPR_DISC_PERC2+'%');
                    $('[name="print_apprdiscsum2"]').text(money_conv(data.APPR_DISC_SUM2));
                    $('[name="print_apprdppafterdisc"]').text(money_conv(data.APPR_SUB_DSC));
                    $('[name="print_apprppnperc"]').text(data.APPR_PPN_PERC+'%');
                    $('[name="print_apprppnsum"]').text(money_conv(data.APPR_PPN_SUM));
                    $('[name="print_apprbbtax"]').text(money_conv(data.APPR_BBTAX));
                    $('[name="print_apprdppaftertax1"]').text(money_conv(data.APPR_SUB_PPN));
                    $('[name="print_apprpphperc"]').text(data.APPR_PPH_PERC+'%');
                    $('[name="print_apprpphsum"]').text(money_conv(data.APPR_PPH_SUM));
                    $('[name="print_apprgrandtotal"]').text(money_conv(data.APPR_TOT_INCOME));
                    $('[name="print_apprrecov"]').text(data.APPR_RECOV);                    
                    pick_getappcost(id);
                    pick_getappterm(id);
                    if(data.APPR_BBTAX == '0')
                    {
                        $('.tax-hid').css({'display':'none'});
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cust(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="print_clientname"]').text(data.CUST_NAME);
                    $('[name="print_clientnpwp"]').text(data.CUST_NPWPACC);
                    $('[name="print_clientadd"]').text(data.CUST_ADDRESS+', '+data.CUST_CITY+', '+data.CUST_POSTAL);
                    $('[name="print_clientphone"]').text(data.CUST_PHONE);
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
                    $('[name="print_apprloc"]').text(data.LOC_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_getappcost(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/get_appcost/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    for (var i = 0; i < data.length; i++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td class="text-center font-txt">'+(i+1)+'</td>'),
                            $('<td class="text-left text-uppercase font-txt">'+data[i]["CSTDT_CODE"]+'</td>'),
                            $('<td class="text-right font-txt">'+money_conv(data[i]["CSTDT_AMOUNT"])+'</td>')
                            ).appendTo('#tb_content');
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_getappterm(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/get_appterm/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    var all='';
                    for (var i = 0; i < data.length; i++)
                    {
                        var $ctn = data[i]["TERMSDET_CODE"]+' : '+data[i]["TERMSDET_INFO"];                        
                        if(i==0)
                        {
                            all = all + $ctn;
                        }
                        else
                        {
                            all = all +'<br>'+ $ctn;
                        }
                        // $($ctn).appendTo('#pcontent');
                    }
                    $('<p>').html(all).appendTo('#pcontent');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_spelledtotal(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/get_numbsp/')?>" + v,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="print_apprterbilang"]').text(data.terbilang+' Rupiah');
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