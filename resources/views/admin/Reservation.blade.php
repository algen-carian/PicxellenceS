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
                <h2>Reservations</h2>
                <table class="table">
                    <thead class="thead-dark">
                    
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Event Date</th>
                            <th scope="col">Status</th>
                            <th scope="col" colspan="2">Action</th>
                    
                    </thead>
                    <tbody>
                        @foreach ($Events as $ev)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{$ev->fname.' '.$ev->mname.' '.$ev->lname}}</td>
                            <td>{{$ev->email}}</td>
                            <td>{{$ev->Event_date}}</td>
                            <td>{{$ev->event_status}}</td>
                            <td>
                                @if($ev->event_status == "Pending")
                                    <a href="{{route('updateStatus',$ev->reservation_id)}}"><button class="btn btn-primary">Approve</button></a>
                                    
                                    <a href="{{route('updateCancel',$ev->reservation_id)}}"><button class="btn btn-danger">Cancel</button></a>
                                @endif
                                @if($ev->event_status == "Approved")
                                    <a href="{{route('updateStatus',$ev->reservation_id)}}"><button class="btn btn-success">Finished</button></a>
                                @endif
                            </td>
                            <td>
                                    <a href="{{route('viewEvent',$ev->reservation_id)}}"><button class="btn btn-primary">View</button></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
                <nav>
                    <ul class="pagination" style="float:right;">
                        <li class="page-item">
                            {!! $Events->appends(['sort' => 'Event_date'])->links() !!}
                        </li>
                    </ul>
                </nav>

                </div>        
            </div>
        </section>

      <script src="js/script.js"></script>


 
</body>


</html>
 