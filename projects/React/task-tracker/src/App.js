// import Buttons from "./component/Buttons"
import { useEffect, useState } from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Header from "./component/Header"
import Tasks from "./component/Tasks"
import AddTask from "./component/AddTask"
import Footer from "./component/Footer"
import About from './component/About'

const App = () => {
    const [showAddTask, setShowAddTask] = useState(false)

    const [tasks, setTasks] = useState ([])

    useEffect(() => {

      const getTasks = async () => {
        const tasksFromServer = await fetchTasks()
        setTasks(tasksFromServer)
      }
      getTasks()
    }, [])

    const fetchTasks = async () => {
      const res = await fetch('http://localhost:5000/tasks')

      const data = await res.json()

      return data
    }

    const fetchTask = async (id) => {
      const res = await fetch(`http://localhost:5000/tasks/${id}`)

      const data = await res.json()

      return data
    }


      const addTask = async (task) => {
        const res = await fetch('http://localhost:5000/tasks' ,{
          method: 'POST',
          headers: {
            'Content-type': 'application/json'
          },
          body: JSON.stringify(task)
        })


        const data = await res.json()

        setTasks([...tasks, data])
        // const id = Math.floor(Math.random() * 1000) + 1

        // const newTask = { id, ...task }
        // setTasks ([...tasks, newTask])
      }

      const deleteTask = async (id) => {
        await fetch(`http://localhost:5000/tasks/${id}`,
        {
          method: 'DELETE'
        })

        setTasks(tasks.filter((task) => task.id !== id))
      }

      const toggleReminder = async (id) => {
        const taskToToggle = await fetchTask(id)

        const updateTask = {...taskToToggle, reminder: !taskToToggle.reminder}

        const res = await fetch(`http://localhost:5000/tasks/${id}`,{
          method: 'PUT',
          headers: {
            'Content-type' : 'application/json'
          },
          body: JSON.stringify(updateTask)
        })

          const data = await res.json()
        setTasks(tasks.map((task) => task.id === id ? { ...task, reminder: data.reminder } : task))
      }

  return (
    <Router>
      <div className="container">

        <Header onAdd={() =>
          setShowAddTask(!showAddTask)}
          showAdd={showAddTask}
        />

        <Routes>
          <Route 
            path='/'
            element = {
              <>
                {showAddTask && <AddTask onAdd={addTask}/>}
                {tasks.length > 0 ?(
                  <Tasks 
                    tasks={tasks} 
                    onDelete={deleteTask}
                    onToggle={toggleReminder}
                />
                  ) : (
                    "There are no tasks left."
                  )}
              </>
            }
          />
            <Route 
            path='/about' Component={About} />
          </Routes>
          <Footer />
       </div>
    </Router>
  )
}

export default App
