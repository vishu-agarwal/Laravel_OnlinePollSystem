<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Online Poll</title>
</head>

<body>
    <h1 class="bg-primary text-white text-center">Online POLL</h1>
    <div class="container">
        <form name="form1" method="POST" action="{{route('vote')}}">
            @csrf
            <input type="hidden" name="txtque" value="{{$data->question}}" />
            <table class="table table-bordered border-primary table-striped">
                
                <tr>
                    <th scope="col" colspan="2" class="text-white bg-danger">Question: {{$data->question}}</th> 
                </tr>
                <tr>
                    <td>{{$data->option1}}</td>
                    <td><input type="radio" name="rdbVote" value={{$data->option1}} /></td>
                </tr>
                <tr>
                    <td>{{$data->option2}}</td>
                    <td><input type="radio" name="rdbVote" value={{$data->option2}} /></td>
                </tr>
                <tr>
                    <td>{{$data->option3}}</td>
                    <td><input type="radio" name="rdbVote" value={{$data->option3}} /></td>
                </tr>
                <tr>
                    <td>{{$data->option4}}</td>
                    <td><input type="radio" name="rdbVote" value={{$data->option4}} /></td>
                </tr>
            </table>
            <input type="submit" name="btnSubmit" value="SUBMIT" class="btn btn-success" />
            <a href="{{ route('result', [$data->question,$data->option1,$data->option2,$data->option3,$data->option4]) }}"><div class="btn btn-primary">View Poll Result</div></a>
        </form>
      
        @error('rdbVote')
        <div class="alert alert-danger">Please Select Answer....</div>
        @enderror
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>