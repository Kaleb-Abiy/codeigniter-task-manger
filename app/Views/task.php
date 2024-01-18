<!-- views/tasks_list.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>

<h2>Add New Task</h2>

<form action="/" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <br>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>
    <br>

    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="Pending">Pending</option>
        <option value="Completed">Completed</option>
    </select>
    <br>

    <button type="submit">Add Task</button>
</form>

<hr>

<h2>Task List</h2>

<table border="1">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $task['title']; ?></td>
                <td><?= $task['description']; ?></td>
                <td><?= $task['status']; ?></td>
                <td><?= $task['created_at']; ?></td>
                <td>
                    <a href="/edit-task/<?= $task['id']; ?>">Edit</a>
                    |
                    <a href="/delete-task/<?= $task['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>












