<template>
  <div>
    <h1>Présentation de ce script</h1>
    <h2>1/ Introduction</h2>
    <p>
      Ce script a été réalisé avec le framework Vue.js. Angular et React.js sont
      d'autres framewoks très connus et utilisés.
    </p>
    <h2>2/ Fonctionnement de ce type de framework</h2>
    <p>
      Ces frameworks focntionnent à l'aide de
      <strong>composants réactifs</strong>. On doit donc créer des "components".
      Le component racine est App. Le DOM est composé:
    </p>
    <ol>
      <li>du template HTML (le rendu: texte, image, ...)</li>
      <li>logique JS</li>
      <li>style CSS</li>
    </ol>

    <p>
      Exemple de logique: déclenchement au clic de souris, appui sur une touche.
      Cela rend dynamique le site
    </p>
    <h2>3/ Description du composant/component</h2>
    <p>Chaque componetn à un STATE(=données, data en JS).
        Il peut y avoir des modifications de ces state, des mises à jour. Cela va générer de nouveau comportement avec des variables, le rendu HTML sera mis à jour sans rechargement de la page.
        </p>
        <h3>Les State</h3>
        <p>Les states peuvent avoir deux types:</p>
        <h4>data</h4>
        <h4>props</h4>
        <p>Dans le cas des props, la notion de parent/enfant est importante</p>
        <h2>4/ Commandes de lancement</h2>
        <p>npm run serve</p>
        <h2>5/ Utilisation d'API</h2>
        <p>Ces interfaces de programmation d'application ont toute leur utilité avec ces frameworks JS. Ces interfaces sont des sortes de logiciels qui offrent des services à d'autres logiciels, la réponse est en langage json, en général.</p>
        <p>Les API utilisent les méthodes GET, POST, PUT, DELETE du protocle http.</p>
        <p>SOAP, RPC, GraphQL sont les différents types d'API</p>
        <h2>6/ Utilisation d'une librairie: Axios</h2>
        <p>Axios réalise des requêtes Http comme GET, POST, cela évite d'utiliser la méthode fetch en JS</p>
        <h3>Procédure</h3>
        <ol>
            <li>Installation de Axios avec npm</li>
            <li>Création d'un dossier services</li>
            <li>création d'un fichier .js -> openweathermap.js</li>
            <li>création de la fonction qui retourne les données (météo dans notre cas)</li>
            <li>appel de cette fonction dans le composant App</li>
            <li>binde des données</li>
        </ol>
        <h2>6/ Résultats</h2>
  </div>
</template>

<script>
export default {
  name: "Message",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
