import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
      <nav> 
    <div class="nav-wrapper purple lighten-2" >
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
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

      <div
      className="container valign-wrapper"
      style={{ height: 500, backgroundColor: "#ff5440", padding: 50 }}
    >
      <span className="white-text">
        Cliquez sur ce bouton :{" "}
        <a className="waves-effect waves-light btn">Bouton</a>
      </span>
    </div>
    </div>
    
  );
}

export default App;
