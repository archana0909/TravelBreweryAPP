@extends('layouts.app')
@section('content')
<script type="text/javascript">
function remove(el){
    $(el).parents(".sub-iti").remove();
}
</script>
<div  class="container" >
  {!! Form::open(['action' => 'TourDetailsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

  <div class="row">
    <div class="col-sm-4">
      <hr class="light">
      <hr class="light">
      <h1>Create Itinerary</h1>
      <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
        {{Form::label('headerImg', 'HeaderImage')}}
        {{Form::text('headerImg', '', ['class' => 'form-control', 'placeholder' => 'HeaderImage'])}}
      </div>
      <div class="form-group">
        {{Form::label('price', 'Price')}}
        {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
      </div>
      <div class="form-group">
        {{Form::label('flyTo', 'FlyTo')}}
        {{Form::text('flyTo', '', ['class' => 'form-control', 'placeholder' => 'FlyTo'])}}
      </div>
      <div class="form-group">
        {{Form::label('returnFrom', 'ReturnFrom')}}
        {{Form::text('returnFrom', '', ['class' => 'form-control', 'placeholder' => 'ReturnFrom'])}}
      </div>
      <div class="form-group">
        {{Form::label('startDate', 'TripStartDate')}}
        {{Form::text('startDate', '', ['class' => 'form-control', 'placeholder' => 'TripStartDate'])}}
      </div>
      <div class="form-group">
        {{Form::label('endDate', 'EndDate')}}
        {{Form::text('endDate', '', ['class' => 'form-control', 'placeholder' => 'EndDate'])}}
      </div>
      <div class="form-group">
        {{Form::label('duration', 'TripDuration')}}
        {{Form::text('duration', '', ['class' => 'form-control', 'placeholder' => 'TripDuration'])}}
      </div>
      <!--  -->
      <div class="form-group">
        {{Form::label('desc', 'Description')}}
        {{Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
      </div>
      <hr class="light">
      <hr class="light">
    </div>
    <!-- Add city list -->
    <div class="col-sm-4">
      <hr class="light">
      <hr class="light">
      <h1>Create Itinerary</h1>
      <?php $count=0; ?>
      <div class="iti-parent">
        <div class="sub-iti">
          {{Form::label('day','Day Title')}}

          <input type="text" class="form-control" name="dayTitle[]" value="" placeholder="type the title of daywise Activity"  />

          {{Form::label('day','Day Description')}}
          <input type="text" class="form-control" name="dayDesc[]" value="" placeholder="type the description of daywise Activity"  />

          {{Form::label('day',' Link to Picture')}}

          <input type="text" class="form-control" name="cityImg[]" value="" placeholder="enter the url to image you want to show up in the carousel"  />
          <br>
          <div class="actions"> <button type="button" class="iti-remove btn btn-danger" onclick="remove(this)">Remove</button></div>

        </div>
      </div>

      <!-- Button to add more activity columns -->
      <div class="text-center" id="iti-clone"> <i class="fa fa-2x fa-plus-circle"></i></div>
    </div>
    <div class="col-sm-4">
      <hr class="light">
      <hr class="light">
      <h2>Inclusions</h2>

        <ul>
          <?php foreach ($incl as $inclusion): ?>
            <li class="list_style">
              <label><input type="checkbox" class"form-control" name="tourincl[]" value={{$inclusion['id']}}>&nbsp;{{$inclusion['name']}}</label>
            </li>
          <?php endforeach; ?>
        </ul>
        <hr>
        <h2>Exclusions</h2>
        <ul>
          <?php foreach ($excl as $exclusion): ?>
            <li class="list_style">
              <label><input type="checkbox" class"form-control" name="tourexcl[]" value={{$exclusion['id']}}>&nbsp;{{$exclusion['name']}}</label>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  {{Form::submit('Submit', ['class'=>'btn btn-primary text-center'])}}
  {!! Form::close() !!}
</div>

@endsection
