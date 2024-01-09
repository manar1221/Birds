<section class="section_form">
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
    <form id="consultation-form" class="feed-form pt-2 pb-5" wire:submit.prevent="storeCategory">
        <label for="quantity"> الاسم </label>
        <input type="text" id="name" name="name" required maxlength="50" class="input-field" placeholder=" اسم حيوانك " wire:model="name">

        <label for="image">صورة للفئة </label>
        <input type="file" name="image" required wire:model="image">
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" width="120">
        @endif

        <button class="button_submit">اضف الفئة</button>
    </form>
</section>
