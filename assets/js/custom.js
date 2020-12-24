"use strict";

var checkboxDark = document.getElementById('site-theme-toggler');
var checkboxSmallFont = document.getElementById('site-font-small');
var checkboxNormalFont = document.getElementById('site-font-normal');
var checkboxLargeFont = document.getElementById('site-font-plus');
var languageElements = document.querySelectorAll('.accessibility-language');
var languageElementsArray = Array.from(languageElements); //For Toggling languange icon and text

document.querySelector('.accessibility-languages').addEventListener('click', function () {
  languageElementsArray.forEach(function (element) {
    if (element.classList.contains('hidden')) {
      element.classList.remove('hidden');
    } else {
      element.classList.add('hidden');
    }
  });
}); //To Change the theme of the site to dark

checkboxDark.addEventListener('change', function () {
  document.body.classList.toggle('dark');
}); // For font accessibility

checkboxSmallFont.addEventListener('change', function () {
  document.documentElement.classList.remove("normal-font");
  document.documentElement.classList.remove('large-font');
  document.documentElement.classList.add('small-font');
});
checkboxNormalFont.addEventListener('change', function () {
  document.documentElement.classList.remove("small-font");
  document.documentElement.classList.remove('large-font');
  document.documentElement.classList.add('normal-font');
});
checkboxLargeFont.addEventListener('change', function () {
  document.documentElement.classList.remove("normal-font");
  document.documentElement.classList.remove('small-font');
  document.documentElement.classList.add('large-font');
});