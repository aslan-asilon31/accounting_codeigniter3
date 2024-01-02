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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style type="text/css">
        body 
        {
            background-color: white;
            font-family: 'Times New Roman';
        }
        .logos
        {
            padding-top: 10px;
        }
        .vcenter 
        {
            vertical-align: middle !important;
            text-align: center;
        }
        .minus
        {
            color: red !important;
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
        table.dataTable thead .sorting, 
        table.dataTable thead .sorting_asc, 
        table.dataTable thead .sorting_desc 
        {
            background : none;
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
            .buttons-excel
            {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="form_cash">
            <input type="hidden" name="coa_id" value="<?php echo $coa; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="type" value="<?php echo $rpttype; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <img class="img-responsive logos" src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u>LAPORAN KAS HARIAN</u></h2>
                <h3 class="text-center" name="rptcash_branch"></h3>
                <h4 class="text-center" name="rptdcash_periodmulti"></h4>
            </div>
            <div class="col-sm-3 col-xs-3"><br>
                <h4 class="text-left" name="rptdcash_periodsg"></h4>
                <h4 class="text-left" name="rptcash_coa"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptdcash" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">
                                Cabang
                            </th> -->
                            <th class="vcenter" rowspan="2">
                                Tanggal
                            </th>
                            <th class="vcenter" rowspan="2">
                                No. Bukti
                            </th>
                            <th class="vcenter" rowspan="2">
                                Uraian
                            </th>
                            <th class="vcenter" rowspan="2">
                                Rekening
                            </th>
                            <th class="text-center">
                                Penerimaan
                            </th>
                            <th class="text-center">
                                Pengeluaran
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">
                                TUNAI
                            </th>
                            <th class="text-center">
                                TUNAI
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptdcash" class="table table-bordered" cellspacing="0" width="100%">
                    <tbody id="tb_contentsum">
                        <tr>
                            <td class="col-xs-2 text-left">Uang Tunai</td>
                            <td class="col-xs-4 text-center"></td>
                            <td class="col-xs-2 text-left">Sub Jumlah/Dipindahkan</td>
                            <td class="col-xs-2 text-right chgnum" name="sub_debit"></td>
                            <td class="col-xs-2 text-right chgnum" name="sub_credit"></td>
                        </tr>
                        <tr>
                            <td class="col-xs-2 text-left">Dollar</td>
                            <td class="col-xs-4 text-center"></td>
                            <td class="col-xs-2 text-left">Jumlah</td>
                            <td class="col-xs-2 text-right chgnum" name="sum_debit"></td>
                            <td class="col-xs-2 text-right chgnum" name="sum_credit"></td>
                        </tr>
                        <tr>
                            <td class="col-xs-2 text-left">Ch. Inkaso</td>
                            <td class="col-xs-4 text-center"></td>
                            <td class="col-xs-2 text-left">Saldo Awal</td>
                            <td class="col-xs-2 text-right chgnum" name="saldostr_debit"></td>
                            <td class="col-xs-2 text-right chgnum" name="saldostr_credit"></td>
                        </tr>
                        <tr>
                            <td class="col-xs-2 text-left">Kas Bon $</td>
                            <td class="col-xs-4 text-center"></td>
                            <td class="col-xs-2 text-left">Saldo Akhir</td>
                            <td class="col-xs-2 text-right chgnum" name="saldoend_debit"></td>
                            <td class="col-xs-2 text-right chgnum" name="saldoend_credit"></td>
                        </tr>
                        <tr>
                            <td class="col-xs-2 text-left">Kas Bon Rp</td>
                            <td class="col-xs-4 text-center chgnum" name="notafin_sum"></td>
                            <td class="col-xs-2 text-left">Kontrol</td>
                            <td class="col-xs-2 text-right chgnum" name="ctrl_debit"></td>
                            <td class="col-xs-2 text-right chgnum" name="ctrl_credit"></td>
                        </tr>
                        <tr>
                            <td class="col-xs-2 text-left">Saldo Kasir</td>
                            <td class="col-xs-4 text-center chgnum" name="saldo_cashier"></td>
                            <td class="col-xs-2 text-center"><strong>Diketahui Oleh</strong></td>
                            <td class="col-xs-2 text-center"><strong>Diperiksa Oleh</strong></td>
                            <td class="col-xs-2 text-center"><strong>Kasir</strong></td>
                        </tr>
                        <tr>
                            <td class="col-xs-2 text-left">So Keuangan</td>
                            <td class="col-xs-4 text-center chgnum" name="saldo_fin"></td>
                            <td class="col-xs-2 text-center" style="vertical-align: bottom;" rowspan="2">Ibu Dewi Puspo</td>
                            <td class="col-xs-2 text-center" style="vertical-align: bottom;" rowspan="2">Diana - Dien</td>
                            <td class="col-xs-2 text-center" style="vertical-align: bottom;" rowspan="2">Dien</td>
                        </tr>
                        <tr>
                            <td class="col-xs-2 text-left">Beda Kas</td>
                            <td class="col-xs-4 text-center chgnum" name="saldo_diff"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php'; ?>
    <script>
        $(document).ready(function()
        {
            gen_cash();
            if($('[name="date_start"]').val() != $('[name="date_end"]').val())
            {
                $('[name="rptdcash_periodmulti"]').text('Periode : '+moment($('[name="date_start"]').val()).locale('id').format('DD/MM/YYYY')+' s/d '+moment($('[name="date_end"]').val()).locale('id').format('DD/MM/YYYY'));
            }
            else
            {
                $('[name="rptdcash_periodsg"]').text('Periode : '+moment($('[name="date_start"]').val()).locale('id').format('DD/MM/YYYY'));
            }
            if($('[name="branch"]').val() != '')
            {
                pick_branch($('[name="branch"]').val());
            }
            pick_coagb($('[name="coa_id"]').val());
        });
        function gen_cash()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_rptcash')?>",
                type: "POST",
                data: $('#form_cash').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            // $('<td class="text-center">'+data['a'][i]["BRANCH_NAME"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["CSH_DATE"]).locale('id').format('DD-MMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CSH_CODE"]+data['a'][i]["BRANCH_INIT"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COADET"]+' - '+data['a'][i]["CSHINDET_INFO"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["CSHDETIN_AMOUNT"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            // $('<td class="text-center">'+data['b'][i]["BRANCH_NAME"]+'</td>'),
                            $('<td class="text-center">'+moment(data['b'][i]["CSHO_DATE"]).locale('id').format('DD-MMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["CSHO_CODE"]+data['b'][i]["BRANCH_INIT"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COADET"]+' - '+data['b'][i]["CSHODET_INFO"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COA_ACC"]+' - '+data['b'][i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">'+data['b'][i]["CSHODET_AMOUNT"]+'</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_tp1();
                    var sal_deb = data['c'];
                    var sal_cre = data['d'];
                    var sal_strcoa = data['g']["COA_DEBIT"]-data['g']["COA_CREDIT"]*1;
                    var sal_str = (sal_deb-sal_cre)*1+(sal_strcoa*1);
                    var sum_deb =  Math.abs($('[name="sum_debit"]').text());
                    var sum_cre = Math.abs($('[name="sum_credit"]').text());
                    var sal_end = (sal_str+sum_deb)*1-sum_cre;
                    if(sal_str < 0)
                    {
                        $('[name="saldostr_debit"]').addClass('minus');                     
                    }
                    if(sal_end < 0)
                    {
                        $('[name="saldoend_credit"]').addClass('minus');
                        $('[name="saldo_cashier"]').addClass('minus');
                    };
                    var ctrl_deb = (sal_str+sum_deb)*1;
                    var ctrl_cre = (sal_end+sum_cre)*1;
                    var nota_deb = data['e'];
                    var nota_cre = data['f'];
                    var nota_sum = (nota_cre-nota_deb)*1;
                    var sal_fin = (nota_sum+sal_end)*1;
                    var sal_diff = (sal_fin-sal_end);
                    $('[name="saldostr_debit"]').text(sal_str);
                    $('[name="saldoend_credit"]').text(sal_end);
                    $('[name="saldo_cashier"]').text(sal_end);
                    $('[name="ctrl_debit"]').text(ctrl_deb);
                    $('[name="ctrl_credit"]').text(ctrl_cre);
                    $('[name="notafin_sum"]').text(nota_sum);
                    $('[name="saldo_fin"]').text(sal_fin);
                    $('[name="saldo_diff"]').text(sal_diff);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_cashsaldoawal()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_rptcashsaldostr')?>",
                type: "POST",
                data: $('#form_cash').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    var d = data['a'].SUMD;
                    var c = data['b'].SUMC;
                    var e = $('[name="sum_debit"]').val();
                    var f = $('[name="sum_credit"]').val();
                    var sum = (d-c)*1;
                    var sal_end = (sum+e-f)*1;
                    $('[name="saldostr_debit"]').text(sum);
                    $('[name="saldoend_credit"]').text(sal_end);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function dt_tp1()
        {
            $('#dtb_rptdcash').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                order: [[0, 'asc'],[1,'desc']],
                columnDefs:
                [
                    // {visible: false, targets: v},
                    {type: 'date-dd-mmm-yyyy', targets: 0},
                    {orderable: false, targets: '_all'}
                ],
                dom: 'Bfrtip',
                buttons: 
                {
                    dom: 
                    {
                        button: 
                        {
                            tag: 'button',
                            className: 'btn btn-sm btn-info'
                        }
                    },
                    buttons: ['excelHtml5']
                },
                drawCallback: function(settings)
                {
                    var api = this.api(), data;
                    total = api.column(4).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);
                    total2 = api.column(5).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);
                    // sum = $.fn.dataTable.render.number(',','.',0).display(total);
                    // sum2 = $.fn.dataTable.render.number(',','.',0).display(Math.abs(total2));
                    sum = total;
                    sum2 = total2;
                    $('[name="sub_debit"]').text(sum);
                    $('[name="sub_credit"]').text(sum2);
                    $('[name="sum_debit"]').text(sum);
                    $('[name="sum_credit"]').text(sum2);
                }
            });
            $('th').removeClass('sorting_asc');
            $('th').removeClass('sorting_desc');
        }
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="rptcash_branch"]').text(data.BRANCH_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })
        }
        function pick_coagb(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_coagb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="rptcash_coa"]').text(data.COA_ACC+' - '+data.COA_ACCNAME);
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