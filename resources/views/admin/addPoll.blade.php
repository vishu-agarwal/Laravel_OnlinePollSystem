@extends("layout.layoutPoll")
@section("contain_data")
<div class="container border-3 border-primary">
    <h1>Add Poll </h1>
    <form name="addForm" method="post" action = "{{route('PollAdd')}}">
        @csrf
        <div class="mb-3">
            <label for="question" class="form-label">Poll Question:</label>
            <input type="text" class="form-control" name="txtque" value="{{old('txtque')}}">
            @error("txtque")
            <div style="color:red">{{$message}}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="opt1" class="form-label">Option 1:</label>
            <input type="text" class="form-control" name="txtans1" value="{{old('txtans1')}}">
            @error("txtans1")
            <div style="color:red">{{$message}}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="opt2" class="form-label">Option 2:</label>
            <input type="text" class="form-control" name="txtans2" value="{{old('txtans2')}}">
            @error("txtans2")
            <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="op3" class="form-label">Option 3:</label>
            <input type="text" class="form-control" name="txtans3" value="{{old('txtans3')}}">
            @error("txtans3")
            <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="op4" class="form-label">Option 4:</label>
            <input type="text" class="form-control" name="txtans4" value="{{old('txtans4')}}">
            @error("txtans4")
            <div style="color:red">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success" name="btnAdd" value="btnAdd">ADD POLL</button>
        @if(isset($flag)==1)
        <div class="alert alert-danger">Sucessfully Data inserted.....</div>
        @endif
    </form>
</div>
@endsection