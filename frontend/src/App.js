import React, { useState } from 'react';
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";

import Artists from './containers/Artists/Artists';
import ArtistSingle from './containers/Artists/ArtistSingle';
import Footer from './containers/Footer/Footer';
import Header from './containers/Header/Header';
import Home from './containers/Home/Home';

import './App.scss';

function App() {

  return (
    <div className="App">
      <Router>
        <Header />
        <Switch>
            <Route path="/artists/:artist" component={ArtistSingle} />
            <Route path="/artists" component={Artists} />
            <Route path="/" component={Home} />
        </Switch>
        <Footer />
      </Router>
    </div>
  );
}

export default App;
