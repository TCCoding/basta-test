// JavaScript Document

function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function backTransition()
{
	jQuery('body').css('background-color',getRandomColor());
}

jQuery(document).ready(function(e) {
    var backChange = setInterval(backTransition,5000);
});