<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Post</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    @if(Session::has('post_delete'))
    <br>
    <center><span class="alert alert-danger">{{Session::get('post_delete')}}</span></center>
    @endif
    <a style="float: right" href="{{route('post.add')}}">ADD</a>
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->name}}</td>
        <td>{{$post->Address}}</td>
        <td>
            <a href="/edit-post/{{$post->id}}">Edit</a>
            <a href="/delete-post/{{$post->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>