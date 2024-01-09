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
                  <a href="#" onclick="" class="text-danger"> حذف </a> /
                  <a href="#" class="text-info"> تعديل </a>
              </td>
            </tr>
        @endforeach
        <!-- Add more rows as needed -->
      </tbody>
    </table>
    {{ $categories->links() }}

 </section>
