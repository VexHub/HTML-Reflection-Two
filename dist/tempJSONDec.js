"use strict";

(function () {
  function r(e, n, t) {
    function o(i, f) {
      if (!n[i]) {
        if (!e[i]) {
          var c = "function" == typeof require && require;
          if (!f && c) return c(i, !0);
          if (u) return u(i, !0);
          var a = new Error("Cannot find module '" + i + "'");
          throw a.code = "MODULE_NOT_FOUND", a;
        }

        var p = n[i] = {
          exports: {}
        };
        e[i][0].call(p.exports, function (r) {
          var n = e[i][1][r];
          return o(n || r);
        }, p, p.exports, r, e, n, t);
      }

      return n[i].exports;
    }

    for (var u = "function" == typeof require && require, i = 0; i < t.length; i++) {
      o(t[i]);
    }

    return o;
  }

  return r;
})()({
  1: [function (require, module, exports) {
    var cookiePopupSnippet = "\n<h1 class=\"cookie-heading\">Cookies Policy</h1>\n<p class=\"cookie-text\">\n    We use cookies to obtain aggregate data regarding site traffic and interaction, in order to identify user trends and obtain insights in order to continually improve our site. These cookies enable us to improve your customer experience as you use our site and help provide you with relevant online marketing.\n</p>\n<p class=\"cookie-text\">\n    You can see a list of the other companies who use cookies on this website, by visiting cookie settings at the bottom of each page. For full details of how we use your personal information, and your rights in relation to it, view our privacy policy.\n</p>\n<div class=\"cookie-buttons-container\">\n    <button id=\"cookie-change\" class=\"cookie-button\">Change Settings</button>\n    <button id=\"cookie-accept\" class=\"cookie-button\">Accept Cookies</button>\n</div>\n";
    var cookieScreenSnippet = "\n<h1 class=\"cookie-heading screen-heading\">Cookie Preferences</h1>\n<p class=\"screen-text\">\n    Netmatters uses cookies on their website. Cookies are small text files that are stored on your computer or other device by websites that you visit. This page explains the cookies we use and what we use them for, and lets you turn them on or off. (Some cookies are necessary in order for our website to work properly.) We also explain below which other companies use cookies on our website and what they use them for, and lets you turn those other companies' cookies on or off.\n</p>\n<p class=\"screen-text\">\n    Our website uses cookies in order to make the website easier to use, to support the provision of information and functionality to you, as well as to provide us with information about how the website is used so that we can make sure it is as up to date, relevant and error free as we can. We also use cookies to try to ensure that our online adverts reflect the interests of web users. Further information about the types of cookies that are used on our website is set out box below.\n</p>\n<p class=\"screen-text\">\n    As well as the options provided below, you can choose to restrict or block cookies through your browser settings at any time. For more information about how to do this, and about cookies in general, you can visit www.allaboutcookies.org and www.youronlinechoices.eu. However, please be aware that restricting or blocking cookies set on our website may impact the functionality or performance of the website, or prevent you from using certain services provided through the website\n</p>\n<p class=\"screen-text\">\n    Please note that third parties (including, for example, advertising networks and providers of external services like website analysis services) may also use cookies, over which we have no control, although we may receive services from these third parties (including, for example, for targeted advertising purposes and website analytics). These cookies are likely to be performance cookies or targeting cookies (as described below).\n</p>\n<h2 class=\"screen-sub\">Functional Cookies</h2>\n<p class=\"screen-text\">\n    Functional cookies allow our website to remember choices you make, such as your user name, log in details or language preferences, and any customisations you make to pages on our website during your visit.\n    <strong>\n        Examples of how we use these cookies include:\n    </strong>\n</p>\n<ul class=\"screen-list\">\n    <li class=\"screen-item\">Live chat</li>\n</ul>\n\n<div class=\"screen-button-container\">\n    <button class=\"screen-disable screen-button\">Disable</button>\n    <button class=\"screen-enable screen-button\">Enable</button>\n</div>\n\n<h2 class=\"screen-sub\">Performance & Analytics</h2>\n<p class=\"screen-text\">\n    These cookies help us understand how people use our website. They collect information such as which pages on our website visitors go to most often, which features they use, and which websites people have visited before they visit ours. We use this information to improve our website and provide a better user experience.\n    <strong>\n        Examples of how we use these cookies include:\n    </strong>\n</p>\n<ul class=\"screen-list\">\n    <li class=\"screen-item\">Monitoring and providing statistics on how our website is used.</li>\n    <li class=\"screen-item\">Helping us improve our website by measuring any errors that occur.</li>\n    <li class=\"screen-item\">Testing the website's design and operability</li>\n</ul>\n\n<div class=\"screen-button-container\">\n    <button class=\"screen-disable screen-button\">Disable</button>\n    <button class=\"screen-enable screen-button\">Enable</button>\n</div>\n\n<p class=\"screen-text\">\n    Different web browsers may use different methods for managing cookies. Please follow the instructions below, from the web browser manufacturers directly, to configure your browser settings*.\n</p>\n<ul class=\"screen-list\">\n    <li class=\"screen-item\">\n        <a href=\"https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies\" target=\"_blank\">\n            Microsoft Internet Explorer (IE)\n        </a>\n    </li>\n    <li class=\"screen-item\">\n        <a href=\"https://support.google.com/chrome/answer/95647?hl=en\" target=\"_blank\">\n            Google Chrome\n        </a>\n    </li>\n    <li class=\"screen-item\">\n        <a href=\"https://support.apple.com/en-gb/guide/safari/manage-cookies-and-website-data-sfri11471/mac\" target=\"_blank\">\n            Safari\n        </a>\n    </li>\n    <li class=\"screen-item\">\n        <a href=\"https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences\" target=\"_blank\">\n            Firefox\n        </a>\n    </li>\n</ul>\n<button id=\"details\" class=\"screen-grey screen-button\">Show Detailed Preferences</button>\n<div class=\"screen-bottom-buttons\">\n    <button id=\"screen-cancel\" class=\"screen-button\">Cancel</button>\n    <button id=\"screen-accept\" class=\"screen-button\">Accept Cookies</button>\n</div>\n";
  }, {}]
}, {}, [1]);