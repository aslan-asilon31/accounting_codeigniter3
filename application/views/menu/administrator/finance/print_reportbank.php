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
                <img id="img_logo" class="img-responsive" src="">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u>LAPORAN BUKU BANK</u></h2>
                <h3 class="text-center" name="rptbank_branch"></h3>
                <h4 class="text-center" name="rptbank_period"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptbank" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">
                                Cabang
                            </th> -->
                            <th class="text-center">
                                Tanggal
                            </th>
                            <th class="text-center">
                                Kode Transaksi
                            </th>                            
                            <th class="text-center">
                                Rekening
                            </th>
                            <th class="text-center">
                                Keterangan
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
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php'; ?>
    <script>
        $(document).ready(function()
        {
            // pick_rptinv();
            gen_bank();
            $('[name="rptbank_period"]').text(moment($('[name="date_start"]').val()).locale('id').format('DD-MMM-YYYY')+' s/d '+moment($('[name="date_end"]').val()).locale('id').format('DD-MMM-YYYY'));
            if($('[name="branch"]').val() != '')
            {
                pick_branch($('[name="branch"]').val());
            }
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
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['a'][i]["BNK_DATE"]).locale('id').format('DD-MMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["BNK_CODE"]+data['a'][i]["BRANCH_INIT"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["BNKDET_INFO"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["BNKDET_AMOUNT"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['b'][i]["BNKO_DATE"]).locale('id').format('DD-MMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["BNKO_CODE"]+data['b'][i]["BRANCH_INIT"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COA_ACC"]+' - '+data['b'][i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["BNKODET_INFO"]+'</td>'),
                            $('<td class="text-right chgnum">0</td>'),
                            $('<td class="text-right chgnum">'+data['b'][i]["BNKODET_AMOUNT"]+'</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_tp1(2);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function dt_tp1(v)
        {
            $('#dtb_rptbank').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                // responsive: true,
                order: [[2,'asc'],[0, 'asc'],[1,'desc']],
                columnDefs:
                [
                    {visible: false, targets: v},
                    {type: 'date-dd-mmm-yyyy', targets: 0},
                    {orderable: false, targets: '_all'}
                ],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(4)
                        .reduce(function(a,b)
                        {
                            return parseFloat(a) + parseFloat(b);
                        }, 0);
                        
                        var sum2 = rows.data().pluck(5)
                        .reduce(function(a,b)
                        {
                            return parseFloat(a) + parseFloat(b);
                        }, 0);
                        var sum3 = (sum-sum2)*1;
                        sum3 = (sum3 > 0) ? $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum3) : '('+$.fn.dataTable.render.number(',','.',0,'Rp ').display(Math.abs(sum3))+')';
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        sum2 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum2);
                        return $('<tr/>')                        
                        .append( '<td colspan="3"></td>' )
                        .append( '<td class="text-right">'+sum+'<br>Saldo</td>')
                        .append( '<td class="text-right">'+sum2+'<br>'+sum3+'</td>' );
                    },
                    dataSrc: v
                },
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
                    var newSrc = "<?php echo base_url()?>/assets/img/branchlogo/"+data.BRANCH_LOGO;
                    $('#img_logo').attr('src', newSrc);
                    $('[name="rptbank_branch"]').text(data.BRANCH_NAME);
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