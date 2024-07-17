/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId)
 
    toggle.addEventListener('click', () =>{
        // Add show-menu class to nav menu
        nav.classList.toggle('show-menu')
 
        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle('show-icon')
    })
 }
 
 showMenu('nav-toggle','nav-menu'
 )


 document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav__link[data-target]');
    const dropdown__link = document.querySelectorAll('.dropdown__link[data-target]');
    const sections = document.querySelectorAll('.home-section');

    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-target');
            sections.forEach(section => {
                if (section.id === targetId) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });

    dropdown__link.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-target');
            sections.forEach(section => {
                if (section.id === targetId) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav__link');
    
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        // Remove 'active' class from all links
        navLinks.forEach(link => link.classList.remove('active'));
        
        // Add 'active' class to the clicked link
        this.classList.add('active');
        
        // Optional: Prevent default anchor behavior if needed
        // event.preventDefault();
        
        // Scroll to the target section
        const targetId = this.getAttribute('data-target');
        const targetSection = document.getElementById(targetId);
        if (targetSection) {
          targetSection.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  });


  
  
  