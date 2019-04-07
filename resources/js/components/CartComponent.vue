<template>
<div class="uk-position-medium uk-position-right">
  <p>Cart
    <button class="uk-button-danger uk-align-right" @click="$emit('close')">X</button>
</p>
    <cart-item-component v-for="item in cartItems" :key="item.cartItem" :cartItem="item.cartItem"></cart-item-component>
    <p>
    <button class="uk-button uk-button-primary" style="background-color: #22afa5;">Checkout</button>
  </p>
</div>
</template>

<script>
export default {
  data: function () {
  return {
    cartItems: [
      { cartItem: 'Chicken'},
      { cartItem: 'Pig'},
      { cartItem: 'Cow'},
      { cartItem: 'Dog'},
      { cartItem: 'Cat'},
      { cartItem: 'Horse'}
    ],
  }
},
  props: ['yes'],

    mounted() {
        console.log('CartComponent mounted.')
    }
}
</script>
