<template>
  <div class="meteo-wrapper">
    <div class="header">
      <div>
          <h2>Script avec le concept de props, relation avec le parent App.vue</h2>
          <p>2 versions: 1/ sans bind 2/ avec bind</p>
        <h1>{{ ville }}</h1>
        <h2>{{ description }}</h2>
      </div>
      <img id="meteo-icon" :src="icon_url" />
    </div>
    <div class="content">
      <div class="item">Température: {{ temperature }} °C</div>
      <div class="item">Humidité: {{ humidity }} %</div>
      <div class="item">Pression: {{ pressure }} hPa</div>
      <div class="item">Vent: {{ wind_speed }} m/s</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MeteoProps",

  /*Maintenant on passe des props en modifiant le script de MeteoDetails, supp de data*/
  /*Le composant ne peut pas modifier ses propres props mais renvoie des évenements à son parent App*/
  /* ensuite il faut créer le state de notre composant dans App*/

props: {
    ville:{
        type: String,
        required: true
        },
        description:{
        type: String,
        required: true
        },
        temperature:{
        type: Number,
        required: true
        },
        humidity:{
        type: Number,
        required: true
        },
        pressure:{
        type: Number,
        required: true
        },
        wind_speed:{
        type: Number,
        required: true
        },
        icon_url:{
        type: String,
        required: true
        },

  }}
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