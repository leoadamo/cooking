var selectedRow = null;

/* Função enviar */

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

/* Função lê form */

function readFormData() {
    var formData = {};
    formData["title"] = document.getElementById("title").value;
    formData["author"] = document.getElementById("author").value;
    formData["publisher"] = document.getElementById("publisher").value;
    formData["data"] = document.getElementById("data").value;
    return formData;
}

/* Função insere */

function insertNewRecord(data) {
    var table = document.getElementById("list").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.title;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.author;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.publisher;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.data;
    cell4 = newRow.insertCell(4);
    cell4.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}

/* Apaga dados */

function resetForm() {
    document.getElementById("title").value = "";
    document.getElementById("author").value = "";
    document.getElementById("publisher").value = "";
    document.getElementById("data").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("title").value = selectedRow.cells[0].innerHTML;
    document.getElementById("author").value = selectedRow.cells[1].innerHTML;
    document.getElementById("publisher").value = selectedRow.cells[2].innerHTML;
    document.getElementById("data").value = selectedRow.cells[3].innerHTML;
}

function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.title;
    selectedRow.cells[1].innerHTML = formData.author;
    selectedRow.cells[2].innerHTML = formData.publisher;
    selectedRow.cells[3].innerHTML = formData.data;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record?')) {
        row = td.parentElement.parentElement;
        document.getElementById("list").deleteRow(row.rowIndex);
        resetForm();
    }
}

function validate() {
    isValid = true;
    if (document.getElementById("title").value == "") {
        isValid = false;
        document.getElementById("ValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("ValidationError").classList.contains("hide"))
            document.getElementById("ValidationError").classList.add("hide");
    }
    return isValid;
}