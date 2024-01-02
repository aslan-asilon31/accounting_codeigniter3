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
            font-size: 12px;
            font-family: 'times new roman';
        }
        .bg-table
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
        }
        .red
        {
            color: red;
        }
        @media print
        {
            .red
            {
                color: red !important;
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
                <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u>LAPORAN NERACA</u></h2>
                <h3 class="text-center" name="rptbalsh_branch"></h3>
                <h4 class="text-center" name="rptbalsh_period"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-6 table-responsive">
                <table id="dtb_rptbalsh" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="col-xs-2 text-center">
                                Induk
                            </th>
                            <th class="col-xs-4 text-center">
                                Rekening
                            </th>                            
                            <th class="col-xs-3 text-center">
                                Nilai Akun
                            </th>
                            <th class="col-xs-3 text-center">
                                Jumlah
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content2"></tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" class="text-right">Saldo</th>
                            <th name="saldodebit" class="text-right chgnum"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-sm-6 col-xs-6 table-responsive">
                <table id="dtb_rptbalsh2" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="col-xs-2 text-center">
                                Induk
                            </th>
                            <th class="col-xs-4 text-center">
                                Rekening
                            </th>
                            <th class="col-xs-3 text-center">
                                Nilai Akun
                            </th>
                            <th class="col-xs-3 text-center">
                                Jumlah
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" class="text-right">Saldo</th>
                            <th name="saldocredit2" class="text-right chgnum"></th>
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
            $('[name="rptbalsh_period"]').text(moment($('[name="date_start"]').val()).format('DD-MMM-YYYY')+' s/d '+moment($('[name="date_end"]').val()).format('DD-MMM-YYYY'));
            if($('[name="branch"]').val() != '')
                {
                    pick_branch($('[name="branch"]').val());
                }
        });
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
                        var sum_deb = data['a'][i]['SUM_DEBIT'];
                        var sum_cre = data['a'][i]['SUM_CREDIT'];
                        var coa_deb = data['a'][i]['COA_DEBIT'];
                        var coa_cre = data['a'][i]['COA_CREDIT'];
                        var salcoa = coa_cre-coa_deb;
                        var salstr = sum_cre-sum_deb;
                        var salacc = (salstr*1)+(salcoa*1)+(data['a'][i]["saldo"]*1)
                        var sal = (salacc > 0)?'<td class="text-right chgnum">'+salacc+'</td>':'<td class="text-right red chgnum">'+salacc+'</td>';
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["PAR_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),
                            $(sal),
                            $('<td name="debet'+data['a'][i]["COA_ACC"]+'" class="text-right"></td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        var sum_deb = data['b'][i]['SUM_DEBIT'];
                        var sum_cre = data['b'][i]['SUM_CREDIT'];
                        var coa_deb = data['b'][i]['COA_DEBIT'];
                        var coa_cre = data['b'][i]['COA_CREDIT'];
                        var salcoa = coa_deb-coa_cre;
                        var salstr = sum_deb-sum_cre;
                        var salacc = (salstr*1)+(salcoa*1)+(data['b'][i]["saldo"]*1)
                        var sal = (salacc > 0)?'<td class="text-right chgnum">'+salacc+'</td>':'<td class="text-right red chgnum">'+salacc+'</td>';
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['b'][i]["PAR_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COA_ACC"]+' - '+data['b'][i]["COA_ACCNAME"]+'</td>'),
                            $(sal),
                            $('<td name="credit'+data['b'][i]["COA_ACC"]+'" class="text-right"></td>')
                            ).appendTo('#tb_content2');
                    }
                    for (var i = 0; i < data['c'].length; i++)
                    {
                        var salacc = data['c'][i]["saldo"]
                        var sal = (salacc > 0)?'<td class="text-right chgnum">'+salacc+'</td>':'<td class="text-right red chgnum">'+salacc+'</td>';
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['c'][i]["PAR_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['c'][i]["COA_ACC"]+' - '+data['c'][i]["COA_ACCNAME"]+'</td>'),
                            $(sal),
                            $('<td name="credit'+data['c'][i]["COA_ACC"]+'" class="text-right"></td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['d'].length; i++)
                    {
                        var salacc = data['d'][i]["saldo"]
                        var sal = (salacc > 0)?'<td class="text-right chgnum">'+salacc+'</td>':'<td class="text-right red chgnum">'+salacc+'</td>';
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['d'][i]["PAR_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['d'][i]["COA_ACC"]+' - '+data['d'][i]["COA_ACCNAME"]+'</td>'),
                            $(sal),
                            $('<td name="credit'+data['d'][i]["COA_ACC"]+'" class="text-right"></td>')
                            ).appendTo('#tb_content');
                    }
                    dt_journal();
                    dt_journal2();
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
            $('#dtb_rptbalsh').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                columnDefs:
                [
                    {visible: false, targets: 0},                    
                    {orderable: false, targets: '_all'}
                ],
                order: [[1,'asc']],
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
                    total = api.column(2).data().reduce( function (a,b)
                    {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    sum = $.fn.dataTable.render.number(',','.',2,'Rp ').display(total);
                    $('[name="saldodebit"]').text(sum);
                }
            });
            $('th').removeClass('sorting_asc');
            $('th').removeClass('sorting_desc');
        }

        function dt_journal2()
        {
            $('#dtb_rptbalsh2').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                columnDefs:
                [
                    {visible: false, targets: 0},                    
                    {orderable: false, targets: '_all'}
                ],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(2)
                        .reduce(function(a,b)
                        {
                            return a+b*1;
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
                    total = api.column(2).data().reduce( function (a,b)
                    {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    sum = $.fn.dataTable.render.number(',','.',2,'Rp ').display(total);
                    $('[name="saldocredit2"]').text(sum);
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
                    $('[name="rptbalsh_branch"]').text(data.BRANCH_NAME);
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