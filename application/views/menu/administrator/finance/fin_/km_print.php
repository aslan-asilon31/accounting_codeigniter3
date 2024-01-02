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
            font-family:"times new roman";
        }
        .row-content
        {            
            min-height: 350px;
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
            font-family: "times new roman";
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
                min-height: 220px;
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
        <input type="hidden" name="km_id" value="<?php echo $id;?>">
        <input type="hidden" name="cust_id" value="<?php echo $id;?>">
        <div class="row">
            <div class="col-xs-4">
                <img id="img_logo" class="img-responsive logo" src="">
            </div>
            <div class="col-xs-4 text-center">
                <h3><strong><u>BUKTI KAS MASUK</u></strong></h3>
                <h3 style="margin-top:-10px">No.<span name="no_km"></span></h3>
                <h3 style="margin-top: -10px" name="acc_header"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 head-font">
                <address>
                    <strong>Match Advertising</strong><br>
                    JL. Lesti No.42, Surabaya 60241<br>
                    Telp. (031) 567 8346 (Hunting)<br>
                    Fax. (031) 568 0646<br>
                    Email : info@match-advertising.com<br>
                </address>
            </div>
            <div class="col-xs-5 head-font">
                <address>
                    <strong>Kepada :</strong><br>
                    <span name="kas_custname"></span><br>
                    <span name="kas_custaddr"></span>&nbsp;<span name="kas_custcity"></span><br>
                    <span name="kas_custphone"></span><br>
                    <span name="kas_custinfo"></span>
                </address>
            </div>
            <div class="col-xs-3 head-font">
                <address>
                    <strong>Tanggal :</strong>&nbsp;<span name="kas_tgl"></span>
                </address>
            </div>
        </div>
        <div class="row row-content content-font">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <input type="hidden" name="kas_total">
                <input type="hidden" name="kas_info">
                <input type="hidden" name="kas_terbilang">
                <input type="hidden" name="curr_name">
                <table id="tb_km" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="col-sm-2 col-xs-2 text-center">Perkiraan</th>
                            <th class="col-sm-7 col-xs-7 text-center">Uraian</th>
                            <th class="col-sm-2 col-xs-2 text-center">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content">                                              
                    </tbody>
                </table>
            </div>
            <div class="row foot-font">
                <div class="col-xs-3 text-center">
                     Pembukuan
                </div>
                <div class="col-xs-2 text-center">
                     Mengetahui
                </div>
                <div class="col-xs-2 text-center">
                     Menyetujui
                </div>
                <div class="col-xs-2 text-center">
                     Kasir
                </div>
                <div class="col-xs-3 text-center">
                     Yang Menyerahkan
                </div>
            </div>   
            <br><br><br>
            <div class="row">
                <div class="col-xs-3 text-center">
                       (.................)  (.................)
                </div>
                <div class="col-xs-2 text-center">
                       (.................)
                </div>
                <div class="col-xs-2 text-center">
                       (.................)
                </div>
                <div class="col-xs-2 text-center">
                       (.................)
                </div>
                <div class="col-xs-3 text-center">
                       (.................)
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        var id; var suppid; var prc; var qty; var sub;
        $(document).ready(function()
        {
            id=$('[name="km_id"]').val();            
            prc = 0; qty = 0; sub = 0;
            pick_km(id);
            pick_branch("<?= $this->session->userdata('user_branch')?>");
        });
        function pick_km(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_km/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="km_id"]').val(data.CSH_ID);
                    pick_acc(data.COA_ID);
                    $('[name="km_code"]').val(data.CSH_CODE);
                    $('[name="no_km"]').text(data.CSH_CODE);
                    $('[name="kas_tgl"]').text(moment(data.CSH_DATE).locale('id').format('DD-MMM-YYYY'));
                    $('[name="kas_info"]').val(data.CSH_INFO);
                    if (data.CUST_ID != ''){$('[name="cust_id"]').val(data.CUST_ID);};
                    if (data.CSTIN_ID != ''){$('[name="cust_id"]').val(data.CSTIN_ID);};
                    $('[name="pass"]').text(data.CSH_ID);
                    if ((data.CUST_ID != null) || (data.CSTIN_ID != null)){
                        (data.CUST_ID != null)?pick_cust_ex(data.CUST_ID):pick_cust_in(data.CSTIN_ID);
                    };
                    pick_sum_total_km($('[name="km_id"]').val());
                    pick_curr(data.CURR_ID);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cust_ex(id)
        {   alert(id);
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cust_ex/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_custname"]').text(data.CUST_NAME);
                    $('[name="kas_custaddr"]').text(data.CUST_ADDRESS);
                    $('[name="kas_custcity"]').text(data.CUST_CITY);
                    $('[name="kas_custphone"]').text(data.CUST_PHONE);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cust_in(id)
        {   
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cust_in/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_custname"]').text(data.PERSON_NAME);
                    $('[name="kas_custaddr"]').text(data.PERSON_ADDRESS);
                    $('[name="kas_custcity"]').text(data.PERSON_CITY);
                    $('[name="kas_custphone"]').text(data.PERSON_PHONE);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_sum_total_km(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_km/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_total"]').val(data.SubTotal);
                    pick_terbilang_total_km(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_terbilang_total_km(total)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_terbilang"]').val(data.terbilang);
                    pick_kmdet($('[name="km_id"]').val());                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_kmdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_kmdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    var total= $('[name="kas_total"]').val();
                    var info = $('[name="kas_info"]').val();
                    var curr = $('[name="curr_name"]').val();
                    var terbi = $('[name="kas_terbilang"]').val() + ' ' + curr;
                    for (var i = 0; i < data.length; i++)
                    {
                      var $tr = $('<tr>').append(
                            $('<td class="text-center">'+data[i]["COA_ACC"]+' - '+data[i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-center text-uppercase">'+data[i]["CSHINDET_INFO"]+'</td>'),
                            $('<td class="text-right">'+formatCurrency(data[i]["CSHDETIN_AMOUNT"],".",",",2)+'</td>')
                            ).appendTo('#tb_content');
                    }
                    var $tr = $('<tr>').append(
                            $('<td></td>'),
                            $('<th class="text-right">Total Rp</th>'),
                            $('<th class="text-right">'+formatCurrency(total,".",",",2)+'</th>')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td class="text-center">KETERANGAN</td>'),
                            $('<td class="text-left text-uppercase" colspan="2">'+info+'</td>')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td class="text-center">TERBILANG</td>'),
                            $('<td class="text-left" colspan="2">'+terbi+'</td>')
                            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_acc(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                       $('[name="acc_header"]').text(data.COA_ACC +" - "+ data.COA_ACCNAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="curr_name"]').val(data.CURR_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
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
        function formatCurrency(amount, decimalSeparator, thousandsSeparator, nDecimalDigits)
        {  
            var num = parseFloat( amount ); //convert to float  
            //default values  
            decimalSeparator = decimalSeparator || '.';  
            thousandsSeparator = thousandsSeparator || ',';  
            nDecimalDigits = nDecimalDigits == null? 2 : nDecimalDigits;
            var fixed = num.toFixed(nDecimalDigits); //limit or add decimal digits  
            //separate begin [$1], middle [$2] and decimal digits [$4]  
            var parts = new RegExp('^(-?\\d{1,3})((?:\\d{3})+)(\\.(\\d{' + nDecimalDigits + '}))?$').exec(fixed);
            if(parts){ //num >= 1000 || num < = -1000  
                 return parts[1] + parts[2].replace(/\d{3}/g, thousandsSeparator + '$&') + (parts[4] ? decimalSeparator + parts[4] : '');  
            }else{  
                 return fixed.replace('.', decimalSeparator);  
            }  
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