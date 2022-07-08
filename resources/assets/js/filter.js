'use strict';

(function filter() {

    const $filter = document.getElementById('filter');
    const $filters = document.querySelector('#aside-filters .wrapper_top');

    function checkedInputsCheck() {
        $filter.querySelectorAll('input[checked]')
            .forEach($input => {
                const $filterLabel = $input.nextElementSibling;
                addFilterTag($filterLabel);
            });
    }

    function filterReset() {
        $filters.querySelectorAll('.filter-tag')
            .forEach($filterTag => {
                $filterTag.remove();
            });
    }

    function addFilterTag($filterLabel) {
        const $filterLabelClone = $filterLabel.cloneNode(true);
        $filterLabelClone.classList.add('filter-tag');
        $filterLabelClone.classList.add('flex');
        const $buttonClose = document.createElement('button');
        $buttonClose.type = 'button';
        $buttonClose.className = 'btn btn_unset close';
        $buttonClose.innerHTML = `
            <svg width="12" height="12" class="svg-symbol xmark">
                <use href="https://wot.htmlcssjs.pro/images/sprite.svg#xmark"></use>
            </svg>
        `;
        $filterLabelClone.append($buttonClose);
        $filters.append($filterLabelClone);
    }

    function removeFilterTag(inputId) {
        const $filterTag = $filters.querySelector(`.filter-tag[for=${inputId}]`);
        $filterTag && $filterTag.remove();
    }

    function filterHandler(event) {
        const t = event.target;
        const $filterLabel = t.closest('.filter .checkbox__label');
        $filterLabel && filterLabelHandler($filterLabel);
        const $buttonClose = t.closest('.filters .filter-tag .close');
        $buttonClose && filterTagCloseHandler($buttonClose);
    }

    function filterLabelHandler($filterLabel) {
        const inputId = $filterLabel.getAttribute('for');
        const $input = $filterLabel.previousElementSibling;
        if (!$input.checked) {
            addFilterTag($filterLabel);
        } else {
            removeFilterTag(inputId);
        }
    }

    function filterTagCloseHandler($buttonClose) {
        const $filterTag = $buttonClose.closest('.filters .filter-tag');
        const inputId = $filterTag.getAttribute('for');
        const $input = document.getElementById(inputId);
        $input && ($input.checked = false);
        $filterTag && $filterTag.remove();
    }

    document.body.addEventListener('click', filterHandler, false);
    $filter.addEventListener('reset', filterReset);
    checkedInputsCheck();
})();
