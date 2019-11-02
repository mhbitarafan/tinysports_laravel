@extends('layouts.app')
@section('content')
<v-container>
        <form method="post">
                <div><v-text-field label="نام دسته بندی" name="name"></v-text-field></div>
                <div><v-text-field label="آدرس دسته بندی" name="slug"></div>
                <div>
                <v-select v-model="selected_category" :items="categories" label="زیرمجموعه"></v-select>
                <input type="hidden" name="parent_id" :value="selected_category">
                </div>
                <v-btn type="submit">ایجاد</v-btn>
            </form>  

</v-container> 
@endsection

<script>
    var cats = {!! json_encode($categories) !!};
    cats = JSON.parse(cats);
    window.categories = cats;
</script>