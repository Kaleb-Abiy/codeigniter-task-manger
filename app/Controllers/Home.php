<?php

namespace App\Controllers;
use App\Hepers\conn;

class Home extends BaseController
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('tasks');
            $tasks = $builder->get()->getResultArray();
            // $query = $db->query('SELECT * FROM tasks');
            return view('task', ['tasks' => $tasks]);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
        }
        
    }

    public function create()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tasks');
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'status' => $this->request->getVar('status'),
        ];
        try {
           $builder->insert($data);
           echo "success";
        return $this->response->redirect('/');
        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
        }
        
    }

    public function editTask($id)
    {
        // Load the database connection
        $db = \Config\Database::connect();

        // Use the Query Builder to select the task by id
        $task = $db->table('tasks')->where('id', $id)->get()->getRowArray();

        // Pass the task details to the edit view
        return view('edit_task', ['task' => $task]);
    }

    public function update()
    {
        $db = \Config\Database::connect();

        // Get data from POST request
        $taskId = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $status = $this->request->getPost('status');

        // Perform validation if needed

        // Use the Query Builder to update the task
        $db->table('tasks')->where('id', $taskId)->update([
            'title' => $title,
            'description' => $description,
            'status' => $status,
            // Other fields...
        ]);

        // Redirect to the task list page or show a success message
        return redirect()->to('/');
    }

    public function deleteTask($id)
    {
        // Load the database connection
        $db = \Config\Database::connect();

        // Load the delete_task view with the task details
        return view('delete_task', ['task' => ['id' => $id]]);
    }

    public function delete()
    {
         // Load the database connection
        $db = \Config\Database::connect();

        $taskId = $this->request->getPost('id');

        // Use the Query Builder to delete the task by id
        $db->table('tasks')->where('id', $taskId)->delete();

        // Redirect to the task list page or show a success message
        return redirect()->to('/');
    }
}
