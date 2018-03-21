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

has_children(nums ,id) {
  
  nums.forEach(function(val,index) { 
    //console.log(val['parent']+">>>>>"+id);
   let sub_menue;
    if (val['parent'] != 0){
      //console.log(val['parent']+">>>>>"+id);
      sub_menue = <li className="submenue" key={val['id']}>
          <Link className="dropdown-toggle"  to={"/page/"+val['link']} >
          {val['menue_name']}
          </Link>
    </li>
     // return this.build_menu(nums ,id);
    
    }else{
      sub_menue = '';}
    return sub_menue;
 }) 
  }
  build_menu(rows,parent=0)
  {
    menue_list = rows.map(function(obj, i) {
      var menu_data="";
     
      if(obj.id==parent){
      menu_data = <li className="dropdown" key={obj.id}>          
                <Link className="dropdown-toggle"  to={"/page/"+obj.link} >
                {obj.menue_name}
                </Link>
                {this.build_menu( [obj], obj.id )}
                </li> }          
  }.bind(this));

    return menue_list;
    //console.log(menue_list);
  }

  getMenu( rows, parentID=0 ){
    data=rows;
    return data.filter(function(node){ return ( node.parent_id === parentID ) ; }).map(function(node){
        var exists = data.some(function(childNode){  return childNode.parent_id === node.id; });
        var subMenu = (exists) ? '<ul>'+ getMenu(node.id).join('') + '</ul>' : "";
        return '<li>'+node.name +  subMenu + '</li>' ;
    });
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
      const menus_example = [{
        id: 1,
        name: "Managing Director",
        children: [
          {
            id: 2,
            name: "Sales Director"      
          }, {
            id: 3,
            name: "IT Director",
            children: [
              {
                id: 4,
                name: "Technical Lead",
                children: [
                  {
                    id: 5,
                    name: "Software Developer"
                  },
                  {
                    id: 6,
                    name: "Support Technician"
                  }
                ]
              }        
            ]
          }, {
            id: 7,
            name: "HR Department",
            children: [
              {
                id: 8,
                name: "HR Officer",
                children: [{
                  id: 9,
                  name: "HR Assistant 1"
                }, {
                  id: 10,
                  name: "HR Assistant 2"
                }]
              }
            ]
          }
        ]
      },{id: 12,
      name: "test main"}];
      
      console.log(menus_example);

      var newArr = Object.keys(menus_obj);
      var menus = newArr.map(function(i) {
        
        return menus_obj[i];

      });
      
      console.log(menus);

      // const menus = res.data.map(obj => [obj]);
     // const menus = res.data;

     // console.log(Array.from([menus]));
     // menus=Array.from([menus])
      this.setState({menus: menus});

      
      //const menus = res.data.map(obj => [obj]);
      console.log(this.state.menus);


      });
  }

  

    render() {
      let nodes = this.state.menus.map(function(menu) {
        let target='';
        if(menu.menue_type=='link' && menu.link!="#")
          target="_blank";
        else
          target="";

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

            {/* <li className="dropdown" onClick={this.handleClick}>
              <a className="dropdown-toggle" data-toggle="dropdown"  href="#">
                Home
              </a>

              <ul className="dropdown-menu">
                <li className="active"><a href="index.html">Home Default</a></li>
                <li><a href="index-header-fix.html">Home with Header Fixed</a></li>
                <li><a href="index-without-topbar.html">Home without Top Bar</a></li>
              </ul>
            </li>
            <li className="dropdown">
              <a className="dropdown-toggle" data-toggle="dropdown"  href="#">
                Pages

              </a>

              <ul className="dropdown-menu">
                <li><a href="page-about.html">About Us</a></li>
                <li><a href="page-services.html">Services</a></li>
                <li><a href="page-prices.html">Prices</a></li>
                <li><a href="page-faq.html">FAQ</a></li>
                <li><a href="page-gallery.html">Gallery</a></li>
                <li><a href="page-search-result.html">Search Result</a></li>
                <li><a href="page-404.html">404</a></li>
                <li><a href="page-500.html">500</a></li>
                <li><a href="page-login.html">Login Page</a></li>
                <li><a href="page-forgotton-password.html">Forget Password</a></li>
                <li><a href="page-reg-page.html">Signup Page</a></li>
                <li><a href="page-careers.html">Careers</a></li>
                <li><a href="page-site-map.html">Site Map</a></li>
                <li><a href="page-contacts.html">Contact</a></li>
              </ul>
            </li>
            <li className="dropdown">
              <a className="dropdown-toggle" data-toggle="dropdown"  href="#">
                Features

              </a>

              <ul className="dropdown-menu">
                <li><a href="feature-typography.html">Typography</a></li>
                <li><a href="feature-buttons.html">Buttons</a></li>
                <li><a href="feature-forms.html">Forms</a></li>

                <li className="dropdown-submenu">
                  <a href="index.html">Multi level <i className="fa fa-angle-right"></i></a>
                  <ul className="dropdown-menu" role="menu">
                    <li><a href="index.html">Second Level Link</a></li>
                    <li><a href="index.html">Second Level Link</a></li>
                    <li className="dropdown-submenu">
                      <a className="dropdown-toggle" data-toggle="dropdown"  href="#">
                        Second Level Link
                        <i className="fa fa-angle-right"></i>
                      </a>
                      <ul className="dropdown-menu">
                        <li><a href="index.html">Third Level Link</a></li>
                        <li><a href="index.html">Third Level Link</a></li>
                        <li><a href="index.html">Third Level Link</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li className="dropdown">
              <a className="dropdown-toggle" data-toggle="dropdown"  href="#">
                Portfolio

              </a>

              <ul className="dropdown-menu">
                <li><a href="portfolio-4.html">Portfolio 4</a></li>
                <li><a href="portfolio-3.html">Portfolio 3</a></li>
                <li><a href="portfolio-2.html">Portfolio 2</a></li>
                <li><a href="portfolio-item.html">Portfolio Item</a></li>
              </ul>
            </li>
            <li className="dropdown">
              <a className="dropdown-toggle" data-toggle="dropdown"  href="#">
                Blog

              </a>

              <ul className="dropdown-menu">
                <li><a href="blog.html">Blog Page</a></li>
                <li><a href="blog-item.html">Blog Item</a></li>
              </ul>
            </li>

             <li className="dropdown dropdown-megamenu">
              <a className="dropdown-toggle" data-toggle="dropdown"  href="#">
                Mega Menu

              </a>
              <ul className="dropdown-menu">
                <li>
                  <div className="header-navigation-content">
                    <div className="row">
                      <div className="col-md-4 header-navigation-col">
                        <h4>Footwear</h4>
                        <ul>
                          <li><a href="index.html">Astro Trainers</a></li>
                          <li><a href="index.html">Basketball Shoes</a></li>
                          <li><a href="index.html">Boots</a></li>
                          <li><a href="index.html">Canvas Shoes</a></li>
                          <li><a href="index.html">Football Boots</a></li>
                          <li><a href="index.html">Golf Shoes</a></li>
                          <li><a href="index.html">Hi Tops</a></li>
                          <li><a href="index.html">Indoor Trainers</a></li>
                        </ul>
                      </div>
                      <div className="col-md-4 header-navigation-col">
                        <h4>Clothing</h4>
                        <ul>
                          <li><a href="index.html">Base Layer</a></li>
                          <li><a href="index.html">Character</a></li>
                          <li><a href="index.html">Chinos</a></li>
                          <li><a href="index.html">Combats</a></li>
                          <li><a href="index.html">Cricket Clothing</a></li>
                          <li><a href="index.html">Fleeces</a></li>
                          <li><a href="index.html">Gilets</a></li>
                          <li><a href="index.html">Golf Tops</a></li>
                        </ul>
                      </div>
                      <div className="col-md-4 header-navigation-col">
                        <h4>Accessories</h4>
                        <ul>
                          <li><a href="index.html">Belts</a></li>
                          <li><a href="index.html">Caps</a></li>
                          <li><a href="index.html">Gloves</a></li>
                        </ul>

                        <h4>Clearance</h4>
                        <ul>
                          <li><a href="index.html">Jackets</a></li>
                          <li><a href="index.html">Bottoms</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>

            <li><a href="shop-index.html" target="_blank">E-Commerce</a></li>
            <li><a href="onepage-index.html" target="_blank">One Page</a></li>
            <li><a href="http://keenthemes.com/preview/metronic/theme/templates/admin" target="_blank">Admin theme</a></li> */}

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