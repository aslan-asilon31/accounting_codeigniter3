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
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.responsive.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.css')?>" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style>
        body
        {
            background: white;
            font-family:"times new roman";
        }
        .row-content
        {            
            min-height: 350px;
        }
        .table th
        {
            border: solid 1px black !important;
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .table td
        {
            border: solid 1px black !important;
            margin: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .head-font
        {
            font-family:"times new roman";
            font-size: 18px;
        }
        .content-font
        {
            font-family: "times new roman";
            font-size: 15px;
        }
        .foot-font
        {
            font-family:"times new roman";
            font-size: 16px;
        }

        @media print
        {            
            h3, h4 
            {
                font-size: 14px;
            }
            .logo
            {
                width: 60%;
                height: auto;
            }
            .row-content
            {                
                min-height: 220px;
            }
            .head-font
            {
                font-family:"times new roman";
                font-size: 12px;
            }
            .content-font
            {
                font-family: "times new roman";
                font-size: 12px;
            }
            .foot-font
            {
                font-family:"times new roman";
                font-size: 10px;
            }
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- <page size="A4"> -->
    <!-- <div id="ygdiprint"> -->
    <div class="container">
        <input type="hidden" name="bk_id" value="<?php echo $id;?>">
        <input type="hidden" name="supp_id" value="<?php echo $id;?>">
        <div class="row">
            <div class="col-xs-4">
                <img id="img_logo" class="img-responsive logo" src="">
            </div>
            <div class="col-xs-4 text-center">
                <h3><strong><u>BUKTI BANK KELUAR</u></strong></h3>
                <h3 style="margin-top:-10px">No.<span name="no_bk"></span></h3>
                <span name="acc_header"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <address>
                    <!-- <strong>Dari:</strong><br> -->
                    <strong>Match Advertising</strong><br>
                    JL. Lesti No.42, Surabaya 60241<br>
                    Telp. (031) 567 8346 (Hunting)<br>
                    Fax. (031) 568 0646<br>
                    Email : info@match-advertising.com<br>
                </address>
            </div>
            <div class="col-xs-4">
                <address>
                    <strong>Kepada :</strong><br>
                    <span name="bank_suppname"></span><br>
                    <span name="bank_suppaddr"></span>&nbsp;<span name="bank_suppcity"></span><br>
                    <span name="bank_suppphone"></span><br>
                    <span name="bank_suppinfo"></span>
                </address>
            </div>
            <div class="col-xs-4">
                <address>
                    <span>Tanggal :</span>&nbsp;<span name="bank_tgl"></span> 
                </address>
            </div>
        </div>
        <div class="row row-content content-font">
            <div class="table-responsive">
                <input type="hidden" name="BNKTRX_NUM">
                <input type="hidden" name="BNKTRX_DATE">
                <input type="hidden" name="BNKTRX_AMOUNT">
                <input type="hidden" name="bank_total">
                <input type="hidden" name="bank_info">
                <input type="hidden" name="bank_terbilang">
                <input type="hidden" name="curr_name">
                <table id="tb_bm" class="table table-condensed">
                    <thead>
                        <tr>
                            <th class="col-sm-2 col-xs-2">Perkiraan</th>
                            <th class="col-sm-7 col-xs-7 text-center">Uraian</th>
                            <th class="col-sm-2 col-xs-2 text-center">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content">
                        <!-- <tr>
                            <td style="border-top: 2px solid;"></td>
                            <td style="border-top: 2px solid;"></td>
                            <td class="text-center" style="border-top: 2px solid;"><strong>Total</strong></td>
                            <td style="border-top: 2px solid;"><strong>Harga</strong></td>
                        </tr> -->                                                
                    </tbody>
                </table>
            </div>
            <div class="row foot-font">
                <div class="col-xs-3 text-center">
                     Pembukuan
                </div>
                <div class="col-xs-2 text-center">
                     Mengetahui
                </div>
                <div class="col-xs-2 text-center">
                     Menyetujui
                </div>
                <div class="col-xs-2 text-center">
                     Kasir
                </div>
                <div class="col-xs-3 text-center">
                     Yang Menyerahkan
                </div>
            </div>   
            <br><br><br>
            <div class="row">
                <div class="col-xs-3 text-center">
                       (.................)  (.................)
                </div>
                <div class="col-xs-2 text-center">
                       (.................)
                </div>
                <div class="col-xs-2 text-center">
                       (.................)
                </div>
                <div class="col-xs-2 text-center">
                       (.................)
                </div>
                <div class="col-xs-3 text-center">
                       (.................)
                </div>
            </div>
        </div>
        <?php include 'application/views/layout/administrator/jspack.php' ?>

        
    <!-- </div> -->
    <!-- <button type="button" id="print" class="btn btn-primary col-md-6 col-md-offset-3" data-toggle="modal" onclick="printContent('ygdiprint'); window.location.reload();return false;"><span class="glyphicon glyphicon-print"></span> Print / Save</button>
    </page> -->
    

    
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
    <script>
        var id; var suppid; var prc; var qty; var sub;
        $(document).ready(function()
        {
            id=$('[name="bk_id"]').val();            
            prc = 0; qty = 0; sub = 0;
            pick_bk(id);
            pick_branch("<?= $this->session->userdata('user_branch')?>");
            // $('[name=po_qty]').on('input', function() {
                // hitung();
            // });
        });

        function dtable()
        {
            //datatables        
            table = $('#dtb_bk').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_printbk')?>",
                    "type": "POST",                
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                { 
                    "targets": [ 0 ], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                ],
            });
        }


        function pick_bk(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bk_id"]').val(data.BNKO_ID);
                    search_acc(data.COA_ID);
                    $('[name="bm_code"]').val(data.BNKO_CODE);
                    $('[name="no_bk"]').text(data.BNKO_CODE);
                    $('[name="bank_tgl"]').text(data.BNKO_DATE);
                    $('[name="bank_info"]').val(data.BNKO_INFO);
                    $('[name="supp_id"]').val(data.BNKO_SUPP);
                    $('[name="pass"]').text(data.BNKO_ID);
                    if (($('[name="supp_id"]').val()) != ''){
                         pick_supp($('[name="supp_id"]').val());
                    }
                    pick_sum_total_bk($('[name="bk_id"]').val());
                    pick_curr(data.CURR_ID);
                    pick_bktrxdet($('[name="bk_id"]').val()); 
                    // pick_bkdet($('[name="bk_id"]').val());       
                    $('#modal_bk').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_bkdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bkdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    var total= $('[name="bank_total"]').val();
                    var info = $('[name="bank_info"]').val();
                    var curr = $('[name="curr_name"]').val();
                    var terbi = $('[name="bank_terbilang"]').val() + ' ' + curr;
                    for (var i = 0; i < data.length; i++) {
                      var $tr = $('<tr>').append(
                            $('<td>').text(data[i]["COA_ACC"]+' - '+data[i]["COA_ACCNAME"]),
                            $('<td>').text(data[i]["BNKODET_INFO"]),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["BNKODET_AMOUNT"],".",",",2))
                            ).appendTo('#tb_content');
                    };
                    
                    var trxnum = $('[name="BNKTRX_NUM"]').val();
                    var trxdate = moment($('[name="BNKTRX_DATE"]').val()).format('DD/MM/YY');
                    var trxamount = $('[name="BNKTRX_AMOUNT"]').val();
                    // alert($('[name="BNKTRX_AMOUNT"]').val());
                    var $tr = $('<tr>').append(
                            $('<td>').text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(trxnum + '\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0' + trxdate + '\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0' + formatCurrency(trxamount,".",",",2)),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').css('border-top','2px solid').text(''),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text('Total Rp'),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text(formatCurrency(total,".",".",2))
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').text('Keterangan :'),
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(info),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').text('Terbilang :'),
                            $('<td>').css({'font-weight':'bold','text-align':'left'}).text(terbi),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_bktrxdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bktrxdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                { 
                   $('[name="BNKTRX_NUM"]').val(data.BNKTRXO_NUM); 
                   $('[name="BNKTRX_DATE"]').val(data.BNKTRXO_DATE); 
                   $('[name="BNKTRX_AMOUNT"]').val(data.BNKTRXO_AMOUNT);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_supp(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_supp/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_suppname"]').text(data.SUPP_NAME);
                    $('[name="bank_suppaddr"]').text(data.SUPP_ADDRESS);
                    $('[name="bank_suppcity"]').text(data.SUPP_CITY);
                    $('[name="bank_suppphone"]').text(data.SUPP_PHONE);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_sum_total_bk(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_bk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_total"]').val(data.SubTotal);
                    pick_terbilang_total_bk(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_terbilang_total_bk(total)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_terbilang"]').val(data.terbilang);  
                    pick_bkdet($('[name="bk_id"]').val());          
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function search_acc(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                       $('[name="acc_header"]').text(data.COA_ACC +" - "+ data.COA_ACCNAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_curr(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="curr_name"]').val(data.CURR_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
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
        function formatCurrency(amount, decimalSeparator, thousandsSeparator, nDecimalDigits)
        {  
            var num = parseFloat( amount ); //convert to float  
            //default values  
            decimalSeparator = decimalSeparator || '.';  
            thousandsSeparator = thousandsSeparator || ',';  
            nDecimalDigits = nDecimalDigits == null? 2 : nDecimalDigits;  
      
            var fixed = num.toFixed(nDecimalDigits); //limit or add decimal digits  
            //separate begin [$1], middle [$2] and decimal digits [$4]  
            var parts = new RegExp('^(-?\\d{1,3})((?:\\d{3})+)(\\.(\\d{' + nDecimalDigits + '}))?$').exec(fixed);   
      
            if(parts){ //num >= 1000 || num < = -1000  
                 return parts[1] + parts[2].replace(/\d{3}/g, thousandsSeparator + '$&') + (parts[4] ? decimalSeparator + parts[4] : '');  
            }else{  
                 return fixed.replace('.', decimalSeparator);  
            }  
        }  
    </script>

    <!-- print area -->
    <script type="text/javascript">
    function printContent(printpage){
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr+newstr+footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
    </script>
    
</body>
</html>