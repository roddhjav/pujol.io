// JavaScript-based HTTPS redirection because we're running on GitLab's servers.
var host = "pujol.io";
if ((host == window.location.host) && (window.location.protocol != 'https:')) {
  window.location = window.location.toString().replace(/^http:/, "https:");
}
