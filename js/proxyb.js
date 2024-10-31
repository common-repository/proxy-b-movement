/**
 * JavaScript code to check if your site is accessed via a web proxy and alerts the visitors about Hepatitis B awareness, if so.
 * Version: 1.2
 * Author: Rupesh Mandal, Rajinder Deol
 * Author URI: http://www.proxyb.org
 * License: GNU General Public License, version 2 (GPL-2.0)
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 
// Read cookie for session management
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length)
    }
    return null
}

// Alert Message
function proxyMessage() {
    var mylink = window.location.hostname.replace(/^www\./, '');
    if (mylink != mydomain) {
        if (!readCookie('isProxy')) {
            if (confirm("ONE PROXY IS NOT ENOUGH. LIFE DEMANDS MANY.\n\nHepatitis B is more infectious than HIV.\nGet tested & vaccinated.\n\n*issued in public interest.\nDo you want to know more?")) {
                document.cookie = "isProxy=yes; path=/";
                window.location.assign("http://goo.gl/vGUZ8g")
            } else document.cookie = "isProxy=yes; path=/"
        }
    }
}
if (window.attachEvent) {
    window.attachEvent('onload', proxyMessage)
} else if (window.addEventListener) {
    window.addEventListener('load', proxyMessage, false)
} else {
    document.addEventListener('load', proxyMessage, false)
}