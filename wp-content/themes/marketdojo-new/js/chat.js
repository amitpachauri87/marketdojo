"use strict";

var nextUrl = 'https://next.testmd.co.uk'
var mdUrl = 'https://secure.marketdojo.com'
var targetUrl

if (window.location.href.indexOf('testmd') != -1) {
  targetUrl = nextUrl
} else {
  targetUrl = mdUrl
}

document.addEventListener("DOMContentLoaded", function() {
  getLoggedInUserData();
});

var getLoggedInUserData = function() {
  var url = targetUrl + '/api/v1/user_info';
  var authHeaders = getAuthHeaders();
  var request = new XMLHttpRequest();

  if (typeof authHeaders != 'undefined') {
    request.open("GET", url, true);
    request.setRequestHeader('Accept', 'application/json');
    request.setRequestHeader('Access-Token', authHeaders['access-token']);
    request.setRequestHeader('Token-Type', 'Bearer');
    request.setRequestHeader('Client', authHeaders['client']);
    request.setRequestHeader('Expiry', authHeaders['expiry']);
    request.setRequestHeader('Uid', authHeaders['uid']);

    request.onload = function() {
      if (request.readyState === 4) {
        if (request.status === 200) {
          var userDataJSON = JSON.parse(request.responseText);
          setExpiringCookie("username", userDataJSON.user.email);
          setExpiringCookie("usermail", userDataJSON.user.email);
          window.username = userDataJSON.user.name;
          console.log(
            "User logged in as " + userDataJSON.user.name +
            " (" + userDataJSON.user.email + ")"
          )
          var user = userDataJSON.user
          if (user != null &&
            typeof user != 'undefined' &&
            typeof user.id == 'number' &&
            user.name != null &&
            user.email != null) {
              updateLoginButtons(user.name);
              showHideResources();
            }
        } else {
          console.error(request.statusText);
          setButtonUrls();
        }
      }
    };

    request.onerror = function() {
      return new Error("Could not get data from API");
    };
    
    request.send();
  }
} 

var getAuthHeaders = function() {
  var cookies = document.cookie.split(';');
  var authHeaders
  for (var i = 0; i < cookies.length; i++) {
    if (cookies[i].trim().indexOf('auth_headers') == 0) {
      authHeaders = cookies[i].trim().split("=")[1];
    }
  }
  if (authHeaders) {
    var charString = atob(
      authHeaders.split('.')[1]
                 .replace('-', '+')
                 .replace('_', '/')
    );
    var decodedAuthHeaders = decodeURIComponent(
      Array.prototype.map.call(charString, function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2)
      }
    ).join(''));
    var authHeaderJSON = JSON.parse(decodedAuthHeaders);
    return authHeaderJSON
  }
}

var setExpiringCookie = function(key, value) {
  var expires = new Date();
  expires.setTime(expires.getTime() + (24 * 3600000));
  document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}
var setButtonUrls = function() {
  var signupLink = document.getElementsByClassName("signup")[0].children[0]
  var loginLink = document.getElementsByClassName("login")[0].children[0]
  signupLink.setAttribute('href', targetUrl + '/signup')
  loginLink.setAttribute('href', targetUrl + '/login')
}

var updateLoginButtons = function(name) {
  var signupLink = document.getElementsByClassName("signup")[0]
                              .children[0]
  signupLink.setAttribute('href', targetUrl + '/users/home')
  signupLink.setAttribute('target', '_blank');
  signupLink.textContent = 'Dashboard';

  if (typeof name != 'undefined' && name != null) {
    var loginLink = document.getElementsByClassName("login")[0]
                              .children[0]
    loginLink.setAttribute('href', targetUrl + '/users/home')
    loginLink.setAttribute('target', '_blank');
    loginLink.textContent = name;
  }
}

var showHideResources = function() {
  var lb = document.getElementsByClassName("login_button")[0];
  var dbs = document.getElementsByClassName("download_button_subscription")[0];

  lb.style.display = 'none';
  dbs.style.display = 'block';
  $('.login_button').hide();
  $('.download_button_subscription').show();
}


