let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
let contentSections = document.querySelectorAll('.content');

toggle.onclick = function() {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}

let list = document.querySelectorAll('.navigation li');
function activeLink() {
    list.forEach((item) => item.classList.remove('hovered'));
    this.classList.add('hovered');

    let target = this.getAttribute('data-target');
    contentSections.forEach((section) => {
        if (section.id === target) {
            section.classList.add('active');
        } else {
            section.classList.remove('active');
        }
    });
}
list.forEach((item) => item.addEventListener('click', activeLink));
