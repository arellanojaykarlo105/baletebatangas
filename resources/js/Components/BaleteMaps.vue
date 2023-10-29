<template>
  <div class="container mx-auto relative">
    <div class="rounded bg-slate-700 shadow my-3 p-3 border grid place-content-center mx-auto">
      <!-- <div class="flex">
        <div>
          <img class="w-48 rounded mr-2" :src="imgSrc + '&size=600x450&maptype=roadmap'" alt="test" @error="imgError">
        </div>
        <div>
          <img class="w-48 rounded mr-2" :src="imgSrc + '&size=600x450&maptype=hybrid'" alt="test" @error="imgError">
        </div>
      </div> -->
      <iframe class="rounded max-w-4xl w-fxull" width="600" height="450" style="border:0" loading="lazy" allowfullscreen
        referrerpolicy="no-referrer-when-downgrade" :src="embedSrc">
      </iframe>
    </div>
    <div class="absolute top-0 right-0 p-6">
      <button @click="toggleLanguage()" class="text-gray-800 p-1 uppercase rounded-full bg-gray-300 w-content">{{ language
      }}</button>
    </div>
    <!-- <img :src="imgSrc + '&size=400x400'" alt="test" @error="imgError">
    <img :src="imgSrc + '&size=600x600'" alt="test" @error="imgError"> -->
  </div>
</template>
<script>
const mainLand = 'Balete, Batangas'
export default {
  props: ['loc'],
  setup () { },
  methods: {
    toggleLanguage () {
      this.language = this.language === 'en' ? 'fil' : 'en'
    },
    imgError (err) {
      console.log(this.imgSrc, err)
    }
  },
  data () {
    return {
      language: 'fil',
    }
  },
  computed: {
    embedSrc () {
      const apiBaseUrl = 'https://www.google.com/maps/embed/v1/place?';
      const apiKey = import.meta.env.VITE_GOOGLE_MAP_API_KEY;

      const params = {
        key: apiKey,
        q: this.loc ? `${this.loc}, ${mainLand}` : mainLand,
        language: this.language,
        region: 'PH',
      };

      const queryParams = Object.entries(params)
        .map(([key, value]) => `${key}=${encodeURIComponent(value)}`)
        .join('&');

      const fullUrl = `${apiBaseUrl}${queryParams}`;
      return fullUrl;
    },
    imgSrc () {
      const apiBaseUrl = 'https://maps.googleapis.com/maps/api/staticmap?'
      const apiKey = import.meta.env.VITE_GOOGLE_MAP_API_KEY;

      const params = {
        key: apiKey,
        center: this.loc ? `${this.loc}, ${mainLand}` : mainLand,
        // signature: 'c1dHsrIRvFC0bJ8Otu-fhS48mj4=',
        // size: '400x400'
      };

      const queryParams = Object.entries(params)
        .map(([key, value]) => `${key}=${encodeURIComponent(value)}`)
        .join('&');

      const fullUrl = `${apiBaseUrl}${queryParams}`;
      return fullUrl;
    }
  }
}
</script>
<style scoped>
iframe {
  max-width: 100%;
}
</style>