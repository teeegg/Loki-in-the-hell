
function addIngredientInput() {
    $(".ingredientTextfield").after('<input type="text" name="IngredientName" placeholder="Ingredient">').after("<br>");
}

function addReceipt() {
    var receiptName = document.getElementById("receiptName").value;
    $('.receiptFrame').append('<div class="receiptOverview">').append('<img src="images/receipt/Butternut.jpeg">');
    
}