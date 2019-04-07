<template>
  <div>
    <div class="uk-width-1-3 uk-align-center uk-text-center">
      <v-select :options="tags" v-model="selectedTag"></v-select>
</div>
  <div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-match uk-flex-bottom" uk-grid>

      <div class="uk-cover-container uk-responsive-width uk-text-right" v-for="product in products" :key="product.id">
        <vinyl-component :id="product.variants[0].id" :image="product.images[0].src" :title="product.title" :description="product.description" :price="product.variants[0].price"></vinyl-component>
      </div>
  </div>
</div>
</template>

<script>
export default {
  data: function () {
  return {
    products: [],
    tags:['pop', 'hip hop', 'rock', 'dance & electronic', 'classic'],
    selectedTag: '',
  }
},
created () {
    this.fetchData()
  },

  methods: {
    fetchData: function () {
      if (this.selectedTag.length)
      {
        client.product.fetchQuery({query: 'tag:'+this.selectedTag}).then((products) => {
          this.products = products
        });
      } else {
        client.product.fetchAll().then((products) => {
          this.products = products
        });
      }

    }
  },

  watch: {
      selectedTag: function(val) {
          //do something when the data changes.
          if (val) {
              this.fetchData();
          }
      }
  },

    mounted() {
        console.log('StoreComponent mounted.')
    }
}
</script>
