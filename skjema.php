<?php
/**
 * Created by PhpStorm.
 * User: Magnus
 * Date: 26.07.2016
 * Time: 19.08
 */

?>
<head>
    <title> Registering - Gullbring Lan </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
    <main>
        <h1 style="text-align: center">REGISTRERING</h1>

        <section>           <!-- Registrering -->
            <form method="post" action="doreg.php">
                <h2>Standard informasjon:</h2>
                <p>NB! Alle felter må fylles ut.</p>
                <div>
                    <div>
                        <div>
                            <label>Fornavn:</label>
                            <input type="text" placeholder="Ola" name="fornavn" REQUIRED>
                        </div>
                        <div>
                            <label>Etternavn:</label>
                            <input type="text" placeholder="Nordmann" name="etternavn" REQUIRED>
                        </div>
                        <div>
                            <label>E-Post</label>
                            <input type="email" placeholder="ola@Nordmann.no" name="epost">
                        </div>
                        <div>
                            <label>Telefon</label>
                            <input type="text" placeholder="41292129" name="tlf">
                        </div>
                        <div>
                            <label>alder</label>
                            <input type="text" placeholder="15" name="tlf">
                        </div>


                    </div>

                </div>


                <br><br>
                <h2>Brukernavn på forskjellige tjenester:</h2>
                <p>NB! La feltet være blankt om du ikke har konto.</p>
                <div>
                    <div>
                        <div>
                            <label>Steam: </label>
                            <input type="text" name="steam">
                        </div>
                        <div>
                            <label>Origin: </label>
                            <input type="text" name="origin">
                        </div>
                        <div>
                            <label>Battle.net: </label>
                            <input type="text" name="bnet">
                        </div>
                        <div>
                            <label>League of Legends: </label>
                            <input type="text" name="lol">
                        </div>
                    </div>
                </div>


                <br><br>
                <h2>Turneringer</h2>
                <div>
                    <div>
                        <h3>Counter Strike: Global Offensive</h3>
                        Jeg vil delta i turnering:
                        <input type="checkbox" name="CS"><br>
                        Min rank:
                        <select name="CSrank">
                            <option value="Global Elite">Global Elite</option>
                            <option value="Supreme Master First Class">Supreme Master First Class</option>
                            <option value="Legendary Eagle Master">Legendary Eagle Master</option>
                            <option value="Legendary Eagle">Legendary Eagle</option>
                            <option value="Distinguished Master Guardian">Distinguished Master Guardian</option>
                            <option value="Master Guardian Elite">Master Guardian Elite</option>
                            <option value="Master Guardian 2">Master Guardian 2</option>
                            <option value="Master Guardian 1">Master Guardian 1</option>
                            <option value="Gold Nova Master">Gold Nova Master</option>
                            <option value="Gold Nova III">Gold Nova III</option>
                            <option value="Gold Nova II">Gold Nova II</option>
                            <option value="Gold Nova I">Gold Nova I</option>
                            <option value="Silver eller lavere">Silver eller lavere</option>
                            <option value="Ny til spillet">Ny til spillet</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <h3>League of Legends</h3>
                        Jeg vil delta i turnering: <input type="checkbox" name="LOL"><br>
                        Min rank:
                        <select name="LOLrank">
                            <option value="Challenger">Challenger</option>
                            <option value="Diamond">Diamond</option>
                            <option value="Platinum">Platinum</option>
                            <option value="Gold">Gold</option>
                            <option value="Silver">Silver</option>
                            <option value="Bronze">Bronze</option>
                            <option value="Ny til spillet">Ny til spillet</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <h3>Rocket League</h3>
                        Jeg vil delta i turnering: <input type="checkbox" name="rocket"><br>
                        Min rank:
                        <select name="rocketrank">
                            <option value="Champion">Champion</option>
                            <option value="Star">Star</option>
                            <option value="Challenger">Challenger</option>
                            <option value="Prospect">Prospect</option>
                            <option value="Ny til spillet">Ny til spillet</option>
                        </select>
                    </div>
                </div>
                <br>

                <div>
                    <div>
                        <h2>Ønskeliste:</h2>
                        <p>Hvis det er noen spill du ønsker turnering i som ikke er på listen, vennligst skriv inn ønske her:
                        </p>
                        <div>
                            <label>Ønske1:</label>
                            <input type="text" placeholder="Minecraft PvP" name="onske1">
                        </div>
                        <div>
                            <label>Ønske 2:</label>
                            <input type="text" placeholder="Call of Duty 4" name="onske2">
                        </div>
                        <div>
                            <label>Ønske 3:</label>
                            <input type="text" placeholder="Overwatch" name="onske3">
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" style="position: relative; right: 0;">REGISTRER</button>
                </div>
                <input type="hidden" name="landato" value="2016-12-28">
            </form>



        </section>
    </main>
</body>