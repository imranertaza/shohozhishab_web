<div id="home" class="section " style="padding-top: 25px !important; padding-bottom: 0px;">
    <div class="container">

        <div class="row">
            <div class="col-12 detail-pack " style="margin-top: 50px; margin-bottom: 10px;">
                <p class="price-text-1"><?php echo $pack->name; ?> (<?php echo $pack->price; ?><span>৳</span>)</p>
                <p class="price-text-3" style="line-height:0px !important;">
                    Per <?php echo $pack->subscription_type; ?></p>
                <p class="price-text-5">Installation <span
                            class="color-text-2"><?php echo $pack->installation_fee; ?>tk</span></p>

                <a href="<?php echo base_url() ?>/Home/get_started/<?php echo $pack->package_id; ?>"
                   class="btn btn-price" style="color: #ffffff;">Get Started</a>
            </div>


            <?php if ($pack->package_id == 1){ ?>
            <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <p class="td-ti">Dashboard</p>
                    <p class="text_mo">All</p>
                </div>
            </div>
            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Sales</p></center>
                    <p class="text_mo" ><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales</p>
                    <p class="text_mo" ><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Return Sale</p>
                    <p class="text_mo" ><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Invoice</p>
                    <p class="text_mo" ><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Discount option</p>
                    <p class="text_mo" ><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Payment by Chaque option</p>
                </div>
            </div>

            <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <p class="td-ti">Purchase</p>
                    <p class="text_mo">All</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Transactions</p></center>
                    <p class="text_mo" ><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer Transactions</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Supplier Transactions</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Account Head Transactions</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Fund Transfer</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Expense other Transactions</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Other Sales Transactions</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee Salary</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Vat Pay</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Stock</p></center>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stores</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Brand</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Product Category</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Short List</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Products</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt="">  Barcode Generate</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Ledger</p></center>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Cash</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Sales</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger Profit</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Expense</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Purchase</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Suppliers</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Customer</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Account Head</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger other sales</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Discount</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Bank</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Stock</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger Capital</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger Vat</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Date to Date search  option</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Memo linkable option</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger Print option</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Limited Transactions list</p>
                </div>
            </div>

            <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <p class="td-ti">Daily Book</p>
                    <p class="text_mo">All</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Report</p></center>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Balance Report</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stock Report</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Sales Report</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Purchase Report</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Accounts Receivable</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Accounts Payable</p>
                </div>
            </div>

            <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <p class="td-ti">Trial Balance</p>
                    <p class="text_mo">All</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Customer</p></center>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer type</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customers</p>
                </div>
            </div>

            <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <p class="td-ti">Suppliers</p>
                    <p class="text_mo">All</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Bank</p></center>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Bank</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Withdraw</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Deposit</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Chaque</p>
                </div>
            </div>

            <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <p class="td-ti">Account Head</p>
                    <p class="text_mo">All</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Employee</p></center>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Salary</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Users</p></center>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Users</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> User Role</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                <div style="border: 1px solid;">
                    <center><p class="td-ti">Settings</p></center>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> All settings</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Add Capital</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Starting business (exesting)</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Database Backup</p>
                    <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Yearly closing</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px; ">
                <div style="border: 1px solid; padding: 10px;">
                    <center><p class="td-ti">Previous Data Show</p></center>
                    <p class="text_mo">Previous year data show after yearly closing</p>
                </div>
            </div>

            <div class="col-12 detail-pack " style="margin-bottom: 10px; ">
                <a href="<?php echo base_url() ?>/Home/get_started/<?php echo $pack->package_id; ?>" class="btn btn-price" style="color: #ffffff;">Get Started</a>
                <hr>
            </div>
            <?php } ?>


            <?php if ($pack->package_id == 2){ ?>
                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Dashboard</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Sales</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Return Sale</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Invoice</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Discount option</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Payment by Chaque option</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Purchase</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Transactions</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Supplier Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Account Head Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Fund Transfer</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Expense other Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Other Sales Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee Salary</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Vat Pay</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Stock</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stores</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Brand</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Product Category</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Short List</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Products</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt="">  Barcode Generate</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Ledger</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Cash</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Sales</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Profit</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Expense</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Purchase</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Suppliers</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Customer</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Account Head</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger other sales</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Discount</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Bank</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Stock</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Capital</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Vat</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Date to Date search  option</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Memo linkable option</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Print option</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Unlimited Transactions list</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Daily Book</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Report</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Balance Report</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stock Report</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales Report</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Purchase Report</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Accounts Receivable</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Accounts Payable</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Trial Balance</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Customer</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer type</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customers</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Suppliers</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Bank</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Bank</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Withdraw</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Deposit</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Chaque</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Account Head</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Employee</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Salary</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Users</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Users</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> User Role</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Settings</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> All settings</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Add Capital</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Starting business (exesting)</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Database Backup</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Yearly closing</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px; ">
                    <div style="border: 1px solid; padding: 10px;">
                        <center><p class="td-ti">Previous Data Show</p></center>
                        <p class="text_mo">Previous year data show after yearly closing</p>
                    </div>
                </div>
            <div class="col-12 detail-pack " style="margin-bottom: 10px; ">
                <a href="<?php echo base_url() ?>/Home/get_started/<?php echo $pack->package_id; ?>" class="btn btn-price" style="color: #ffffff;">Get Started</a>
                <hr>
            </div>
            <?php } ?>

            <?php if ($pack->package_id == 3){ ?>
                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Dashboard</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Sales</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Return Sale</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Invoice</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Discount option</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Payment by Chaque option</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Purchase</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Transactions</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Supplier Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Account Head Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Fund Transfer</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Expense other Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Other Sales Transactions</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee Salary</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Vat Pay</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Stock</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stores</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Brand</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Product Category</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Short List</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Products</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt="">  Barcode Generate</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Ledger</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Cash</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Sales</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Profit</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Expense</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Purchase</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Suppliers</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Customer</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Account Head</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger other sales</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Discount</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Bank</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Stock</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Capital</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Vat</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Date to Date search  option</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Memo linkable option</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Print option</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Unlimited Transactions list</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Daily Book</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Report</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Balance Report</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stock Report</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales Report</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Purchase Report</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Accounts Receivable</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Accounts Payable</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Trial Balance</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Customer</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer type</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customers</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Suppliers</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Bank</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Bank</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Withdraw</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Deposit</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Chaque</p>
                    </div>
                </div>

                <div class="col-12 detail-pack text-center" style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <p class="td-ti">Account Head</p>
                        <p class="text_mo">All</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Employee</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Salary</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Users</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Users</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> User Role</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px;">
                    <div style="border: 1px solid;">
                        <center><p class="td-ti">Settings</p></center>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> All settings</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Add Capital</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Starting business (exesting)</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Database Backup</p>
                        <p class="text_mo"><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Yearly closing</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px; ">
                    <div style="border: 1px solid; padding: 10px;">
                        <center><p class="td-ti">Previous Data Show</p></center>
                        <p class="text_mo">Previous year data show after yearly closing</p>
                    </div>
                </div>

                <div class="col-12 detail-pack " style="margin-bottom: 10px; ">
                    <a href="<?php echo base_url() ?>/Home/get_started/<?php echo $pack->package_id; ?>" class="btn btn-price" style="color: #ffffff;">Get Started</a>
                    <hr>
                </div>
            <?php } ?>

            <div class="col-12 detail-pack text-center" style="margin-bottom: 10px; ">
                <p class="td-ti">Others packages </p>
            </div>

            <?php foreach ($package as $row) { if ($pack->package_id != $row->package_id){ ?>
                <div class="price-box" >
                    <p class="price-text-1"><?php echo $row->name; ?></p>
                    <p class="price-text-2"><span class="symbol">৳</span> <?php echo $row->price; ?></p>
                    <p class="price-text-3">Per <?php echo $row->subscription_type; ?></p>

                    <p class="price-text-5">Installation <span
                                class="color-text-2"><?php echo $row->installation_fee; ?>tk</span></p>

                    <center><p class="mob_viewdet" ><a href="<?php echo base_url() ?>/Home/detail_mob/<?php echo $row->package_id; ?>" class="price-text-6">View Details</a></p></center>

                    <a href="<?php echo base_url() ?>/Home/get_started/<?php echo $row->package_id; ?>" class="btn btn-price" style="color: #ffffff;">Get Started</a>
                </div>
            <?php } } ?>




        </div>
    </div>
</div>