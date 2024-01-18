<!-- app/Views/delete_task.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Task</title>
</head>
<body>

<h2>Delete Task</h2>

<p>Are you sure you want to delete the task?</p>

<form action="/delete" method="post">
<input type="hidden" name="id" value="<?= $task['id']; ?>">
    <button type="submit">Yes, Delete</button>
    <a href="/">Cancel</a>
</form>

</body>
</html>
