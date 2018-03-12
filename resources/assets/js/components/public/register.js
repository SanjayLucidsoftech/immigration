import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

export default class PreHeader extends Component {
    render() {
        return (
            <div className="main">
            <div className="container">
              
              {/* BEGIN SIDEBAR & CONTENT */}
              <div className="row margin-bottom-40">
                {/* BEGIN SIDEBAR */}
                <div className="sidebar col-md-3 col-sm-3">
                  <ul className="list-group margin-bottom-25 sidebar-menu">
                    <li className="list-group-item clearfix"><a href="#"><i className="fa fa-angle-right"></i> Login/Register</a></li>
                    <li className="list-group-item clearfix"><a href="#"><i className="fa fa-angle-right"></i> Restore Password</a></li>
                    <li className="list-group-item clearfix"><a href="#"><i className="fa fa-angle-right"></i> My account</a></li>
                    <li className="list-group-item clearfix"><a href="#"><i className="fa fa-angle-right"></i> Address book</a></li>
                    <li className="list-group-item clearfix"><a href="#"><i className="fa fa-angle-right"></i> Wish list</a></li>
                    <li className="list-group-item clearfix"><a href="#"><i className="fa fa-angle-right"></i> Returns</a></li>
                    <li className="list-group-item clearfix"><a href="#"><i className="fa fa-angle-right"></i> Newsletter</a></li>
                  </ul>
                </div>
                {/* END SIDEBAR */}
      
                {/* BEGIN CONTENT */}
                <div className="col-md-9 col-sm-9">
                  <h1>Create an account</h1>
                  <div className="content-form-page">
                    <div className="row">
                      <div className="col-md-7 col-sm-7">
                        <form className="form-horizontal" role="form">
                          <fieldset>
                            <legend>Your personal details</legend>
                            <div className="form-group">
                              <label for="firstname" className="col-lg-4 control-label">First Name <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="firstname"/>
                              </div>
                            </div>
                            <div className="form-group">
                              <label for="lastname" className="col-lg-4 control-label">Last Name <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="lastname"/>
                              </div>
                            </div>
                            <div className="form-group">
                              <label for="email" className="col-lg-4 control-label">Email <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="email"/>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <legend>Your password</legend>
                            <div className="form-group">
                              <label for="password" className="col-lg-4 control-label">Password <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="password"/>
                              </div>
                            </div>
                            <div className="form-group">
                              <label for="confirm-password" className="col-lg-4 control-label">Confirm password <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="confirm-password"/>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <legend>Newsletter</legend>
                            <div className="checkbox form-group">
                              <label>
                                <div className="col-lg-4 col-sm-4">Singup for Newsletter</div>
                                <div className="col-lg-8 col-sm-8">
                                  <input type="checkbox"/>
                                </div>
                              </label>
                            </div>
                          </fieldset>
                          <div className="row">
                            <div className="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                              <button type="submit" className="btn btn-primary">Create an account</button>
                              <button type="button" className="btn btn-default">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div className="col-md-4 col-sm-4 pull-right">
                        <div className="form-info">
                          <h2><em>Important</em> Information</h2>
                          <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo quat.</p>
      
                          <p>Duis autem vel eum iriure at dolor vulputate velit esse vel molestie at dolore.</p>
      
                          <button type="button" className="btn btn-default">More details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {/* END CONTENT */}
              </div>
              {/* END SIDEBAR & CONTENT */}
            </div>
          </div>
        )
    }
}