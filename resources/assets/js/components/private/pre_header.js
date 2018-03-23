import React, { Component } from 'react';
import { Link } from "react-router-dom";


export default class PreHeader extends Component {
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
                                <li><Link to="/login">Log out</Link></li>
                                <li><Link to="/register">Welcome: Sanjay Pal</Link></li>
                            </ul>
                        </div>
                        
                        {/* END TOP BAR MENU */}
                    </div>
                </div>
            </div>
        )
    }
}