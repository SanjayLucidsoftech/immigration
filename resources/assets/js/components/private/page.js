import React, { Component } from 'react';

var axios = require('axios');
export default class Page extends Component {
  constructor() {
    super();
    this.state = {
      page_detail: '',
      set_data : true,
    }
  }

 

  createMarkup() {
 
  //   axios.get({url:'http://localhost:8010/api/guest/page/' + this.props.match.params.alia})
  //     .then(res => {
  //       this.setState({page_detail:res.data[0]['description']});
  //       console.log(this.state.page_detail);
       
  //   })
  //   .catch(function (error) {

  // });


    axios.get('http://localhost:8010/api/guest/page/' + this.props.match.params.alia)
      .then(res => {
        //alert(res.data);
        var content = res.data.map(obj => [obj.id, obj.description]);
        return {__html: "Page contebt hre.."};
        //console.log(this.state.page_detail);
        //this.setState({page_detail:content[0][1]});
        
        //console.log(content[0][1]);
        //alert(menue_name);
        //alert(menus);
      //   foreach(menus => menu){
      //    document.getElementById('nenus').innerHTML="test html here...."+menus;
      // }
      });
     // console.log(content);
      
      return {__html: "Page content here.."};
      //console.log(content[0][1]);
      //this.setState({page_detail:content[0][1]});


    
  }

  componentDidMount() {
    
    axios.get('http://localhost:8010/api/guest/page/' + this.props.match.params.alia)
      .then(res => {
        
        
        //const page_detail = res.data.map(obj => [obj.id, obj.description]);
        //console.log(page_detail[0][0]['description']);
        //alert(menue_name);
        //alert(menus);
      //   foreach(menus => menu){
      //    document.getElementById('nenus').innerHTML="test html here...."+menus;
      // }
      
        this.setState({page_detail:res.data[0]['description']});
        //console.log("inside content..");
       // this.refs.input.scrollIntoView();
    });
    //console.log(this.state);
    //console.log(this.state.page_detail);
    
    //return {__html: this.state.page_detail.description};

   // return {__html: "My C0ntent here.."};
   //this.setState({page_detail:"My Content Here..."});
   //Router.refresh();
  // console.log("add  content");
  }

  componentDidUpdate() {
    this.state.set_data == true
     axios.get('http://localhost:8010/api/guest/page/' + this.props.match.params.alia)
       .then(res => {
        // if(this.state.set_data == true) {
        //   this.setState({page_detail:res.data[0]['description']});
        //   this.state.set_data=false;
        //   console.log("update content");
        // }
        document.getElementById("page-content").innerHTML=res.data[0]['description'];
     });
  }

  renderArticle() {

    return (<div dangerouslySetInnerHTML={this.createMarkup()}/>)
  }


    render() {
        return (
          <div className="main">
      <div className="container" id="page-content">
            {/* {this.renderArticle()} */}
          </div></div>
        )
    }
}