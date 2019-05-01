<template>
        <stripe-checkout
            button="Suscribirme"
            buttonClass="btn btn-course"
            :stripe-key="stripe_key"
            :product="product"
        >
        </stripe-checkout>
</template>

<script>
import { StripeCheckout} from 'vue-stripe'
export default {
    components: {
        'stripe-checkout': StripeCheckout
    },
    props: {
        stripe_key: '',
        name: '',
        amount: '',
        description: ''
    },
    computed: {
        product () {
            return {
                name: this.name,
                amount: parseFloat(this.amount),
                description: this.description
            }
        }
    }
}
</script>

