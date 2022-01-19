<template>
  <div id="app">     
    <message/>
    <meteo-details/>
    <!-- Binde :ville="meteo_data.ville", c'est long donc on peut faire avec v-bind qui bind l'ensemble de l'objet -->
    <meteo-props :ville="meteo_data.ville"/>

    <meteo-props v-bind="meteo_data"/>
    <img alt="Vue logo" src="./assets/logo.png">
    <HelloWorld msg="Composant de base de Vue.js. Welcome to Your Vue.js App  "/>
    
    
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import Message from './components/Message.vue'
import MeteoDetails from './components/MeteoDetails.vue'
import MeteoProps from './components/MeteoProps.vue'

export default {
  name: 'App',
  components: {
    HelloWorld,
    MeteoDetails,
    MeteoProps,
    Message
  },
  /*Creation du state du composant*/
  data: () => ({
/*on englobe alors tout dans un objet meteo_data*/
/*une fois que c'est fait, il faut modifier la div MeteoProps dans App.vue: on le binde*/
  meteo_data: {
    ville: "Strasbourg",
    description: "Nuageux",
    temperature: 25,
    humidity:50,
    pressure:1020,
    wind_speed: 14,
    icon_url:"https://cdn2.iconfinder.com/data/icons/weather-color-2/500/weather-01-256.png"

    }

})
}
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
