<!-- app/Views/edit_task.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>

<h2>Edit Task</h2>

<form action="/update-task" method="post">
    <input type="hidden" name="id" value="<?= $task['id']; ?>">
    
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="<?= $task['title']; ?>" required>
    <br>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required><?= $task['description']; ?></textarea>
    <br>

    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="Pending" <?= ($task['status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
        <option value="Completed" <?= ($task['status'] == 'Completed') ? 'selected' : ''; ?>>Completed</option>
    </select>
    <br>

    <button type="submit">Update Task</button>
</form>

</body>
</html>
