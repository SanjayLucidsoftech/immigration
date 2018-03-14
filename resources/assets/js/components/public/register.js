import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import axios from 'axios';

export default class Register extends Component {
  constructor(props){
        super(props);
        this.state = {
            first_name: '',
            last_name: '',
            email : '',
            password: '',
            password_confirmation: '',
            user_type: '',
            
        }
     }
     onSubmit(e){
        e.preventDefault();
        const {first_name,last_name,email,password,password_confirmation,user_type} = this.state ;
        axios.post('api/register', {
            first_name,
            last_name,
            email,
            password,
            password_confirmation,
            user_type
          })
          .then(response=> {
           this.setState({err: false});
           this.props.history.push("/") ;
          }).catch(error=> {
            this.refs.first_name.value="";
            this.refs.last_name.value="";
            this.refs.password.value="";
            this.refs.email.value="";
            this.refs.confirm.value="";
            this.refs.user_type.value="";
            this.setState({err: true});
          });
     }
    onChange(e){
        const {name, value} = e.target ;
        this.setState({[name]: value});
     }

    render() {
        let error = this.state.err ;
        let msg = (!error) ? 'Registered Successfully' : 'Oops! , Something went wrong.' ;
        let name = (!error) ? 'alert alert-success' : 'alert alert-danger' ;
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
                  {error != undefined && <div className={name} role="alert">{msg}</div>}
                    <div className="row">
                      <div className="col-md-7 col-sm-7">
                        <form className="form-horizontal" role="form" method="POST" onSubmit= {this.onSubmit.bind(this)}>
                          <fieldset>
                            <legend>Your personal details</legend>
                            <div className="form-group">
                              <label for="firstname" className="col-lg-4 control-label">First Name <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="first_name" ref="first_name" name="first_name" onChange={this.onChange.bind(this)}/>
                              </div>
                            </div>
                            <div className="form-group">
                              <label for="lastname" className="col-lg-4 control-label">Last Name <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="lastname" ref="last_name" name="last_name" onChange={this.onChange.bind(this)}/>
                              </div>
                            </div>
                            <div className="form-group">
                              <label for="email" className="col-lg-4 control-label">Email <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="email" ref="email" name="email" onChange={this.onChange.bind(this)}/>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <legend>Your password</legend>
                            <div className="form-group">
                              <label for="password" className="col-lg-4 control-label">Password <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="password" ref="password" name="password" onChange={this.onChange.bind(this)}/>
                              </div>
                            </div>
                            <div className="form-group">
                              <label for="confirm-password" className="col-lg-4 control-label">Confirm password <span className="require">*</span></label>
                              <div className="col-lg-8">
                                <input type="text" className="form-control" id="confirm-password" ref="password_confirmation" name="password_confirmation" onChange={this.onChange.bind(this)} />
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <legend>Your Type</legend>
                            <div className="form-group">
                              <label for="type" className="col-lg-4 control-label">User type <span className="require">*</span></label>
                              <div className="col-lg-8" >
                                 <select id = "dropdown" className="form-control" ref="user_type" name="user_type" onChange={this.onChange.bind(this)}>
                                    <option value="">Please select</option>
                                    <option value="1">Customer</option>
                                    <option value="2">Migration Agent</option>
                                    <option value="3">Lawyers</option>
                                    <option value="4">Educational Agent</option>
                                </select>
                              </div>
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