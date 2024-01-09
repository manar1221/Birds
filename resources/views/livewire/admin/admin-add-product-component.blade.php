<section class="section_form">
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
    <form id="consultation-form" class="feed-form pt-2 pb-5" wire:submit.prevent="addProduct">
        <label for="quantity"> الاسم </label>
        <input type="text" id="name" name="name" required maxlength="50" class="input-field" placeholder=" اسم حيوانك " wire:model="name">

        <label for="phone">رقم الموبايل</label>
        <input type="number" id="phone" name="phone" required maxlength="11" minlength="11" class="input-field" placeholder="رقم الهاتف" wire:model="phone">

        <label for="price">السعر</label>
        <input name="price" type="text" required placeholder="السعر" wire:model="price">

        <label for="quantity">العدد المتاح</label>
        <input name="quantity" required placeholder="الكمية" wire:model="quantity">

        <label for="name">النوع او الفئة</label>
        {{-- <input name="kind" required placeholder=" النوع او الفئة" wire:model="category_id"> --}}
        <select name="category_id" class="form-control mb-3" wire:model="category_id">
            <option value=""> اختار فئة </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="image">صورة للمراد بيعه</label>
        <input type="file" name="image" required placeholder=" صورة لحيوانك" wire:model="image">
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" width="120">
        @endif

        <label for="name">وصف له</label>
        <textarea name="detail" cols="30" rows="10" placeholder="الوصف" wire:model="description"></textarea>


        <button class="button_submit">اضف حيوانك</button>
    </form>
</section>
