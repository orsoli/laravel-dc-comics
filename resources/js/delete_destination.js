const deleteButton = document.querySelectorAll(".delete-btn");

deleteButton.forEach((element) => {
    element.closest("form").addEventListener("submit", (e) => {
        e.preventDefault();

        const confirm = window.confirm(
            `Are you sure to delete ${element.getAttribute("delete-data-name")}`
        );

        if (confirm) {
            e.target.submit();
        }
    });
});
