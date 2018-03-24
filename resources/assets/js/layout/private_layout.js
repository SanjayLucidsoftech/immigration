import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter,Route, Link } from "react-router-dom";
//import { BrowserRouter } from 'react-router-dom'

import PreHeader from '../components/private/pre_header';
import Header from '../components/private/header';
import PreFooter from '../components/private/pre_footer';
import Footer from '../components/private/footer';
import Dashboard from '../components/private/dashboard';

export default class PublicLayout extends Component {
  constructor(props) {
    super(props)
  }

  render() {
    return (
      <BrowserRouter>
      <div>
      
         <PreHeader handleLogout = {this.props.handleLogout} />
        <Header />
          <Route path='/dashboard' component={Dashboard} />
          <PreFooter />
        <Footer />
      </div>
      </BrowserRouter>
    );
  }
}


//export default main;

