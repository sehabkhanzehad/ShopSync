@extends('frontend2.layouts.master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>checkout</h2>
                            <ul>
                                <li><a href="{{ route('front.home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="">checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-big-py-space bg-light">
        <div class="custom-container">
            <div class="checkout-page contact-page">
                <div class="checkout-form">
                    {{-- <form> --}}
                        <div class="row">

                            <div class="col-lg-7 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Order Details</h3>
                                </div>

                                <div class="theme-form">
                                    <div class="row check-out">
                                        {{--
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                                        <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">$380.10</span></li>
                                        <li>Shipping
                                            <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="free-shipping" id="free-shipping">
                                                    <label for="free-shipping">Free Shipping</label>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="local-pickup" id="local-pickup">
                                                    <label for="local-pickup">Local Pickup</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count">$620.00</span></li>
                                    </ul> --}}
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Size</th>
                                                        <th scope="col">Color</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Product Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $sub_total = 0; @endphp
                                                    @forelse($cart as $key => $item)
                                                        <tr>

                                                            <td>
                                                                <div class="remove">
                                                                    <button class="btn remove-item"
                                                                        data-id="{{ $key }}">
                                                                        <i class="fas fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <th scope="row">
                                                                @if ($item['type'] == 'variable')
                                                                    @if ($item['variation_color'] != 'default')
                                                                        <img src="{{ asset($item['image']) }}"
                                                                            alt="" class="rounded border"
                                                                            style="height: 60px;width: 60px;"
                                                                            width="">
                                                                    @else
                                                                        <img src="{{ asset($item['image']) }}"
                                                                            alt="" class="rounded border"
                                                                            style="height: 60px;width: 60px;"
                                                                            width="">
                                                                    @endif
                                                                @else
                                                                    <img src="{{ asset($item['image']) }}" alt=""
                                                                        class="rounded border"
                                                                        style="height: 60px;width: 60px;" width="">
                                                                @endif
                                                            </th>
                                                            <td>{{ Str::limit($item['name'], 15) }}</td>
                                                            <td>{{ $item['variation_size'] }}</td>
                                                            <td>{{ $item['variation_color'] }}</td>
                                                            <td>


                                                                <div class="quantity d-flex">
                                                                    <button class="btn rounded-0 border border-muted dec"
                                                                        data-id="{{ $key }}">-</button>

                                                                    <input type="number"
                                                                        min="1"
                                                                        class="border border-muted text-center rounded-0 quantity-value"
                                                                        value="{{ $item['quantity'] }}"
                                                                        data-id="{{ $key }}" required>

                                                                    <button class="btn rounded-0 border border-muted inc"
                                                                        data-exist_qty="{{ $item['stock_qty'] }}"
                                                                        data-id="{{ $key }}">+</button>
                                                                </div>
                                                            </td>
                                                            <td>{{ $item['price'] }}</td>
                                                        </tr>
                                                        @php $sub_total += $item['quantity'] * $item['price']; @endphp
                                                    @empty
                                                    @endforelse
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Subtotal</td>
                                                        <td>{{ $sub_total }} ৳</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Shipping</td>
                                                        <td>
                                                            <p id="shipping_value">0.00 </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Total</td>
                                                        <td>
                                                            <p id="total_amount">{{ $sub_total }} ৳</p>
                                                            <input type="hidden" name="total_amount" id="total_amount"
                                                                value="{{ $sub_total }} ৳">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Billing Details</h3>
                                </div>

                                <form action="{{ route('front.checkout.store') }}" method="POST" id="checkoutForm">
                                    @csrf
                                    <div class="theme-form">
                                        <div class="row check-out ">

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="field-label">Name</label>
                                                <input type="text" name="shipping_name" id="name"
                                                    placeholder="Name">
                                            </div>
                                            <input type="hidden" name="variation_color_id"
                                                value="{{ $item['variation_color'] }}" />
                                            <input type="hidden" name="ip_address" id="ip_address" value="">

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="field-label">Phone</label>
                                                <input type="tel" maxlength="11" minlength="11" name="order_phone"
                                                    id="phone" aria-describedby="phone-help" value=""
                                                    placeholder="Phone">
                                            </div>

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="field-label">Address</label>
                                                <input type="text" name="shipping_address" id ="address" value=""
                                                    placeholder="000, Village, Post Office, City, district.">
                                            </div>

                                            <?php $shipping_value = [];
                                                foreach($cart as $key=>$item) {
                                                    $shipping_value[] = $item['is_free_shipping'];
                                                }

                                                if(in_array(null, $shipping_value)) { ?>

                                            {{-- <div class="form-floating mb-3"> --}}
                                                @foreach ($shippings as $key => $shipping)
                                                    @if ($shipping->id != '25')
                                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                            <input selected type="radio" value="{{ $shipping->id }}"
                                                                class="charge_radio delivery_charge_id"
                                                                id="ship_{{ $shipping->id }}"
                                                                data-shippingid="{{ $shipping->id }}" name="shipping_method"
                                                                data-shipping="{{ $shipping->shipping_fee }}"> &nbsp;&nbsp;
                                                            <label
                                                                for="ship_{{ $shipping->id }}">{{ $shipping->shipping_rule }}
                                                                -
                                                                {{ $shipping->shipping_fee }}{{ $setting->currency_icon }}</label>
                                                        </div>
                                                    @else
                                                    @endif
                                                @endforeach
                                            {{-- </div> --}}

                                            <?php } else { ?>
                                            @php
                                                $free_shippings = DB::table('shippings')->where('id', 25)->first();
                                            @endphp
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <input checked selected type="radio" value="{{ $free_shippings->id }}"
                                                    class="charge_radio delivery_charge_id"
                                                    id="ship_{{ $free_shippings->id }}"
                                                    data-shippingid="{{ $free_shippings->id }}" name="shipping_method"
                                                    data-shipping="{{ $free_shippings->shipping_fee }}"> &nbsp;&nbsp;
                                                <label
                                                    for="ship_{{ $free_shippings->id }}">{{ $free_shippings->shipping_rule }}
                                                    -
                                                    {{ $free_shippings->shipping_fee }}{{ $setting->currency_icon }}</label>
                                            </div>
                                            <?php } ?>

                                            <input type="hidden" name="total_amount" id="total_amount"
                                                value="{{ number_format($sub_total, 2) }}">
                                            <input type="hidden" name="shipCharge" id="shipCharge" value="">

                                            @if ($bkash_payment || $ssl_payment)
                                                <div class="input-group" style="margin-bottom: 25px;">
                                                    <label>
                                                        <input type="radio" name="payment_method" id="payment_method"
                                                            value="cash_on_delivery" checked> Cash On Delivery
                                                    </label>
                                                </div>
                                            @else
                                                <input type="hidden" name="payment_method" id="payment_method"
                                                    value="cash_on_delivery">
                                            @endif

                                            @if ($ssl_payment)
                                                <div class="input-group" style="margin-bottom: 25px;">
                                                    <label>
                                                        <input type="radio" name="payment_method" id="payment_method"
                                                            value="ssl_commerz"> SSLCommerz
                                                    </label>
                                                </div>
                                            @endif
                                            @if ($bkash_payment)
                                                <div class="input-group" style="margin-bottom: 25px;">
                                                    <label>
                                                        <input type="radio" name="payment_method" id="payment_method"
                                                            value="bkash">
                                                        Bkash
                                                    </label>
                                                </div>
                                            @endif


                                            {{-- <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <ul>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="payment-group" id="payment-2">
                                                            <label for="payment-2">Inside Dhaka - 60 tk</label>
                                                        </div>
                                                    </li>
                                                    <br><br>
                                                    <li>
                                                        <div class="radio-option paypal">
                                                            <input type="radio" name="payment-group" id="payment-3">
                                                            <label for="payment-3">Outside Dhaka - 120 tk</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-right"><button type="submit"
                                                        class="btn-normal btn">Place Order</button></div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                @foreach ($cart as $item)
                                    <div class="cart-item-data" data-product-id="{{ $item['product_id'] }}"
                                        data-product-name="{{ $item['name'] }}"
                                        data-category-name="{{ $item['category_name'] }}"
                                        data-price="{{ $item['price'] }}" data-quantity="{{ $item['quantity'] }}">
                                    </div>
                                @endforeach
                                <input type="hidden" name="total_cart_price" value="{{ $totalPrice }}">
                            </div>

                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
@section('script')
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}

    <script>
        $(document).ready(function() {
            // Toggle coupon form visibility on button click
            $("#coupon-toggle").click(function() {
                $("#coupon-form").toggle();
            });
        });
    </script>


    <script>
        // Fetch user's IP address using a third-party API
        fetch('https://api64.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                document.getElementById('ip_address').value = data.ip;
            })
            .catch(error => {
                console.error('Error fetching IP address:', error);
            });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {

            generateDataLayers();

            $('.charge_radio').click(function() {
                getCharge();
                // alert('hi');
            });

            function getCharge() {
                // getCharge

                var testval = $('input:radio:checked.charge_radio').map(function() {
                    return Number($(this).data('shipping'));
                }).get().join(",");
                var shipping_id = $('input:radio:checked.charge_radio').val();
                $('#shipping_id').val(shipping_id);
                $('p#shipping_value').text(testval + ' ৳');
                let sub_total = '{{ cartTotalAmount()['total'] }}';
                let total = Number(testval) + Number(sub_total);
                $('p#total_amount').text(total + ' ৳');

                $('input#shipCharge').val(testval);

            }

            $(document).on('submit', 'form#coupon_form', function(e) {
                e.preventDefault();
                let url = $(this).attr('action');
                let method = $(this).attr('method');
                let data = $(this).serialize();
                $.ajax({
                    type: method,
                    url: url,
                    data: data,
                    success: function(res) {
                        if (res.status == true) {
                            $('p#total_amount').text(res.total_price);
                            // alert(res.total_price);
                            // $('p#total_amount').text('sg');
                            // res.total_price.toFixed(2);
                        }
                    }
                });
            });

            function generateDataLayers() {
                var items = [];
                $('.cart-item-data').each(function() {
                    var product_id = $(this).data('product-id');
                    var product_name = $(this).data('product-name');
                    var category_name = $(this).data('category-name');
                    var price = $(this).data('price');
                    var quantity = $(this).data('quantity');
                    items.push({
                        item_id: product_id,
                        item_name: product_name,
                        item_category: category_name,
                        price: price,
                        quantity: quantity
                    });
                });
                let total = $('input[name="total_cart_price"]').val();

                // Push data to data layer
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    event: 'begin_checkout',
                    ecommerce: {
                        currency: "BDT",
                        value: total,
                        items: items
                    }
                });
            }

            $(document).on('submit', 'form#checkoutForm', function(e) {
                e.preventDefault();
                $('span.error').text('');
                let url = $(this).attr('action');
                let method = $(this).attr('method');
                let data = $(this).serialize();
                let shipCharge = $(this).find('input[id="shipCharge"]').val();
                var first_name = $('input[name="shipping_name"]').val();
                var mobile = $('input[name="order_phone"]').val();
                var shipping_address = $('input[name="shipping_address"]').val();

                // Function to generate data layer
                function generateDataLayer(transaction_id) {
                    var items = [];
                    $('.cart-item-data').each(function() {
                        var product_id = $(this).data('product-id');
                        var product_name = $(this).data('product-name');
                        var category_name = $(this).data('category-name');
                        var price = $(this).data('price');
                        var quantity = $(this).data('quantity');
                        items.push({
                            item_id: product_id,
                            item_name: product_name,
                            item_category: category_name,
                            price: price,
                            quantity: quantity
                        });
                    });
                    let total = $('input[name="total_cart_price"]').val();

                    // Push data to data layer
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        event: 'purchase',
                        ecommerce: {
                            currency: "BDT",
                            value: total,
                            shipping: shipCharge,
                            transaction_id: transaction_id,
                            items: items
                        },
                        customer: {
                            first_name: first_name,
                            phone: mobile,
                            shipping_address: shipping_address
                        }
                    });
                }

                $.ajax({
                    type: method,
                    url: url,
                    data: data,
                    success: function(res) {
                        if (res.status) {
                            toastr.success(res.msg);
                            var transaction_id = res.invoiceId;
                            generateDataLayer(transaction_id);

                            if (res.url) {
                                document.location.href = res.url;
                            } else {
                                window.location.reload();
                            }
                        } else {
                            toastr.error(res.msg);
                        }
                    },
                    error: function(response) {
                        $.each(response.responseJSON.errors, function(name, error) {
                            $(document).find('[name=' + name + ']').closest('div')
                                .after('<span class="error text-danger">' + error +
                                    '</span>');
                            toastr.error(error);
                        });
                    }
                });
            });

        });
    </script>
@endsection
