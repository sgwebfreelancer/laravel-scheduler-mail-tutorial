<!doctype html>
<html lang="en">
  <head>
    <title>Cron Job Scheduling in Laravel 8</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3> Daily Low Stock Report </h3>
                <br/>
                <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Stock</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($product as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->stock}}</td>
                        </tr>  
                    @endforeach
                    </tbody>
                    </table>
                <br/>
                <p> Best Regards</p>
                <p> Inventory Team </p>
            </div>
        </div>
    </div>
  </body>
</html>