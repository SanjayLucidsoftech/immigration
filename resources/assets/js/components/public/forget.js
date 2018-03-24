import React, { Component } from 'react'
import axios from 'axios'


export default class Forgot extends Component{

  constructor(props){
    super(props);
    this.state =  {
      email : '',
    }
  }

  onSubmit(e){
    e.preventDefault();
    const {email} = this.state;
        axios.post('api/password/email', {
             email,
          })
          .then(response=> {
            this.refs.email.value="";
            this.setState({err: false});
          })
          .catch(error=> {
            this.setState({err: true});
            this.refs.email.value="";
          });
     }
  

  onChange(e){
    const email = e.target.value;
    this.setState({email : email});
  }

 
	render(){	
let error = this.state.err ;
        let msg = (!error) ? 'We have e-mailed your password reset link!' : 'User doesnt exist' ;
        let name = (!error) ? 'alert alert-success' : 'alert alert-danger' ;
		return(
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
            <h1>Forgot Your Password?</h1>
            <div className="content-form-page">
              <div className="row">
               {error != undefined && <div className={name} role="alert">{msg}</div>}
                <div className="col-md-7 col-sm-7">
                  <form className="form-horizontal form-without-legend" role="form" method="POST" onSubmit={this.onSubmit.bind(this)}>                    
                    <div className="form-group">
                      <label htmlFor="email" className="col-lg-4 control-label">Email</label>
                      <div className="col-lg-8">
                        <input type="text" className="form-control" id="email" ref= "email" className="form-control" name="email"  onChange={this.onChange.bind(this)}/>
                      </div>
                    </div>
                    <div className="row">
                      <div className="col-lg-8 col-md-offset-4 padding-left-0 padding-top-5">
                        <button type="submit" className="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div className="col-md-4 col-sm-4 pull-right">
                  <div className="form-info">
                    <h2><em>Important</em> Information</h2>
                    <p>Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.</p>

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
