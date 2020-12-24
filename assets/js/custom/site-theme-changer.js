const checkboxDark = document.getElementById('site-theme-toggler');

const checkboxSmallFont = document.getElementById('site-font-small');
const checkboxNormalFont = document.getElementById('site-font-normal');
const checkboxLargeFont = document.getElementById('site-font-plus');

const languageElements = document.querySelectorAll('.accessibility-language');
const languageElementsArray = Array.from(languageElements);


//For Toggling languange icon and text
document.querySelector('.accessibility-languages').addEventListener('click', function(){
    languageElementsArray.forEach(element => {
        if(element.classList.contains('hidden')){
            element.classList.remove('hidden');
        }else{
            element.classList.add('hidden');
        }

    });
});

//To Change the theme of the site to dark
checkboxDark.addEventListener('change', function(){
    document.body.classList.toggle('dark');
});


// For font accessibility
checkboxSmallFont.addEventListener('change', function(){
    document.documentElement.classList.remove("normal-font");
    document.documentElement.classList.remove('large-font');
    document.documentElement.classList.add('small-font');
});

checkboxNormalFont.addEventListener('change', function(){
    document.documentElement.classList.remove("small-font");
    document.documentElement.classList.remove('large-font');
    document.documentElement.classList.add('normal-font');
});

checkboxLargeFont.addEventListener('change', function(){
    document.documentElement.classList.remove("normal-font");
    document.documentElement.classList.remove('small-font');
    document.documentElement.classList.add('large-font');
});

