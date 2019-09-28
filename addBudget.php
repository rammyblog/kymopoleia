<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/addBudget.css">
    <script src="https://kit.fontawesome.com/833e0cadb7.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" rel="stylesheet">


    <title>Kymo Budget | Add Budget </title>
</head>

<body class="">
    <header>

        <nav>
            <div class="brandname">
                <h2 class="header-brandname"><a href="#"><img src="images/kymo.png" alt=""> </a></h2>
            </div>
            <p class="welcome_user">Hi, <span class="blueText">Femi Jeffery</span></p>
            <img class='user-avatar' src="images/user.png" alt="">
            <div class="dropdown">
                <div class="dropdown-toggler" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="images/drop.png" alt="">
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Sign Out</a>
                </div>
            </div>

        </nav>

    </header>

    <main>

        <section class="sidebar">

            <ul class="sidebar-list">
                <li> <i class="fa fa-home"></i><a href="#"> Dashboard</a></li>
                <li><i class="fa fa-plus-circle"></i><a href="#" class="active"> Add Budget </a></li>
                <li><i class="fa fa-plus-circle"></i><a href="#"> Add Expenses</a></li>
            </ul>
        </section>

        <section class="add-budget">
            <form class="add-budget-form">
                <h2 class="bgBlue">Add Budget</h2>
                <div class="form-row margin-height">
                    <div class="form-group col-md-6 mTop">
                        <input type="text" class="form-control" placeholder="Budget title">
                    </div>
                    <div class="form-group col-md-6 mTop">
                        <input type="text" class="form-control" placeholder="Budget amount">
                    </div>
                </div>
                <button type="submit" class="btn budget-save text-center bgBlue">Add</button>
            </form>


            <form class="add-budget-form">
                <h2 class="bgBlue">Add Budget Item</h2>
                <div class="form-row margin-height">
                    <div class="form-group col-md-6 mTop">
                        <select class="custom-select">
                            <option selected>Select item</option>
                            <option value="1">Cake</option>
                            <option value="2">Drinks</option>
                            <option value="3">Transportation</option>
                            <option value="4">Hotel</option>
                            <option value="5">Food</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 mTop">
                        <select class="custom-select">
                            <option selected>Select budget</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select class="custom-select">
                            <option selected>Set priority</option>
                            <option value="1">Low</option>
                            <option value="2">Medium</option>
                            <option value="3">High</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Description">
                    </div>

                </div>
                <button type="submit" class="btn budget-save text-center bgBlue">Add</button>
            </form>

            <div class="pushLeft">
                <p><span class="cBlue">Budget Title :</span> Grandma's Birthday</p>

                <p><span class="cBlue">Amount Allocated :</span> 400,000.00</p>
            </div>

            <table>

                <thead>
                    <tr>
                        <th scope="col">S/n</th>
                        <th scope="col">Item</th>
                        <th scope="col">Description</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cake</td>
                        <td>3 tier cake</td>
                        <td>High</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Drinks</td>
                        <td>Non-Alcohol / Alcoholic</td>
                        <td>High</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Transportation</td>
                        <td>To and fro</td>
                        <td>Medium</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hotel</td>
                        <td>Radisson blue hotel</td>
                        <td>Low</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Food</td>
                        <td>Rainbow catering services</td>
                        <td>Medium</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                    </tr>
                </tbody>
            </table>

            <div style="height: 100px"></div>

        </section>




    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="dashboardNew.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/extensions/mobile/bootstrap-table-mobile.min.js">
    </script>

</body>

</html>