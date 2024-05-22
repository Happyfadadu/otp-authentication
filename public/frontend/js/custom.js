jQuery(document).ready(function ($) {
    console.log("Custom JS loaded!");

    //Global Collapsibles
    if($(".btn-toggle").length > 0){
        $(".btn-toggle").on("click", function(e){
            e.preventDefault();
            const toggleTarget = ($(this).attr("href")) ? $(this).attr("href") : $(this).attr("data-target");

            $(this).toggleClass("active");
            $(toggleTarget).slideToggle();
        });
    }

    //Pin Checklist Controls
    if($(".tiers .form-check-input").length > 0){
        var pinCheck = $(".tiers .form-check-input");
        $('#alltiers').click(function(){
            if($(this).prop('checked')){
                $(document).find(".tiers .form-check-input").prop('checked', true);
            } else {
                $(document).find(".tiers .form-check-input").prop('checked', false);
            }
        });
      
        $(document).on("click", pinCheck, function(e){
            if($(document).find(".tier-body .form-check-input:checked").length > 0){
                $("#bttn-addpin").prop("disabled", false).removeClass("disabled");
            } else {
                $("#bttn-addpin").prop("disabled", true).addClass("disabled");
            }

            if($(document).find(".tier-body .form-check-input").length !== $(document).find(".tier-body .form-check-input:checked").length) {
                $('#alltiers').prop('checked', false);
            }

            $("#totalpins").text($(document).find(".tier-body .form-check-input:checked").length);
        });
    }

    //Add Pins to Cart
    if($("#bttn-addpin").length > 0){

        function addToCart(pins){
            var itemHTML = '';
                itemHTML += '<div class="cartitem">';

                itemHTML += '<div class="cartcol">';
                itemHTML += '<span class="cartitem-name">'+pins.thisLabel+'</span>';
                itemHTML += '</div>';

                itemHTML += '<div class="cartcol">';
                itemHTML += '<input value="1" name="'+pins.thisName+'" type="text" class="form-control">';
                itemHTML += '</div>';

                itemHTML += '<div class="cartcol">';
                itemHTML += '<button class="remove-cartitem" title="Remove" type="button"><i class="icon-circle-cross"></i></button>';
                itemHTML += '</div>';

                itemHTML += '</div>';

            $(".cartbody").prepend(itemHTML);
            $("#no-cartitems").hide();
        }

        $("#bttn-addpin").on("click", function(e){
            e.preventDefault();
            
            $(".tier-body .form-check-input:checked").each(function(){
                var thisName = $(this).attr("id"),
                    thisLabel = $(this).attr("value");
                
                addToCart({thisName, thisLabel});

                //Remove item from list
                $(this).parents(".tier-row").detach().remove();

                //Reset add button
                $("#bttn-addpin").prop("disabled", true).addClass("disabled");

                //Reset selected pins
                $("#totalpins").text($(".tier-body .form-check-input:checked").length);

                //Reset message and checkbox
                if($(".tier-body .tier-row").length<1){
                    $("#no-pins").show();
                    $("#alltiers").prop("checked", false);
                }
                    
                //Update Added Pins
                updateAddedPins();
                
                //Update cart quantity
                updateQty();
            });
        });
    }

    //Delete from cart
    function addBackToList(cartitem){
        var pinHTML = '';
            pinHTML += '<div class="tier-row g-0"> <div class="tier-col">';
            
            pinHTML += '<div class="form-check form-check-inline">';

            pinHTML += '<input class="form-check-input" type="checkbox" id="'+cartitem.thisName+'" value="'+cartitem.thisLabel+'">';
            pinHTML += '<label class="form-check-label" for="'+cartitem.thisName+'">'+cartitem.thisLabel+'</label>';
            
            pinHTML += '</div>';
            
            pinHTML += '</div></div>';
        
        $(".tier-body").append(pinHTML);
        
        $("#no-pins").hide();
    }
    
    $(".cartbody").on("click", ".remove-cartitem", function(e){
        e.preventDefault();
        
        var thisName = $(this).parents(".cartitem").find("input").attr("name"),
            thisLabel = $(this).parents(".cartitem").find(".cartitem-name").text();

        addBackToList({thisName, thisLabel});

        //Remove item from cart
        $(this).parents(".cartitem").detach().remove();

        //Update cart quantity
        updateQty();

        //Reset Message
        if($(".cartbody").find(".cartitem").length<1){
            $("#no-cartitems").show();
        }

        //Update Added Pins
        updateAddedPins();
    });

    //Qty change event listener
    $(".cartbody").on('input', 'input', function(){
        updateQty();
    });

    //Update Cart Quantity
    function updateQty(){
        var totalQty = 0;
        
        $(".cartbody .cartitem").each(function(){
            totalQty = totalQty + parseInt($(this).find("input").val());
        });

        $("#total-cartqty").text(totalQty);
    }

    //Update Added Pins
    function updateAddedPins(){
        $("#added-pins").text($(".cartbody .cartitem").length);
    }

    //Validate Quantity
    $(document).on("input", ".cartitem input", function(event) {
        var keyCode = event.which;
        if (keyCode < 48 || keyCode > 57) {
            event.preventDefault();
        }
        
        if ( $(this).val() == '') {
            $(this).val('1');
            updateQty();
        }
    });

    //  DATA TABLE COMMONN JS

    $('#common-table').dataTable({
        // "bPaginate": false,
        // "bInfo": false,
    });


    // $('#single-select').mobiscroll().select({
    //     inputElement: document.getElementById('my-input'),
    //     touchUi: false
    // });

});