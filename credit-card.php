<?php
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = preg_replace('/\s+/', '', $_POST['cardNumber']);
    $cardName = $_POST['cardName'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];

    // Server-side validation
    if (!preg_match('/^\d{16}$/', $cardNumber)) {
        $message = 'Please enter a valid 16-digit card number';
    } elseif (!preg_match('/^(0[1-9]|1[0-2])\/\d{2}$/', $expiryDate)) {
        $message = 'Please enter a valid expiry date in MM/YY format';
    } elseif (!preg_match('/^\d{3}$/', $cvv)) {
        $message = 'Please enter a valid 3-digit CVV';
    } else {
        // Process the payment (placeholder for actual payment processing logic)
        $message = "Payment processed for $cardName with card ending in " . substr($cardNumber, -4);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .credit-card-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .input-group input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="credit-card-container">
        <form action="" method="post" id="creditCardForm">
            <h2>Credit Card Payment</h2>

            <?php if ($message): ?>
                <div class="message"><?= htmlspecialchars($message) ?></div>
            <?php endif; ?>

            <div class="input-group">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" maxlength="19" placeholder="1234 5678 9012 3456" required>
            </div>

            <div class="input-group">
                <label for="cardName">Cardholder Name</label>
                <input type="text" id="cardName" name="cardName" placeholder="John Doe" required>
            </div>

            <div class="input-group">
                <label for="expiryDate">Expiry Date</label>
                <input type="text" id="expiryDate" name="expiryDate" maxlength="5" placeholder="MM/YY" required>
            </div>

            <div class="input-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="123" required>
            </div>

            <button type="submit">Submit Payment</button>
        </form>
    </div>

    <script>
        document.getElementById('creditCardForm').addEventListener('submit', function(event) {
            var cardNumber = document.getElementById('cardNumber').value.replace(/\s+/g, '');
            var expiryDate = document.getElementById('expiryDate').value;
            var cvv = document.getElementById('cvv').value;

            var cardNumberPattern = /^\d{16}$/;
            var expiryDatePattern = /^(0[1-9]|1[0-2])\/\d{2}$/;
            var cvvPattern = /^\d{3}$/;

            if (!cardNumberPattern.test(cardNumber)) {
                alert('Please enter a valid 16-digit card number');
                event.preventDefault();
            } else if (!expiryDatePattern.test(expiryDate)) {
                alert('Please enter a valid expiry date in MM/YY format');
                event.preventDefault();
            } else if (!cvvPattern.test(cvv)) {
                alert('Please enter a valid 3-digit CVV');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
