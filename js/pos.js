document.getElementById("calculateChangeButton").addEventListener("click", function() {
    calculateChange();
});
function calculateChange() {
const quantity = parseFloat(document.getElementById("quantity").value);
const cashGiven = parseFloat(document.getElementById("cash_given").value);
const price = parseFloat(document.getElementById("price").value);
const discountPercentage = parseFloat(document.getElementById("discount").value);

// Calculate the total price with the discount
const totalPrice = (price * quantity) * ((100 - discountPercentage) / 100);

if (!isNaN(cashGiven) && !isNaN(totalPrice)) {
    const change = cashGiven - totalPrice;

    // Update the change textbox
    if(change>=0){
        document.getElementById("change").value = change.toFixed(2);
    }
    else{
        alert("Please enter valid amount for Cash.")
    }

    // Calculate the total discounted amount
    const totalDiscountedAmount = price * quantity - totalPrice;

    // Update the total discounted amount textbox
    document.getElementById("discounted_amount").value = totalDiscountedAmount.toFixed(2);

    // Calculate the discount per item
    const discountPerItem = price - totalPrice / quantity;

    // Update the discount per item textbox
    document.getElementById("discount_per_item").value = discountPerItem.toFixed(2);

    //Total amount
    document.getElementById("total_amount").value = totalPrice.toFixed(2);
} else {
    alert("Please enter valid amount for Cash.");
}
}
// Initialize tooltips
$(document).ready(function() {
$('[data-toggle="tooltip"]').tooltip(); 
});
// Event listener for the "Calculate Change" button
// Event listener for the "Clear Calculator" button
document.getElementById("clearCalculatorButton").addEventListener("click", function() {
document.getElementById("cash_given").value = "";
});

// Event listener for the "Save Data" button
document.getElementById("saveDataButton").addEventListener("click", function() {
saveData();
});

// Event listener for the "Update Data" button
document.getElementById("updateDataButton").addEventListener("click", function() {
updateData();
});
// Function to add a number to the calculator input
function addToCalculator(number) {
const cashGivenInput = document.getElementById("cash_given");
cashGivenInput.value += number;
}

// Function to clear the calculator input
function clearCalculator() {
const cashGivenInput = document.getElementById("cash_given");
cashGivenInput.value = "";
}

// Event listeners for quantity increment and decrement buttons
document.getElementById("incrementQuantity").addEventListener("click", incrementQuantity);
document.getElementById("decrementQuantity").addEventListener("click", decrementQuantity);

// Function to increment quantity
function incrementQuantity() {
const quantityInput = document.getElementById("quantity");
let currentQuantity = parseInt(quantityInput.value);
if (!isNaN(currentQuantity)) {
    currentQuantity += 1;
    quantityInput.value = currentQuantity;
}
}

// Function to decrement quantity
function decrementQuantity() {
const quantityInput = document.getElementById("quantity");
let currentQuantity = parseInt(quantityInput.value);
if (!isNaN(currentQuantity) && currentQuantity > 1) {
    currentQuantity -= 1;
    quantityInput.value = currentQuantity;
}
}
// Function to save data (You can implement your logic here)
function saveData() {
alert("Data saved.");
}

// Function to update data (You can implement your logic here)
function updateData() {
alert("Data updated.");
}

// Function to toggle options visibility
function toggleOptions() {
const optionsColumn = document.getElementById("optionsColumn");
if (optionsColumn.style.display === "block") {
    optionsColumn.style.display = "none";
} else {
    optionsColumn.style.display = "block";
}
}
// Event listeners for changes in discount options
document.querySelectorAll('input[name="discount_option"]').forEach(function(radio) {
radio.addEventListener("change", updateDiscountInput);
});

// Event listener to recalculate on discount option change
document.querySelectorAll('input[name="discount_option"]').forEach(function(radio) {
radio.addEventListener("change", calculate);
});

// Calculate initially
calculate();
// Event listener for changes in discount options
document.querySelectorAll('input[name="discount_option"]').forEach(function(radio) {
radio.addEventListener("change", updateDiscountInput);
radio.addEventListener("change", calculate); // Recalculate when the discount option changes
});

// Function to update the discount input based on the selected discount option
function updateDiscountInput() {
const selectedDiscountOption = document.querySelector('input[name="discount_option"]:checked');
const discountInput = document.getElementById("discount");
if (selectedDiscountOption) {
    const discountPercentage = selectedDiscountOption.value === "senior_citizen" ? 0.2 :
                            selectedDiscountOption.value === "with_disc_card" ? 0.15 :
                            selectedDiscountOption.value === "employee_disc" ? 0.1 : 0;
    discountInput.value = (discountPercentage * 100) + "%";
}
}

// Calculate initially
calculate();