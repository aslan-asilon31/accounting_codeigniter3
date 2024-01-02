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
        .logos
        {
            padding-top: 10px;
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
        tr.group,
        tr.group:hover
        {
            background-color: #ddd !important;
        }
        tr.subgroup,
        tr.subgroup
        {
           background-color: cornsilk !important;
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
    <div class="container-fluid">
        <form id="form_ldg">
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
                <h2 class="text-center"><u>LAPORAN BUKU BESAR</u></h2>
                <h3 class="text-center" name="rptldg_branch"></h3>
                <h4 class="text-center" name="rptldg_period"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptldg" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Tanggal
                            </th>
                            <th class="text-center">
                                Rekening
                            </th>                            
                            <th class="col-xs-2 text-center">
                                No Jurnal
                            </th>                            
                            <th class="text-center">
                                No Bukti
                            </th>
                            <th class="text-center">
                                Keterangan
                            </th>
                            <th class="col-xs-2 text-center">
                                Debet
                            </th>
                            <th class="col-xs-2 text-center">
                                Kredit
                            </th>
                            <th class="text-center">
                                Tes
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            pick_ledger();
            $('[name="rptldg_period"]').text(moment($('[name="date_start"]').val()).locale('id').format('DD-MMM-YYYY')+' s/d '+moment($('[name="date_end"]').val()).locale('id').format('DD-MMM-YYYY'));
            var brc = $('[name="branch"]').val();
            if(brc != '')
            {
                pick_branch($('[name="branch"]').val());
            }
            else
            {
                $('[name="rptldg_branch"]').text('');
            }
        });
        function pick_ledger()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/gen_rptledger')?>",
                type: "POST",
                data: $('#form_ldg').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    var newdate = moment($('[name="date_start"]').val()).subtract(1, 'days');
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        $sal_deb = data['b'][i]['COA_DEBIT'];
                        $sal_cre = data['b'][i]['COA_CREDIT'];
                        $sum_deb = data['b'][i]['SUM_DEBIT'];
                        $sum_cre = data['b'][i]['SUM_CREDIT'];
                        $deb = ($sal_deb*1)+($sum_deb*1);
                        $cre = ($sal_cre*1)+($sum_cre*1);
                        var $tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(newdate).locale('id').format('YYYY-MMM-DD')+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COA_ACC"]+' - '+data['b'][i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-center"></td>'),
                            $('<td class="text-center"></td>'),
                            $('<td class="text-center">Saldo Awal</td>'),
                            $('<td class="text-right chgnum">'+$deb+'</td>'),
                            $('<td class="text-right chgnum">'+$cre+'</td>'),
                            $('<td class="text-center">'+newdate+'</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['a'][i]["JOU_DATE"]).locale('id').format('DD-MMM-YYYY')+'</td>'),
                            // $('<td class="text-center">'+data['a'][i]["JOU_DATE"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["JOU_CODE"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["JOU_REFF"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["JOU_INFO"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["JOUDET_DEBIT"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["JOUDET_CREDIT"]+'</td>'),
                            $('<td class="text-right">'+moment(data['a'][i]["JOU_DATE"])+'</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_journal();
                    $('td.chgnum').number(true,2);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
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
                    {visible: false, targets: [1,7]},
                    {type: 'date-dd-mmm-yyyy', targets: 0},
                    {orderable: false, targets: '_all'}
                ],
                order: [[1, 'asc'],[7, 'asc']],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(5)
                        .reduce(function(a,b)
                        {
                            return a+b*1;
                        }, 0);
                        
                        var sum2 = rows.data().pluck(6)
                        .reduce(function(a,b)
                        {
                            return a+b*1;
                        }, 0);

                        var sum3 = (sum-sum2)*1;
                        sum3 = (sum3 > 0) ? $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum3) : '('+$.fn.dataTable.render.number(',','.',2,'Rp ').display(Math.abs(sum3))+')';
                        sum = $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum);
                        sum2 = $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum2);

                        return $('<tr/>')                        
                        .append( '<td colspan="4"></td>' )
                        .append( '<td class="text-right">'+sum+'<br>Saldo</td>')
                        .append( '<td class="text-right">'+sum2+'<br>'+sum3+'</td>' );
                    },
                    dataSrc: 1
                },
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
                    $('[name="rptldg_branch"]').text(data.BRANCH_NAME);
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