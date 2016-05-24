<?php if($market_header) echo $market_header; ?>
<!--content -->
<?php
if(isset($_SESSION['marker']['user'])){
    print_r($_SESSION['marker']['user']);
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
<!-- ./content-->

<!--Load modal window layout -->
<?php if($market_modal) echo $market_modal; ?>
<!-- ./modal-->

<?php if($market_footer) echo $market_footer; ?>
