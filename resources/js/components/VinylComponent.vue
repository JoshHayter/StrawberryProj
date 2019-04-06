<template>
<div class="uk-card">
    <div class="uk-card-header">
        <img :data-src="image" alt="" class="uk-align-center" uk-img>
    </div>

    <div class="uk-card-body">
        <p>
            <li>{{ title }}</li>
            <li>{{ description }}</li>
        </p>
    </div>
    <div class="uk-card-footer">
      <button class="uk-button uk-button-default uk-button-small">View more</button>
      <button class="uk-button uk-button-primary uk-button-small">Add to cart</button>
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
