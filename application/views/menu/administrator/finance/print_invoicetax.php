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
            font-size: 14px;
            font-family: 'times new roman';
        }
        .bg-table
        {
            min-height: 600px;
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
        .table th
        {
            border: solid 1px black !important;
        }
        .table td
        {
            border: solid 1px black !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <input type="hidden" name="inv_id" value="<?php echo $id; ?>">
        <div class="row">
             <div class="col-xs-4">
                <img id="img_logo" class="img-responsive logo" src="">
            </div>
            <div class="col-sm-4 col-xs-4">
                <h3 class="text-center"><u>PAJAK REKLAME</u></h3>
                <h4 class="text-center" name="inv_date">31 Dec 2017</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-4">
                <p>
                    Jl. Lesti No.42 Surabaya 60241<br>
                    Telp. (031) 567 8346 (Hunting)<br>
                    Fax. (031) 568 0646<br>
                    Email : Finance@match-advertising.com
                </p>
            </div>
            <div class="col-sm-4 col-xs-4 text-center">
                <span>Nomor : </span>
                <span name="inv_code">INV/1712/000001</span>
            </div>
            <div class="col-sm-4 col-xs-4">                
                <strong>Kepada Yth :</strong><br>
                <span name="inv_custname"></span><br>
                <span name="inv_custaddr">JL. SEMAMPIR II/1 UNIT X, KEDIRI</span><br>
                <span name="inv_custcity">KEDIRI 64121</span><br>
                <span name="inv_custprov">JAWA TIMUR</span>                
            </div>
        </div>
        <div class="bg-table">
            <div class="row">
                <div class="col-sm-12 col-xs-12 table-responsive">
                    <table class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="col-sm-2 col-xs-2 text-center">No Approval</th>
                                <th class="col-sm-2 col-xs-2 text-center">No PO</th>
                                <th class="col-sm-3 col-xs-3 text-center">Lokasi</th>
                                <th class="col-sm-2 col-xs-2 text-center">Keterangan</th>
                                <th class="col-sm-2 col-xs-2 text-center">Nominal</th>
                            </tr>
                        </thead>
                        <tbody id="tb_content">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 col-xs-7">
                    <span># <i name="inv_terbilang">Dua Juta Tiga Ratus Tujuh Puluh Lima Ribu Rupiah</i> #</span>
                </div>
                <div class="col-sm-3 col-xs-3 text-right">
                    <span><strong>Sub Total</strong></span>
                </div>
                <div class="col-sm-2 col-xs-2 text-right">
                    <span name="inv_subs">2,375,000.00</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-7 col-xs-offset-7 col-sm-3 col-xs-3 text-right">
                    <span><strong>PPN</strong></span>
                </div>
                <div class="col-sm-2 col-xs-2 text-right">
                    <span name="inv_ppn">0.00</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-7 col-xs-offset-7 col-sm-3 col-xs-3 text-right">
                    <span><strong>PPH</strong></span>
                </div>
                <div class="col-sm-2 col-xs-2 bt-border text-right">
                    <span name="inv_pph">0.00</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-7 col-xs-offset-7 col-sm-3 col-xs-3 text-right">
                    <span><strong>Grand Total</strong></span>
                </div>
                <div class="col-sm-2 col-xs-2 text-right">
                    <span name="inv_grand">2,375,000.00</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-xs-2">
                Untuk Pembayaran <span class="pull-right">:</span>
            </div>
            <div class="col-sm-8 col-xs-8">
                <textarea name="inv_info" class="form-control" rows="5" style="resize: none;border: none; background-color: white" readonly></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9 col-xs-9 border-pay">
                <p>
                    <i>
                        Pembayaran dapat ditransfer ke
                        <span name="print_bankinv"></span>
                    </i>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-9 col-xs-offset-9 col-sm-3 col-xs-3 text-center">
                <span>( Dewi Puspo )</span>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            var id = $('[name="inv_id"]').val();
            pick_branch("<?= $this->session->userdata('user_branch')?>");
            pick_invoice(id);
            pick_bankprint();
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
        function pick_invoice(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_inv/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var id = data.INV_ID;
                    var invdate = moment(data.INV_DATE).format('DD-MMMM-YYYY')
                    $('[name="inv_date"]').text(invdate);
                    $('[name="inv_code"]').text(data.INV_CODE);
                    $('[name="inv_custname"]').text(data.CUST_NAME);
                    $('[name="inv_custaddr"]').text(data.CUST_ADDRESS);
                    $('[name="inv_custcity"]').text(data.CUST_CITY+', '+data.CUST_POSTAL);
                    $('[name="inv_custprov"]').text(data.CUST_NAME);
                    $('[name="inv_info"]').text(data.INV_INFO);
                    pick_invdet(id);
                    pick_sub(id);
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
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_sub(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_subinvdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    pick_spelledtotal(data.gt1);
                    $('[name="inv_grand"]').text(money_conv(data.gt1));                    
                    $('[name="inv_subs"]').text(money_conv(data.sub1));
                    $('[name="inv_ppn"]').text(money_conv(data.ppn1));
                    $('[name="inv_pph"]').text(money_conv(data.pph1));                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_invdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_invdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    for (var i = 0; i < data.length; i++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td>').css('text-align','center').text(i+1),
                            $('<td>').css('text-align','center').text(data[i]["APPR_CODE"]),
                            $('<td>').css('text-align','center').text(data[i]["APPR_PO"]),
                            $('<td>').css('text-align','center').text(data[i]["LOC_NAME"]),
                            $('<td>').css('text-align','center').text(data[i]["APPR_INFO"]),
                            $('<td>').css('text-align','right').text(money_conv(data[i]["INVDET_AMOUNT"]))
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
                        var $ctn = data[i]["TERMSDET_CODE"]+' :'+data[i]["TERMSDET_PERC"]+'% '+data[i]["TERMSDET_INFO"];                        
                        if(i==0)
                        {
                            all = all + $ctn;
                        }
                        else
                        {
                            all = all +', '+ $ctn;
                        }
                    }
                    $('<span>').text(all).appendTo('#pcontent');                    
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
                url : "<?php echo site_url('administrator/Finance/get_numbsp/')?>" + v,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_terbilang"]').text(data.terbilang+' Rupiah');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bankprint()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_printbankinv')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="print_bankinv"]').text(data.PRINT_BANKINVOICE);
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