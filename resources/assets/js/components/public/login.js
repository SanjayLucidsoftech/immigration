import React, { Component } from 'react';

export default class Login extends Component {

 constructor(props){
    super(props);
    this.state = {
        email : '',
        password: '',
    }
 }

 onSubmit(e){
    e.preventDefault();
    const {email , password} = this.state ;
    axios.post('api/login', {
        email, 
        password
      })
      .then(response=> {
        this.setState({err: false});
        this.props.history.push("dashboard") ;
        
      })
      .catch(error=> {
        this.refs.email.value="";
        this.refs.password.value="";
        this.setState({err: true});
      });
 }
 onChange(e){
    const {name, value} = e.target;
    this.setState({[name]: value});
 }

  render() {
    let error = this.state.err ;
    let msg = (!error) ? 'Login Successful' : 'Wrong Credentials!' ;
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
<h1>Login</h1>
<div className="content-form-page">
{error != undefined && <div className={name} role="alert">{msg}</div>}
<div className="row">
<div className="col-md-7 col-sm-7">
<form className="form-horizontal form-without-legend" role="form" method="POST" onSubmit= {this.onSubmit.bind(this)}>
<div className="form-group">
<label for="email" className="col-lg-4 control-label">Email <span className="require">*</span></label>
<div className="col-lg-8">
<input type="text" className="form-control" id="email" ref="email" name="email" onChange={this.onChange.bind(this)}/>
</div>
</div>
<div className="form-group">
<label for="password" className="col-lg-4 control-label">Password <span className="require">*</span></label>
<div className="col-lg-8">
<input type="text" className="form-control" id="password" ref="password" name="password" onChange={this.onChange.bind(this)}/>
</div>
</div>
<div className="row">
<div className="col-lg-8 col-md-offset-4 padding-left-0">
<a href="page-forgotton-password.html">Forget Password?</a>
</div>
</div>
<div className="row">
<div className="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
<button type="submit" className="btn btn-primary">Login</button>
</div>
</div>
<div className="row">
<div className="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
<hr/>
<div className="login-socio">
<p className="text-muted">or login using:</p>
<ul className="social-icons">
<li><a href="#" data-original-title="facebook" className="facebook" title="facebook"></a></li>
<li><a href="#" data-original-title="Twitter" className="twitter" title="Twitter"></a></li>
<li><a href="#" data-original-title="Google Plus" className="googleplus" title="Google Plus"></a></li>
<li><a href="#" data-original-title="Linkedin" className="linkedin" title="LinkedIn"></a></li>
</ul>
</div>
</div>
</div>
</form>
</div>
<div className="col-md-4 col-sm-4 pull-right">
<div className="form-info">
<h2><em>Important</em> Information</h2>
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