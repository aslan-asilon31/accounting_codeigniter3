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
          height: 21cm;
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
        <form id="form_printbkas" method="post">
            <input type="hidden" name="tax_id" value="<?php echo $id;?>">
            <input type="hidden" name="branch_id">
        </form>
        <div class="container-fluid">                
            <div class="row">
                <div class="col-sm-8 col-xs-8"></div>
                <div class="col-sm-4 col-xs-4">
                     <tr text-alignment="right"><td>Lembar 1 : Untuk Pembeli BKP / Penerima JKP</td></tr>
                     <tr text-alignment="right"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sebagai bukti Pajak Masukan</td></tr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="text-center" >
                                <h3><strong><u>FAKTUR PAJAK</u></strong></h3>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div style="border:solid 1px black">
                        <!-- <div class="col-sm-10 col-xs-10"> -->
                            <div>
                                <tr><td>Kode dan Nomor Seri Faktur Pajak</td><td>:<span name="nomor_faktur"></span></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td><span name="nomor_invoice"></span></td>
                                </tr>
                            </div>
                        <!-- </div> -->
                        <!-- <div>
                            <tr></tr>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div style="border:solid 1px black">
                        <tr><td>Pengusaha Kena Pajak</td></tr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div style="border:solid 1px black">
                        <div class="col-sm-2 col-xs-2">
                            <div>
                                <tr><td>Nama                 : </td></tr>
                            </div>
                            <div>
                                <tr><td>Alamat               : </td></tr>
                            </div>
                            <div>
                                <tr><td>N.P.W.P              : </td></tr>
                            </div>
                        </div>
                        <div>
                            <div>
                                <tr><td>PT Multi ARTISTIKACITHRA</td></tr>
                            </div>
                            <div>
                                <tr><td>JL. LESTI 42, RT 008 RW 007, DARMO WONOKROMO, SURABAYA, JAWATIMUR</td></tr>
                            </div>
                            <div>
                                <tr><td>01.531.108.7.609.000</td></tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div style="border:solid 1px black">
                         <tr><td>Pembeli Barang Kena Pajak / Penerima Jasa Kena Pajak</td></tr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div style="border:solid 1px black">
                        <div class="col-sm-2 col-xs-2">
                            <div>
                                 <tr><td>Nama                 :</td></tr>
                            </div>
                            <div>
                                 <tr><td>Alamat               :</td></tr>
                            </div>
                            <div>
                                 <tr><td>N.P.W.P              :</td></tr>
                            </div>
                        </div>
                        <div>
                            <div>
                                <tr><td><span name="nama_customer"></span></td></tr>
                            </div>
                            <div>
                                <tr><td><span name="alamat_customer"></span></td></tr>
                            </div>
                            <div>
                                <tr><td><span name="npwp"></span></td></tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="table-responsive">
                        <table id="tb_gm" class="table table-condensed" rules="cols" style="border:solid 1px black">
                            <thead>
                                <tr>
                                    <th class="col-sm-1 col-xs-1" style="border-bottom:1px solid">No. Urut</th>
                                    <th class="col-sm-9 col-xs-9 text-center" style="border-bottom:1px solid">Nama Barang Kena Pajak / Jasa Kena Pajak</th>
                                    <th class="col-sm-2 col-xs-2 text-center" style="border-bottom:1px solid">Harga Jual / Penggantian / Uang Muka / Termin (Rp)</th>
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
            <div class="row">
               <div class="col-sm-4 col-xs-4">
                    <tr>
                    <td>Pajak Penjualan Atas Barang Mewah</td>
                    </tr>
               </div>
               <div class="col-sm-4 col-xs-4"></div>
               <div class="col-sm-4 col-xs-4">
                   <tr>
                        <td>Surabaya, tgl <span name="tgl"></span></td>
                    </tr>
               </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-4">
                    <table id="tb_trf" class="table table-condensed" style="border:solid 1px black" rules="cols">
                        <THEAD>
                            <th class="col-sm-4 col-xs-4" style="border-bottom:1px solid">Tarif</th>
                            <th class="col-sm-4 col-xs-4" style="border-bottom:1px solid">Dpp</th>
                            <th class="col-sm-4 col-xs-4" style="border-bottom:1px solid">PPn BM</th>
                        </THEAD>
                        <TBODY>
                            <div>
                                <tr><td>.............%</td><td>Rp...............</td><td>Rp...............</td></tr>
                            </div>
                            <div>
                                <tr><td>.............%</td><td>Rp...............</td><td>Rp...............</td></tr>
                            </div>
                            <div>
                                <tr><td>.............%</td><td>Rp...............</td><td>Rp...............</td></tr>
                            </div>
                            <div>
                                <tr><td>.............%</td><td>Rp...............</td><td>Rp...............</td></tr>
                            </div>
                            <div>
                                <tr><td colspan="2" style="border-top:1px solid">Jumlah</td><td style="border-top:1px solid">Rp...............</td></tr>
                            </div>
                        </TBODY>
                    </table>
                </div>
                <div class="col-sm-4 col-xs-4"></div>
                <div class="col-sm-4 col-xs-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div><tr><td>Nama :</td><td>Dewi Puspo</td></tr></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div>
                        <tr><td colspan="2">*) Coret yang tidak perlu</td></tr>
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
            id=$('[name="tax_id"]').val();            
            prc = 0; qty = 0; sub = 0;
            show_fk();
            show_fkdetails();
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

        function show_fk()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/show_faktur/')?>/",
                    type: "POST",
                    data: $('#form_printbkas').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {           
                        var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                        var bulan = ['Januari', 'Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];

                        var tanggal = new Date().getDate();
                        var xhari = new Date().getDay();
                        var xbulan = new Date().getMonth();
                        var xtahun = new Date().getYear();

                        var hari = hari[xhari];
                        var bulan = bulan[xbulan];
                        var tahun = (xtahun < 1000)?xtahun + 1900 : xtahun;
                        $('[name="tgl"]').text(tanggal+' '+bulan+' '+tahun);
                        for (var i = 0; i < data.length; i++) {
                            $('[name="nomor_invoice"]').text(data[i]["INV_CODE"]);
                            $('[name="nomor_faktur"]').text(data[i]["TINV_TAXCODE"]);
                            $('[name="nama_customer"]').text(data[i]["CUST_NAME"]);
                            $('[name="alamat_customer"]').text(data[i]["CUST_ADDRESS"]);
                            $('[name="npwp"]').text(data[i]["CUST_NPWPACC"]);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
            });

        }

        function show_fkdetails()
        {            
            //Ajax Load data from ajax
            $.ajax({

                url : "<?php echo site_url('administrator/Finance/show_faktur_details/')?>/",
                type: "POST",
                data: $('#form_printbkas').serialize(),
                dataType: "JSON",
                success: function(data)
                {                    
                    var nomor = 0;
                    var total = 0;
                    var ppn = 0;
                    for (var i = 0; i < data.length; i++) {
                        nomor= i+1;
                        var $rc = $('<tr>').append(
                                        $('<td>').text(nomor),
                                        $('<td>').text(data[i]["TINVDET_INFO"]),
                                        $('<td>').css('text-align','right').text(formatCurrency(data[i]["TINVDET_SUB"],".",",",2))
                                ).appendTo('#tb_content');
                        total = total + data[i]["TINVDET_SUB"] * 1;
                        ppn = ppn + data[i]["TINVDET_PPN"] * 1;
                    };
                    var baris= 8 - nomor;
                    for (var i = 0; i < baris; i++) {
                        var $rc = $('<tr>').append(
                                      $('<td>').text(''),
                                      $('<td>').text(''),
                                      $('<td>').text('')
                                    ).appendTo('#tb_content');
                     }
                     var $rc = $('<tr>').append(
                                  $('<td colspan="2">').css({'border-top':'1px solid','border-bottom':'1px solid'}).text('Harga Jual/Penggantin/Uang Muka/Termin *)'),
                                  $('<td>').css({'border-top':'1px solid','border-bottom':'1px solid','text-align':'right'}).text(formatCurrency(total,".",",",2))
                                ).appendTo('#tb_content');
                    var $rc = $('<tr>').append(
                              $('<td colspan="2">').css({'border-top':'1px solid','border-bottom':'1px solid'}).text('Dikurangi Potongan Harga'),
                              $('<td>').css({'border-top':'1px solid','border-bottom':'1px solid','text-align':'right'}).text('0')
                            ).appendTo('#tb_content');
                    
                    var $rc = $('<tr>').append(
                              $('<td colspan="2">').css({'border-top':'1px solid','border-bottom':'1px solid'}).text('Dikurangi Uang Muka yang telah diterima'),
                              $('<td>').css({'border-top':'1px solid','border-bottom':'1px solid','text-align':'right'}).text('0')
                            ).appendTo('#tb_content');
                    var $rc = $('<tr>').append(
                              $('<td colspan="2">').css({'border-top':'1px solid','border-bottom':'1px solid'}).text('Dasar Pengenaan Pajak'),
                              $('<td>').css({'border-top':'1px solid','border-bottom':'1px solid','text-align':'right'}).text(formatCurrency(total,".",",",2))
                            ).appendTo('#tb_content');
                    var $rc = $('<tr>').append(
                              $('<td colspan="2">').css({'border-top':'1px solid','border-bottom':'1px solid'}).text('PPN=10% x Dasar Pengenaan Pajak'),
                              $('<td>').css({'border-top':'1px solid','border-bottom':'1px solid','text-align':'right'}).text(formatCurrency(ppn,".",",",2))
                            ).appendTo('#tb_content');
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