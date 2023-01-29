<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('customer.create')}}"><button>ADD</button></a>
    <table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->address}}</td>
                <td>
                <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}"><button>DELETE</button></a>
                <a href="{{route('customer.edit',['id' => $customer ->customer_id])}}"><button>EDIT</button></a>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>