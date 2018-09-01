@php
    $product = \App\Product::find($item->id);
@endphp
<tr class="table-row">
    <td class="column-1">
        <div class="cart-img-product b-rad-4 o-f-hidden">
            <img src="{{ asset('vendor/fashe-colorlib/images/item-02.jpg') }}" alt="IMG-PRODUCT">
        </div>
    </td>
    <td class="column-2">
        <p class="product-name">
            <a href="{{ route('products.show', $product) }}">
                {{ $item->name }}
            </a>
        </p>
        <p class="text-xs mt-2">{{ $product->description }}</p>
    </td>
    <td class="column-3">${{ number_format( $item->price, 2 ) }}</td>
    <td class="column-4">
        <form action="{{ route('wishlist.destroy', $item->rowId) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="btn-removecart-product">
                <button type="submit" class="text-red">
                    Remove
                </button>
            </div>
        </form>

        <form action="{{ route('wishlist.switchtocart', $item->rowId) }}" method="POST">
            @csrf

            <div class="btn-removecart-product mt-2">
                <button type="submit" class="text-red">
                    Add to cart
                </button>
            </div>
        </form>
    </td>
</tr>