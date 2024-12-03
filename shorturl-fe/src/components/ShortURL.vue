<script>
import axios from 'axios';
export default {
  data() {
    return {
    url: this.$store.getters.shortUrl
    }
  },
  methods: {
    submit() {
      this.$store.commit("saveUrl", this.url);
      let token = 'pChuBZB6geUlVk4YDnC87Z6u0xpsKzesWJpVJZ994bcf903a';
      const data = {
        firstName: 'John',
        lastName: 'Doe'
      };

      axios.get('https://shorturl-nginx.short-url.orb.local/api/user?id=1', {
        headers: {
          Authorization: `Bearer ${token}`,
          token: token
        }
      })
        .then(response => {
          console.log(response.data);
        })
        .catch(error => {
          console.error(error);
        });
    }
  }
}
</script>

<template>
  <label for="url">Enter URL to shorten</label>
  <input id='url' v-model="url">
  <button @click="submit">Submit</button>
</template>
