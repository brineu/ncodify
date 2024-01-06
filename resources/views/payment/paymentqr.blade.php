<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment qr</title>
    <link rel="stylesheet" href="{{ asset('css/payment/paymentqr.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/back.png') }}" alt="back" class="back">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo">
                <span class="text">Codify</span>
            </a>
        </div>
    </nav>

    <div class="container content">
        <div class="title">Payment</div>
        <div class="box">
            <div class="pay">Pay Before 15 October 2023 10:24AM</div>
            <div class="scan">Scan QR Code to pay </div>
            <img src="{{ asset('images/qr.png') }}" alt="qr" class="qr">
            <div class="sps">Powered by <img src="{{ asset('images/qris.png') }}" alt="Powered By"></div>

        </div>
    </div>
</body>

</html>