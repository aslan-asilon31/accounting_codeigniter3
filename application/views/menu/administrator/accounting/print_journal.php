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
            font-size: 12px;
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
    <div class="container-fluid">
        <form id="form_jou">
            <input type="hidden" name="coa_id" value="<?php echo $coaid; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u>LAPORAN JURNAL UMUM</u></h2>
                <h3 class="text-center" name="rptjou_branch"></h3>
                <h4 class="text-center" name="rptjou_period"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptjou" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">
                                No
                            </th> -->
                            <th class="text-center">
                                Cabang
                            </th>
                            <th class="text-center">
                                No Jurnal
                            </th>                            
                            <th class="text-center">
                                Tanggal
                            </th>
                            <th class="text-center">
                                No Bukti
                            </th>
                            <th class="text-center">
                                Keterangan
                            </th>
                            <th class="text-center">
                                Rekening
                            </th>
                            <th class="col-sm-2 text-center">
                                Debet
                            </th>
                            <th class="col-sm-2 text-center">
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
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            pick_journal();
            $('[name="rptjou_period"]').text(moment($('[name="date_start"]').val()).format('DD-MMM-YYYY')+' s/d '+moment($('[name="date_end"]').val()).format('DD-MMM-YYYY'));
            var brc = $('[name="branch"]').val();
            if(brc != '')
            {
                pick_branch($('[name="branch"]').val());
            }
            else
            {
                $('[name="rptjou_branch"]').text('');
            }
        });
        function pick_journal()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/gen_rptjournal')?>",
                type: "POST",
                data: $('#form_jou').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data.length; i++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td class="text-center">'+data[i]["BRANCH_NAME"]+'</td>'),
                            $('<td class="text-center">'+data[i]["JOU_CODE"]+'</td>'),
                            $('<td class="text-center">'+data[i]["JOU_DATE"]+'</td>'),
                            $('<td class="text-center">'+data[i]["JOU_REFF"]+'</td>'),
                            $('<td class="text-center">'+data[i]["JOU_INFO"]+'</td>'),
                            $('<td class="text-center">'+data[i]["COA_ACC"]+' - '+data[i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-right">'+'Rp '+money_conv(data[i]["JOUDET_DEBIT"])+'</td>'),
                            $('<td class="text-right">'+'Rp '+money_conv(data[i]["JOUDET_CREDIT"])+'</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_journal2();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function dt_journal2()
        {
            $('#dtb_rptjou').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: [0,1]},
                    {orderable: false, targets: '_all'}
                ],
                ordering: false,
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(6)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);
                        
                        var sum2 = rows.data().pluck(7)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        sum2 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum2);
                        return $('<tr/>')                        
                        .append( '<td colspan="4"></td>' )
                        .append( '<td class="text-right">'+sum+'</td>')
                        .append( '<td class="text-right">'+sum2+'</td>' );
                    },
                    dataSrc: 1
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
                    $('[name="rptjou_branch"]').text(data.BRANCH_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })
        }

        // function pick_journal2()
        // {
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Accounting/gen_rptjournal')?>",
        //         type: "POST",
        //         data: $('#form_jou').serialize(),
        //         dataType: "JSON",
        //         success: function(data)
        //         {   
        //             for (var i = 0; i < data.length; i++)
        //             {
        //                 var $tr = $('<tr>').append(
        //                     $('<td>').css('text-align','center').text(i+1),
        //                     $('<td>').css('text-align','center').text(data[i]["JOU_CODE"]),
        //                     $('<td>').css('text-align','center').text(data[i]["JOU_DATE"]),
        //                     $('<td>').css('text-align','center').text(data[i]["JOU_REFF"]),
        //                     $('<td>').css('text-align','center').text(data[i]["JOU_INFO"]),
        //                     $('<td>').css('text-align','center').text(data[i]["COA_ACC"]+' - '+data[i]["COA_ACCNAME"]),
        //                     $('<td>').css('text-align','right').text('Rp '+money_conv(data[i]["JOUDET_DEBIT"])),
        //                     $('<td>').css('text-align','right').text('Rp '+money_conv(data[i]["JOUDET_CREDIT"]))
        //                     ).appendTo('#tb_content');
        //             }
        //             dt_journal2();
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }

        // function dt_journal()
        // {
        //     $('#dtb_rptjou').DataTable({
        //         "iDisplayLength": "All",
        //         "columnDefs":
        //         [
        //             // {"visible": false, "targets": 1},
        //             {"orderable": false, "targets": 1}
        //         ],
        //         "info": false,
        //         // "responsive": true,
        //         // "order": [[2, 'asc']],
        //         "drawCallback": function(settings)
        //         {
        //             var api = this.api();
        //             var rows = api.rows({page:'current'}).nodes();
        //             var last = null;
        //             var clm = [1,2];
        //             for(cl=0 ; c < clm.length ; cl++)
        //             {
        //                 var cls = columns[cl];
        //                 api.column(cls,{page:'current'}).data().each(function (group,i)
        //                 {
        //                     if(last !== group)
        //                     {
        //                         $('rows').eq(i).before('<tr class="group"><td colspan="9">'+group+'</td></tr>');
        //                     }
        //                     last=group;
        //                 });
        //             }
        //             // for(c=0;c<columns.length;c++)
        //             // {
        //             //     var colNo = columns[c];
        //             //     api.column(c,{page:'current'}).data().each(function (group, i)
        //             //     {
        //             //         if(last !== group)
        //             //         {
        //             //             $('rows').eq(i).before('<tr class="group"><td colspan="9">'+group+'</td></tr>');
        //             //         }
        //             //         last=group;
        //             //     });
        //             // }
        //             // api.column(1, {page:'current'}).data().each(function (group, i)
        //             //     {
        //             //         if(last !== group)
        //             //         {
        //             //             var rowData = api.row(i).data();
        //             //             $(rows).eq(i).before('<tr class="group"><td colspan="9">'+group+' - '+rowData[2]+'</td></tr>');
        //             //             last = group;
        //             //         }
        //             //     });
        //         }
        //     });
        // }

        // function dt_journal3()
        // {
        //     $('#dtb_rptjou').dataTable().rowGrouping({
        //         iGroupingColumnIndex: 1,
        //         iGroupingColumnIndex2: 2,
        //     });
        // }

        // function dt_journal4()
        // {
        //     var table = $('#dtb_rptjou').DataTable({
        //         // order: [[1,'asc'],[2,'asc']],
        //         drawCallback: function(settings)
        //         {
        //             var api = this.api();
        //             var tableRows = api.rows({page:'current'}).nodes();
        //             var tableData = api.rows({page:'current'}).data();
        //             var lastGr = null;
        //             var lastSub = null;
        //             var subGr = null;
        //             $(tableRows).each(function()
        //             {
        //                 groupName = this.cells[1].innerHTML;
        //                 subGr = this.cells[2].innerHTML;
        //                 if (lastGr !== groupName)
        //                 {
        //                     $(this).before('<tr class="group"><td colspan="9">'+groupName+'</td></tr>');
        //                     lastGr = groupName;
        //                 }
        //                 if (lastSub !== subGr)
        //                 {
        //                     $(this).before('<tr class="subgroup"><td colspan="9">'+subGr+'</td></tr>');
        //                     lastSub = subGr;
        //                 }
        //             });
        //         }
        //     });
        // }

        // function build_tes()
        // {
        //     // pick_tes1();
        //     pick_tes2();
            
        // }

        // function pick_tes1()
        // {
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Accounting/tes_kasmasuk')?>",
        //         type: "POST",
        //         data: $('#form_jou').serialize(),
        //         dataType: "JSON",
        //         success: function(data)
        //         {   
        //             for (var i = 0; i < data.length; i++)
        //             {
        //                 var $tr = $('<tr>').append(
        //                     $('<td>').css('text-align','center').text(i+1),
        //                     $('<td>').css('text-align','center').text(data[i]["CSH_CODE"]),
        //                     $('<td>').css('text-align','center').text(data[i]["CSH_DATE"]),
        //                     $('<td>').css('text-align','center').text(data[i]["COA_ACCNAME"]),
        //                     $('<td>').css('text-align','right').text('Rp '+money_conv(data[i]["CSHDETIN_AMOUNT"])),
        //                     ).appendTo('#tb_contenttes');
        //             }                    
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }

        // function pick_tes2()
        // {
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Accounting/tes_kaskeluar')?>",
        //         type: "POST",
        //         data: $('#form_jou').serialize(),
        //         dataType: "JSON",
        //         success: function(data)
        //         {   
        //             for (var i = 0; i < data.a.length; i++)
        //             {
        //                 var $tr = $('<tr>').append(
        //                     $('<td>').css('text-align','center').text(i+1),
        //                     $('<td>').css('text-align','center').text(data.a[i]["CSHO_CODE"]),
        //                     $('<td>').css('text-align','center').text(data.a[i]["CSHO_DATE"]),
        //                     $('<td>').css('text-align','center').text(data.a[i]["COA_ACCNAME"]),
        //                     $('<td>').css('text-align','right').text('Rp '+money_conv(data.a[i]["CSHODET_AMOUNT"])),
        //                     ).appendTo('#tb_contenttes');
        //             }
        //             alert(data.a["0"]["CSHO_CODE"]);
        //             for (var i = 0; i < data.b.length; i++)
        //             {
        //                 var $tr = $('<tr>').append(
        //                     $('<td>').css('text-align','center').text(i+1),
        //                     $('<td>').css('text-align','center').text(data.b[i]["CSH_CODE"]),
        //                     $('<td>').css('text-align','center').text(data.b[i]["CSH_DATE"]),
        //                     $('<td>').css('text-align','center').text(data.b[i]["COA_ACCNAME"]),
        //                     $('<td>').css('text-align','right').text('Rp '+money_conv(data.b[i]["CSHDETIN_AMOUNT"])),
        //                     ).appendTo('#tb_contenttes');
        //             }
        //             dt_journaltes();
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }

        // function dt_journaltes()
        // {
        //     $('#dtb_tes').DataTable({
        //         info: false,
        //         searching: false,
        //         // responsive: true,
        //         columnDefs:
        //         [
        //             {visible: false, targets: 3},
        //             {orderable: false, targets: '_all'}
        //         ],
        //         order: [[3, 'asc']],
        //         rowGroup:
        //         {
        //             dataSrc: 3
        //         }
        //     });
        // }

        // function pick_invoice(id)
        // {
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Finance/get_inv/')?>"+id,
        //         type: "GET",
        //         dataType: "JSON",
        //         success: function(data)
        //         {
        //             var id = data.INV_ID;
        //             var invdate = moment(data.INV_DATE).format('DD-MMMM-YYYY')
        //             $('[name="inv_date"]').text(invdate);
        //             $('[name="inv_code"]').text(data.INV_CODE);
        //             $('[name="inv_custname"]').text(data.CUST_NAME);
        //             $('[name="inv_custaddr"]').text(data.CUST_ADDRESS);
        //             $('[name="inv_custcity"]').text(data.CUST_CITY+', '+data.CUST_POSTAL);
        //             $('[name="inv_custprov"]').text(data.CUST_NAME);
        //             $('[name="inv_info"]').text(data.INV_INFO);
        //             pick_invdet(id);
        //             pick_sub(id);
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }

        // function pick_cust(id)
        // {
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Marketing/ajax_pick_cust/')?>" + id,
        //         type: "GET",
        //         dataType: "JSON",
        //         success: function(data)
        //         {   
        //             $('[name="print_clientname"]').text(data.CUST_NAME);
        //             $('[name="print_clientnpwp"]').text(data.CUST_NPWPACC);
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }

        // function pick_sub(id)
        // {
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Finance/get_subinvdet/')?>" + id,
        //         type: "GET",
        //         dataType: "JSON",
        //         success: function(data)
        //         {   
        //             $('[name="inv_subs"]').text(money_conv(data.sub1));
        //             $('[name="inv_ppn"]').text(money_conv(data.ppn1));
        //             $('[name="inv_pph"]').text(money_conv(data.pph1));
        //             $('[name="inv_grand"]').text(money_conv(data.gt1));
        //             pick_spelledtotal(data.gt1);
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }

        // function pick_invdet(id)
        // {
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Finance/get_invdet/')?>" + id,
        //         type: "GET",
        //         dataType: "JSON",
        //         success: function(data)
        //         {   
        //             for (var i = 0; i < data.length; i++)
        //             {
        //                 var $tr = $('<tr>').append(
        //                     $('<td>').css('text-align','center').text(i+1),                    
        //                     $('<td>').css('text-align','center').text(data[i]["APPR_CODE"]),
        //                     $('<td>').css('text-align','center').text(data[i]["APPR_PO"]),
        //                     $('<td>').css('text-align','center').text(data[i]["LOC_NAME"]),
        //                     $('<td>').css('text-align','center').text(data[i]["APPR_INFO"]),
        //                     $('<td>').css('text-align','right').text(money_conv(data[i]["INVDET_AMOUNT"]))
        //                     ).appendTo('#tb_content');
        //             }                   
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }

        // function pick_getappterm(id)
        // {
        //     $.ajax({
        //         url : "<?php echo site_url('administrator/Marketing/get_appterm/')?>" + id,
        //         type: "GET",
        //         dataType: "JSON",
        //         success: function(data)
        //         {   
        //             var all='';
        //             for (var i = 0; i < data.length; i++)
        //             {
        //                 var $ctn = data[i]["TERMSDET_CODE"]+' :'+data[i]["TERMSDET_PERC"]+'% '+data[i]["TERMSDET_INFO"];                        
        //                 if(i==0)
        //                 {
        //                     all = all + $ctn;
        //                 }
        //                 else
        //                 {
        //                     all = all +', '+ $ctn;
        //                 }
        //             }
        //             $('<span>').text(all).appendTo('#pcontent');                    
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Error get data from ajax');
        //         }
        //     });
        // }
    </script>
</body>
</html>