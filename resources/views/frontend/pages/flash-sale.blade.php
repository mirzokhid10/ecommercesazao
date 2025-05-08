@extends('frontend.layouts.master')

@section('title')
    Flash Sale
@endsection

@section('content')
    {{-- <!--============================
        BREADCRUMB START
    ==============================--> --}}
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Flash Sale</h4>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="javascript:;">Flash Sale</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!--============================
        BREADCRUMB END
    ==============================--> --}}


    {{-- <!--============================
        DAILY DEALS DETAILS START
    ==============================--> --}}
    <section id="wsus__daily_deals">
        <div class="container">
            <div class="wsus__offer_details_area">
                <div class="row">

                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="wsus__section_header rounded-0">
                            <h3>flash sell</h3>
                            <div class="wsus__offer_countdown">
                                <span class="end_text">ends time :</span>
                                <div class="simply-countdown simply-countdown-one"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($flashSaleItems as $item)
                        @php
                            $product = \App\Models\Product::find($item->product_id);
                        @endphp
                        <div class="col-xl-3 col-sm-6 col-lg-4">
                            <div class="wsus__product_item">
                                <span class="wsus__new">{{ productType($product->product_type) }}</span>
                                @if (checkDiscount($product))
                                    <span
                                        class="wsus__minus">-{{ calculateDiscountPercent($product->price, $product->offer_price) }}%</span>
                                @endif
                                <a class="wsus__pro_link" href="{{ $product->slug }}">
                                    {{--  route('product-detail', --}}
                                    <img src="{{ asset($product->thumb_image) }}" alt="product"
                                        class="img-fluid w-100 img_1" />
                                    <img src="
                            @if (isset($product->productImageGalleries[0]->image)) {{ asset($product->productImageGalleries[0]->image) }}
                            @else
                                {{ asset($product->thumb_image) }} @endif
                            "
                                        alt="product" class="img-fluid w-100 img_2" />
                                </a>
                                <ul class="wsus__single_pro_icon">
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            class="show_product_modal" data-id="{{ $product->id }}"><i
                                                class="far fa-eye"></i></a>
                                    </li>
                                    <li><a href="" class="add_to_wishlist" data-id="{{ $product->id }}"><i
                                                class="far fa-heart"></i></a>
                                    </li>
                                    {{-- <li><a href="#"><i class="far fa-random"></i></a> --}}
                                </ul>
                                <div class="wsus__product_details">
                                    <a class="wsus__category" href="#">{{ $product->category->name }} </a>

                                    <p class="wsus__pro_rating">


                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $product->reviews_avg_rating)
                                                <i class="fas fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor

                                        <span>({{ $product->reviews_count }} review)</span>
                                    </p>
                                    <a class="wsus__pro_name" href="{{ $product->slug }}">{{ $product->name, 52 }}</a>
                                    {{-- route('product-detail', --}}
                                    @if (checkDiscount($product))
                                        <p class="wsus__price">{{ $product->offer_price }}
                                            <del>{{ $product->price }}</del>
                                        </p>
                                    @else
                                        <p class="wsus__price">{{ $product->price }}</p>
                                    @endif
                                    <form class="shopping-cart-form">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        {{-- @foreach ($product->variants as $variant)
                                            @if ($variant->status != 0)
                                                <select class="d-none" name="variants_items[]">
                                                    @foreach ($variant->productVariantItems as $variantItem)
                                                        @if ($variantItem->status != 0)
                                                            <option value="{{ $variantItem->id }}"
                                                                {{ $variantItem->is_default == 1 ? 'selected' : '' }}>
                                                                {{ $variantItem->name }}
                                                                (${{ $variantItem->price }})
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            @endif
                                        @endforeach --}}
                                        <input class="" name="qty" type="hidden" min="1" max="100"
                                            value="1" />
                                        <button class="add_cart" type="submit">add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="mt-5">
                    @if ($flashSaleItems->hasPages())
                        {{$flashSaleItems->links()}}
                    @endif
                </div> --}}
            </div>
        </div>
    </section>
    {{-- <!--============================
        DAILY DEALS DETAILS END
    ==============================--> --}}
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            simplyCountdown('.simply-countdown-one', {
                year: {{ date('Y', strtotime($flashSaleDate->end_date)) }},
                month: {{ date('m', strtotime($flashSaleDate->end_date)) }},
                day: {{ date('d', strtotime($flashSaleDate->end_date)) }},
            });
        })
    </script>
@endpush
