require('./bootstrap');
var $ = require('jquery');
window.Vue = require('vue');

$(document).ready(function(){
  console.log("ready");

  new Vue({
    el : '#app'
  });
});
