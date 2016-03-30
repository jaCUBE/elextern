// cookie.js file
var cookieToday = new Date(); 
var expiryDate = new Date(cookieToday.getTime() + (365 * 86400000)); // a year

/* Cookie functions originally by Bill Dortsch */

function setCookie (name,value,path,expires,theDomain,secure) { 
   value = escape(value);
   
            var expires = new Date();
            expires.setTime(expires.getTime() + (365 * 24 * 60 * 60 * 1000));
            
   var theCookie = name + "=" + value + 
   ((path)       ? "; path="    + path   : "") + 
   ((expires)    ? "; expires=" + expires.toUTCString() : "") +    
   ((theDomain)  ? "; domain="  + theDomain : "") + 
   ((secure)     ? "; secure"            : ""); 
   
   document.cookie = theCookie;
} 

function getCookie(Name) {  
   var search = Name + "=" 
   if (document.cookie.length > 0) { // if there are any cookies 
      var offset = document.cookie.indexOf(search) 
      if (offset != -1) { // if cookie exists 
         offset += search.length 
         // set index of beginning of value 
         var end = document.cookie.indexOf(";", offset) 
         // set index of end of cookie value 
         if (end == -1) end = document.cookie.length 
         return unescape(document.cookie.substring(offset, end)) 
      } 
   } 
} 
function delCookie(name,path,domain) {
   if (getCookie(name)) document.cookie = name + "=" +
      ((path)   ? ";path="   + path   : "") +
      ((domain) ? ";domain=" + domain : "") +
      ";expires=Thu, 01-Jan-70 00:00:01 GMT";
}