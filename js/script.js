/*var coll = document.getElementsByClassName ("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
    coll(i).addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
    }   else {
        content.style.maxHeight = content.scrollHeight + "px";
    }
    });
}
*/

/*находим все нужные нам headingElem*/
let allElems = document.querySelectorAll('.accordion__header');
/*прогоняем из через цикл*/
allElems.forEach((elem) => {
    /*вещаем на каждый элемент обработчик на событие click*/
    elem.addEventListener('click', function () {
        /*у нажатого элемента получаем родителя*/
        let parentElem = this.parentNode;
        /*находим элемент с контентом*/
        let contentBlock = parentElem.querySelector('.accordion__body')
        /*аналогичная проверка на наличие класса active*/
        if (contentBlock.classList.contains('active')) {
            contentBlock.classList.remove('active');
        }
        else {
            contentBlock.classList.add('active');
        }
    })
})