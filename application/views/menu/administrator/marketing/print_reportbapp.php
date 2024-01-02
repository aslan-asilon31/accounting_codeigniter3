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
    </style>
</head>
<body>
    <div class="container">
        <form id="form_rptbapp">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="custid" value="<?php echo $cust; ?>">
            <input type="hidden" name="locid" value="<?php echo $location; ?>">            
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="rpt_type" value="<?php echo $rpt_type; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u>LAPORAN BAPP <span name="rptbapp_type"></span> </u></h2>
                <h3 class="text-center" name="rptbapp_branch"></h3>
                <h4 class="text-center" name="rptbapp_period"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptbapp" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                BAPP
                            </th>
                            <th class="text-center">
                                Tgl BAPP
                            </th>
                            <th class="text-center">
                                Tgl Selesai
                            </th>
                            <th class="text-center">
                                Dokumen
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
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.js')?>"></script>
    <!-- Datetime -->
    <script src="<?php echo base_url('assets/addons/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.responsive.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.rowGroup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.rowGrouping.js')?>"></script>
    <!-- Number to Money -->
    <script src="<?php echo base_url('assets/addons/jquery.number.js') ?>"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script> -->
    <!-- Addon -->
    <script src="<?php echo base_url('assets/addons/extra.js')?>"></script>
    <script>
        $(document).ready(function()
        {
            check_();
            $('[name="rptbapp_period"]').text($('[name="date_start"]').val()+' s/d '+$('[name="date_end"]').val());
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
                $('[name="rptappr_type"]').text('PER NOMOR');
                gen_tp1(0);
            }
            if(tp == '2')
            {
                $('[name="rptappr_type"]').text('PER APPROVAL');
                gen_tp1(4);
            }
        }

        function gen_tp1(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_rptbapp')?>",
                type: "POST",
                data: $('#form_rptappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["BAPP_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["BAPP_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["BAPP_DATEEND"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["BAPP_DOC"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["CUST_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+' - '+data['a'][i]["LOC_ADDRESS"]+', '+data['a'][i]["LOC_CITY"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["APPR_CONTRACT_START"]).format('DD-MMMM-YYYY')+' s/d '+moment(data['a'][i]["APPR_CONTRACT_END"]).format('DD-MMMM-YYYY')+'</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_tp(v);
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

        function dt_tp(v)
        {
            $('#dtb_rptbapp').DataTable({
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
                    $('[name="rptbapp_branch"]').text(data.BRANCH_NAME);
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