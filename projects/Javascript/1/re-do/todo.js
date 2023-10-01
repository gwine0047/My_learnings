const todoList = [(
  name: 'make dinner',
  dueDate: '2011')];

renderTodoList();

function addList() {

  const inputElement = document.querySelector('.js-todo-input');
  const name = inputElement.value;

  todoList.push(name);
  console.log(todoList);

  inputElement.value = '';
  renderTodoList();
}

function renderTodoList() {
  let listHTML = '';
  let temp = '';
  let html = '';
  let i = 0;

  for (i = 0; i < todoList.length; i++) {
    temp = todoList[i];
    html = `<p>${temp}</p>`;
    listHTML += html;
  }
  console.log(listHTML);
  document.querySelector('.js-todo-list').innerHTML = listHTML;
}