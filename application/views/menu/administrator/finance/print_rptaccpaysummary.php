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
        <form id="form_inv">
            <input type="hidden" name="supp_id" value="<?php echo $supp; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="type" value="<?php echo $rpttype; ?>">
        </form>        
        <div class="row">
            <div class="col-xs-4">
                <img id="img_logo" class="img-responsive logo" src="">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u>LAPORAN HUTANG SUMMARY</u></h2>
                <h3 class="text-center" name="rptinv_branch"></h3>
                <h4 class="text-center" name="rptinv_period"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptinv" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Kode
                            </th>
                            <th class="text-center">
                                Supplier
                            </th>   
                            <th class="text-center">
                                Masuk
                            </th>
                            <th class="text-center">
                                Keluar
                            </th>
                            <th class="col-sm-2 text-center">
                                Saldo
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
    <!-- Addon -->
    <script src="<?php echo base_url('assets/addons/extra.js')?>"></script>
    <script>
        $(document).ready(function()
        {
            pick_rptaccrcv();
            pick_branch("<?= $this->session->userdata('user_branch')?>");
            $('[name="rptinv_period"]').text($('[name="date_start"]').val()+' s/d '+$('[name="date_end"]').val());
            report_type();
        });

        function report_type()
        {
            var n = $('[name="type"]').val();
            return n;
        }
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    // $('[name="img_logo"]').text(data.BRANCH_NAME);
                    var newSrc = "<?php echo base_url()?>/assets/img/branchlogo/"+data.BRANCH_LOGO;
                    $('#img_logo').attr('src', newSrc);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })
        }
        function pick_rptaccrcv()
        {
            var v = report_type();
            if(v == 2)
            {   
                $.ajax({
                    url : "<?php echo site_url('administrator/Finance/gen_rptaccpaysummary')?>",
                    type: "POST",
                    data: $('#form_inv').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {   
                        $('[name="rptinv_branch"]').text(data[0]["BRANCH_NAME"]);
                        for (var i = 0; i < data.length; i++)
                        {   
                            var $tr = $('<tr>').append(
                                $('<td>').css('text-align','center').text(data[i]["kode"]),
                                $('<td>').css('text-align','center').text(data[i]["nama"]),
                                $('<td>').css('text-align','right').text('Rp '+money_conv(data[i]["total"])),
                                $('<td>').css('text-align','right').text('Rp '+money_conv('0')),
                                $('<td>').css('text-align','right').text('Rp '+money_conv(data[i]["total"]))
                                ).appendTo('#tb_content');
                        }
                        //dt_reportinv(0);
                        //alert(data[0]["BRANCH_NAME"]);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }
        }

        function dt_reportinv(v)
        {   
            if(v == 0)
            {
                $('#dtb_rptinv').DataTable({
                    info: false,
                    searching: false,
                    bLengthChange: false,
                    paging: false,
                    // responsive: true,
                    columnDefs:
                    [
                        {visible: false, targets: v},                    
                        {orderable: false, targets: '_all'}
                    ],
                    order: [[v, 'asc']],
                    rowGroup:
                    {
                        endRender: function(rows, group)
                        {
                            var sum = rows.data().pluck(6)
                            .reduce(function(a,b)
                            {
                                return a+b.replace(/[^\d]/g, '')*1;
                            }, 0);                            
                            sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);

                            return $('<tr/>')                        
                            .append( '<td colspan="4"></td>' )
                            .append( '<td class="text-right">SUB TOTAL</td>')
                            .append( '<td class="text-right">'+sum+'</td>' );
                        },
                        dataSrc: v
                    },
                });
            }
            if(v == 1)
            {  
                $('#dtb_rptinv').DataTable({
                    info: false,
                    searching: false,
                    bLengthChange: false,
                    paging: false,
                    // responsive: true,
                    columnDefs:
                    [
                        {visible: false, targets: v},                    
                        {orderable: false, targets: '_all'}
                    ],
                    order: [[v, 'asc']],
                    rowGroup:
                    {
                        endRender: function(rows, group)
                        {
                            var sum = rows.data().pluck(7)
                            .reduce(function(a,b)
                            {
                                return a+b.replace(/[^\d]/g, '')*1;
                            }, 0);                            
                            sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);

                            return $('<tr/>')                        
                            .append( '<td colspan="5"></td>' )
                            .append( '<td class="text-right">SUB TOTAL</td>')
                            .append( '<td class="text-right">'+sum+'</td>' );
                        },
                        dataSrc: v
                    },
                });
            }
            if(v == 3)
            {
                $('#dtb_rptinv').DataTable({
                    info: false,
                    searching: false,
                    bLengthChange: false,
                    paging: false,
                    // responsive: true,
                    columnDefs:
                    [
                        {visible: false, targets: v},                    
                        {orderable: false, targets: '_all'}
                    ],
                    order: [[v, 'asc']],
                    rowGroup:
                    {
                        endRender: function(rows, group)
                        {
                            var sum = rows.data().pluck(7)
                            .reduce(function(a,b)
                            {
                                return a+b.replace(/[^\d]/g, '')*1;
                            }, 0);                            
                            sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);

                            return $('<tr/>')                        
                            .append( '<td colspan="5"></td>' )
                            .append( '<td class="text-right">SUB TOTAL</td>')
                            .append( '<td class="text-right">'+sum+'</td>' );
                        },
                        dataSrc: v
                    },
                });
            }
        }
    </script>
</body>
</html>