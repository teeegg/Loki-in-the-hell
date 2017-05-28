
$(document).ready(function(){
    $("#slide01").click(function(){
        $(".addReceiptDetails").slideToggle();
    });
    
    $("#slide02").click(function(){
        $(".receiptIngredient").slideToggle();
    });
});