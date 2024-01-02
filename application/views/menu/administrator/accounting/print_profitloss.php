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
            font-family: 'times new roman';            
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
        .red
        {
            color: red;
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
            .red
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
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <form id="form_trbal">
            <input type="hidden" name="coaid" value="<?php echo $coaid; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <img class="img-responsive logos" src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u>LAPORAN LABA RUGI</u></h2>
                <h3 class="text-center" name="rpttrbal_branch"></h3>
                <h4 class="text-center" name="rpttrbal_period"></h4>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptldg" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Rekening
                            </th>
                            <th class="text-center">
                                Debet
                            </th>
                            <th class="text-center">
                                Kredit
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                    <tfoot>
                        <tr>
                            <th class="text-right">Saldo</th>
                            <th name="saldodebit" class="text-right chgnum"></th>
                            <th name="saldocredit" class="text-right chgnum"></th>
                        </tr>
                        <tr>                            
                            <th colspan="2" name="saldostatus" class="text-right chgnum">Laba/Rugi</th>
                            <th name="saldoend" class="text-right chgnum"></th>
                        </tr>
                    </tfoot>
                </table>
            </div> -->
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptldg" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Jenis
                            </th>
                            <th class="text-center">
                                Rekening
                            </th>
                            <th class="text-center">
                                Sub-Nominal
                            </th>
                            <th class="text-center">
                                Nominal
                            </th>
                            <th class="text-center">
                                Debet
                            </th>
                            <th class="text-center">
                                Kredit
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                    <tfoot>
                        <!-- <tr>
                            <th class="text-right">Saldo</th>
                            <th name="saldodebit" class="text-right chgnum"></th>
                            <th name="saldocredit" class="text-right chgnum"></th>
                        </tr> -->
                        <tr>
                            <th colspan="3" name="saldostatus" class="text-right chgnum">Laba/Rugi</th>
                            <th name="saldoend" class="text-right chgnum"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            tes();
            $('[name="rpttrbal_period"]').text(moment($('[name="date_start"]').val()).format('DD-MMM-YYYY')+' s/d '+moment($('[name="date_end"]').val()).format('DD-MMM-YYYY'));
            if($('[name="branch"]').val() != '')
                {
                    pick_branch($('[name="branch"]').val());
                }
        });
        function tes()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/gen_profitloss')?>",
                type: "POST",
                data: $('#form_trbal').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        $sal = (data['a'][i]["saldo"]>0)?'<td name="credit'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">'+data['a'][i]["saldo"]+'</td>':'<td name="credit'+data['a'][i]["COA_ACC"]+'" class="text-right red chgnum">'+data['a'][i]["saldo"]+'</td>';
                        var tr = $('<tr>').append(
                            $('<td class="text-center">Pendapatan</td>'),
                            $('<td class="text-left">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),                            
                            // $('<td name="debet'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">0</td>'),
                            $($sal),
                            $('<td></td>'),
                            $('<td name="debet'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">0</td>'),
                            $($sal)
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        $sal = (data['b'][i]["saldo"]>0)?'<td name="credit'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">'+data['b'][i]["saldo"]+'</td>':'<td name="credit'+data['b'][i]["COA_ACC"]+'" class="text-right red chgnum">'+data['b'][i]["saldo"]+'</td>'
                        var tr = $('<tr>').append(
                            $('<td class="text-center">Pengeluaran</td>'),
                            $('<td class="text-left">'+data['b'][i]["COA_ACC"]+' - '+data['b'][i]["COA_ACCNAME"]+'</td>'),
                            $($sal),
                            $('<td></td>'),
                            $($sal),
                            $('<td name="credit'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">0</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_journal();
                    $('td.chgnum').number(true,2);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }    
        function dt_journal()
        {
            $('#dtb_rptldg').DataTable({
                info: false,
                searching: false,                
                bLengthChange: false,
                paging: false,
                columnDefs:
                [
                    {visible: false, targets: [0,4,5]},
                    {orderable: false, targets: '_all'}
                ],
                ordering: false,
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(2)
                        .reduce(function(a,b)
                        {
                            return parseFloat(a)+parseFloat(b);
                        }, 0);

                        sum = $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum);

                        return $('<tr/>')                        
                        .append( '<td>'+group+'</td>' )
                        .append( '<td class="text-right"></td>')
                        .append( '<td class="text-right">'+sum+'</td>' );
                    },
                    dataSrc: 0
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
                    total3 = Math.abs(total2) - total;
                    // (total3 > 0) ? txt = 'LABA' : txt = 'RUGI';
                    // sum = $.fn.dataTable.render.number(',','.',2,'Rp ').display(total);
                    // sum2 = $.fn.dataTable.render.number(',','.',2,'Rp ').display(Math.abs(total2));
                    sum3 = $.fn.dataTable.render.number(',','.',2,'Rp ').display(Math.abs(total3));
                    // $('[name="saldodebit"]').text(sum);
                    // $('[name="saldocredit"]').text(sum2);
                    (total3 > 0) ? $('[name="saldoend"]').text(sum3) : $('[name="saldoend"]').text('('+sum3+')');
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
                    $('[name="rpttrbal_branch"]').text(data.BRANCH_NAME);
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