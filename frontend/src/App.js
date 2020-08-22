import React from 'react';
import './App.scss';

import logo from './assets/logo1000.png';

function App() {
  return (
    <div className="App">
    <header>
      <img src={logo} className="logo-header" alt="Quaver Music"/>
      <p className="subtitle">What have you been listening to?</p>
    </header>
    <footer>
    <img src={logo} className="logo-footer" alt="Quaver Music"/>
    <div className="footer-content">
      About | Contact
    </div>
    </footer>
    </div>
  );
}

export default App;
