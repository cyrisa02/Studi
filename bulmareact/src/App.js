import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
      <div style={{ padding: 20 }}>
      <div>
        <button>Bouton foncé</button>
      </div>
      <div>
        <button>Bouton large</button>
      </div>
      <div>
        <button>Bouton danger loading</button>
      </div>
      <div>Texte</div>
    </div>
    <div className="columns" style={{ padding: 20 }}>
      <div className="column">
        <button className="button is-dark">Bouton foncé</button>
      </div>
      <div className="column">
        <button className="button is-large">Bouton large</button>
      </div>
      <div className="column">
        <button className="button is-danger is-loading">
          Bouton danger loading
        </button>
      </div>
      <div className="column">Texte</div>
    </div>
    </div>
  );
}

export default App;
