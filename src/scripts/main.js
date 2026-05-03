document.addEventListener('DOMContentLoaded', function() {
    const selectField = document.querySelector('.field-wrapper select[name="your-reason"]');

    if (selectField) {
        const updateColor = () => {
            if (selectField.value === "") {
                selectField.classList.add('is-placeholder');
            } else {
                selectField.classList.remove('is-placeholder');
            }
        };

        updateColor();

        selectField.addEventListener('change', updateColor);
    }
});