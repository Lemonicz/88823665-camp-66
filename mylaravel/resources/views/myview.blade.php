<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
   
    .container {
        width: 30%;
        text-align: center;
    }
    input[type="text"] {
        width: 100%;
    }
</style>

<body>
    <div class="container">
        <div >
            <h1>Calculator</h1>
        </div>
        <div class="mb-3">
            <h4>My Input: {{ $myinput }}</span></h4>
            <h4>My Value: {{ $myvalue }}</span></h4>
        </div>
        <form method="post" action="{{ url('/mycontroller') }}">
            @csrf
            <input type="text" class="form-control" name="myinput">
            <button type="submit" class="btn btn-outline-primary mt-3">submit</button>
        </form>
        @if(isset($multiplicationTable) && count($multiplicationTable) > 0)
        <div class="table-responsive mt-3">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">ตารางสูตรคูณ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($multiplicationTable as $row)
                    <tr>
                        <td class="text-center">{{ $row }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @elseif($myinput)
        <div class="alert alert-danger" role="alert">
            Please enter a valid number!
        </div>
        @endif
    </div>
</body>

</html>