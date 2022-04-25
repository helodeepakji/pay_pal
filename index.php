<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input TYPE="hidden" name="cmd" value="_xclick">
        <input TYPE="hidden" name="business" value="sb-0bqx4314722316@business.example.com">
        <input TYPE="hidden" name="item_name" value="Laptop">
        <input TYPE="hidden" name="currency_code" value="USD">
        <input TYPE="hidden" name="amount" value="200">
        <input TYPE="hidden" name="lc" value="AU">
        <input TYPE="hidden" name="rm" value="2">
        <input TYPE="hidden" name="no_shipping" value="0">
        <input TYPE="hidden" name="notify_url" value="http://localhost/Paypal-Payment/home/success.php">
        <input TYPE="hidden" name="return" value="http://localhost/Paypal-Payment/home/success.php">
        <button type="submit" name="pay">Pay Now</button>
    </form>
</body>

</html>
