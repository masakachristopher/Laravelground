<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>student management system</title>
  </head>
  <body>
     @include("navbar")
     @if($layout == 'index')
      <div class="container-fluid">
          <section>
           @include("studentslist")
          </section>
        </div>
     @elseif($layout == 'create')
       <div class="container-fluid">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">
            <!-- <div> -->
            <form action="{{ url('/store') }}" method="post">
              @csrf
                <div class="form-group">
                  <label>CNE</label>
                  <input type="text" name="cne" class="form-control" placeholder="Enter the cne">
                </div>
                <div class="form-group">
                  <label>first Name</label>
                  <input type="text" name="firstName" class="form-control" placeholder="Enter the First Name">
                </div>
                <div class="form-group">
                  <label>Second Name</label>
                  <input type="text" name="secondName" class="form-control" placeholder=" Enter the Second Name">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" name="age" class="form-control" placeholder=" Enter the Age">
                </div>
                <div class="form-group">
                  <label>Speciality</label>
                  <input type="text" name="speciality" class="form-control" placeholder=" Enter the speciality">
                </div>
                
                <input type="submit" class="btn btn-info" name="Save"/>
                <input type="reset" class="btn btn-warning" name="Reset"/>
            </form>
          </section>
        </div>
        </div>  
    @elseif($layout == 'show')
       <div class="container-fluid">
        
          <section class="col">
            @include("studentslist")
          </section>
          <section class="col"></section>
        </div>

    @elseif($layout == 'edit') 
      <div class="container-fluid">
        <div class="row"> 
          <section class="col">
            @include("studentslist")
          </section>
          <section class="col">
            <form action="{{ url('/update/'.$student->id)}}" method="post">
                @csrf
                  <div class="form-group">
                    <label>CNE</label>
                    <input type="text" name="cne" value="{{$student->cne}}" class="form-control" placeholder="Enter the cne">
                  </div>
                  <div class="form-group">
                    <label>first Name</label>
                    <input type="text" name="firstName" value="{{$student->firstName}}" class="form-control" placeholder="Enter the First Name">
                  </div>
                  <div class="form-group">
                    <label>Second Name</label>
                    <input type="text" name="secondName" value="{{$student->secondName}}" class="form-control" placeholder=" Enter the Second Name">
                  </div>
                  <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="age" value="{{$student->age}}" class="form-control" placeholder=" Enter the Age">
                  </div>
                  <div class="form-group">
                    <label>Speciality</label>
                    <input type="text" name="speciality" value="{{$student->speciality}}" class="form-control" placeholder=" Enter the speciality">
                  </div>
                  
                  <input type="submit" class="btn btn-info" name="Save">
                  <input type="reset" class="btn btn-warning" name="Reset">
              </form>
          </section>
        </div>
      </div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>