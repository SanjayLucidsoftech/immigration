import React, { Component } from 'react';

export default class Dashboard extends Component {
  constructor(props) {
    super(props)
  }
  
  componentDidMount() {
    this.props.handleLogin();
  }

    render() {
        return (
          <div>
            <h1>Dashboard Content Here.....</h1><br></br><br></br><br></br><br></br><br></br>
          </div>
        )
    }
}