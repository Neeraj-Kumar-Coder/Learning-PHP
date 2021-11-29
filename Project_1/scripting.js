console.log("This is an iNotes App for saving all your important notes");

let deleteAllBtn = document.getElementById("delete-all");
deleteAllBtn.addEventListener("click", () => {
    let isSure = confirm("Are you sure you want to delete all the notes?");
    if (isSure) {
        window.location = `/Learning PHP/Project_1/index.php?deleteAll=true`;
    }
});

let deleteBtns = document.getElementsByClassName("delete-btn");
Array.from(deleteBtns).forEach((ele) => {
    ele.addEventListener("click", (element) => {
        let isSure = confirm("You are about to delete this note!");
        if (isSure) {
            let parent = element.target.parentNode.parentNode;
            let key = parent.getElementsByTagName("td")[1].innerText;
            window.location = `/Learning PHP/Project_1/index.php?delete=${key}`;
        }
    });
});

let editBtns = document.getElementsByClassName("edit-btn");
Array.from(editBtns).forEach((ele) => {
    ele.addEventListener("click", (element) => {
        let parent = element.target.parentNode.parentNode;
        let title = parent.getElementsByTagName("th")[1].innerText;
        let description = parent.getElementsByTagName("td")[0].innerText;
    });
});