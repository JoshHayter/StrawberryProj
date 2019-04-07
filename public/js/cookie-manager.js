function setCheckoutCookie(cid) {
  var d = new Date();
  d.setTime(d.getTime() + (24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = "checkout=" + cid + ";" + expires + ";path=/";
}

function getCheckoutCookie() {
  var name = "checkout=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCheckoutCookie() {
  var cid = getCheckoutCookie();
  if (cid != "") {
   return true;
  }
  return false;
}

function deleteCheckoutCookie() {
  document.cookie = "checkout=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
