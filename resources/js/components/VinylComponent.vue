<template>
<div class="uk-padding">
    <div>
        <img :data-src="image" alt="" class="uk-align-center" uk-img>
    </div>

    <div>
        <p>
            <li>{{ title }}</li>
            <li>{{ description }}</li>
        </p>
    </div>
    <div>
      <button class="uk-button uk-button-default uk-button-small">View more</button>
      <button class="uk-button uk-button-primary uk-button-small" style="background-color: #22afa5;">Add to cart</button>
    </div>
</div>
</template>

<script>
export default {
  props: ['id', 'image', 'title', 'description'],

    mounted() {
        console.log('VinylComponent mounted.')
    }
}
</script>
