@extends('layouts.app')

@section('content')
<v-container>
        
        <form method="post">
                <v-checkbox v-for="product in products" :key="product.id" v-model="selected_products" :label="product.name" :value="product.id"></v-checkbox>
                <v-select v-model="selected_category" :items="categories" label="دسته بندی"></v-select>
                <input name="products" type="hidden" :value="selected_products">
                <input type="hidden" name="cat" :value="selected_category">
                <v-btn type="submit">ثبت کردن</v-btn>
            </form>
</v-container>
@endsection

<script>
var cats = {!! json_encode($categories) !!};
cats = JSON.parse(cats);

var products = {!! json_encode($products) !!};
products = JSON.parse(products);
products = products.data;

window.cats = cats;
window.products = products;
</script>