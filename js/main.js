//  ============= ABOUT SECTION TABS =============
(() => {
    const aboutSection = document.querySelector(".about-section");
    const tabsContainer = document.querySelector(".about-tabs");

    tabsContainer.addEventListener('click', (e) => {
        if (e.target.classList.contains('tab-item') && !e.target.classList.contains('active')) {
            const target = e.target.getAttribute('data-target');
            // nonaktif tab active sebelumnya 
            tabsContainer.querySelector('.active').classList.remove('outer-shadow', 'active');
            // mengaktifkan tab target
            e.target.classList.add('active', 'outer-shadow');

            // menonaktifkan tab content sebelumnya
            aboutSection.querySelector('.tab-content.active').classList.remove('active');
            // mengaktifkan tab content yang dipilih
            aboutSection.querySelector(target).classList.add('active');
        }
    });
})();