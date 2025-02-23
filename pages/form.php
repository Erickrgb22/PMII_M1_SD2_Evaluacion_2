<!DOCTYPE html>
<html>
<?php
include '../templates/head.php';
?>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Genial! Rellena el Formulario</h1>
                <input class="form-control" type="date" id="dateInput" />
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.getElementById("dateInput").addEventListener("change", function() {
                var input = this.value;
                var dateEntered = new Date(input);
                console.log(input); //e.g. 2015-11-13
                console.log(dateEntered); //e.g. Fri Nov 13 2015 00:00:00 GMT+0000 (GMT Standard Time)
            });
        </script>
</body>

</html>