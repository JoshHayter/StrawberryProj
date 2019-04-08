<template>
<div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-grid">
  <div class="uk-padding-large">
    <div class="uk-child-width-1-3 uk-grid uk-flex-bottom">
        <div>Title</div>
        <div>Price</div>
        <div>Quantity</div>
    </div>
      <cart-item-component v-for="item in checkoutObj.lineItems" :key="item.id" :title="item.title" :price="item.variant.price" :quantity="item.quantity"></cart-item-component>
      <br>
      <div>Total Price: £{{this.checkoutObj.subtotalPrice}}</div>

        </div>
      <!-- <button v-if="!isCheckoutEmpty()" @click="clearCheckout()" class="uk-button uk-button-danger">Clear Cart</button> -->
      <!-- <button v-if="!isCheckoutEmpty()" class="uk-button uk-button-primary" style="background-color: #22afa5;">Checkout</button> -->
<div>
  SHIPPING
</div>
</div>
</template>

<script>
export default {
  data: function () {
  return {
    checkoutID: '',
    checkoutObj: [],
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
      if (checkCheckoutCookie() == true){
        this.checkoutID = getCheckoutCookie();
        console.log("Checkout exists - ID: " + this.checkoutID);
        this.getCheckout();
      } else {
        console.log("Checkout doesn't exist, cart empty");
      }
    },
    getCheckout: function () {
      client.checkout.fetch(this.checkoutID).then((checkout) => {
      this.checkoutObj = checkout;
      console.log(checkout);
      });
    },

  },

    mounted() {
        console.log('CheckoutComponent mounted.')
    }
}
</script>
