<template>
<div class="uk-padding-large">
    <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-grid">

        <div>
            <h2>Cart</h2>
            <div class="uk-child-width-1-3 uk-grid uk-flex-bottom">
                <div>Title</div>
                <div>Price</div>
                <div>Quantity</div>
            </div>
            <cart-item-component v-for="item in checkoutObj.lineItems" :key="item.id" :title="item.title" :price="item.variant.price" :quantity="item.quantity"></cart-item-component>
            <br>
            <div>Total Price: £{{this.checkoutObj.subtotalPrice}}</div>

        </div>

        <div>
            <h2>Shipping</h2>
            <form class="uk-form-horizontal">
              <div class="uk-margin">
                  <label class="uk-form-label" for="form-horizontal-text">First name</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="form-horizontal-text" type="text" placeholder="First name">
                  </div>
              </div>
              <div class="uk-margin">
                  <label class="uk-form-label" for="form-horizontal-text">Last name</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Last name">
                  </div>
              </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Address line 1</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Address line 1">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Address line 2</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Address line 2">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">City</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="City">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">County</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="County">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Post code</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Post code">
                    </div>
                </div>


            </form>
        </div>

    </div>
    <button class="uk-button uk-button-primary" style="background-color: #22afa5;">Proceed to payment</button>
</div>
</template>

<script>
export default {
    data: function() {
        return {
            checkoutID: '',
            checkoutObj: [],
        }
    },

    created() {
        this.fetchData()
    },
    watch: {
        '$route': 'fetchData'
    },
    methods: {
        fetchData: function() {
            if (checkCheckoutCookie() == true) {
                this.checkoutID = getCheckoutCookie();
                console.log("Checkout exists - ID: " + this.checkoutID);
                this.getCheckout();
            } else {
                console.log("Checkout doesn't exist, cart empty");
            }
        },
        getCheckout: function() {
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
