//this is part 1 multilanguage code
// Maintain a supported Language List
//var langList = ['en', 'zh'];
// Get browser Language
//var userLang = navigator.language || navigator.userLanguage;
// extract Language (en-US => en)
//userLang = userLang.substring(0, 2);
// Call the function to set language
//changeLang(userLang);

// function to change language
/*function changeLang(lang) {
  langList.forEach((langEle) => {
    // if language matches, display
    if (langEle == lang) {
      var langElems = document.querySelectorAll('.' + langEle)
      langElems.forEach((elem) => {
        elem.style.display = "block"
      })
    }
    // hide the language text
    else {
      hideLang(langEle)
    }
  })
}

// function to hide language
function hideLang(lang) {
  var langElems = document.querySelectorAll('.' + lang)
  langElems.forEach((elem) => {
    elem.style.display = "none"
  })
}
*/
$('#myCarousel').carousel({
  interval: 5000
})
