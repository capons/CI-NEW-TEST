var main = (function () {
    doConstruct = function () {
        this.init_callbacks = [];
    };
    doConstruct.prototype = {
        add_init_callback : function (func) {
            if (typeof(func) == 'function') {
                this.init_callbacks.push(func);
                return true;
            }
            else {
                return false;
            }

        }
    };
    return new doConstruct;
})();
$(document).ready(function () {
    $.each(main.init_callbacks, function (index, func) {
        func();
    });
});
var orders_manipulation = (function () {
    var doConstruct = function () {
        main.add_init_callback(this.show_modal);
    };
    doConstruct.prototype = {
        show_modal: function () {
            $('#s-join').click(function(){                  //show registration modal
                $('#join-modal').modal('show');
            });
            if( $.trim( $('#info-body').html() ).length ) { //show information modal
                $('#w-info').modal('show');
            }
            $('#s-sign-in').click(function(){               //show login modal
                $('#sign-in-modal').modal('show');
            });
        },
    };
    return new doConstruct;
})();
//validate filter form input #filter-order-form
function filter_check(){
    var check_form_empty = $('#filter-order-form').serializeArray();
    var empty_form_array = [];              //if filter form input empty push input name field into array
    jQuery.each( check_form_empty, function( i, field ) {
        if((field.value).length == 0){
            empty_form_array.push(field.name);
        }
    });
    if(empty_form_array.length == 6 ){   //if == 6 (input empty) return false
        $('#filter-orders-b').removeAttr('disabled');
        $("#admin-orders-info").html('Filter input empty');
        $("#modal-admin-orders-info").modal('show');
        setTimeout(function () {
            $("#modal-admin-orders-info").modal('hide');
            $('#admin-orders-info').html('');
        }, 2000);
        return false;
    }
    var filter_order_id = $( "input[name='order_id']" ).val();      //validate input data
    var filter_total = $( "input[name='filter_total']" ).val();     //validate input data
    if(filter_order_id != 0 ) {
        if (!$.isNumeric(filter_order_id)) {                        //validate input tell (only number)
            $('#filter-orders-b').removeAttr('disabled');
            $("#admin-orders-info").html('Order id is numeric');
            $("#modal-admin-orders-info").modal('show');
            setTimeout(function () {
                $("#modal-admin-orders-info").modal('hide');
                $('#admin-orders-info').html('');
            }, 2000);
            return false;
        }
    }
    if(filter_total != 0) {
        if (!$.isNumeric(filter_total)) {
            $('#filter-orders-b').removeAttr('disabled');
            $("#admin-orders-info").html('Total is numeric');
            $("#modal-admin-orders-info").modal('show');
            setTimeout(function () {
                $("#modal-admin-orders-info").modal('hide');
                $('#admin-orders-info').html('');
            }, 2000);
            return false;
        }
    }
}
