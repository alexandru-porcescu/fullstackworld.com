import Vue from "vue";

import VueGoodshareFacebook from "vue-goodshare/src/providers/Facebook.vue";
import VueGoodshareTwitter from "vue-goodshare/src/providers/Twitter.vue";
import VueGoodshareLinkedIn from "vue-goodshare/src/providers/LinkedIn.vue";
import VueGoodshareWhatsApp from "vue-goodshare/src/providers/WhatsApp.vue";
import VueGoodshareReddit from "vue-goodshare/src/providers/Reddit.vue";


const app = new Vue({
    el: "#app",
    components: {
        VueGoodshareFacebook,
        VueGoodshareTwitter,
        VueGoodshareWhatsApp,
        VueGoodshareLinkedIn,
        VueGoodshareReddit,
    }
});