@php
    $product = \App\Product::find($item->id);
@endphp
<tr class="table-row">
    <td class="column-1">
        <div class="cart-img-product b-rad-4 o-f-hidden">
            <img src="{{ asset('vendor/fashe-colorlib/images/item-02.jpg') }}" alt="IMG-PRODUCT">
        </div>
    </td>
    <td class="column-2">{{ $item->name }}</td>
    <td class="column-3">${{ $item->price }}</td>
    <td class="column-4">
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
    <td class="column-5">$36.00</td>
</tr>