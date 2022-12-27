$(document).ready(function () {
    //add product btn
    $(".add-product-btn").on("click", function (e) {
        e.preventDefault();
        var name = $(this).data("name");
        var id = $(this).data("id");
        var price = $(this).data("price");
        $(this).removeClass("btn-success").addClass("btn-dark disabled");
        /// <input type="hidden" name="products[]" value="${id}">
        var html = `<tr>

                <td>${name}</td>
         
                <td><input type="number" name="products[${id}][quantity]" data-price="${price}" class="form-control input-sm product-quantity" min="1" value="1"></td>
                <td class="product-price">${price}</td>
                 <td> 
                                        <i class="fa fa-trash-o text-danger  remove-product-btn"  data-id="${id}" ></i> </td>
            </tr>`;

        $(".order-list").append(html);
        //end of total price
        calcoulateTotal();
    });

    $("body").on("click", ".disabled", function (e) {
        e.preventDefault();
    }); //end of  disabled-->

    $("body").on("click", ".remove-product-btn", function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        $(this).closest("tr").remove();
        $("#product-" + id)
            .removeClass("btn-dark disabled")
            .addClass("btn-success");
        //end of total price
        calcoulateTotal();
    }); //end of  remove

    //change product quantity
    $("body").on("change", ".product-quantity", function () {
        /*var quantity = Number($(this).val());
        var productPrice =    Number($(this).closest('tr').find('.product-price').html());
        var totalPrice =  quantity * productPrice;
      $('.total-price').html(totalPrice); */

        var quantity = Number($(this).val(), 2); //2
        var unitPrice = $(this).data("price");
        console.log(unitPrice);
        $(this)
            .closest("tr")
            .find(".product-price")
            .html($.number(quantity * unitPrice, 2));
        calcoulateTotal();
    }); //end of product quantity change

 $(".order-products").on("click", function (e) {
        e.preventDefault();
        

        var url = $(this).data('url');
        var method = $(this).data('method');
       
         $.ajax({
            url: url,
            method: method,
            success: function(data) {

                
              console.log(data);

            }
        })

    });///end of order products


}); ///end of document ready

function calcoulateTotal() {
    var price = 0;

    $(".order-list .product-price").each(function (index) {
        //price += Number($(this).html()); //convert string to int
        price += parseFloat($(this).html().replace(/,/g, "")); //convert string to int
    }); //end of total price
    $(".total-price").html($.number(price, 2));

    /// check price
    if (price > 0) {
        $("#add-order-form-btn").removeClass("disabled");
    } else {
        $("#add-order-form-btn").addClass("disabled");
    }
} ///end of calcoulateTotal
