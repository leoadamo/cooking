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
        } else {
          alert('Erro na Requisição: ' + xhr.status + ' ' + xhr.statusText);
        }
      }
    }
  });
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