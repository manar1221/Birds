<section class="categoryy mt-5 pt-5">


    {{-- <p>-----</p> --}}
    <a href="{{route('admin.product.add')}}" class="add-category-btn pt-5 mt-5">اضافة منتج جديد</a>

    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif

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
            <td><img src="{{ asset('images/products')}}/{{$product->image}}" alt="{{ $product->name }}"></td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->phone }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <a href="#" onclick="deleteConfirmation({{ $product->id }})" class="text-danger"> حذف </a>
                <a href="{{ route('admin.product.edit',['product_id'=>$product->id])}}" class="text-info"> تعديل </a>
            </td>
            </tr>
        @endforeach
        <!-- Add more rows as needed -->
      </tbody>
    </table>
    {{ $products->links() }}

 </section>


 <div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> تأكيد عملية الحذف </h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation"> الغاء </button>
                        <button type="button" class="btn btn-danger" onclick="deleteProduct()"> حذف </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {
            @this.set('product_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteProduct()
        {
           @this.call('deleteProduct');
           $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
