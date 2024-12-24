# Task List Application

A task management web application built with **Laravel**, featuring task creation, editing, deletion, task completion toggle, and pagination. The app uses **Tailwind** for styling and **Alpine.js** for small dynamic UI functionality.

## Features

- **Task CRUD Operations**: 
  - **Create**, **Read**, **Update**, and **Delete** tasks.
  - Task creation and update forms use a shared subview with dynamic route handling, method spoofing, and error message display.
  
- **Task Completion Toggle**: 
  - Tasks can be marked as completed or not via a toggle, and the status is updated accordingly.
  
- **Flash Messages**: 
  - Success messages are displayed, with the ability to close them dynamically using Alpine.js.
  
- **Pagination**: 
  - Tasks are paginated, and pagination links are dynamically generated for easy navigation.

- **Dynamic Forms**:
  - Reusable form subview for task creation and editing.
  - Conditional rendering is used to determine the correct form action and method, pre-populating fields for editing.
  
- **Route Model Binding**:
  - Automatic task retrieval by ID using route model binding.
  
- **Database & Seeding**: 
  - Tasks are stored in a **MySQL** database.
  - Fake data is generated for the database using **TaskFactory** and seeded for development purposes.

- **Adminer for DB Management**:
  - Integrated Adminer to easily manage the database via a web interface.
  
## Technologies Used

- **Laravel**
- **Tailwind**
- **Alpine.js**
- **MySQL**
- **Adminer**
- **Faker**




