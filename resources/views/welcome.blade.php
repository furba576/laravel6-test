<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vue Js Learning Phase</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <style>
        .red-color {
            color: red;
        }
    </style>
</head>
<body>

<div id="main">

    <h1 :class="{ 'red-color' : true }">Products</h1>

    <ul>
        <li v-for="product in products"> @{{ product }} </li>
    </ul>

    <input id="input" v-model="newProduct">
    <button v-on:click='addProduct' :title="title" :disabled="isTrue == 1">Add Product</button>

</div>

<script>
    let app = new Vue({
        el : '#main',
        data : {
            'newProduct' : '',
            'className' : 'red-color',
            'title' : 'this is title form js',
            'isTrue' : 0,
            'products' : [
                'Pro 1',
                'Pro 2',
                'Pro 3'
            ]
        },
        methods: {
            addProduct(){
                 this.products.push(this.newProduct);
                 this.title = this.newProduct;
                 this.newProduct = '';

            }
        }
    });

</script>
</body>
</html>
