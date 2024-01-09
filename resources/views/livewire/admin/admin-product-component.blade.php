<section class="categoryy mt-5 pt-5">


    {{-- <p>-----</p> --}}
    <a href="{{route('admin.product.add')}}" class="add-category-btn pt-5 mt-5">اضافة منتج جديد</a>
    <table>
      <thead>
        <tr>
          <th>الاسم</th>
          <th>السعر</th>
          <th>الصورة</th>
          <th>العدد المتاح</th>
          <th>الفئة</th>
          <th>الهاتف</th>
          <th>التاريخ</th>
          <th> حذف / تعديل </th>
        </tr>
      </thead>
      <tbody>
        {{-- @php
            $i = ($products->currentPage()-1)*$products->perPage();
        @endphp --}}
        @foreach ($products as $product)
            <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td><img src="{{ asset('images')}}/{{$product->image}}" alt="{{ $product->name }}"></td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->phone }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <a href="#" onclick="" class="text-danger"> حذف </a>
                <a href="#" class="text-info"> تعديل </a>
            </td>
            </tr>
        @endforeach
        <!-- Add more rows as needed -->
      </tbody>
    </table>
    {{ $products->links() }}

 </section>
