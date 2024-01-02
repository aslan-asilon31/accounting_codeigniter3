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
        .row-start
        {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
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
                <h2 class="text-center"><u><span name="rptst_type"></span> </u></h2>
                <h3 class="text-center" name="rptst_branch"></h3>
                <h4 class="text-center" name="rptst_period"></h4>
            </div>
        </div>
        <div id="tp1" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptstock" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Nama Barang
                            </th>
                            <th class="text-center">
                                Saldo Awal
                            </th>                            
                            <th class="text-center">
                                Pembelian
                            </th>
                            <th class="text-center">
                                Retur Pembelian
                            </th>
                            <th class="text-center">
                                Pemakaian
                            </th>                            
                            <th class="text-center">
                                Retur Pemakaian
                            </th>
                            <th class="text-center">
                                Saldo Akhir
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
            check_();
            $('[name="rptst_period"]').text(moment($('[name="date_start"]').val()).format('DD-MMMM-YYYY')+' s/d '+moment($('[name="date_end"]').val()).format('DD-MMMM-YYYY'));
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
                $('[name="rptst_type"]').text('LAPORAN KARTU STOCK SUMMARY');
                gen_tp1(0);
            }
        }
        function gen_tp1(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/gen_rptstock')?>",
                type: "POST",
                data: $('#form_rptpo').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center chgnum" name="sa'+data['a'][i]["GD_ID"]+'">0</td>'),
                            $('<td class="text-center chgnum" name="prc'+data['a'][i]["GD_ID"]+'">0</td>'),
                            $('<td class="text-center chgnum" name="rprc'+data['a'][i]["GD_ID"]+'">0</td>'),
                            $('<td class="text-center chgnum" name="usg'+data['a'][i]["GD_ID"]+'">0</td>'),
                            $('<td class="text-center chgnum" name="rusg'+data['a'][i]["GD_ID"]+'">0</td>'),
                            $('<td class="text-center chgnum" name="saldo'+data['a'][i]["GD_ID"]+'">'+data['a'][i]["GD_STOCK"]+'</td>'),
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        $('[name="prc'+data['b'][i]["gd_id"]+'"]').text(data['b'][i]["sub"]);
                    }
                    for (var i = 0; i < data['c'].length; i++)
                    {
                        $('[name="rprc'+data['c'][i]["gd_id"]+'"]').text(data['c'][i]["sub"]);
                    }
                    for (var i = 0; i < data['d'].length; i++)
                    {
                        $('[name="usg'+data['d'][i]["gd_id"]+'"]').text(data['d'][i]["sub"]);
                    }
                    for (var i = 0; i < data['e'].length; i++)
                    {
                        $('[name="rusg'+data['e'][i]["gd_id"]+'"]').text(data['e'][i]["sub"]);
                    }
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var snd = Math.abs($('[name="saldo'+data['a'][i]["GD_ID"]+'"]').text());
                        var prc = Math.abs($('[name="prc'+data['a'][i]["GD_ID"]+'"]').text());
                        var rprc = Math.abs($('[name="rprc'+data['a'][i]["GD_ID"]+'"]').text());
                        var usg = Math.abs($('[name="usg'+data['a'][i]["GD_ID"]+'"]').text());
                        var rusg = Math.abs($('[name="rusg'+data['a'][i]["GD_ID"]+'"]').text());
                        var swl = snd-prc+rprc+usg-rusg;
                        $('[name="sa'+data['a'][i]["GD_ID"]+'"]').text(swl);
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
        function dt_tp1(v)
        {
            $('#dtb_rptusg_t1').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
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
                    $('[name="rptst_branch"]').text(data.BRANCH_NAME);
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