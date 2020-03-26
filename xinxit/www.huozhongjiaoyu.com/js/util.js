window.util = window.util || {};

// 识别低于 IE10 浏览器
window.util = {
  isIE8: function() {
    var b = document.createElement('b');

    b.innerHTML = '<!--[if IE 8]><i></i><![endif]-->';
    return b.getElementsByTagName('i').length === 1;
  },
  isLtIE10: function() {
    var b = document.createElement('b');

    b.innerHTML = '<!--[if lt IE 10]><i></i><![endif]-->';
    return b.getElementsByTagName('i').length === 1;
  }
};