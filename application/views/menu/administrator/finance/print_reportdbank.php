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
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style type="text/css">
        body 
        {
            background-color: white;
            font-family: 'Times New Roman';
        }
        .col-perc5
        {
            width: 5%;
        }
        .col-perc10
        {
            width: 10%;
        }
        .col-perc15
        {
            width: 15%;
        }
        .col-perc20
        {
            width: 20%;
        }
        .col-perc25
        {
            width: 25%;
        }
        .col-perc30
        {
            width: 30%;
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
        <form id="form_bank">
            <input type="hidden" name="coa_id" value="<?php echo $coa; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="type" value="<?php echo $rpttype; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <img id="img_logo" class="img-responsive logo" src="">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u>LAPORAN BANK HARIAN</u></h2>
                <h3 class="text-center" name="rptbank_branch"></h3>
                <h4 class="text-center" name="rptdbank_periodmulti"></h4>
            </div>
            <div class="col-sm-3 col-xs-3"><br>
                <h4 class="text-left" name="rptdbank_periodsg"></h4>
                <h4 class="text-left" name="rptbank_coa"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptdbank" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="vcenter col-perc5" rowspan="2">Tgl.</th>
                            <th class="vcenter col-perc10" rowspan="2">No. Bukti</th>
                            <th class="vcenter col-perc20" rowspan="2">Uraian</th>
                            <th class="vcenter col-perc5" rowspan="2">Rek.</th>
                            <th class="text-center col-perc30" colspan="2">Penerimaan</th>
                            <th class="text-center col-perc30" colspan="2">Pengeluaran</th>
                        </tr>
                        <tr>
                            <th class="text-center">TUNAI</th>
                            <th class="text-center">CH/GB</th>
                            <th class="text-center">TUNAI</th>
                            <th class="text-center">CH/GB</th>
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
                            <td class="text-left col-perc10">Bank</td>
                            <td class="text-center col-perc15"></td>
                            <td class="text-left col-perc15">Sub Jumlah/Dipindahkan</td>
                            <td class="text-right chgnum col-perc15" name="sub_debit_cash"></td>
                            <td class="text-right chgnum col-perc15" name="sub_debit_chgr"></td>
                            <td class="text-right chgnum col-perc15" name="sub_credit_cash"></td>
                            <td class="text-right chgnum col-perc15" name="sub_credit_chgr"></td>
                        </tr>
                        <tr>
                            <td class="text-left col-perc10">CH/GB</td>
                            <td class="text-center col-perc15"></td>
                            <td class="text-left col-perc15">Jumlah</td>
                            <td class="text-right chgnum col-perc15" name="sum_debit_cash"></td>
                            <td class="text-right chgnum col-perc15" name="sum_debit_chgr"></td>
                            <td class="text-right chgnum col-perc15" name="sum_credit_cash"></td>
                            <td class="text-right chgnum col-perc15" name="sum_credit_chgr"></td>
                        </tr>
                        <tr>
                            <td class="text-left col-perc10">Ch Titipan</td>
                            <td class="text-center col-perc15"></td>
                            <td class="text-left col-perc15">Saldo Awal</td>
                            <td class="text-right chgnum col-perc15" name="saldo_start"></td>
                            <td class="text-center col-perc15">-</td>
                            <td class="text-center col-perc15">-</td>
                            <td class="text-center col-perc15">-</td>
                        </tr>
                        <tr>
                            <td class="text-left col-perc10">Ch Inkaso</td>
                            <td class="text-center col-perc15"></td>
                            <td class="text-left col-perc15">Saldo Akhir</td>
                            <td class="text-center col-perc15">-</td>
                            <td class="text-center col-perc15">-</td>
                            <td class="text-right chgnum col-perc15" name="saldo_end"></td>
                            <td class="text-center col-perc15">-</td>
                        </tr>
                        <tr>
                            <td class="text-left col-perc10">Ch Tolakan</td>
                            <td class="text-center col-perc15"></td>
                            <td class="text-left col-perc15">Kontrol</td>
                            <td class="text-right chgnum col-perc15" name="ctrl_deb"></td>
                            <td class="text-center">-</td>
                            <td class="text-right chgnum col-perc15" name="ctrl_cre"></td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-left col-perc10">Kas Bon</td>
                            <td class="text-center chgnum col-perc15" name="notafin_sum">0</td>
                            <td class="text-center col-perc15"><strong>Diketahui Oleh</strong></td>
                            <td class="text-center col-perc30" colspan="2"><strong>Diperiksa Oleh</strong></td>
                            <td class="text-center col-perc30" colspan="2"><strong>Dibuat Oleh</strong></td>
                        </tr>
                        <tr>
                            <td class="text-left col-perc10">Saldo Bank</td>
                            <td class="text-center chgnum col-perc15" name="saldo_bank"></td>
                            <td class="text-center col-perc15" style="vertical-align: bottom;" rowspan="3">Ibu Dewi Puspo</td>
                            <td class="text-center col-perc30" style="vertical-align: bottom;" colspan="2" rowspan="3">Nina - Nadya</td>
                            <td class="text-center col-perc30" style="vertical-align: bottom;" colspan="2" rowspan="3" name="rpt_maker"></td>
                        </tr>
                        <tr>
                            <td class="text-left col-perc10">Saldo Keuangan</td>
                            <td class="text-center chgnum col-perc15" name="saldo_mn"></td>
                        </tr>
                        <tr>
                            <td class="text-left col-perc10">Beda Bank</td>
                            <td class="text-center chgnum col-perc15" name="saldo_diff"></td>
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
            gen_bank();
            if($('[name="date_start"]').val() != $('[name="date_end"]').val())
            {
                $('[name="rptdbank_periodmulti"]').text('Periode : '+moment($('[name="date_start"]').val()).locale('id').format('DD/MM/YYYY')+' s/d '+moment($('[name="date_end"]').val()).locale('id').format('DD/MM/YYYY'));
            }
            else
            {
                $('[name="rptdbank_periodsg"]').text('Periode : '+moment($('[name="date_start"]').val()).locale('id').format('DD/MM/YYYY'));
            }
            if($('[name="branch"]').val() != '')
            {
                pick_branch($('[name="branch"]').val());
            }
            pick_coagb($('[name="coa_id"]').val());
        });
        function gen_bank()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_rptbank')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var rpc = moment(data['a'][i]["BNK_DATE"]).locale('id').format('YYMM');
                        var str = (data['a'][i]["BNK_CODE"]).replace('/'+rpc+'/','-');
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['a'][i]["BNK_DATE"]).locale('id').format('DD/MM/YYYY')+'</td>'),
                            $('<td class="text-center">'+str+data['a'][i]["BRANCH_INIT"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COADET"]+' - '+data['a'][i]["BNKDET_INFO"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["BNKDET_AMOUNT"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">0</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        var rpc = moment(data['b'][i]["BNKO_DATE"]).locale('id').format('YYMM');
                        var str = (data['b'][i]["BNKO_CODE"]).replace('/'+rpc+'/','-');
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['b'][i]["BNKO_DATE"]).locale('id').format('DD/MM/YYYY')+'</td>'),
                            $('<td class="text-center">'+str+data['b'][i]["BRANCH_INIT"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COADET"]+' - '+data['b'][i]["BNKODET_INFO"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COA_ACC"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">'+data['b'][i]["BNKODET_AMOUNT"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['c'].length; i++)
                    {
                        var rpc = moment(data['c'][i]["GRIN_DATE"]).locale('id').format('YYMM');
                        var str = (data['c'][i]["GRIN_CODE"]).replace('/'+rpc+'/','-');
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['c'][i]["GRIN_DATE"]).locale('id').format('DD/MM/YYYY')+'</td>'),
                            $('<td class="text-center">'+str+data['c'][i]["BRANCH_INIT"]+'</td>'),
                            $('<td class="text-center">'+'Pencairan Giro Nomor : '+data['c'][i]["GRINDET_CODE"]+' - '+data['c'][i]["GRIN_INFO"]+'</td>'),
                            $('<td class="text-center"></td>'),
                            $('<td class="text-right chgnum">'+data['c'][i]["GRINDET_AMOUNT"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">0</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['d'].length; i++)
                    {
                        var rpc = moment(data['d'][i]["GROUT_DATE"]).locale('id').format('YYMM');
                        var str = (data['d'][i]["GROUT_CODE"]).replace('/'+rpc+'/','-');
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['d'][i]["GROUT_DATE"]).locale('id').format('DD/MM/YYYY')+'</td>'),
                            $('<td class="text-center">'+str+data['d'][i]["BRANCH_INIT"]+'</td>'),
                            $('<td class="text-center">'+'Pencairan Giro Nomor : '+data['d'][i]["GROUTDET_CODE"]+' - '+data['d'][i]["GROUT_INFO"]+'</td>'),
                            $('<td class="text-center"></td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">'+data['d'][i]["GROUTDET_AMOUNT"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_tp1();
                    var sal_deb = data['e']+data['g']*1;
                    var sal_cre = data['f']+data['h']*1;
                    var sal_strcoa = data['i']["COA_DEBIT"]-data['i']["COA_CREDIT"]*1;
                    var sal_str = (sal_deb-sal_cre)*1+(sal_strcoa*1);
                    var sum_deb =  Math.abs($('[name="sum_debit_cash"]').text());
                    var sum_cre = Math.abs($('[name="sum_credit_cash"]').text());
                    var sal_end = (sal_str+sum_deb)*1-sum_cre;
                    if(sal_str < 0)
                    {
                        $('[name="saldo_start"]').addClass('minus');
                    }
                    if(sal_end < 0)
                    {
                        $('[name="saldo_end"]').addClass('minus');
                        // $('[name="saldo_cashier"]').addClass('minus');
                    };
                    var ctrl_deb = (sal_str+sum_deb)*1;
                    var ctrl_cre = (sal_end+sum_cre)*1;
                    // var nota_deb = data['e'];
                    // var nota_cre = data['f'];
                    var nota_sum = $('[name="notafin_sum"]').val();
                    var sal_mn = (nota_sum+sal_end)*1;
                    var sal_diff = Math.abs(sal_mn-sal_end);
                    $('[name="saldo_start"]').text(sal_str);
                    $('[name="saldo_end"]').text(sal_end);
                    $('[name="saldo_bank"]').text(sal_end);
                    $('[name="ctrl_debit"]').text(ctrl_deb);
                    $('[name="ctrl_credit"]').text(ctrl_cre);
                    // $('[name="notafin_sum"]').text(nota_sum);
                    $('[name="saldo_mn"]').text(sal_mn);
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
            $('#dtb_rptdbank').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                order: [[0, 'asc'],[1,'desc']],
                columnDefs:
                [
                    {type: 'date-dd/mm/yyyy', targets: 0},
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
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    total2 = api.column(5).data().reduce( function (a,b)
                    {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    total3 = api.column(6).data().reduce( function (a,b)
                    {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    total4 = api.column(7).data().reduce( function (a,b)
                    {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    sum = total;
                    sum2 = total2;
                    sum3 = total3;
                    sum4 = total4;
                    $('[name="sub_debit_cash"]').text(sum);
                    $('[name="sub_debit_chgr"]').text(sum2);
                    $('[name="sub_credit_cash"]').text(sum3);
                    $('[name="sub_credit_chgr"]').text(sum4);
                    $('[name="sum_debit_cash"]').text(sum);
                    $('[name="sum_debit_chgr"]').text(sum2);
                    $('[name="sum_credit_cash"]').text(sum3);
                    $('[name="sum_credit_chgr"]').text(sum4);
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
                    $('[name="rptbank_branch"]').text(data.BRANCH_NAME);
                    var newSrc = "<?php echo base_url()?>assets/img/branchlogo/"+data.BRANCH_LOGO;
                    $('#img_logo').attr('src', newSrc);
                    var brc = data.BRANCH_ID;
                    switch(brc)
                    {
                        case '1':
                        $('[name="rpt_maker"]').text('Nadya');
                        break;
                        case '3':
                        $('[name="rpt_maker"]').text('Sakti');
                        break;
                        default:
                    }
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
                    $('[name="rptbank_coa"]').text(data.COA_ACC+' - '+data.COA_ACCNAME);
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