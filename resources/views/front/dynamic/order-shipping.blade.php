@extends('front.app')
@section('content')
@include('front.partials.header')
<main class="cartContent cartClass shippingBum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{ trans('vars.Orders.checkout') }}</h3>
            </div>
            <div class="col-12">
                <div class="stepContainer">
                    <div class="step">
                        <span>1</span>
                    </div>
                    <div class="arrow"></div>
                    <div class="step opac">
                        <span>2</span>
                    </div>
                    <div class="arrow"></div>
                    <div class="step opac">
                        <span>3</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col shipping-grid">
                <order-mob
                    :items="{{ $cartProducts }}"
                    :countrydelivery="{{ @$_COOKIE['country_id'] }}"
                    :delivery="{{ @$_COOKIE['delivery_id'] }}"
                    :mode="'{{ Auth::guard('persons')->user() ? "auth" : "guest" }}'"
                    :prods="{{ $carts['products'] }}"
                    :subprods="{{ $carts['subproducts'] }}"
                    {{-- :cartSets="{{ $carts['sets'] }}" --}}
                    site="{{ $site }}"
                ></order-mob>
                <div class="row">
                    <div class="col-12 titleCeck">
                        <p>{{ trans('vars.Orders.orderReview') }}</p>
                    </div>
                    <div class="col-12">
                      <cart-mob
                          :items="{{ $cartProducts }}"
                          mode="order-shipping"
                          site="{{ $site }}"
                          ></cart-mob>
                    </div>
                </div>
                <cart-summary-mob
                    :prods="{{ $carts['products'] }}"
                    :subprods="{{ $carts['subproducts'] }}"
                    {{-- :cartSets="{{ $carts['sets'] }}" --}}
                    mode="order-shipping"
                    site="{{ $site }}"
                    ></cart-summary-mob>
            </div>
        </div>
    </div>
</main>
@include('front.partials.footer')
@stop
