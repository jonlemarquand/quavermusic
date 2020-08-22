import React, { useState } from 'react';
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";

import Footer from './containers/Footer/Footer';
import Header from './containers/Header/Header';
import Home from './containers/Home/Home';

import './App.scss';

function App() {

  return (
    <div className="App">
    <Header />
    <Router>
      <Switch>
        <Route path="/">
          <Home />
        </Route>
      </Switch>
    </Router>
    <Footer />
    </div>
  );
}

export default App;
