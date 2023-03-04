<div id="home" class="col-9 da-content" >
    <div class="row">
        <div class="col-12 da-div-pd-20">
            <?php echo $top_mer;?>
        </div>
        <div class="col-12 da-div-pd-20" style="margin-top: 60px;">
            <p class="my-bill-tl">ইনভয়েস</p>
            <table class="table cus-tab">
                <thead>
                    <tr>
                        <th>ক্রমিক</th>
                        <th>অর্ডার নাম্বার</th>
                        <th>ইস্যু ডেট</th>
                        <th>ব্যলেন্স</th>
                        <th>স্ট্যাটাস</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach ($invoice as $val){ ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $val->order_id;?></td>
                        <td><?php echo invoiceDateFormat($val->createdDtm);?></td>
                        <td><?php echo $val->amount_original;?>tk</td>
                        <td>
                            <?php if ($val->amount_original == 'Unpaid'){ ?>
                            <button class="btn demo-btn" style="border-radius: 20px;">UNPAID</button>
                            <?php }else{ ?>PAID<?php } ?>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

