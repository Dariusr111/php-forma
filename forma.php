<!--Pasiekiame pasileidus Apache, per http://localhost/php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studento registracija</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Studento registracija</h1>
                    </div>
                    <div class="card-body">
                        <!-- FORMOS pradžia -->
                        <form action="forma-out.php" method="post">
                            <!-- Siunčiam formą į forma-out.php -->
                            <!-- Vardas, pavardė -->
                            <div class="row">
                                <div class="mb-3 col-md-8">
                                    <label for="" class="form-label">Vardas:</label>
                                    <input type="text" name="name" value="" class="form-control" placeholder="Vardas">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-8">
                                    <label for="" class="form-label">Pavardė:</label>
                                    <input type="text" name="surname" value="" class="form-control" placeholder="Pavardė">
                                </div>
                            </div>
                            <!--  Kokia lytis -->
                            <div>
                                <div>
                                    <h4>Lytis:</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="radio" id="man" name="gender" value="vyras">
                                        <label for="man" class="form-label ps-3">Vyras</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" id="woman" name="gender" value="moteris">
                                        <label for="woman" class="form-label ps-3">Moteris</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Transporto pasirinkimas -->
                            <div>
                                <div>
                                    <h4>Į paskaitas važinėsiu:</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
                                        <label for="vehicle1" class="form-label ps-2">Dviračiu</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
                                        <label for="vehicle2" class="form-label ps-2">Automobiliu</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Bus">
                                        <label for="vehicle3" class="form-label ps-2">Autobusu</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="vehicle4" name="vehicle[]" value="By foot">
                                        <label for="vehicle4" class="form-label ps-2">Eisiu pėsčias/-ia</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Iš kokio miesto -->
                            <div>
                                <div>
                                    <h4>Kokiame mieste studijuojate:</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <select id="town" name="towns" class="form-control mb-3">
                                            <option value="" disabled selected>Pasirinkite miestą</option>
                                            <option value="Vilnius">Vilnius</option>
                                            <option value="Kaunas">Kaunas</option>
                                            <option value="Klaipėda">Klaipėda</option>
                                            <option value="Šiauliai">Šiauliai</option>
                                            <option value="Panevėžys">Panevėžys</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Apršymas apie save -->
                            <div>
                                <div>
                                    <h4>Trumpai apie save:</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <textarea class="form-control mb-3" id="about" rows="5" name="about"
                                            placeholder="Apie save..."></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-success col-md-4 ms-2" name="submit1">Įrašyti</button>
                                </div>
                            </div>
                    </div>
                    </form>
                    <!-- FORMOS pabaiga -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>