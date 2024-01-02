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
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style>
        .bank
        {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 0px;
            font-family: Times New Roman;
        }
        .bank header
        {
            padding: 0px 0px 0px 0px;
            margin-bottom: 0px;
            border-bottom: 1px solid #3989c6;
        }
        .bank header img
        {
            max-width: 200px;
            margin-top: 0;
            margin-bottom: 0;
        }
        .bank .company-details
        {
            text-align: right;
            margin-top: 0;
            margin-bottom: 0;
        }
        .bank main
        {
            padding: 0px 0px 0px 0px;
            margin-bottom: 0px;
        }
        .bank .to-details
        {
            text-align: left;
        }
        .bank .to-name
        {
            font-weight: bold;
        }
        .bank .to-name .to-address .to-city .to-phone
        {
            margin-top: 0;
            margin-bottom: 0;
        }
        .bank .bank-reff
        {
            text-align: center;
        }        
        .bank .bank-info
        {
            text-align: right;
        }
        .bank-info .reff-content
        {
            margin-top: 0;
            margin-bottom: 0;
        }
        .bank-info .info-code
        {
            font-weight: bold;
        }
        .bank-info .info-code .info-date
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
            height: 70px !important;
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
        .bank .loc-info .loc-notice
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
            padding-top: 35px;
            text-align: center;
        }
        footer .foot-notice
        {
            margin-top: 0;
            margin-bottom: 0;
        }
        footer .notices
        {
            padding-left: 6px;
            border-left: 6px solid #3989c6
        }
        footer .notices-height
        {
            height: 42px;
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
    <input type="hidden" name="bk_id" value="<?php echo $id;?>">
    <input type="hidden" name="supp_id" value="<?php echo $id;?>">
    <div class="container hidden-print">
        <div class="row">
            <div class="col-sm-2 col-xs-3">
                <button class="btn btn-block btn-primary" type="button" onclick="printDiv()">Print</button>
            </div>
            <div class="col-sm-2 col-xs-3">
                <button class="btn btn-block btn-success addBtn" type="button">Tambah Kolom</button>
            </div>
        </div>
    </div>
    <div class="container bank" id="bank-div">
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
                <div class="col-sm-6 col-xs-6 to-details">
                    <div>Kepada :</div>
                    <div class="to-name" name="to_name"></div>
                    <div class="to-phone" name="to_phone"></div>
                    <div class="to-address" name="to_address"></div>
                </div>
                <div class="col-sm-6 col-xs-6 bank-info">
                    <h4 class="info-code" name="bank_code"></h4>
                    <div class="reff-content">Tgl : <span name="bank_date"></span></div>
                    <div class="reff-content">Rekening : <span name="bank_acc"></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12 table-responsive">
                    <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center col-xs-1 col-sm-2">Perkiraan</th>
                                <th class="text-center col-xs-7 col-sm-7">Deskripsi</th>
                                <th class="text-center col-xs-2 col-sm-2">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody id="tb_content"></tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" class="text-right">TOTAL</th>
                                <th class="text-right chgnum-perc"><span name="bank_total"></span></th>
                            </tr>
                            <tr>
                                <th colspan="3" class="notice-row">
                                    <div class="row">
                                        <div class="col-sm-2 col-xs-2"><br>TERBILANG<br>KETERANGAN</div>
                                        <div class="col-sm-9 col-xs-9"><span name="bank_details"></span><br><span name="bank_spelled"></span><br><span name="bank_info"></span></div>
                                    </div>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </main>
        <footer>
            <div class="row text-center">
                <div class="col-xs-3 col-sm-3">
                    <div>Pembukuan</div>
                </div>
                <div class="col-xs-2 col-sm-2">
                    <div>Mengetahui</div>
                </div>
                <div class="col-xs-2 col-sm-2">
                    <div>Disetujui</div>
                </div>
                <div class="col-xs-2 col-sm-2">
                    <div>Dibuat</div>
                </div>
                <div class="col-xs-3 col-sm-3">
                    <div>Diterima</div>
                </div>
            </div>
            <div class="row signature">
                <div class="col-xs-3 col-sm-3">
                    <div>(................)(................)</div>
                </div>
                <div class="col-xs-2 col-sm-2">
                    <div>(................)</div>
                </div>
                <div class="col-xs-2 col-sm-2">
                    <div>(................)</div>
                </div>
                <div class="col-xs-2 col-sm-2">
                    <div>(................)</div>
                </div>
                <div class="col-xs-3 col-sm-3">
                    <div>(................)</div>
                </div>
            </div>
        </footer>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            var id; var suppid; var prc; var qty; var sub;
            id=$('[name="bk_id"]').val();            
            prc = 0; qty = 0; sub = 0;
            pick_bk(id);
            pick_branch("<?= $this->session->userdata('user_branch')?>");
            $('.addBtn').click(function(){
                var name = $("#name").val();
                var addr = $("#addr").val();
                var markup = '<tr><td class="blank-row"></td><td></td><td class="text-center"><button type="button" class="btn btn-danger btn-sm hidden-print delBtn">X</button></td></tr>';
                $('#tb_content').append(markup);
            });
            
            $(function () {
                $("table").on("click", ".delBtn", function () {
                    $(this).closest('tr').remove();
                });
            });
        });
        function pick_bk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="bank_code"]').text(data.BNKO_CODE);
                    $('[name="bank_date"]').text(moment(data.BNKO_DATE).locale('id').format('DD-MMM-YYYY'));
                    $('[name="bank_info"]').text(data.BNKO_INFO);
                    if (data.BNKO_SUPP != null)
                    {
                        pick_supp(data.BNKO_SUPP);
                    }
                    pick_acc(data.COA_ID);
                    pick_bkdet($('[name="bk_id"]').val());
                    pick_sum_total_bk($('[name="bk_id"]').val());
                    pick_bktrxdet($('[name="bk_id"]').val());
                    $('#modal_bk').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bkdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bkdet/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var blankrow = 6-data.length;
                    for (var i = 0; i < data.length; i++)
                    {
                      var $tr = $('<tr>').append(
                            $('<td class="text-center">'+data[i]["COA_ACC"]+'</td>'),
                            $('<td class="text-center text-uppercase">'+data[i]["COA_ACCNAME"]+' - '+data[i]["BNKODET_INFO"]+'</td>'),
                            $('<td class="text-right chgnum">'+data[i]["BNKODET_AMOUNT"]+'</td>')
                            ).appendTo('#tb_content');
                    };
                    for (var j = 0; j < blankrow; j++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td class="blank-row"></td>'),
                            $('<td></td>'),$('<td class="text-center"><button type="button" class="btn btn-danger btn-sm hidden-print delBtn">X</button></td>')
                            ).appendTo('#tb_content');
                    }
                    $('td.chgnum').number(true,2);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bktrxdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bktrxdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    detail = data.BNKTRXO_NUM+' - '+moment(data.BNKTRXO_DATE).locale('id').format('DD-MMM-YYYY')+' - '+money_conv(data.BNKTRXO_AMOUNT);
                    $('[name="bank_details"]').text(detail);
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
                url : "<?php echo site_url('administrator/Finance/ajax_pick_supp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="to_name"]').text(data.SUPP_NAME);
                    $('[name="to_phone"]').text('Phone '+data.SUPP_PHONE);
                    $('[name="to_address"]').text(data.SUPP_ADDRESS+', '+data.SUPP_CITY);
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
                    $('[name="bank_acc"]').text(data.COA_ACC +" - "+ data.COA_ACCNAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_sum_total_bk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_bk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_total"]').text(data.SubTotal);
                    $('th.chgnum-perc').number(true,2);
                    pick_terbilang_total_bk(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_terbilang_total_bk(total)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_spelled"]').text(data.terbilang+' Rupiah');
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
        function printDiv()
        {
            window.print();
        }
    </script>
</body>
</html>