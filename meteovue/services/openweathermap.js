import axios from "axios";
/* création d'une instance de Axios pour éviter de répeter les mêmes paramètres*/

const api = axios.create ({
    baseURL: "https://api.openweathermap.org/",
    timeout:10000,
    // voir dans la doc de openweather
    params: {
        appid:"8417760ba8724050ae99eca6e6caa318",

    }
});

export default{
    getCurrentWeatherByCityname: (cityname) => {
        return api.get("/data/2.5/weather", {params: {q:cityname, units: "metric"} })
        .then(reponse => {
            let data = reponse.data;
            return {
                /*voir dans le json attetnion dans weather on a un array donc [] avec le bon index*/
                ville: data.name,
                description: data.weather[0].description,
                icon_id: data.weather[0].icon,
                wind_speed: data.wind.speed,
                humidity:data.main.humidity,
                pressure: data.main.pressure,
                temperature:data.main.temp,

            }
        })
    }
}