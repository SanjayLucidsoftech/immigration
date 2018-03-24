import React, { Component } from 'react';
import { Link } from "react-router-dom";
import { authLogout } from '../../modules/auth/store/actions'


export default class PreHeader extends Component {
    constructor(props) {
        super(props);
        this.state = {
            
        };
    
        // This binding is necessary to make `this` work in the callback
       // this.handleLogout = this.handleLogout.bind(this);
      }



      
 
    render() {
        return (
            <div className="pre-header">
                <div className="container">
                    <div className="row">
                        {/*BEGIN TOP BAR LEFT PART*/}
                        <div className="col-md-6 col-sm-6 additional-shop-info">
                            {/* <ul className="list-unstyled list-inline">
                                <li><i className="fa fa-phone"></i><span>+1 456 6717</span></li>
                                <li><i className="fa fa-envelope-o"></i><span>info@immigration.com</span></li>
                            </ul> */}
                        </div>
                        {/* END TOP BAR LEFT PART */}
                        {/* BEGIN TOP BAR MENU */}
                        <div className="col-md-6 col-sm-6 additional-nav">
                            <ul className="list-unstyled list-inline pull-right">
                                <li><Link to="/login" onClick={this.props.handleLogout}>Log out</Link></li>
                                <li><Link to="/register">Welcome: Loged In user..</Link></li>
                            </ul>
                        </div>
                        
                        {/* END TOP BAR MENU */}
                    </div>
                </div>
            </div>
        )
    }
}