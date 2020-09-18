@extends('layout')

@section('content')
<section id="login" class="login" style="height: 100vh" data-aos="fade-up">
<div class="container py-auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="content">
    <form class="mx-auto" action="{{ route('pay.payML') }}" method="POST">
      <h4>Pagar con mercadopago</h4>
      <label class="text-center">Cantidad a pagar: $147.26 MXN (500 ARS)</label><br>
      @csrf
  <script class="mx-auto"
   src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference['response']['id']; ?>">
  </script>
</form>


    <h4>Pagar con Stripe</h4>
    <p>ARS 500.00</p>
    <form action="{{ route('pay.payStripe') }}" method="POST">
        @csrf
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="50000"
            data-currency="ars"
            data-name="Pagar con tarjeta"
            data-description="Clase javascript"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
        </script>
    </form>
</div>
</div>


</div>
</div>
</div>
</section>


@endsection
