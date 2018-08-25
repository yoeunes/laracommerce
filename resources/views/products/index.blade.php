@extends('layouts.app')

@section('title', 'Products')

@section('banner')
    @include('products.partials.html._banner')
@endsection

@section('content')
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    @include('partials.side._leftbar')
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

                    <!-- Sorting filters -->
                    @include('products.partials.html._upperbar')

                    <!-- Product -->
                    <div class="row">
                        @each ('products.partials.html._product', $products, 'product')
                    </div>

                    <!-- Pagination -->
                    @include('products.partials.html._pagination')

                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $('.block2-btn-addcart').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>
@endsection