'use strict';

export default function dropdown(){
    document.body.addEventListener('click', event => {
        // event.preventDefault();
        dropdownHandler(event);
    }, false);
}

export function dropdownHandler(event) {
    const t = event.target;

    const $filterToggle = t.closest('.dropdown-filter .dropdown-filter__toggle');
    $filterToggle && dropdownFilterHandler($filterToggle);

    const $toggle = t.closest('.dropdown .dropdown__toggle');
    $toggle && dropdownToggleHandler($toggle);

    const $menuToggle = t.closest('.navbar .navbar__item.dropdown-menu .dropdown-menu__toggle');
    $menuToggle
        ? dropdownMenuHandler($menuToggle)
        : dropdownMenuReset();
}

export function dropdownFilterHandler($filterToggle) {
    const $dropdown = $filterToggle.closest('.dropdown-filter');
    const $content = $dropdown.querySelector('.dropdown-filter__content');
    $filterToggle.classList.toggle('hide');
    $content && $content.classList.toggle('hide');
}

export function dropdownMenuHandler($menuToggle) {
    const $dropdown = $menuToggle.closest('.dropdown-menu');
    const $dropdownMenu = $dropdown.querySelector('.dropdown-menu__menu');
    if ($dropdownMenu) {
        if ($dropdownMenu.classList.contains('show')) {
            $dropdownMenu.classList.remove('show');
        } else {
            dropdownMenuReset();
            $dropdownMenu.classList.add('show');
        }
    } else dropdownMenuReset();
}

export function dropdownMenuReset() {
    // const $active = document.querySelector('.dropdown .dropdown__toggle.active');
    // $active && $active.classList.remove('active');
    const $show = document.querySelector('.dropdown-menu .dropdown-menu__menu.show');
    $show && $show.classList.remove('show');
}

export function dropdownToggleHandler($toggle) {
    const $dropdown = $toggle.closest('.dropdown');
    const $content = $dropdown.querySelector('.dropdown__content');
    $toggle.classList.toggle('show');
    $content && $content.classList.toggle('show');
}
