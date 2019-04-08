<template>
<div class="uk-position-medium uk-position-right uk-position-z-index">
  <div class="uk-background-muted">
    <div class="uk-padding-small">
  <button class="uk-button-danger uk-align-right" @click="$emit('close')">X</button>

<div class="uk-padding-small">
  <div v-if="!isCheckoutEmpty()" class="uk-child-width-1-3 uk-grid uk-flex-bottom">
      <div>Title</div>
      <div>Price</div>
      <div>Quantity</div>
  </div>
    <div v-if="isCheckoutEmpty()">Cart Empty</div>
    <cart-item-component v-for="item in checkoutObj.lineItems" :key="item.id" :title="item.title" :price="item.variant.price" :quantity="item.quantity"></cart-item-component>
    <br>
    <div v-if="!isCheckoutEmpty()">Total Price: £{{this.checkoutObj.subtotalPrice}}</div>

      </div>
    <button v-if="!isCheckoutEmpty()" @click="clearCheckout()" class="uk-button uk-button-danger">Clear Cart</button>
    <button v-if="!isCheckoutEmpty()" class="uk-button uk-button-primary" style="background-color: #22afa5;">Checkout</button>
</div>
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

    clearCheckout: function () {
      var lineItemsToDelete = [];
      this.checkoutObj.lineItems.forEach(function(lineItem){
        lineItemsToDelete.push(lineItem.id);
      });
      client.checkout.removeLineItems(this.checkoutID, lineItemsToDelete).then((checkout) => {
        console.log('Checkout cleared...');
        this.fetchData();
      });
    },

    isCheckoutEmpty: function () {
      if (this.checkoutObj.lineItems === undefined || this.checkoutObj.lineItems.length == 0){
        return true;
      }
      return false;
    },

  },

    mounted() {
        console.log('CartComponent mounted.')
    }
}
</script>
