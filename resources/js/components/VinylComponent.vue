<template>
<div class="card">
    <div class="card-header">
        <img :data-src="image" alt="" class="uk-align-center" uk-img>
    </div>

    <div class="card-body">
        <p>
            <li>{{ title }}</li>
            <li>{{ description }}</li>
        </p>
    </div>
</div>
</template>

<script>
export default {
  props: ['image', 'title', 'description'],

    mounted() {
        console.log('VinylComponent mounted.')
    }
}
</script>
