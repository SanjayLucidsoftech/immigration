import React, { Component } from 'react';
import { Link } from "react-router-dom";
//import  TopMenus from './top_menus'
var axios = require('axios');

export default class Header extends Component {
  constructor(props) {
    super(props);
    this.state = {
      menue_list: '',
      menus: [],
    }
  }


  componentDidMount() {
  }
    render() {
        return (
            <div className="header">
      <div className="container">
        <Link  to="/" className="site-logo">
        {/* <img src="./sb_theme/assets/frontend/layout/img/logos/logo-corp-red.png" alt="Metronic FrontEnd"/> */}
        Immigration.Com
        </Link>

        <a href="javascript:void(0);" className="mobi-toggler"><i className="fa fa-bars"></i></a>

        {/*  BEGIN NAVIGATION  */}
        <div className="header-navigation pull-right font-transform-inherit">
          <ul>
            {/*  BEGIN TOP SEARCH  */}
            {/* <li className="menu-search">
              <span className="sep"></span>
              <i className="fa fa-search search-btn"></i>
              <div className="search-box">
                <form action="#">
                  <div className="input-group">
                    <input type="text" placeholder="Search" className="form-control"/>
                    <span className="input-group-btn">
                      <button className="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div>
            </li> */}
            {/*  END TOP SEARCH  */}
          </ul>
        </div>
        {/*  END NAVIGATION  */}
      </div>
    </div>
        )
    }
}
