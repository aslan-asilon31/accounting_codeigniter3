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
            font-size: 14px;
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
        .row-start
        {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <form id="form_rptpo">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="rpt_type" value="<?php echo $rpt_type; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u><span name="rptusg_type"></span> </u></h2>
                <h3 class="text-center" name="rptusg_branch"></h3>
                <h4 class="text-center" name="rptusg_period"></h4>
            </div>
        </div>
        <div id="tp1" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptusg_t1" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                No Pakai
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>
                            <th class="text-center">
                                Barang
                            </th>                            
                            <th class="text-center">
                                Jumlah
                            </th>
                            <th class="text-center">
                                Harga
                            </th>
                            <th class="text-center">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp1"></tbody>
                </table>
            </div>
        </div>
        <div id="tp2" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptusg_t2" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                No Pakai
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>
                            <th class="text-center">
                                Info
                            </th>
                            <th class="text-center">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp2"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            check_();
            $('[name="rptusg_period"]').text($('[name="date_start"]').val()+' s/d '+$('[name="date_end"]').val());
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
                $('#tp1').removeClass('row-start');
                $('[name="rptusg_type"]').text('LAPORAN PEMAKAIAN PER NOMOR DETAIL');
                gen_tp1(0);
            }
            if(tp == '2')
            {
                $('#tp2').removeClass('row-start');
                $('[name="rptusg_type"]').text('LAPORAN PEMAKAIAN PER NOMOR SUMMARY');
                gen_tp2(0);
            }
        }
        function gen_tp1(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_rptusg_t1')?>",
                type: "POST",
                data: $('#form_rptpo').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var sub = parseInt(data['a'][i]["USGDET_QTY"])*parseInt(data['a'][i]["GD_PRICE"]);
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["USGGA_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["USGGA_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["USGGADET_QTY"]+' '+data['a'][i]["GD_MEASURE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["GD_PRICE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["USGGADET_SUB"]+'</td>')
                            ).appendTo('#tb_content_tp1');
                    }
                    dt_tp1(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp2(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_rptusg_t2')?>",
                type: "POST",
                data: $('#form_rptpo').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["usgga_code"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["usgga_date"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["usgga_info"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["sub"]+'</td>'),
                            ).appendTo('#tb_content_tp2');
                    }
                    dt_tp2(v);
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
            $('#dtb_rptusg_t1').DataTable({
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
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(5)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        return $('<tr/>')                        
                        .append( '<td colspan="4" class="text-right">Sub Total</td>' )
                        .append( '<td class="text-right">'+sum+'</td>');
                    },
                    dataSrc: v
                },
            });
        }
        function dt_tp2(v)
        {
            $('#dtb_rptusg_t2').DataTable({
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
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(3)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        return $('<tr/>')                        
                        .append( '<td colspan="2" class="text-right">Sub Total</td>' )
                        .append( '<td class="text-right">'+sum+'</td>');
                    },
                    dataSrc: v
                },
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
                    $('[name="rptusg_branch"]').text(data.BRANCH_NAME);
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