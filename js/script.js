// Variáveis Globais

const button_submit = document.querySelector("#enviar");
const title = document.querySelector("input[name='title']");
const author = document.querySelector("input[name='author']");
const publisher = document.querySelector("input[name='publisher']");
const data = document.querySelector("input[name='data']");
const table_body = document.querySelector("tbody");

// Objetos
function data_submit(title, author, publisher, data) {
    this.titulo = title;
    this.autor = author;
    this.editora = publisher;
    this.data = data;
    
    this.newRow = function () {
        //Criando os Elementos
        var row = document.createElement("tr");
        var campo_titulo = document.createElement("td");
        var campo_autor = document.createElement("td");
        var campo_editora = document.createElement("td");
        var campo_data = document.createElement("td");
        
        //Adicionar Estilos
        campo_titulo.className = 'table-data';
        campo_autor.className = 'table-data';
        campo_editora.className = 'table-data';
        campo_data.className = 'table-data';
        
        //Criando Nós
        var texto_titulo = document.createTextNode(this.titulo);
        var texto_autor = document.createTextNode(this.autor);
        var texto_editora = document.createTextNode(this.editora);
        var texto_data = document.createTextNode(this.data);
        
        //Vinculando Nós
        campo_titulo.appendChild(texto_titulo);
        campo_autor.appendChild(texto_autor);
        campo_editora.appendChild(texto_editora);
        campo_data.appendChild(texto_data);
        row.appendChild(campo_titulo);
        row.appendChild(campo_autor);
        row.appendChild(campo_editora);
        row.appendChild(campo_data);
        
        //Vinculando Elementos ao Doc
        table_body.appendChild(row);
    }
};

//Funções
function submit (event) {
    event.preventDefault();
}

//Rotina
button_submit.addEventListener('click', data_submit);