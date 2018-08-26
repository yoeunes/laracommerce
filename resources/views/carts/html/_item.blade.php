@php
    $product = \App\Product::find($item->id);
@endphp
<tr class="table-row">
    <td class="column-1">
        <form action="{{ route('carts.destroy', $item->rowId) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="btn-removecart-product">
                <button type="submit">
                    <span class="lnr lnr-trash text-red"></span>
                </button>
            </div>
        </form>
    </td>
    <td class="column-2">
        <div class="cart-img-product b-rad-4 o-f-hidden">
            <img src="{{ asset('vendor/fashe-colorlib/images/item-02.jpg') }}" alt="IMG-PRODUCT">
        </div>
    </td>
    <td class="column-3">
        <p class="product-name">
            <a href="{{ route('products.show', $product) }}">
                {{ $item->name }}
            </a>
        </p>
        <p class="text-xs mt-2">{{ $product->description }}</p>
    </td>
    <td class="column-4">${{ $item->price }}</td>
    <td class="column-5">
        <div class="flex-w bo5 of-hidden w-size17">
            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
            </button>

            <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{ $item->qty }}">

            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
            </button>
        </div>
    </td>
    <td class="column-6s">$36.00</td>
</tr>