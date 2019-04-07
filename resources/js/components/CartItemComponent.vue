<template>
<div class="uk-child-width-1-3 uk-grid uk-flex-bottom">
    <div>{{title}}</div>
    <div>£{{price}}</div>
    <div>{{quantity}}</div>
</div>
</template>

<script>
export default {
  props: ['title', 'price', 'quantity'],

    mounted() {
        console.log('CartComponent mounted.')
    }
}
</script>
