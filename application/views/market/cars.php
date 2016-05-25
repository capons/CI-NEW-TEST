<?php if($market_header) echo $market_header; ?>
<!--content -->
<?php
if (isset($_SESSION['marker']['user'])) { // only authorization user can add new post
    ?>
    <div class="well">
        <div class="row">
            <div style="text-align: center" class="col-lg-12">
                <button id="add_post" class="btn btn-primary">Add new post</button>
            </div>
        </div>
    </div>
    <?php
}
?>
<div class="well"> <!--orders filter -->
    <div class="row">
        <form onsubmit="return filter_check()" id="filter-order-form" method="post">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <!--<form id="filter-form-first">-->
                <div class="form-group">
                    <label>Order id</label>
                    <input name="order_id" type="text" class="form-control" placeholder="Order id">
                </div>
                <div class="form-group">
                    <label>Customer</label>
                    <input name="customer" type="text" class="form-control" placeholder="Customer">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <!-- <form id="filter-form-second"> -->
                <div class="form-group">
                    <label>Order status</label>
                    <select name="order_status" class="form-control">
                        <option></option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Total</label>
                    <input name="filter_total" type="text" class="form-control"  placeholder="Total">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <!-- <form id="filter-form-third">-->
                <div class="form-group">
                    <label>Date Added</label>
                    <input name="date_add" id="filter-date-add" type="date"  class="form-control" placeholder="Date added">
                </div>
                <div class="form-group">
                    <label>Date Modified</label>
                    <input name="date_modify" id="filter-date-mod"  type="date" class="form-control" placeholder="Date modified">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button name="order_filter_button" id="filter-orders-b" style="float: right" class="btn btn-primary btn-sm" type="submit"><!--form filter send form button -->
                    <span style="margin-right: 3px" class="glyphicon glyphicon-search"></span>Filter
                </button>
            </div>
        </form><!-- </form>-->
    </div><!--.row -->
</div> <!--end orders filter -->
<div class="container-fluide">
    <div class="col-lg-12 product-content-body">
        <?php
        if(!empty($all_post)) {
            foreach ($all_post as $val) {
                ?>
                <div class="col-xs-4 no-padding product-presentation-body">
                    <!--product image -->
                    <div class="col-xs-12 product-image-body">
                        <img src="<?php echo base_url().'stock_image/'.$val['image_name'] ?>">
                    </div>
                    <!--product title -->
                    <div class="col-xs-12 product-title">
                        <p><?php echo $val['car_brand']; ?></p>
                    </div>
                    <div class="product-bottom-line">
                        <!--Border line -->
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-lg-6 no-padding">

                            <div class="product-r-border">
                                <!--Border line -->
                            </div>
                            <!--product price -->
                            <p class="product-price"><?php echo $val['car_model']; ?></p>
                        </div>
                        <div style="text-align: center" class="col-lg-6">
                            <button class="btn btn-primary btn-sm">Buy</button>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<div style="text-align: center" class="alert alert-info" role="alert">';
            echo 'Post is empty';
            echo '</div>';
        }
        ?>
    </div>
        <div class="col-lg-12">
            <?php
            if(isset($links)) {
                echo $links; //pagination
            }
            ?>
        </div>
</div>
<!-- ./content-->

<!--Load modal window layout -->
<?php if($market_modal) echo $market_modal; ?>
<!-- ./modal-->

<?php if($market_footer) echo $market_footer; ?>
