@extends("layout.layoutPoll")
@section("contain_data")
<div class="container">
<h1>Active Poll </h1>
    <table class="table table-bordered border-primary text-center">

    <tr class="bg-danger text-white">
      <th>No.</th>
      <th>Question</th>
      <th>Option 1</th>
      <th>Option 2</th>
      <th>Option 3</th>
      <th>Option 4</th>
      <th>Action</th>
    </tr>


    <?php $i=1; foreach($data as $row) { ?> 
  <tr>
      <td>{{ $i++ }}</td>
      <td>{{ $row->question }}</td>
      <td>{{ $row->option1 }}</td>
      <td>{{ $row->option2 }}</td>
      <td>{{ $row->option3 }}</td>
      <td>{{ $row->option4 }}</td>
      <th scope="row">
          <?php if(($row->status)==0){?>
            <a href='/updatePoll/<?php echo $row->question; ?>'><Button class="btn btn-danger">Not Active</Button></a>
            <?php
          }else{
            ?>
            <Button class="btn btn-primary">Active</Button>
            <?php } ?>
          </th>
    </tr>
   <?php } ?>

</table>
</div>
@endsection
    