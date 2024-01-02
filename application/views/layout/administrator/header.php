<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top iku" role="navigation" style="margin-bottom: 0">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="padding-top: 10px; width: 250px" class="navbar-brand" href="<?php echo base_url() ?>administrator/Dashboard">
                    <img src="<?php echo base_url('assets/img/logo/mtpd.png')?>" class="img-responsive">
                </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('Dashboard/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>                    
                </li>                
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav iki" id="side-menu">                        
                        <li>
                            <a <?php if ($menu == 'dashboard') {echo 'class=active';} ?> href="<?php echo base_url() ?>administrator/Dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li <?php if ($menu == 'master') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-database fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'bank') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/bank')?>"><i class="fa <?php if ($menulist == 'bank') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Bank</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'barang') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/goods')?>"><i class="fa <?php if ($menulist == 'barang') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Barang</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'branch') {echo 'class=active';} ?> href="<?php echo base_url() ?>administrator/Master/branch"><i class="fa <?php if ($menulist == 'branch') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Cabang</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'department') {echo 'class=active';} ?> href="<?php echo base_url() ?>administrator/Master/department"><i class="fa <?php if ($menulist == 'department') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Departemen</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'coa') {echo 'class=active';} ?> href="<?php echo base_url() ?>administrator/Master/coa"><i class="fa <?php if ($menulist == 'coa') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Chart of Account</a>
                                </li> 
                                <li>
                                    <a <?php if ($menulist == 'currency') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/currency')?>"><i class="fa <?php if ($menulist == 'currency') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Currency</a>
                                </li> 
                                <li>
                                    <a <?php if ($menulist == 'customer') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/customer')?>"><i class="fa <?php if ($menulist == 'customer') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Customer</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'invtyp') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/invoice_type')?>"><i class="fa <?php if ($menulist == 'invtyp') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Jenis Invoice</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'location') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/location')?>"><i class="fa <?php if ($menulist == 'location') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Location</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'permit') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/permit')?>"><i class="fa <?php if ($menulist == 'permit') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Permit</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'bboard') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/billboard')?>"><i class="fa <?php if ($menulist == 'bboard') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Reklame</a>
                                </li>                                
                                <li>
                                    <a <?php if ($menulist == 'sales') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/salesforce')?>"><i class="fa <?php if ($menulist == 'sales') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Salesforce</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'supplier') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/supplier')?>"><i class="fa <?php if ($menulist == 'supplier') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Supplier</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'person') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/person')?>"><i class="fa <?php if ($menulist == 'person') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> User</a>
                                </li>   
                            </ul>                            
                        </li>
                        <li <?php if ($menu == 'finance') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Finance<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'dash_finance') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance') ?>"><i class="fa <?php if ($menulist == 'dash_finance') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'inv') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/fin_invoice') ?>"><i class="fa <?php if ($menulist == 'inv') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Invoice</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'cashin') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/cash_in') ?>"><i class="fa <?php if ($menulist == 'cashin') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Kas Masuk</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'cashout') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/cash_out') ?>"><i class="fa <?php if ($menulist == 'cashout') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Kas Keluar</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'bankin') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/bank_in') ?>"><i class="fa <?php if ($menulist == 'bankin') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Bank Masuk</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'bankout') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/bank_out') ?>"><i class="fa <?php if ($menulist == 'bankout') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Bank Keluar</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'bgin') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/bg_in') ?>"><i class="fa <?php if ($menulist == 'bgin') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Pencairan Giro Masuk</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'bgout') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/bg_out') ?>"><i class="fa <?php if ($menulist == 'bgout') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Pencairan Giro Keluar</a>
                                </li>
                                <!-- <li>
                                    <a <?php if ($menulist == 'fpjk') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/f_pjk') ?>"><i class="fa <?php if ($menulist == 'fpjk') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Faktur Pajak</a>
                                </li> -->
                                <li>
                                    <a <?php if ($menulist == 'ppnbrc') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/branch_ppn') ?>"><i class="fa <?php if ($menulist == 'ppnbrc') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Posting PPN Cabang</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'report_finance') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Finance/report') ?>"><i class="fa <?php if ($menulist == 'report_finance') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if ($menu == 'ga') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-gears fa-fw"></i> General Affairs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'dash_ga') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Genaff') ?>"><i class="fa <?php if ($menulist == 'dash_ga') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'po_ga') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Genaff/ga_trx_po') ?>"><i class="fa <?php if ($menulist == 'po_ga') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form PO</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'prc_ga') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Genaff/ga_trx_prc') ?>"><i class="fa <?php if ($menulist == 'prc_ga') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form Pembelian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'retprc_ga') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Genaff/ga_trx_retprc') ?>"><i class="fa <?php if ($menulist == 'retprc_ga') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Retur Pembelian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'usage_ga') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Genaff/ga_trx_usage') ?>"><i class="fa <?php if ($menulist == 'usage_ga') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form Pemakaian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'retusg_ga') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Genaff/ga_trx_retusage') ?>"><i class="fa <?php if ($menulist == 'retusg_ga') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Retur Pemakaian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'adjust_ga') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Genaff/ga_trx_adjust') ?>"><i class="fa <?php if ($menulist == 'adjust_ga') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Penyesuaian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'report_ga') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Genaff/report') ?>"><i class="fa <?php if ($menulist == 'report_ga') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>
                            </ul>                            
                        </li>
                        <li <?php if ($menu == 'logistik') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-cubes fa-fw"></i> Logistik<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'dash_logistik') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik') ?>"><i class="fa <?php if ($menulist == 'dash_logistik') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'po') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/lgt_trx_po') ?>"><i class="fa <?php if ($menulist == 'po') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form PO</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'prc') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/lgt_trx_prc') ?>"><i class="fa <?php if ($menulist == 'prc') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form Pembelian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'prc_sub') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/lgt_trx_prc_sub') ?>"><i class="fa <?php if ($menulist == 'prc_sub') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form Pembelian Sub-Kontrak</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'retprc') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/lgt_trx_retprc') ?>"><i class="fa <?php if ($menulist == 'retprc') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Retur Pembelian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'usage') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/lgt_trx_usage') ?>"><i class="fa <?php if ($menulist == 'usage') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form Pemakaian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'retusg') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/lgt_trx_retusage') ?>"><i class="fa <?php if ($menulist == 'retusg') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Retur Pemakaian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'adjust') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/lgt_trx_adjust') ?>"><i class="fa <?php if ($menulist == 'adjust') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Penyesuaian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'bapplog') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/lgt_trx_bapp') ?>"><i class="fa <?php if ($menulist == 'bapplog') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> BAPP</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'report_logistik') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Logistik/report') ?>"><i class="fa <?php if ($menulist == 'report_logistik') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>                                
                            </ul>
                        </li>
                        <li <?php if ($menu == 'marketing') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-line-chart fa-fw"></i> Marketing<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'dash_marketing') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Marketing')?>"><i class="fa <?php if ($menulist == 'dash_marketing') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'approval') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Marketing/mkt_trx_approval')?>"><i class="fa <?php if ($menulist == 'approval') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form Approval</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'bapp') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Marketing/mkt_trx_bapp') ?>"><i class="fa <?php if ($menulist == 'bapp') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form BAPP</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'report_marketing') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Marketing/report')?>"><i class="fa <?php if ($menulist == 'report_marketing') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>                                
                            </ul>                            
                        </li>
                        <li <?php if ($menu == 'accounting') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Accounting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'dash_account') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Accounting')?>"><i class="fa <?php if ($menulist == 'dash_account') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'saldoacc') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Accounting/saldo_acc')?>"><i class="fa <?php if ($menulist == 'saldoacc') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Saldo Awal</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'journal') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Accounting/journal_acc')?>"><i class="fa <?php if ($menulist == 'journal') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Jurnal Umum</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'journal_adj') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Accounting/journal_adj')?>"><i class="fa <?php if ($menulist == 'journal_adj') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Jurnal Penyesuaian</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'journal_pay') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Accounting/journal_pay')?>"><i class="fa <?php if ($menulist == 'journal_pay') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Jurnal Pelunasan</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'ledger') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Accounting/ledger_acc')?>"><i class="fa <?php if ($menulist == 'ledger') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Buku Besar</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'report_accounting') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Accounting/report')?>"><i class="fa <?php if ($menulist == 'report_accounting') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>
                            </ul>                            
                        </li>
                        <li <?php if ($menu == 'transact') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-folder fa-fw"></i> Transaction<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'dash_transact') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Transaction')?>"><i class="fa <?php if ($menulist == 'dash_transact') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'budget') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Transaction/trn_trx_budget')?>"><i class="fa <?php if ($menulist == 'budget') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Form Anggaran</a>
                                </li>   
                                <li>
                                    <a <?php if ($menulist == 'report_transaction') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Transaction/report')?>"><i class="fa <?php if ($menulist == 'report_transaction') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>                            
                            </ul>
                        </li>
                        <li <?php if ($menu == 'permit') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-briefcase fa-fw"></i> Permit<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'dash_permit') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Permit')?>"><i class="fa <?php if ($menulist == 'dash_permit') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'permit_appr') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Permit/permit_approval')?>"><i class="fa <?php if ($menulist == 'permit_appr') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Persetujuan Ijin</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'report_permit') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Permit/report')?>"><i class="fa <?php if ($menulist == 'report_permit') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>