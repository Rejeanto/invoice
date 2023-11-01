<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-3">
        <h5>Project List</h5>
        <table class="table table-bordered table-striped mt-3 text-center">
            <thead>
                <tr>
                    <th>Service Type</th>
                    <th>Project Name</th>
                    <th>PIC (Cost Control Team)</th>
                    <th>Project Start Date</th>
                    <th>Project End Date</th>
                    <th>Total Project Value</th>
                    <th>Currency</th>
                </tr>
            </thead>

            @foreach ($setup_projects as $sp)
            <tbody>
                <td>{{ $sp->service_type }}</td>
                <td>{{ $sp->project_name }}</td>
                <td>{{ $sp->pic }}</td>
                <td>{{ $sp->project_start_date }}</td>
                <td>{{ $sp->project_end_date }}</td>
                <td>{{ $sp->total_project_type }}</td>
                <td>{{ $sp->currency }}</td>
            </tbody>
            @endforeach
        </table>

        <table class="table table-bordered table-striped mt-3 text-center">
            <!-- <thead>
                <tr>
                    <th>Billing Scheme</th>
                    <th>Contract Type</th>
                    <th>Description</th>
                    <th>%</th>
                    <th>Cum.%</th>
                    <th>Billing Value</th>
                    <th>Action Item</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($project_informations as $pi)
                <td>1</td>
                <td>2</td>
                <td>{{ $pi->description }}</td>
                <td>{{ $pi->biling }}</td>
                <td>{{ $pi->cummulative_billing }}</td>
                <td>{{ $pi->billing_value }}</td>
                <td width="10%" class="text-center">
                    <a href="#" class="btn btn-success">Ubah</a>
                    <p></p>
                    <form action="#" method="POST">
                        <input class="btn btn-success" type="submit" value="Delete">
                    </form>
                </td>
                @endforeach

            </tbody> -->
        </table>

    </div>
</body>

</html>