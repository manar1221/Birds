<section class="categoryy mt-5 pt-5">


    {{-- <p>-----</p> --}}
    <a href="{{route('admin.category.add')}}" class="add-category-btn pt-5 mt-5"> اضافة فئة جديدة</a>

    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif

    <table>
      <thead>
        <tr>
          <th>الاسم</th>
          <th>الصورة</th>
          <th>التاريخ</th>
          <th> حذف / تعديل </th>
        </tr>
      </thead>
      <tbody>
        {{-- @php
            $i = ($products->currentPage()-1)*$products->perPage();
        @endphp --}}
        @foreach ($categories as $category)
            <tr>
              <td>{{ $category->name }}</td>
              <td><img src="{{ asset('images/categories')}}/{{$category->image}}" alt="{{ $category->name }}"></td>
              <td>{{ $category->created_at }}</td>
              <td>
                  <a href="#" onclick="deleteConfirmation({{ $category->id }})" class="text-danger"> حذف </a> /
                  <a href="{{ route('admin.category.edit',['category_id'=>$category->id]) }}" class="text-info"> تعديل </a>
              </td>
            </tr>
        @endforeach
        <!-- Add more rows as needed -->
      </tbody>
    </table>
    {{ $categories->links() }}

 </section>

 <div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> تأكيد عملية الحذف </h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation"> الغاء </button>
                        <button type="button" class="btn btn-danger" onclick="deleteCategory()"> حذف </button>
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
            @this.set('category_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteCategory()
        {
           @this.call('deleteCategory');
           $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
