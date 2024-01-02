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
          height: 14.85cm;
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
        <input type="hidden" name="gk_id" value="<?php echo $id;?>">
        <input type="hidden" name="supp_id" value="<?php echo $id;?>">
        <div class="container-fluid">                
            <hr style="border: solid 2px; color: black; margin-top: 0; margin-bottom: 0;">
            <div class="text-center">
                        <h3><strong><u>BUKTI GIRO KELUAR</u></strong></h3>
                        <h3 style="margin-top:-10px">No.<span name="no_gk"></span></h3>
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
                        <!-- <div class="col-xs-4">
                            <address>
                                <strong>Kepada :</strong><br>
                                <span name="giro_custname"></span><br>
                                <span name="giro_custaddr"></span>&nbsp;<span name="bank_girocity"></span><br>
                                <span name="giro_custphone"></span><br>
                                <span name="giro_custinfo"></span>
                            </address>
                        </div> -->
                        <div class="col-xs-4">
                            <address>
                                <span>Tanggal :</span>&nbsp;<span name="giro_tgl"></span> 
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <input type="hidden" name="gir_id">
                                        <input type="hidden" name="bnktrx_id">
                                        <input type="hidden" name="bnk_id">
                                        <input type="hidden" name="cust_id">
                                        <input type="hidden" name="giro_custname">
                                        <input type="hidden" name="giro_total">
                                        <input type="hidden" name="giro_info">
                                        <input type="hidden" name="giro_terbilang">
                                        <input type="hidden" name="curr_name">
                                        <table id="tb_gm" class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-4 col-xs-4">Supplier</th>
                                                    <th class="col-sm-3 col-xs-3 text-center">No. Giro</th>
                                                    <th class="col-sm-2 col-xs-2 text-center">Tgl. Giro</th>
                                                    <th class="col-sm-3 col-xs-3 text-center">Jumlah</th> 
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
                                    <div class="row">
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
                                             Penerima
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
            id=$('[name="gk_id"]').val();            
            prc = 0; qty = 0; sub = 0;
            pick_gk(id);
            
            // $('[name=po_qty]').on('input', function() {
                // hitung();
            // });
        });

        function dtable()
        {
            //datatables        
            table = $('#dtb_gk').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_printgk')?>",
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


        function pick_gk(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_gk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="gk_id"]').val(data.GROUT_ID);
                    $('[name="gk_code"]').val(data.GROUT_CODE);
                    $('[name="no_gk"]').text(data.GROUT_CODE);
                    $('[name="giro_tgl"]').text(data.GROUT_DATE);
                    $('[name="giro_info"]').val(data.GROUT_INFO);
                    // $('[name="appr_id"]').val(data.APPR_ID);
                    // $('[name="cust_id"]').val(data.CUST_ID);
                    $('[name="pass"]').text(data.GROUT_ID);
                    // if (($('[name="cust_id"]').val()) != ''){
                    //      pick_cust($('[name="cust_id"]').val());
                    // }
                    pick_sum_total_gk($('[name="gk_id"]').val());
                    // pick_curr(data.CURR_ID);
                    // pick_bmtrxdet($('[name="bm_id"]').val());       
                    // pick_kmdet($('[name="km_id"]').val());
                    // if(data.APPR_ID != null)
                    // {
                    //     pick_appr($('[name="appr_id"]').val());
                    // }
                    $('#modal_gk').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_gkdet(id)
        {            
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/show_gkdet/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                       
                    var total= $('[name="giro_total"]').val();
                    var info = $('[name="giro_info"]').val();
                    var curr = $('[name="curr_name"]').val();
                    var terbi = $('[name="giro_terbilang"]').val() + ' ' + curr;
                    for (var i = 0; i < data.length; i++) {
                            var $tr = $('<tr>').append(
                            $('<td>').text(data[i]["SUPP_CODE"] + '\xa0' + data[i]["SUPP_NAME"]),    
                            $('<td>').text(data[i]["GROUTDET_CODE"]),    
                            $('<td>').text(data[i]["GROUTDET_DATE"]),
                            $('<td>').css('text-align','right').text(formatCurrency(data[i]["GROUTDET_AMOUNT"],".",",",2))
                            ).appendTo('#tb_content');
                    };
                    
                    var $tr = $('<tr>').append(
                            $('<td>').css('border-top','2px solid').text(''),
                            $('<td>').css('border-top','2px solid').text(''),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text('Total Rp'),
                            $('<td>').css({'border-top':'2px solid','font-weight':'bold','text-align':'right'}).text(formatCurrency(total,".",".",2))
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').text('Keterangan : '+ info)
                            // $('<td>').css({'font-weight':'bold','text-align':'left'}).text(info),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                    var $tr = $('<tr>').append(
                            $('<td>').text('Terbilang : ' + terbi)
                            // $('<td>').css({'font-weight':'bold','text-align':'left'}).text(terbi),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text(''),
                            // $('<td>').css({'font-weight':'bold','text-align':'right'}).text('')
                            ).appendTo('#tb_content');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_cust(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cust/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_custname"]').text(data.CUST_NAME);
                    $('[name="kas_custaddr"]').text(data.CUST_ADDRESS);
                    $('[name="kas_custcity"]').text(data.CUST_CITY);
                    $('[name="kas_custphone"]').text(data.CUST_PHONE);
                    // $('[name="inv_suppinfo"]').text(data.SUPP_OTHERCTC);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_sum_total_gk(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_sum_gk/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="giro_total"]').val(data.SubTotal);
                    pick_terbilang_total_gk(data.SubTotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_terbilang_total_gk(total)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_numbsp/')?>" + total,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="giro_terbilang"]').val(data.terbilang);   
                    pick_gkdet($('[name="gk_id"]').val());         
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