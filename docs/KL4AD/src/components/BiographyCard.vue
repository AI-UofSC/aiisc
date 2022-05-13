<template>
  <v-card
    class="mx-auto"
    max-width="344"
  >
    <v-img
      :src="imagePath"
      height="200px"
    ></v-img>

    <v-card-title>
      {{person.name}}
    </v-card-title>

    <v-card-subtitle>
      {{person.company}}
    </v-card-subtitle>

    <v-card-actions>
      <v-btn
        color="orange lighten-2"
        text
      >
        Biography
      </v-btn>

      <v-spacer></v-spacer>

      <v-btn
        icon
        @click="show = !show"
      >
        <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
      </v-btn>
    </v-card-actions>

    <v-expand-transition>
      <div v-show="show">
        <v-divider></v-divider>

        <v-card-text>
          {{person.biography}}
        </v-card-text>
      </div>
    </v-expand-transition>
  </v-card>
</template>

<script>
  export default {
    name: 'BiographyCard',
    props: [
      "person"
    ],
    data() {
      return {
        randomInt: 0,
        show: false,
      }
    },
    computed: {
      imagePath(){
        let imagePath = null;
        try{
        imagePath = require('../assets/' + this.person.imagePath);
        }catch {
          imagePath = "https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
        }
        return imagePath
      }
    },
    mounted() {
        
    },
    methods: {}
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>

</style>