/* ============
 * Actions for the auth module
 * ============
 *
 * The actions that are available on the
 * auth module.
 */

import {
  AUTH_CHECK,
  AUTH_LOGIN,
  AUTH_LOGOUT,
  AUTH_REFRESH_TOKEN,
  AUTH_RESET_PASSWORD,
  AUTH_USER,
} from './action-types';

const initialState = {
  isAuthenticated: false,
};
export function authCheck() { 
  //console.log("auth check");
  // return {
  //   type: AUTH_CHECK,
  // }
  
  // state = Object.assign({}, state, {
  //   isAuthenticated: !!localStorage.getItem('access_token')
  // })

  // if (state.isAuthenticated) {
  //   HTTP.defaults.headers.common['Authorization'] = `Bearer ${localStorage.getItem('access_token')}`;
  // }
  //return state;
  //return false;
  //console.log(localStorage.getItem('id_token'));
  if(localStorage.getItem('id_token')){
    console.log("loged in "+localStorage.getItem('id_token'));
    return true
  }else{
    console.log("loged out");
    return false;
    
  }
  
}

export function authLogin(payload) {
  return {
    type: AUTH_LOGIN,
    payload,
  };
}

export function authLogout() {
  console.log("logout call");
  //localStorage.removeItem('id_token');
  return true;
  //localStorage.removeItem('id_token');  
  // return {
  //   type: AUTH_LOGOUT,
  // }
}

export function authRefreshToken(payload) {
  return {
    type: AUTH_REFRESH_TOKEN,
    payload
  }
}

export function authResetPassword() {
  return {
    type: AUTH_RESET_PASSWORD,
  }
}

export function authUser(payload) {
  return {
    type: AUTH_USER,
    payload
  }
}
