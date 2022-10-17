/*var accItem = document.getElementsByClassName('accordion__item');
var accHD = document.getElementsByClassName('accordion__item_header');

for (i = 0; i < accHD.length; i++) {
    accHD[i].addEventListener('click', toggleItem, false);
}
function toggleItem() {
    var itemClass = this.parentNode.className;
    for (i = 0; i < accItem.length; i++) {
        accItem[i].className = 'accordion__item close';
    }
    if (itemClass == 'accordion__item close') {
        this.parentNode.className = 'accordion__item open';
    }
}
*/


$(document).ready(function () {
    $('.accordion__item').click(function () {
        $(this).toggleClass('open');
    });
});
