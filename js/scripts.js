function redirectToPaymentPage() {
    const paymentMethod = document.getElementById('paymentMethod').value;
    switch(paymentMethod) {

        case 'credit':
            window.location.href = 'credit-card.php';
            break;
        case 'paypal':
            window.location.href = 'paypal.html';
            break;
        case 'paytm':
            window.location.href = 'paytm.html';
            break;
        default:
            // No action needed
            break;
    }
}
