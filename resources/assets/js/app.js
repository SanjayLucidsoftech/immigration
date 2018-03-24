
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




class Main extends Component {
    constructor(props) {
        super(props);
        this.state = {
          isLoggedIn: false,
        }
      }

    render() {
        const isLoggedIn = this.state.isLoggedIn;

      return (
          <div>
            {isLoggedIn ? (
            <PrivateLayout  />
          ) : (
            <PublicLayout />
          )}
          </div>
      );
    }
  }

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
  }

//require('./layout/public_layout');
