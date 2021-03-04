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


function bodyScrollingToggle() {
    document.body.classList.toggle('stop-scrolling');
}


// =============== POSRTFOLIO FILTER AND POPUP =============
(() => {

    const filterContainer = document.querySelector('.portfolio-filter');
    const portfolioItemsContainer = document.querySelector('.portfolio-items');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    const popup = document.querySelector('.portfolio-popup');
    const prevBtn = popup.querySelector('.pp-prev')
    const nextBtn = popup.querySelector('.pp-next');
    const closeBtn = popup.querySelector('.pp-close');
    const projectDetailsContainer = popup.querySelector('.pp-details');
    const projectDetailsBtn = popup.querySelector('.pp-project-details-btn');

    let itemIndex, slideIndex, screenshots;

    // filter portfolio items
    filterContainer.addEventListener('click', (e) => {
        if (e.target.classList.contains('filter-item') && !e.target.classList.contains('active')) {
            // nonaktif tab active sebelumnya 
            filterContainer.querySelector('.active').classList.remove('outer-shadow', 'active');
            // mengaktifkan tab target
            e.target.classList.add('active', 'outer-shadow');

            const target = e.target.getAttribute('data-target');

            portfolioItems.forEach((item) => {
                const category = item.getAttribute('data-category');
                if (category === target || target === 'all') {
                    item.classList.remove('hide');
                    item.classList.add('show');
                } else {
                    item.classList.remove('show');
                    item.classList.add('hide');
                }
            })
        }
    })

    // item container
    portfolioItemsContainer.addEventListener('click', (e) => {
        const itemClosest = e.target.closest('.portfolio-item-inner');
        if (itemClosest) {
            // mendapatkan index portfolioItem
            const portfolioItem = itemClosest.parentElement;

            itemIndex = Array.from(portfolioItem.parentElement.children).indexOf(portfolioItem);
            screenshots = portfolioItems[itemIndex].querySelector('.portfolio-item-img img').getAttribute('data-screenshots');

            // konversi data-screenshots ke array
            screenshots = screenshots.split(',');
            if (screenshots.length === 1) {
                nextBtn.style.display = "none";
                prevBtn.style.display = "none";
            } else {
                nextBtn.style.display = "block";
                prevBtn.style.display = "block";

            }

            slideIndex = 0;
            popupTogle();
            popupSlideShow();
            popupDetails();
        }
    });

    function close() {
        exitTogle();

        projectDetailsContainer.classList.remove('active');
        projectDetailsContainer.style.maxHeight = 0 + 'px';

        projectDetailsBtn.querySelector('i').classList.remove('fa-minus');
        projectDetailsBtn.querySelector('i').classList.add('fa-plus');
    }

    closeBtn.addEventListener('click', () => {
        close()
    });

    function exitTogle() {
        popup.classList.toggle('open');
        bodyScrollingToggle();

        document.onkeydown = (e) => {
            if (e.keyCode == 27) {
                null;
            }
            return;
        }
    }

    function popupTogle() {
        popup.classList.toggle('open');
        bodyScrollingToggle();

        document.onkeydown = (e) => {
            if (e.keyCode == 27) {
                close();
            }
            return;
        }
    }

    function popupSlideShow() {
        const imgSrc = screenshots[slideIndex];
        const popupImg = popup.querySelector('.pp-img');

        // preloader
        const preloader = popup.querySelector('.pp-loader')
        preloader.classList.add('active');

        popupImg.src = imgSrc;

        // hilangkan preloader
        popupImg.onload = () => {
            preloader.classList.remove('active');
        }

        popup.querySelector('.pp-counter').innerHTML = (slideIndex + 1) + ' of ' + screenshots.length;
    }


    // next slide
    nextBtn.addEventListener('click', () => {
        if (slideIndex == screenshots.length - 1) {
            slideIndex = 0;
        } else {
            slideIndex++;
        }
        popupSlideShow()
    });

    // prev slide
    prevBtn.addEventListener('click', () => {
        if (slideIndex == 0) {
            slideIndex = screenshots.length - 1;
        } else {
            slideIndex--;
        }
        popupSlideShow()
    });

    function popupDetails() {
        const details = portfolioItems[itemIndex].querySelector('.portfolio-item-details').innerHTML;
        popup.querySelector('.pp-project-details').innerHTML = details;

        const title = portfolioItems[itemIndex].querySelector('.portfolio-item-title').innerHTML;
        popup.querySelector('.pp-title h2').innerHTML = title;

        const category = portfolioItems[itemIndex].getAttribute('data-category');
        popup.querySelector('.pp-project-category').innerHTML = category.split('-').join(' ');

    }

    projectDetailsBtn.addEventListener('click', () => {
        popupDetailsToggle();
    });

    function popupDetailsToggle() {
        if (projectDetailsContainer.classList.contains('active')) {
            projectDetailsBtn.querySelector('i').classList.remove('fa-minus');
            projectDetailsBtn.querySelector('i').classList.add('fa-plus');

            projectDetailsContainer.classList.remove('active');
            projectDetailsContainer.style.maxHeight = 0 + 'px';
        } else {
            projectDetailsBtn.querySelector('i').classList.remove('fa-plus');
            projectDetailsBtn.querySelector('i').classList.add('fa-minus');

            projectDetailsContainer.classList.add('active');
            projectDetailsContainer.style.maxHeight = projectDetailsContainer.scrollHeight + 'px';
        }
    }

})();