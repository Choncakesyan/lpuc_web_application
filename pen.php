<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clatybombom Shop</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pos.css">
</head>
<body>
<div class="container page_border">
    <h1 style="text-align:center; margin-top:10px; font-size:70px; font-family:Algerian; color:black">Bling bling Shop</h1>
    <div style="float:left">
        <div class="pic_group">
            <div class="pic_option">
                <h1 style="text-align:center; margin-top:10px; font-size:30px; font-family:Algerian; color:black">Pen Shopee</h1>
                <div class="collapsible-tab" onclick="toggleOptions()">
                    <div class="icon">&#9776;</div> <!-- Three parallel lines icon -->
                    More Shops
                </div>
                <!-- Hidden options column -->
                <div class="options-column" id="optionsColumn">
                    <ul class="options-list">
                        <li class="options-list-item"><a href="http://localhost/lpuc_web_development/admin.php#">Home</a></li>
                        <li class="options-list-item"><a href="perfume.php">Perfume Collection</a></li>
                        <li class="options-list-item"><a href="burger.php">Burger Menu</a></li>
                        <li class="options-list-item"><a href="kitchen.php">Kitchen Utensil Shop</a></li>
                        <li class="options-list-item"><a href="mouse.php">Mouse Collection</a></li>
                    </ul>
                </div>
                <div class="row">
                    <script>
                        const items = [
                            { name: "Bic", price: 9 },
                            { name: "Caran Dashe", price: 539 },
                            { name: "Dong a Gelpen", price: 19 },
                            { name: "Dong a Hexaplus", price: 89 },
                            { name: "Faber Castell HB2 Pencil", price: 49 },
                            { name: "Faber Castell Pen", price: 9 },
                            { name: "Pilot Gtech", price: 89 },
                            { name: "Mongol 2 Pencil", price: 19 },
                            { name: "Mongol Pen", price: 19 },
                            { name: "Muji Gelpen", price: 29 },
                            { name: "Palomino Calcedar Pencil", price: 49 },
                            { name: "Panda Pen", price: 9 },
                            { name: "Prismacolor Pencil", price: 49 },
                            { name: "Rotring Isograph Pen", price: 899 },
                            { name: "Rotring Mechanical Pensil", price: 149 },
                            { name: "Staedtler Tech pen", price: 999 },
                            { name: "Uniball Pen", price: 69 },
                            { name: "Unipin Fineliner Pen", price: 109 },
                            { name: "Waterman Pen", price: 109 },
                            { name: "Zebra Sarasa Pen", price: 299 },
                        ];

                        for (let i = 0; i < items.length; i++) {
                            const item = items[i];
                            document.write(`
                                <div class="col-md-3">
                                    <div>
                                        <img src="pen_images/${i + 1}.jpg" data-toggle="tooltip" data-placement="center" title="pen" width="170" height="180" alt="${item.name}">
                                        <div>
                                            <input type="checkbox" name="check_${i + 1}" id="check_${i + 1}" data-name="${item.name}" data-price="${item.price}">
                                            <label for="check_${i + 1}">${item.name} (P${item.price})</label>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }

                        // Event listener for checkbox click
                        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                        checkboxes.forEach((checkbox) => {
                            checkbox.addEventListener("click", () => {
                                // Check if the checkbox is checked
                                if (checkbox.checked) {
                                    const itemName = checkbox.getAttribute("data-name");
                                    const itemPrice = checkbox.getAttribute("data-price");

                                    // Update the "Name of Item" and "Price" input fields
                                    document.getElementById("item_name").value = itemName;
                                    document.getElementById("price").value = itemPrice;

                                    // Set the quantity to 1
                                    document.getElementById("quantity").value = 1;
                                } else {
                                    // Clear the "Name of Item" and "Price" input fields if the checkbox is unchecked
                                    document.getElementById("item_name").value = "";
                                    document.getElementById("price").value = "";

                                    // Clear the quantity input field
                                    document.getElementById("quantity").value = "";
                                }
                            });
                        });
                    </script>
                </div>

            </div>
        </div>
    </div>
    <!-- Discount Options: Radio Buttons -->
    <div class="form-group" style="text-align: center;">
        <h2>Discounts</h2>
        <div class="row">
            <div class="col-md-3">
                <label class="radio-label">
                    <input type="radio" name="discount_option" value="senior_citizen"> Senior Citizen
                    <hr class="radio-line">
                </label>
            </div>
            <div class="col-md-3">
                <label class="radio-label">
                    <input type="radio" name="discount_option" value="with_disc_card"> With Discount Card
                    <hr class="radio-line">
                </label>
            </div>
            <div class="col-md-3">
                <label class="radio-label">
                    <input type="radio" name="discount_option" value="employee_disc"> Employee Discount
                    <hr class="radio-line">
                </label>
            </div>
            <div class="col-md-3">
                <label class="radio-label">
                    <input type="radio" name="discount_option" value="no_discount" checked> No Discount
                    <hr class="radio-line">
                </label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Left Column: Order Details -->
            <h2>Order Details</h2>
            <div class="form-group">
                <label for="item_name">Name of Item:</label>
                <input type="text" class="form-control" id="item_name" name="item_name">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <!-- Add buttons for increment and decrement -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button" id="decrementQuantity">-</button>
                    </div>
                    <input type="text" class="form-control" id="quantity" name="quantity">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="incrementQuantity">+</button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="total_amount">Total Amount:</label>
                <input type="text" class="form-control" id="total_amount" name="total_amount" readonly>
            </div>
            <div class="form-group">
                <label for="cash_given">Cash Given:</label>
                <input type="text" class="form-control" id="cash_given" name="cash_given">
            </div>            
            <div class="form-group">
                <label for="change">Change:</label>
                <input type="text" class="form-control" id="change" name="change" readonly>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Right Column: Calculator for Order Details -->
            <div>
                <button id="calculateChangeButton" class="btn btn-primary">Calculate Change</button>
                <button id="clearCalculatorButton" class="btn btn-danger">NEW</button>
                <button id="saveDataButton" class="btn btn-warning">SAVE</button>
                <button id="updateDataButton" class="btn btn-dark">UPDATE</button>
            </div>
            <div class="form-group">
                <label for="discount">Discount Percentage:</label>
                <input type="text" class="form-control" id="discount" name="discount" readonly value="0%">
            </div>
            <div class="form-group">
                <label for="discounted_amount">Discounted Amount:</label>
                <input type="text" class="form-control" id="discounted_amount" name="discounted_amount" readonly value = "0">
            </div>
            <div class="form-group">
                <label for="discount_per_item">Discount Per Item:</label>
                <input type="text" class="form-control" id="discount_per_item" name="discount_per_item" readonly value = "0">
            </div>
            <div class="row">
                <h2>Calculator</h2>
                <hr class="calculator-line">
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('7')">7</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('8')">8</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('9')">9</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('+')">+</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('4')">4</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('5')">5</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('6')">6</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('-')">-</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('1')">1</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('2')">2</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('3')">3</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('*')">*</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('0')">0</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="addToCalculator('/')">/</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-secondary btn-block calculator-button" onclick="clearCalculator()">C</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success btn-block calculator-button" onclick="calculate()">=</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button id="enterButton" class="btn btn-primary btn-block">Enter</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/pos.js"></script>
</body>
</html>
