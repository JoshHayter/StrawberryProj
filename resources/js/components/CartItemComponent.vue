<template>
<div class="uk-card-default">
    {{cartItem}}
</div>
</template>

<script>
export default {
  props: ['cartItem'],

    mounted() {
        console.log('CartComponent mounted.')
    }
}
</script>
