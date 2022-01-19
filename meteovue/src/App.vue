<template>
  <div id="app">
    <message />
    <meteo-details />
    <!-- Binde :ville="meteo_data.ville", c'est long donc on peut faire avec v-bind qui bind l'ensemble de l'objet -->
    <meteo-props :ville="meteo_data.ville" />

    <meteo-props v-bind="meteo_data" />

    <!-- Barre de recherche  avec un id pour l'appeler et on le binde à ville actuelle-->
    <!-- avec l'évenement "on change" on peut saisir une autre ville avec la fonction fetchWeather-->
    <input id="search" v-model="ville_acuelle" @change="fetchWeather" />
    <meteo-api
      id="meteo"
      v-if="meteo_data_api"
      :icon_url="icon_url"
      v-bind="meteo_data_api"
    />
    <img alt="Réparation pour npm run serve" src="./assets/fix_eslint.png" />

    <img alt="Vue logo" src="./assets/logo.png" />
    <HelloWorld
      msg="Composant de base de Vue.js. Welcome to Your Vue.js App  "
    />
  </div>
</template>

<script>
import HelloWorld from "./components/HelloWorld.vue";
import Message from "./components/Message.vue";
import MeteoDetails from "./components/MeteoDetails.vue";
import MeteoProps from "./components/MeteoProps.vue";
// Utilisation de Axios et de la fonction js

//import api from "@/service/openweathermap";
// PROBLEME cet import ne fonctionne pas!!!!!!
import MeteoApi from "./components/MeteoApi.vue";

export default {
  name: "App",
  components: {
    HelloWorld,
    MeteoDetails,
    MeteoProps,
    Message,
    MeteoApi,
  },
  /*Creation du state du composant*/
  data: () => ({
    /*on englobe alors tout dans un objet meteo_data*/
    /*une fois que c'est fait, il faut modifier la div MeteoProps dans App.vue: on le binde*/
    meteo_data: {
      ville: "Strasbourg",
      description: "Nuageux",
      temperature: 25,
      humidity: 50,
      pressure: 1020,
      wind_speed: 14,
      icon_url:
        "https://cdn2.iconfinder.com/data/icons/weather-color-2/500/weather-01-256.png",
    },

    //pour MeteoApi

    titre: "Mon application météo",
    ville_actuelle: "Paris",
    meteo_data_api: null,
  }),
  methods: {
    fetchWeather: function () {
      return api
        .getCurrentWeatherByCityname(this.ville_actuelle)
        .then((data) => {
          this.meteo_data_api = data;
        });
    },
  },

  //propriété calculée pour récupérer l'icone, une fois créée il faut la binder dans le composant en haut du script
  computed: {
    icon_url: function () {
      return `https://openweathermap.org/img/wn/${this.meteo_data_api.icon_id}@4x.png`;
    },
  },
  // appel de la fonction dans le hook created
  created() {
    this.fetchWeather();
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
