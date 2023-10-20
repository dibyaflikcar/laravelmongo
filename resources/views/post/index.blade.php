<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
            <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <h5>All Post</h5>
                @if(session('success'))
                <p class="alert alert-success">{{ session('success')}}</p>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('post.create')}}"><button class="btn btn-primary">Add+</button></a>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Body</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $value)
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->slug}}</td>
                                    <td>{{$value->body}}</td>
                                    <td>
                                        <a href="{{route('post.edit',$value->_id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('post.delete',$value->_id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                  </tr>
                                @endforeach
                              
                              
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        </form>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>