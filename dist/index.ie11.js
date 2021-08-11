


//PSEUDO
//test 26
var lastScrollTop = 0;
var headerHeight = $('div.header-container').outerHeight();
var menuSnippet = "";
var cookieSnippet = '';
$(document).ready(initMenu());
new Glide('.glide', {
  type: 'carousel',
  perView: 1,
  focusAt: 'center',
  gap: 0,
  autoplay: 5000
}).mount();

function createCookie(cookieName, cookieVal, exp) {
  var cookieDate = new Date();
  cookieDate.setTime(cookieDate.getTime() + exp * 24 * 60 * 60 * 1000);
  var expiresIn = "expires=" + cookieDate.toUTCString();
  document.cookie = cookieName + "=" + cookieVal + ";" + expiresIn + ";path=/";
}

function checkCookie(cookieName) {
  var checkName = new RegExp('^(.*;)?\\s*' + cookieName + '\\s*=').test(document.cookie);
  return checkName;
} // function cookieButtonAdd(buttonId, cookieVal) {
//     if($("#" + buttonId).length) {
//         $("#" + buttonId).ready( () => {
//             $("#" + buttonId).click(() => {
//                 cookieSnippet += cookieVal + ',';
//                 document.getElementById(buttonId).classList.add('cookieHighlight');
//             })
//         })
//     }
// }
// function cookieButtonRemove(buttonId, cookieVal) {
//     if($("#" + buttonId).length) {
//         $("#" + buttonId).ready( () => {
//             $("#" + buttonId).click(() => {
//                 cookieSnippet.replace(cookieVal, '');
//             })
//         })
//     }
// }


$(document).ready(function () {
  if (!checkCookie('prefConf')) {
    createBlockOverlay();
    makeElement(cookiePopupSnippet, 'index-body', 'cookie-popup', 'cookie-popup');
  }

  if ($('#cookie-popup').length) {
    $('#cookie-popup').ready(function () {
      document.getElementById('cookie-accept').addEventListener('click', function () {
        createCookie('prefConf', 'conf=true', 90);
        document.getElementById('cookie-popup').remove();
        removeBlockOverlay();
      });
    });
  }
});

function cookieButtonAdd(buttonId, cookieVal) {
  if ($("#" + buttonId).length) {
    $("#" + buttonId).ready(function () {
      $("#" + buttonId).click(function () {
        cookieSnippet += cookieVal + ',';
        document.getElementById(buttonId).classList.add('cookieHighlight');
      });
    });
  }
}

function cookieButtonRemove(buttonId, cookieVal) {
  if ($("#" + buttonId).length) {
    $("#" + buttonId).ready(function () {
      $("#" + buttonId).click(function () {
        cookieSnippet.replace(cookieVal, '');
      });
    });
  }
}

$(window).scroll(function () {
  scrollCheck = true;
}); // makeElement('', 'index-header', 'header-placer', 'header-placer');

document.addEventListener('scroll', function () {
  hasScrolled();
});

function hasScrolled() {
  var scrollPos = $(this).scrollTop();

  if (scrollPos > headerHeight) {
    $('div#header-placer').removeClass('placer-up');

    if (scrollPos > lastScrollTop) {
      $('div.header-container').addClass('header-hidden').removeClass('header-down');
    } else if (scrollPos < lastScrollTop) {
      $('div.header-container').removeClass('header-hidden').addClass('header-down');
    }
  } else {
    if (scrollPos < lastScrollTop) {
      $('div.header-container').removeClass('header-hidden').addClass('header-down');
      $('div#header-placer').removeClass('placer-up');
    } else {
      $('div.header-container').removeClass('header-hidden').removeClass('header-down');
      $('div#header-placer').addClass('placer-up');
    }
  }

  lastScrollTop = scrollPos;
}

function createBlockOverlay() {
  // creates an overlay for the screen and stops user interaction / scroll. New elements go on top.
  var scrollYOffset = document.documentElement.scrollTop || document.body.scrollTop;
  var blockOverlay = document.createElement('div');
  document.getElementById('index-html').appendChild(blockOverlay);
  blockOverlay.className = 'block-overlay';
  document.getElementById('index-html').classList.add('--noScroll');
  window.scrollTo(0, scrollYOffset);
}

function removeBlockOverlay() {
  // removes the BlockOverlay
  $('.block-overlay').remove();
  document.getElementById('index-html').classList.remove('--noScroll');
}

function makeElement(snippet, parent, divId, divClass) {
  var codeDiv = document.createElement('div');
  var parentNode = document.getElementById(parent);
  codeDiv.innerHTML = snippet;
  codeDiv.setAttribute('id', divId);
  codeDiv.classList.add(divClass);
  parentNode.append(codeDiv);
}

function initMenu() {// 1. get menu.json
  // const menuLoc = $.getJSON("http://netmatters.christopher-ward.netmatters-scs.co.uk/js/menu.json");

  /*
      2. for each object in "ul" {
          write html for <div> with ID = object name;
          write html for <li> and <a> with href = "link", text = "text";
          add "headMenu" as class (style in CSS);
          for each object in "li" {
              write html for <li> and <a> with href = "link", text = "text";
              add 'subMenu' as class (style in CSS);
          }
          assign html to returnVal;
          return returnVal;
      }
  */
}

function createMenu() {// 1. call fn createBlockOverlay();
  // 2. create div with ID = "menuArea" (style in CSS);
  // 3. write menuSnippet as HTML in menuArea;
  // 4. shift screenDiv left;
}

function removeMenu() {// 1. call fn removeBlockOverlay();
  // 2. remove div "menuArea" and children;
  // 3. shift screenDiv right;
}

function menuButton() {// 1. add event click event listener with switch
  // if switch is off, call fn createMenu and use menu open animation;
  // if switch is on, call fn removeMenu and use menu close animation;
}