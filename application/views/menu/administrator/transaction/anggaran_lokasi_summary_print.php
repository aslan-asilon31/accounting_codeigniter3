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
    <style type="text/css">
        body {
          background: rgb(204,204,204);
          font-size: 10px;
        }        
        page {          
          background: white;
          display: block;
          margin: 0 auto;
          margin-bottom: 0.5cm;
          box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] {  
          width: 21cm;
          height: 16.85cm;
        }
        page[size="A4"][layout="portrait"] {
          width: 29.7cm;
          height: 21cm;  
        }
        @media print {
          body, page {
            margin: 0;
            box-shadow: 0;
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
    <page size="A4">
    <div id="ygdiprint">
        <!-- <input type="hidden" name="bk_id" value="<?php echo $id;?>">
        <input type="hidden" name="supp_id" value="<?php echo $id;?>"> -->
        <form id="form_printanggaran" method="post">
            <input type="hidden" name="tgl1" value="<?php echo $datestart;?>">
            <input type="hidden" name="tgl2" value="<?php echo $dateend;?>">
            <input type="hidden" name="acc_id">
            <input type="hidden" name="branch_id">
        </form>
        <div class="container-fluid">                
            <hr style="border: solid 2px; color: black;"">
                <div class="text-center">
                        <h3><strong><u>LAPORAN Anggaran Per Lokasi Summary</u></strong></h3>
                        <h3>Per Periode :<span name="periode"></span></h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <address>
                                <strong>Match Advertising</strong><br>
                                JL. Lesti No.42, Surabaya 60241<br>
                                Telp. (031) 567 8346 (Hunting)<br>
                                Fax. (031) 568 0646<br>
                                Email : info@match-advertising.com<br>
                                Website : www.match-advertising.com<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                www.matchadonline.com
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <input type="hidden" name="csh_id">
                                        <input type="hidden" name="csh_code">
                                        <input type="hidden" name="tgl1">
                                        <input type="hidden" name="tgl2">
                                        <input type="hidden" name="csh_tgl">
                                        <input type="hidden" name="COA_ACC">
                                        <input type="hidden" name="csh_info">
                                        <input type="hidden" name="csh_amount">
                                        <input type="hidden" name="csh_terbilang">
                                        <input type="hidden" name="curr_name">
                                        <table id="tb_gm" class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" class="col-sm-2 col-xs-2">Lokasi</th>
                                                    <th class="col-sm-2 col-xs-2">No. Proyek</th>
                                                    <th class="col-sm-2 col-xs-2">No. Anggaran</th>
                                                    <th class="col-sm-1 col-xs-1">Tanggal</th>
                                                    <th colspan="2" class="col-sm-4 col-xs-4">Keterangan</th>
                                                    <th class="col-sm-2 col-xs-2">Total</th>
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
                                </div>
                            </div>
                        </div>
                    </div> 
        </div>
    </div>
    <button type="button" id="print" class="btn btn-primary col-md-6 col-md-offset-3" data-toggle="modal" onclick="printContent('ygdiprint'); window.location.reload();return false;"><span class="glyphicon glyphicon-print"></span> Print / Save</button>
    </page>
    

    
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
            id=$('[name="Budget_id"]').val();    
            
            prc = 0; qty = 0; sub = 0;
            show_anggaran();
            
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

       function show_anggaran()
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/show_anggaran_lokasi_detail/')?>/",
                type: "POST",
                data: $('#form_printanggaran').serialize(),
                dataType: "JSON",
                success: function(data)
                {                    
                    var tgl1 = $('[name="tgl1"]').val();
                    var tgl2 = $('[name="tgl2"]').val();
                    var periode = formattanggal(tgl1) + ' s/d ' + formattanggal(tgl2);
                    $('[name="periode"]').text(periode);
                    var cabang = "";
                    var lokasi = "";
                    var atotal = 0;
                    var ctotal = 0;
                    var total = 0;
                    for (var i = 0; i < data.length; i++) {
                        var jenis = data[i]["BNK_CODE"];
                        var rtotal = data[i]["BUDDET_SUM"] * data[i]["BUDDET_AMOUNT"];
                        if (lokasi != data[i]["BUD_LOC"]){
                            atotal = atotal + rtotal;
                            if (cabang != data[i]["BRANCH_NAME"]) {
                               var $tr = $('<tr>').append(
                                         $('<td colspan="3">').text(data[i]["BRANCH_NAME"])
                                        ).appendTo('#tb_content');
                            }
                            var $lc = $('<tr>').append(
                                      $('<td colspan="3">').text(data[i]["LOC_CODE"]+' + '+data[i]["LOC_ADDRESS"]),  
                                      $('<td>').text(''),
                                      $('<td>').text(''),
                                      $('<td>').text(''),  
                                      $('<td>').text('') 
                                    ).appendTo('#tb_content');  
                            var $tr = $('<tr>').append(
                                      $('<td colspan="2">').text(''),
                                      $('<td>').text(data[i]["APPR_CODE"]),  
                                      $('<td>').text(data[i]["BUD_CODE"]),
                                      $('<td>').text(data[i]["BUD_DATE"]), 
                                      $('<td colspan="2">').text(data[i]["BUD_INFO"]),
                                      $('<td>').css('text-align','right').text(formatCurrency(atotal,".",",",2))  
                                    ).appendTo('#tb_content');
                        }
                        ctotal = ctotal + rtotal;
                        total = total + rtotal;
                        if (lokasi != data[i]["BUD_LOC"]){
                            var $ta = $('<tr>').append(
                                      $('<td>').text(''),
                                      $('<td colspan="3">').text(''), 
                                      $('<td>').text(''), 
                                      $('<td>').text(''),
                                      $('<td>').text(''),
                                      $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right','border-bottom':'double'}).text(formatCurrency(atotal,".",",",2))  
                                     ).appendTo('#tb_content');
                            lokasi=data[i]["BUD_LOC"];
                            atotal = 0;
                        }    
                        if (cabang != data[i]["BRANCH_NAME"]) {
                            var $tc = $('<tr>').append(
                                         $('<td>').text(''),
                                         $('<td colspan="3">').text(''), 
                                         $('<td>').text(''), 
                                         $('<td>').text(''),
                                         $('<td>').text(''),
                                         $('<td>').css({'font-weight':'bold','text-align':'right','border-bottom':'double'}).text(formatCurrency(ctotal,".",",",2))
                                        ).appendTo('#tb_content');
                            cabang=data[i]["BRANCH_NAME"];
                            ctotal = 0;
                        }    
                    };
                    var $tot = $('<tr>').append(
                                      $('<td>').text(''),
                                      $('<td colspan="3">').text(''), 
                                      $('<td>').text(''), 
                                      $('<td>').text(''),
                                      $('<td>').css({'font-weight':'bold','text-align':'right'}).text('Grand Total'),
                                      $('<td>').css({'font-weight':'bold','text-align':'right'}).text(formatCurrency(total,".",",",2))   
                                   ).appendTo('#tb_content');

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    
        function pick_budgetdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_pick_budgetdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    var total= $('[name="Budget_total"]').val();
                    var info = $('[name="Budget_info"]').val();
                    // var curr = $('[name="curr_name"]').val();
                    // var terbi = $('[name="Budget_terbilang"]').val() + '\xa0' + curr;
                    var stotal=0;
                    for (var i = 0; i < data.length; i++) {
                      stotal = data[i]["BUDDET_SUM"] * data[i]["BUDDET_AMOUNT"];
                      var $tr = $('<tr>').append(
                            $('<td>').text(i+1),
                            $('<td>').text(data[i]["BUDDET_INFO"]),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["BUDDET_SUM"],".",",",2)),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["BUDDET_AMOUNT"],".",",",2)),
                            $('<td>').css('text-align','right').text(formatCurrency(stotal,".",",",2))
                            ).appendTo('#tb_content');
                    };
                    
                    // var trxnum = $('[name="BNKTRX_NUM"]').val();
                    var trxdate = moment($('[name="Budget_DATE"]').val()).format('DD/MM/YY');
                    var trxamount = $('[name="Budget_AMOUNT"]').val();
                    var $tr = $('<tr>').append(
                            $('<td colspan="2">').css({'font-weight':'bold','text-align':'left'}).text('Keterangan :' + info),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_sum_total_ra(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/ajax_pick_sum_ra/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="Budget_total"]').val(data.SubTotal);
                    pick_terbilang_total_ra(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_terbilang_total_ra(total)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Transaction/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="Budget_terbilang"]').val(data.terbilang);   
                    // pick_bktrxdet($('[name="bud_id"]').val()); 
                    pick_budgetdet($('[name="Budget_id"]').val());        
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
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

        function formattanggal(tanggal)
        {
            var today = tanggal; 
            var dd = today.substr(8,2); 
            var mm = today.substr(5,2); 
            var yyyy = today.substr(0,4); 
            var todaynew = dd+'/'+mm+'/'+yyyy; 
            return todaynew;
        }
    </script>
    
</body>
</html>