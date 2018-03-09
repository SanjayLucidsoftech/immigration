import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import PreHeader from '../components/public/pre_header';
import Header from '../components/public/header';
import Slider from '../components/public/slider';
import Content from '../components/public/content';
import PreFooter from '../components/public/pre_footer';
import Footer from '../components/public/footer';

class Main extends Component {
  render() {
    return (
      <div>
        <PreHeader />
        <Header />
        <Slider />
        <Content />
        <PreFooter />
        <Footer />
      </div>
    );
  }
}


//export default main;

if (document.getElementById('root')) {
  ReactDOM.render(<Main />, document.getElementById('root'));
}