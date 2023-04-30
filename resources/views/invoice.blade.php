<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Portal</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #0689bb;
    color: #fff;
    height: 60px;
    padding: 0 20px;
}

.navbar-left {
    flex: 1;
    text-align: left;
}

.navbar-center {
    flex: 5;
    text-align: center;
}

.navbar-right {
    flex: 1;
    text-align: center;
}


.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
}

.navbar-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

.navbar-links li {
    margin-right: 20px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
}
    </style>
</head>
<body>
<nav class="navbar">
        <div class="navbar-left">
            <a href="#" class="navbar-brand">Payment Portal</a>
        </div>
        <div class="navbar-center">
            <ul class="navbar-links">
                
            </ul>
        </div>
        <div class="navbar-right">
        <ul class="navbar-links">
        </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12"><br>
                <h1>Invoice</h1><br>
                <p><b>Invoice Ref:</b> {{ $invoice->invoice_ref }}</p>
                <p><b>Invoice Date:</b> {{ $invoice->created_at }}</p>
                <p><b>Invoice Amount:</b> {{ $invoice->amount }}</p>
                <p><b>Invoice Status:</b> {{ $invoice->status }}</p>
            </div>
            <div class="col-md-12">
                <a href="/" class="btn btn-primary">Find Another Invoice</a> <br><br>
                @if($invoice->status == 'PAID')
                    <span class="alert alert-success">Invoice Paid</span>
                @else
                    <form action="{{ route('pay_invoice')}}" method="POST">
                        @csrf
                        <input type="hidden" name="invoice_ref" value="{{ $invoice->invoice_ref }}">
                        <input type="submit" value="Pay" class="btn btn-success">
                    </form>
                @endif
            </div>
        </div>
    </div>
    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
