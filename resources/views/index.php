<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vue Js Learning Phase</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

<div id="main">

    <input type="text" id="input" v-model="number">

    <p> The number is {{ number }}</p>
</div>

<script>
    new Vue({
        el : '#main',
        data : {
            'number' : 'okey'
        }
    });

</script>
</body>
</html>
