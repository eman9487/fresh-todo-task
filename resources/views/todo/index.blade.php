<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table , th, td{
            border: 1px solid blue;
        }

        .input {
            border-color: black;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center text-primary">Todo Application</h1>
                        <form action="{{ route('todo.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="task" id="task" class="form-control mt-4 input ">
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary mt-3">
                                </div>
                            </div>
                        </form>
                        <table class="table mt-4 shadow">
                            <tr>
                                <th>Task</th>
                                <th>Delete</th>
                            </tr>
                            <tr class="text-align-center">
                                <td>
                                    @foreach($tasks as $task)
                                    {{ $task->task }}
                                    <br>
                                </td>
                                <td>
                                    <a href="tasks/{{ $tasks->id }}/delete" class="btn  btn-sm btn-danger">Delete</a>
                                </td>
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>