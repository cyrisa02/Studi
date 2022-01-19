<template>
  <div class="meteo-wrapper">
    <div class="header">
      <div>
          <h2>Script avec le concept de data</h2>
        <h1>{{ ville }}</h1>
        <h2>{{ description }}</h2>
      </div>
      <img id="meteo-icon" :src="icon_url" />
    </div>
    <div class="content">
      <div class="item">Température: {{ temperature }}  °C</div>
      <div class="item">Humidité: {{ humidity }} %</div>
      <div class="item">Pression: {{ pressure }} hPa</div>
      <div class="item">Vent: {{ wind_speed }} m/s</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MeteoDetails",

  /*Etape 1 déclaration du state du composant*/
  /*c'est déclarer les variables*/
  /*ce composant est statefull*/
/* le composant parent c'est App, on voudrait que ce soit lui qui lui donne des infos*/
/* donc il faut passer par des props, voir script MeteoProps*/


  data: () => ({
      ville: "Paris",
      description:"Nuageux",
      temperature: 25,
      humidity: 55,
      pressure: 1001,
      wind_speed: 24,
      icon_url:"https://cdn2.iconfinder.com/data/icons/weather-color-2/500/weather-01-256.png",


})}
</script>

<style scoped>
.meteo-wrapper {
  /* background-color: grey; */
  padding: 2%;
  border: 2px solid grey;
  border-radius: 10px;
}

.header {
  display: flex;
  justify-content: space-evenly;
  align-items: center;

  margin: 1vh;
  border-bottom: 2px solid lightgrey;
}

#meteo-icon {
  max-height: 15vh;
}

h2 {
  font-weight: lighter;
  color: grey;
}

.content {
  text-align: left;
}
</style>