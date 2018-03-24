import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter,Route, Link } from "react-router-dom";
//import { BrowserRouter } from 'react-router-dom'

import PreHeader from '../components/public/pre_header';
import Header from '../components/public/header';
import Content from '../components/public/content';
import PreFooter from '../components/public/pre_footer';
import Footer from '../components/public/footer';

import Login from '../components/public/login';
import Register from '../components/public/register';
import Page from '../components/public/page';
import Dashboard from '../components/public/dashboard';



export default class PublicLayout extends Component {
  constructor(props) {
    super(props)
  }

  render() {
    return (
      <BrowserRouter>
      <div>
         <PreHeader />
        <Header />
          <Route exact path='/' component={Content} />
          <Route path='/login' component={Login} />
          <Route path='/dashboard'
                render={props => <Dashboard handleLogin={this.props.handleLogin} /> }
                />
          {/* <Route path='/dashboard' component={Dashboard} /> */}
          <Route path='/register' component={Register}  />
          <Route path='/page' component={Page} />
          <Route path='/page/:alia' component={Page} />
          <PreFooter />
        <Footer />
      </div>
      </BrowserRouter>
    );
  }
}


//export default main;

