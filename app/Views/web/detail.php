<div id="home" class="section " style="padding-top: 25px !important; padding-bottom: 0px;">
    <div class="container">

        <div class="row">
            <div class="col-12 detail-pack " style="margin-top: 50px; margin-left: 40px;">
                <div class="price-box custom " style="margin-left: -2px;">
                    <p class="price-text-1">Free</p>
                    <p class="price-text-2"><span class="symbol symbol-w">৳</span> Free</p>
                    <p class="price-text-3">One Month</p>

                    <p class="price-text-5">No Installation fee </p>
                    <p class="price-text-4" style="font-weight: bold;">Everything</p>
                    <button class="btn btn-price-bt-2" style="font-weight: bold;">Get Started</button>
                </div>
                <?php foreach ($pack as $row){ ?>
                <div class="price-box sticky-bo">
                    <p class="price-text-1"><?php echo $row->name; ?></p>
                    <p class="price-text-2"><span class="symbol">৳</span> <?php echo $row->price; ?></p>
                    <p class="price-text-3">Per <?php echo $row->subscription_type; ?></p>

                    <p class="price-text-5">Installation <span class="color-text-2"><?php echo $row->installation_fee; ?>tk</span></p>
                    <center><p><a href="<?php echo base_url()?>/Home/detail" class="price-text-6">View Details</a></p></center>
                    <a href="<?php echo base_url() ?>/Home/get_started/<?php echo $row->package_id;?>" class="btn btn-price" style="color: #ffffff;">Get Started</a>
                </div>
                <?php } ?>

            </div>


            <div class="col-12 detail-pack back-w sticky-top-price" style="margin-top: 50px; margin-left: 40px; background-color: #ffffff;">
                <div style="background-color: #ffffff;height: 174px;position: absolute;left: -48px;width: 60px;;"></div>
                <div class="price-box custom " style="margin-left: -2px; margin-bottom: 5px;margin-top: 35px;">
                    <p class="price-text-1">Free </p>
                    <p class="price-text-3" style="line-height:0px !important;">One Month</p>
                    <button class="btn btn-price-bt-2" style="font-weight: bold;">Get Started</button>
                </div>
                <?php foreach ($pack as $row){ ?>
                    <div class="price-box sticky-bo" style="margin-bottom:0px !important; ">
                        <p class="price-text-1"><?php echo $row->name; ?> (<?php echo $row->price; ?><span>৳</span>)</p>
                        <p class="price-text-3" style="line-height:0px !important;">Per <?php echo $row->subscription_type; ?></p>

                        <a href="<?php echo base_url() ?>/Home/get_started/<?php echo $row->package_id;?>" class="btn btn-price" style="color: #ffffff;">Get Started</a>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>
</div>

<div id="used" class="section" style="padding-top: 0px !important;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered detail-table" >
                    <tr style="border-top: none !important;">
                        <td class="align-middle text-center td-ti top-b-none" style="width: 255px;">Dashboard</td>
                        <td class="top-b-none"><center>All</center></td>
                        <td class="top-b-none"><center>All</center></td>
                        <td class="top-b-none"><center>All</center></td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti"  >Sales</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Return Sale</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Invoice</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Discount option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Payment by Chaque option</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Return Sale</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Invoice</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Discount option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Payment by Chaque option</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Return Sale</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Invoice</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Discount option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Payment by Chaque option</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti">Purchase</td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti">Transactions</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Supplier Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Account Head Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Fund Transfer</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Expense other Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Other Sales Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee Salary</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Vat Pay</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Supplier Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Account Head Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Fund Transfer</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Expense other Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Other Sales Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee Salary</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Vat Pay</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Supplier Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Account Head Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Fund Transfer</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Expense other Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Other Sales Transactions</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee Salary</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Vat Pay</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Stock</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stores</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Brand</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Product Category</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Short List</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Products</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt="">  Barcode Generate</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stores</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Brand</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Product Category</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Short List</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Products</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt="">  Barcode Generate</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stores</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Brand</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Product Category</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Short List</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Products</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt="">  Barcode Generate</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Ledger</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Cash</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger Profit</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Expense</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Purchase</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Suppliers</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Customer</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Account Head</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger other sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Discount</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Bank</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Stock</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger Capital</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger Vat</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Date to Date search  option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Memo linkable option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Ledger Print option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Limited Transactions list</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Cash</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Profit</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Expense</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Purchase</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Suppliers</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Customer</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Account Head</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger other sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Discount</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Bank</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Stock</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Capital</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Vat</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Date to Date search  option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Memo linkable option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Print option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Unlimited Transactions list</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Cash</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Profit</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Expense</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Purchase</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Suppliers</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Customer</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Account Head</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger other sales</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Discount</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Bank</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Stock</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Capital</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Vat</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Date to Date search  option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Memo linkable option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Ledger Print option</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Unlimited Transactions list</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti">Daily Book</td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Report</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Balance Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stock Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Sales Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Purchase Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Accounts Receivable</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Accounts Payable</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Balance Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stock Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Purchase Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Accounts Receivable</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Accounts Payable</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Balance Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Stock Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Sales Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Purchase Report</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Accounts Receivable</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Accounts Payable</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Trial Balance</td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Customer</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer type</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customers</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer type</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customers</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customer type</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Customers</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Suppliers</td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Bank</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Bank</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Withdraw</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Deposit</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Chaque</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Bank</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Withdraw</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Deposit</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Chaque</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Bank</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Withdraw</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Deposit</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Chaque</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Account Head</td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                        <td><center>All</center></td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Employee</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Salary</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Salary</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Employee</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Salary</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Users</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Users</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> User Role</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Users</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> User Role</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Users</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> User Role</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Settings</td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> All settings</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Add Capital</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Starting business (exesting)</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Database Backup</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Yearly closing</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> All settings</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Add Capital</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Starting business (exesting)</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Database Backup</li>
                                <li><img src="<?php echo base_url() ?>/uploads/crose.svg" alt=""> Yearly closing</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> All settings</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Add Capital</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Starting business (exesting)</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Database Backup</li>
                                <li><img src="<?php echo base_url() ?>/uploads/tik.svg" alt=""> Yearly closing</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center td-ti" >Previous Data Show</td>
                        <td>
                            <ul>
                                <li><!--<img src="<?php echo base_url() ?>/uploads/tik.svg" alt="">--> Previous year data show after yearly closing</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><!--<img src="<?php echo base_url() ?>/uploads/tik.svg" alt="">--> Previous year data show after yearly closing</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><!--<img src="<?php echo base_url() ?>/uploads/tik.svg" alt="">--> Previous year data show after yearly closing</li>
                            </ul>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>