const form = document.getElementById('contact-form');
const formProd = document.getElementById('prodform');
const internalLinks = document.querySelectorAll('body a[href^="#"]');
const xhr = new XMLHttpRequest();

function modalProduto() {
  const btn = document.getElementById('insert');

  btn.addEventListener('click', () => {
    abreModal('produto-modal');
  });
}

function insereProduto() {
  formProd.addEventListener('submit', (e) => {
    e.preventDefault();

    const prodDados = serialize(formProd);

    xhr.open('POST', '../cooking/php/new-product.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(prodDados);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          if (xhr.responseText != 0) {
            alert('Erro de SQL: ' + xhr.responseText);
          }
          formProd.reset();
          carregaProdutos();
        } else {
          alert('Erro na Requisição: ' + xhr.status + ' ' + xhr.statusText);
        }
      }
    }
  });
}

function montaLista(dados, alvo) {
  const ul = document.getElementById(alvo);
  ul.innerHTML = '';

  const objtJSON = JSON.parse(dados);

  for (let i in objtJSON) {
    const li = document.createElement("li");
    const img = document.createElement("img");
    const h3 = document.createElement("h3");
    const p = document.createElement("p");
    const div = document.createElement("div");
    const span = document.createElement("span");
    const input = document.createElement("input");
    const a = document.createElement("a");
    const anchorSpan = document.createElement("span");

    li.classList.add('grid');
    img.setAttribute("src", "img/" + objtJSON[i].proimg);
    img.setAttribute("alt", objtJSON[i].proimgdesc);
    h3.innerText = objtJSON[i].pronome + ' - ' + objtJSON[i].promarca;
    p.innerText = "R$" + " " + objtJSON[i].propreco;
    div.classList.add('text-field');
    span.innerText = "Qtde.";
    input.classList.add('quantity-input');
    input.setAttribute("type", "number");
    input.setAttribute("rows", 1);
    input.setAttribute("value", 1);
    a.classList.add('btn-buy');
    a.setAttribute("href", "#");
    anchorSpan.innerHTML = '';

    li.appendChild(img);
    li.appendChild(h3);
    li.appendChild(p);
    li.appendChild(div);
    div.appendChild(span);
    div.appendChild(input);
    li.appendChild(a);
    a.appendChild(anchorSpan);

    ul.appendChild(li);
  }
}

function carregaProdutos() {
  const request = new XMLHttpRequest();

  request.open('GET', '../cooking/php/produtos.php');
  request.send();

  request.onreadystatechange = function () {
    if (request.readyState === 4) {
      if (request.status === 200) {
        montaLista(request.responseText, 'prodLista');
      } else {
        alert('Erro na Requisição: ' + request.status + ' ' + request.statusText);
      }
    }
  }
}

function enviaMensagem() {
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const dados = serialize(form);

    xhr.open('POST', '../cooking/php/contact.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(dados);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          if (xhr.responseText != 0) {
            alert('Erro de SQL: ' + xhr.responseText);
          }
          abreModal('contato-modal');
          form.reset();
        } else {
          alert('Erro na Requisição: ' + xhr.status + ' ' + xhr.statusText);
        }
      }
    }
  });
}

function abreModal(modalID) {
  const modal = document.getElementById(modalID);

  if (modalID) {
    modal.classList.add('modal-open');
    modal.addEventListener('click', function (e) {
      if (e.target.id == modalID || e.target.className == 'modal-close') {
        modal.classList.remove('modal-open');
      }
    });
  }
}

function scrollSuaveInterno() {
  internalLinks.forEach(item => {
    item.addEventListener('click', scrollToId);
  })

  function scrollToId(event) {
    event.preventDefault();
    const section = getOffsetTop(event.target);
    scrollToPosition(section);
  }

  function getOffsetTop(element) {
    const id = element.getAttribute('href');
    return document.querySelector(id).offsetTop + 40;
  }

  function scrollToPosition(section) {
    window.scroll({
      top: section,
      behavior: 'smooth',
    });
  }
}