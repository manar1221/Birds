<div>
    <!-- bird section start -->
    <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
            @php
            $chunkedProducts = $lproducts->chunk(3);
            @endphp
            @foreach ($chunkedProducts as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="container">
                        <h1 class="fashion_taital">الطيور </h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                @foreach ($chunk as $product)
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="box_main">
                                            <h4 class="shirt_text">{{ $product->name }}</h4>
                                            <p class="price_text">السعر <span style="color: #262626;">{{ $product->price }}</span></p>
                                            <div class="jewellery_img"><img src="{{ asset('images') }}/{{ $product->image }}"></div>
                                            <div class="btn_main">
                                                <div class="">{{ $product->description }}</div>
                                                <div class="seemore_bt"><a href="#">المزيد</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
              </div>
            @endforeach
           </div>
           <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
           <i class="fa fa-angle-left"></i>
           </a>
           <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
           <i class="fa fa-angle-right"></i>
           </a>
        </div>
     </div>
     <!-- bird section end -->

     <!-- animal section start -->
     <div class="fashion_section">
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
            @php
            $chunkedProducts = $lproducts->chunk(3);
            @endphp
            @foreach ($chunkedProducts as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                 <div class="container">
                    <h1 class="fashion_taital">الحيوانات</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            @foreach ($chunk as $product)
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">{{ $product->name }}</h4>
                                        <p class="price_text">السعر <span style="color: #262626;">{{ $product->price }}</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images') }}/{{ $product->image }}"></div>
                                        <div class="btn_main">
                                            <div class="">{{ $product->description }}</div>
                                            <div class="seemore_bt"><a href="#">المزيد</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                 </div>
              </div>
            @endforeach
           </div>
           <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
           <i class="fa fa-angle-left"></i>
           </a>
           <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
           <i class="fa fa-angle-right"></i>
           </a>
        </div>
     </div>
     <!-- animal section end -->

     <!-- animal2  section start -->
     <div class="fashion_section">
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
            @php
            $chunkedProducts = $lproducts->chunk(3);
            @endphp
            @foreach ($chunkedProducts as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                 <div class="container">
                    <h1 class="fashion_taital">الحيوانات</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            @foreach ($chunk as $product)
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">{{ $product->name }}</h4>
                                        <p class="price_text">السعر <span style="color: #262626;">{{ $product->price }}</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images') }}/{{ $product->image }}"></div>
                                        <div class="btn_main">
                                            <div class="">{{ $product->description }}</div>
                                            <div class="seemore_bt"><a href="#">المزيد</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                 </div>
              </div>
            @endforeach
           </div>
           <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
           <i class="fa fa-angle-left"></i>
           </a>
           <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
           <i class="fa fa-angle-right"></i>
           </a>
        </div>
     </div>
     <!-- animal2  section end -->
</div>
