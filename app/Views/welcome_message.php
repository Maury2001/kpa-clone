<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>

<body id="main">


    <div class="d-flex justify-content-center">
        <div class="card" style="width: 90rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between card-title bg-dark shadow rounded p-1">
                    <h4 class="text-light m-2">Welcome <?= session()->get('first_name')?></h4>
                    <button type="button" class="btn btn-outline-primary m-2">Update my Profile</button>
                </div>

<hr>
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <ul>
                                <li>Member No:</li>
                                <li>Full Name: <?=session()->get('first_name')?></li>
                                <li>Email:</li>
                                <li>Phone:</li>
                                <li>Id Number:</li>
                                <li>Board Reg</li>

                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>Designation:</li>
                                <li>Specialization:</li>
                                <li>Workstation: </li>
                                <li>Affiliation:</li>
                                <li>Postal Address:</li>
                                <li>Postal Code:</li>

                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>Registration Date:</li>
                                <li>Backup Email:</li>
                                <li>Approved:</li>
                                <li>Status:</li>
                                <li>Roles:</li>


                            </ul>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

    <div class="p-5">
        <h4>Recent Webinars</h4>
    </div>
</body>

</html>