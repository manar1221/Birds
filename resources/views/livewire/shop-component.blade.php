<div>
          <!-- animal2  section start -->
          {{-- <div class="row"> --}}
            <div class="fashion_section">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php
                    $chunkedProducts = $products->chunk(12);
                    @endphp
                    @foreach ($chunkedProducts as $key => $chunk)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="container">
                                <h1 class="fashion_taital">الحيوانات</h1>
                                <div class="row">
                                    <div class="fashion_section_2 col-9">
                                        <div class="row">
                                            @foreach ($chunk as $product)
                                                <div class="col-lg-4 col-sm-4">
                                                    <div class="box_main">
                                                        <h4 class="shirt_text">{{ $product->name }}</h4>
                                                        <p class="price_text">السعر <span style="color: #262626;">{{ $product->price }}</span></p>
                                                        <div class="jewellery_img"><img src="{{ asset('images') }}/{{ $product->image }}"></div>
                                                        <div class="btn_main">
                                                            <div class="">{{ $product->description }}</div>
                                                            <div class="seemore_bt"><a href="{{route('product.details',['id'=>$product->id])}}">المزيد</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-3 primary-sidebar sticky-sidebar position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                                        <div class="sidebar">
                                            <h2>الفئات</h2>
                                            @foreach ($categories as $category)
                                            <ul>
                                                <li><a href="{{route('product.category',['id'=>$category->id])}}"> {{$category->name}} </a></li>
                                                <!-- Add more categories as needed -->
                                            </ul>
                                            @endforeach
                                        </div>
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
          {{-- </div> --}}
         <!-- animal2  section end -->

</div>
