<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Post</title>
</head>
<body>
    @if(Session::has('post_update'))
    <br>
    <center><span class="alert alert-success">{{Session::get('post_update')}}</span></center>
    @endif
        <a style="float: right" href="{{route('post.add')}}">ADD</a>
    <form method="post" action="{{route('post.update')}}">
        <input type="hidden" name="id" value="{{$posts->id}}">
        @csrf
        <br>
        <br>
        <br>
        <center>
        <div class="mb-3">
        Name : <input type="text" class="form-control" name="name" style="width: 50%;" value="{{$posts->name}}"><br>
        Address :<textarea name="address" class="form-control" style="width: 50%;">{{$posts->Address}}</textarea><br>
        <input type="submit" class="btn btn-primary" value="submit">
        </div>
        </center>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>