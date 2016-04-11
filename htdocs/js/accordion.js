/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */
( function( window ) {
'use strict';
function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}
var classie = {
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};
if ( typeof define === 'function' && define.amd ) {
  define( classie );
} else {
  window.classie = classie;
}
})( window );
var $ = function(selector){
  return document.querySelector(selector);
}
var accordion = $('.accordion');
accordion.addEventListener("click",function(e) {
  e.stopPropagation();
  e.preventDefault();
  if(e.target && e.target.nodeName == "A") {
    var classes = e.target.className.split(" ");
    if(classes) {
      for(var x = 0; x < classes.length; x++) {
        if(classes[x] == "accordionTitle") {
          var title = e.target;
          var content = e.target.parentNode.nextElementSibling;
          classie.toggle(title, 'accordionTitleActive');
          if(classie.has(content, 'accordionItemCollapsed')) {
            if(classie.has(content, 'animateOut')){
              classie.remove(content, 'animateOut');
            }
            classie.add(content, 'animateIn');
          }else{
             classie.remove(content, 'animateIn');
             classie.add(content, 'animateOut');
          }
          classie.toggle(content, 'accordionItemCollapsed');      
        }
      }
    }  
  }
});