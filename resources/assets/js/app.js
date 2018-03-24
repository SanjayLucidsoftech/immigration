
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//require('./components/Example');




import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import PublicLayout from './layout/public_layout'
import PrivateLayout from './layout/private_layout'

import { authCheck } from './modules/auth/store/actions'




class Main extends Component {
    constructor(props) {
        super(props);
        this.state = {
                    isLoggedIn: true,
                  };
        this.handleLogin = this.handleLogin.bind(this);
        this.handleLogout = this.handleLogout.bind(this);
      }


      handleClick() {
        console.log("Log");
      }


      handleLogout(e){
        //e.preventDefault();
        //console.log("logout call....."+localStorage.removeItem('id_token'));
         //authLogout();
         localStorage.removeItem('id_token');
         this.setState({
          isLoggedIn: false,
        })
        //this.props.history.push("login") ;
      }

      handleLogin(e){
        console.log("logoin call.....");
         this.setState({
          isLoggedIn: true,
        })
      }

      componentWillMount() {
        this.state.isLoggedIn = authCheck();
      }


      
    render() {
        
      return (
          <div>
            {this.state.isLoggedIn ? (
            <PrivateLayout handleLogout = {this.handleLogout} />
          ) : (
            <PublicLayout handleLogin = {this.handleLogin} />
          )}
          </div>
      );
    }
  }

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
  }

//require('./layout/public_layout');
