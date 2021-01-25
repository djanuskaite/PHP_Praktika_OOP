<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
    <?php

    use Vehicles\Car;

    $vehicle1 = new Car('Subaru', 'Forester', "All wheel (4х4)", 2017);
    $vehicle1->addOtherVehicleData(28453, 3700, "yes",
        137, 5, 'The 2017 Subaru Forester was built in Gunma, Japan.');
    $vehicle2 = new Car('Chevrolet', 'Impala', "Front wheel drive", 1967);
    $vehicle2->addOtherVehicleData(21500, 3500, "yes",
        130, 5, 'The Chevrolet Impala are full-size automobiles produced by Chevrolet for the 1965 through 1970 model years.');
    $vehicle3 = new Car('Nissan', 'Almera Tino', "Rear wheel drive (RWD)", 2004);
    $vehicle3->addOtherVehicleData(1750, 1520, "yes",
        108, 5, 'Tino was a mildly successful 5-door MPV Nissan made between 2000 - 2006.');

    ?>
    <h2 class="row d-flex justify-content-center bg-info text-dark">Cars</h2>
    <table class='table table-bordered text-center table-hover table-responsive'>
        <thead>
        <tr class='table-info'>
            <th>Make</th>
            <th>Model</th>
            <th>Driven wheels</th>
            <th>Year</th>
            <th>Price ($)</th>
            <th>Weight (lbs)</th>
            <th>Is engine</th>
            <th>Max speed (mph)</th>
            <th>Seats</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($vehicle1->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($vehicle2->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($vehicle3->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
    <?php
    use Vehicles\Motorcycle;

    $motorcycle1 = new Motorcycle('Harley Davidson', 'FXLR', "Cruiser", 2020);
    $motorcycle1->addOtherVehicleData(17999, 672, "yes",
        120, 1, 'Classic Americana meets cutting-edge performance.');
    $motorcycle2 = new Motorcycle('BMW','R NineT Pure', 'Choppers', 2021);
    $motorcycle2->addOtherVehicleData(9995, 483, "yes", 125, 1,
        "The R nineT Pure is a classic looking roadster with a less-is-more attitude.");
    $motorcycle3 = new Motorcycle('Kawasaki','Ninja', 'Cruiser', 2020);
    $motorcycle3->addOtherVehicleData(25000, 577 , "yes", 185, 1,
        "The 2020 Kawasaki H2 SX SE and the H2 SX SE+ are upscale supersport and sport touring motorcycles.");
    ?>

    <h2 class="row d-flex justify-content-center bg-success text-white">Motorcycles</h2>
    <table class='table table-bordered text-center table-hover table-responsive'>
        <thead>
        <tr class='table-success'>
            <th>Make</th>
            <th>Model</th>
            <th>Motorcycle type</th>
            <th>Year</th>
            <th>Price (4)</th>
            <th>Weight (lbs)</th>
            <th>Is engine</th>
            <th>Max speed (mph)</th>
            <th>Seats</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($motorcycle1->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($motorcycle2->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($motorcycle3->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
    <?php
    use Vehicles\Bicycle;

    $bicycle1 = new Bicycle('Basso', "Volta", 7);
    $bicycle1->addOtherVehicleData(5260, 5, "no",
        35, 1, 'The Volta brings the capability to enjoy a perfected ride not only anywhere but to anyone, 
        adding watts and volts making every ride as fun as the first one.');
    $bicycle2 = new Bicycle('Canyon', "CFR", 7);
    $bicycle2->addOtherVehicleData(1099, 4, "no",
    12, 1, 'Simply the Best.');
    $bicycle3 = new Bicycle('Bianchi', "XR4", 7);
    $bicycle3->addOtherVehicleData(8520, 7, "no",
        22, 1, 'THE OLTRE XR4 IS A BIKE DRIVEN TO PERFORM..'); ?>

    <h2 class="row d-flex justify-content-center bg-danger text-dark">Bicycles</h2>
    <table class='table table-bordered text-center table-hover mb-5 table-responsive'>
        <thead>
        <tr class='table-danger'>
            <th>Make</th>
            <th>Model</th>
            <th>Number Of Gears</th>
            <th>Price ($)</th>
            <th>Weight (lbs)</th>
            <th>Is engine</th>
            <th>Max speed (mph)</th>
            <th>Seats</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($bicycle1->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($bicycle2->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($bicycle3->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        </tbody>
    </table>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>