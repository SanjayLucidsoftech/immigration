import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router , Switch ,Route, Link } from "react-router-dom";
import { BrowserRouter } from 'react-router-dom'

import PreHeader from '../components/public/pre_header';
import Header from '../components/public/header';
import Content from '../components/public/content';
import PreFooter from '../components/public/pre_footer';
import Footer from '../components/public/footer';


import Login from '../components/public/login';
import Register from '../components/public/register';
import Page from '../components/public/page';


class Main extends Component {
  render() {
    return (
      <Router>
      <div>
         <PreHeader />
        <Header />
       <Switch>
          <Route exact path='/' component={Content} />
          <Route path='/login' component={Login} />
          <Route path='/register' component={Register} />
          <Route path='/page' component={Page} />
          </Switch>
          <PreFooter />
        <Footer />
      </div>
      </Router>
    );
  }
}


//export default main;

if (document.getElementById('root')) {
  ReactDOM.render(<Main />, document.getElementById('root'));
}