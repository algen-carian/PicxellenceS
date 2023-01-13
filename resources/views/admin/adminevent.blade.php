<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admindashboard</title>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/admindashboard.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body id = "boody">
   
        <!-- side -->
        @extends('admin.menu')
       

        <section class="service-section" style="padding:10%;">
          <div class="text_permission">
            <div class="container-fluid">
                <h2>Events</h2>
                    <br>
                        <div class="container" style="float:right;">
                                <form action="{{route('addEvent')}}" method="post">
                                    @csrf
                                        <div style="float:left;margin-right:2%;">
                                            Title:
                                            <input name="event_title" id="event_title" type="text" class="form-control" >
                                        </div>

                                        <div style="float:left;margin-right:2%;">
                                            Content:
                                            <select name="event_content" id="event_content" class="form-control">
                                                <option>Event</ption>
                                                <option>Services</ption>
                                            </select>
                                        </div>

                                        <div style="float:left;margin-right:2%;">
                                            Price:
                                            <input name="event_price" id="event_price" type="text" class="form-control">
                                        </div>
                                        <div style="float:left;margin-right:2%;">
                                            <br>
                                            <button class='btn btn-primary'>Add</button>
                                        </div>
                                </form>
                        </div>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                    
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Type of Event</th>
                            <th scope="col">Price</th>
                    
                    </thead>
                    <tbody>
                        @foreach ($Events as $ev)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{$ev->event_title}}</td>
                            <td>{{$ev->event_content}}</td>
                            <td>{{$ev->event_price}}</td>
                        </tr>				
                        @endforeach
                        
                    </tbody>
                </table>
                
                <nav>
                    <ul class="pagination" style="float:right;">
                        <li class="page-item">
                            {!! $Events->appends(['sort' => 'event_title'])->links() !!}
                        </li>
                    </ul>
                </nav>

                </div>        
            </div>
        </section>

      <script src="js/script.js"></script>

 
</body>

</html>
 