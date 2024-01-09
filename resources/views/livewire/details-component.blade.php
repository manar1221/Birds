<div>
    <!-- product section -->
<section class="product-container" style="margin-top:24rem;">
    <!-- left side -->
    <div class="img-card">
        <img src="{{ asset('images') }}/{{ $product->image }}" alt="" id="featured-image">
        <!-- small img -->
    </div>
    <!-- Right side -->
    <div class="product-info">
        <h3>  {{$product->name}} : اسم الحيوان </h3>
        <h5> {{$product->price}} : السعر </h5>
        <p>  {{$product->description}} :  تفاصيل اكثر عن الحيوان  </p>

        <div class="sizes">
            <p>للتواصل</p>
            <p> {{$product->phone}}</p>
        </div>

        <div class="quantity">
            <p> العدد : {{$product->quantity}} </p>
        </div>
    </div>
</section>

</div>
