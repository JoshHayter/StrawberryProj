<template>
  <div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-match uk-flex-bottom" uk-grid>

      <div class="uk-cover-container uk-responsive-width uk-text-right" v-for="product in products" :key="product.id">
        <vinyl-component :id="product.id" :image="product.images[0].src" :title="product.title" :description="product.description" :price="product.variants[0].price"></vinyl-component>
      </div>
  </div>
</template>

<script>
export default {
  data: function () {
  return {
    products: [],
  }
},
created () {
    this.fetchData()
  },
  watch: {
    '$route': 'fetchData'
  },
  methods: {
    fetchData: function () {
      client.product.fetchAll().then((products) => {
        this.products = products
      });
    }
  },

    mounted() {
        console.log('StoreComponent mounted.')
    }
}
</script>
