<template>
<div class="uk-padding">
    <div>
        <img :data-src="image" alt="" class="uk-align-center" uk-img>
    </div>

    <div>
        <p>
            <li class="uk-text-truncate">{{ title }}</li>
            <li class="uk-text-truncate">{{ description }}</li>
            <li class="uk-text-truncate">£{{ price }}</li>
        </p>
    </div>
    <div>
      <!-- <button class="uk-button uk-button-default uk-button-small">View more</button> -->
      <button @click="addtoCart()"class="uk-button uk-button-primary uk-button-small" style="background-color: #22afa5;">Add to cart</button>
    </div>
</div>
</template>

<script>
export default {

  props: ['id', 'image', 'title', 'description', 'price'],

  data: function () {
  return {
    checkoutId: '',
  }
  },

  methods: {
    addtoCart() {
      if (checkCheckoutCookie() == true){
        this.checkoutID = getCheckoutCookie();
        console.log("Checkout already exists - ID: " + this.checkoutID);
      } else {
        console.log("Checkout doesn't exist - creating new checkout...");
        this.createNewCheckout();
      }
      this.addToCheckout()
    },

    createNewCheckout() {
      client.checkout.create().then((checkout) => {
        this.checkoutID = checkout.id;
        setCheckoutCookie(this.checkoutID);
        console.log("New checkout created - ID: " + this.checkoutID);
      });
    },

    addToCheckout() {
      var lineItemsToAdd = [
        {
          variantId: this.id,
          quantity: 1
        }
      ];
      client.checkout.addLineItems(this.checkoutID, lineItemsToAdd).then((checkout) => {
        console.log("Item added to checkout. New checkout: ");
        console.log(checkout.lineItems);
      });
    },
  },

    mounted() {
        console.log('VinylComponent mounted.')
    },

}
</script>
