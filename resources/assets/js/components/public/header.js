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
    axios.get(`http://localhost:8010/api/guest/menu`)
      .then(res => {
      //   const menue_list = res.data.map(function(obj, i) {
      //     var menu_data="";
      //    return  menu_data = <li className="dropdown" key={obj.id}>          
      //               <Link className="dropdown-toggle"  to={"/page/"+obj.link} >
      //               {obj.menue_name}
      //               </Link>
      //               {this.has_children( [obj], obj.id )}
      //               </li>           
      // }.bind(this));
      var menus_obj=res.data;

      
    

      var newArr = Object.keys(menus_obj);
      var menus = newArr.map(function(i) {
        
        return menus_obj[i];

      });
      
      //console.log(menus);

      // const menus = res.data.map(obj => [obj]);
     // const menus = res.data;

     // console.log(Array.from([menus]));
     // menus=Array.from([menus])
      this.setState({menus: menus});

      
      //const menus = res.data.map(obj => [obj]);
      //console.log(this.state.menus);


      });
  }

  

    render() {
      let nodes = this.state.menus.map(function(menu) {
        let target='';
        if(menu.menue_type=='link' && menu.link!="#")
          target="_blank";
        else
          target="";
        //Convert Array object to array
        if(menu.parent==0){
        let children=[];
        if(menu.children){
        let newArr = Object.keys(menu.children);
       children = newArr.map(function(i) {
          return menu.children[i];
        });
      }

        return (
           <Node node={menu} children={children} target={target} key={menu.id} />
          //{menu}
        );
      }
    }
    
    ); 

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
          {/* {this.state.menus.map(menus =>
            <TopMenus key={menus.id} data={menus}/>
          )} */}
         {/* {this.state.menus} */}
         
         <li onClick={this.handleClick}>
              <Link   to="/">
                Home
              </Link>
            </li>
{nodes}
            {/*  BEGIN TOP SEARCH  */}
            <li className="menu-search">
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
            </li>
            {/*  END TOP SEARCH  */}
          </ul>
        </div>
        {/*  END NAVIGATION  */}
      </div>
    </div>
        )
    }
}

class Node extends React.Component {

  render() {      

    let childnodes = null;
    // the Node component calls itself if there are children
    if(this.props.children) { 
      let target='';     
      childnodes = this.props.children.map(function(childnode) {
       
        if(childnode.menue_type =='link' && childnode.link!="#")
          target="_blank";
        else
          target="";

       return (
         <Node node={childnode} children={childnode.children} target={target} key={childnode.id}/>
       );
     });
    }

    // return our list element
    // display children if there are any
    return (
      <li key={this.props.node.id}>      
        <Link to={this.props.node.link} target={this.props.target}>{this.props.node.name}</Link>
        { childnodes ?
          <ul className="dropdown-menu">{childnodes}</ul>
        : null }
      </li>
    );
  }
}