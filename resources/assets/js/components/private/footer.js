import React, { Component } from 'react';

export default class Footer extends Component {
    render() {
        return (
            <div className="footer">
                <div className="container">
                    <div className="row">
                        {/* BEGIN COPYRIGHT*/}
                        <div className="col-md-6 col-sm-6 padding-top-10">
                            2014 © Metronic Shop UI. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </div>
                        {/* END COPYRIGHT*/}
                        {/* BEGIN PAYMENTS*/}
                        <div className="col-md-6 col-sm-6">
                            <ul className="social-footer list-unstyled list-inline pull-right">
                                <li><a href="#"><i className="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i className="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i className="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i className="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i className="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i className="fa fa-skype"></i></a></li>
                                <li><a href="#"><i className="fa fa-github"></i></a></li>
                                <li><a href="#"><i className="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i className="fa fa-dropbox"></i></a></li>
                            </ul>
                        </div>
                        {/* END PAYMENTS*/}
                    </div>
                </div>
            </div>
        )
    }
}