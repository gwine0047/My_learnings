const todoList = [{
  name: 'test',
  date: '2023-09-18'},
{name: 'make dinner',
date: '2022-07-07'},
];

let i;

renderTodoList();

function renderTodoList() {
  let todoListHTML = '';
  for (i = 0; i < todoList.length; i++) {
    let todoObject = todoList[i];
    const { name, date }= todoObject; //name = todoObject.name, date = todoObject.date

    const html = `
      <div>${name}</div>
      <div>${date}</div>
      <button onclick="
        todoList.splice(${i}, 1);
        renderTodoList();
      " class="delete-todo-button">Delete</button>`
      ;
    todoListHTML += html;
  }

  document.querySelector('.js-todo-list').innerHTML = todoListHTML;
}

function addTodo() {
  const inputElement = document.querySelector('.js-name-input'); // gets the input from html
  const name = inputElement.value;
  const dateInputElement = document.querySelector('.js-due-date-input'); // gets the input from html

  const date = dateInputElement.value;

  todoList.push({
    //name: name,
    //date: date
    name,
    date});

  inputElement.value = '';

  renderTodoList();
}
//.innerHTML is to put a value inside HTML, without it, you just collect values