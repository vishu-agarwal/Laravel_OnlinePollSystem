@extends("layout.layoutPoll")
@section("contain_data")

<div class="container border-3 border-primary">
    <h1>Poll Results</h1>
    @foreach($pollData as $data)


    <div class="card border-3 border-primary">
        <div class="bg-primary text-white">
            <h3>Question: {{ $data['question'] }} </h3>
        </div><br>
        <label><h6>( Option 1 ) {{$data['option1']}}</h6></label>
        <div class="progress">
        
        <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo round(($data['opt1'] / $data['total']) * 100, 2); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <?php echo round(($data['opt1'] / $data['total']) * 100, 2); ?>%
            </div>
        </div><br>
        <label><h6>( Option 2 ) {{$data['option2']}}</h6></label>
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width:<?php echo round(($data['opt2'] / $data['total']) * 100, 2); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <?php echo round(($data['opt2'] / $data['total']) * 100, 2); ?>%
            </div>
        </div><br>
        <label><h6>( Option 3 ) {{$data['option3']}}</h6></label>
        <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width:<?php echo round(($data['opt3'] / $data['total']) * 100, 2); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <?php echo round(($data['opt3'] / $data['total']) * 100, 2); ?>%
            </div>
        </div><br>
        <label><h6>( Option 4 ) {{$data['option4']}}</h6></label>
        <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width:<?php echo round(($data['opt4'] / $data['total']) * 100, 2); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <?php echo round(($data['opt4'] / $data['total']) * 100, 2); ?>%
            </div>
        </div><br>

    </div>

    <br>

    @endforeach
</div>

@endsection