<head>
    @extends('layouts.stripestyles')
</head>
<body>
    @if(session('message'))
        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
    @endif
    @extends('layouts.stripejs')
    <form method="POST" action="{{ route('payment.checkout', $product)}}" class="card-form mt-3 mb-3">
        @csrf
        <input type="hidden" name="payment_method" class="payment-method">
        <input class="StripeElement mb-3" name="card_holder_name" placeholder="Card holder name" required>
        <div class="col-lg-4 col-md-6">
            <div id="card-element"></div>
        </div>
        <div id="card-errors" role="alert"></div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">
                Purchase
            </button>
        </div>
    </form>
    
</body>