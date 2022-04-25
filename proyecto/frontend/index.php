<?php
session_start();
if (!isset($_SESSION["token"]))
    header("Location: login.html");
if (!isset($_COOKIE["token"]))
    header("Location: login.html");
if ($_SESSION["token"] != $_COOKIE["token"])
    header("Location: login.html");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section>
        <div id="sidemenu" class="menu-collapsed">
            <!--Header-->
            <div id="header">
                <div id="title"><span>Menu</span></div>
                <div id="menu-btn">
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                </div>
            </div>
            <!--Profile-->
            <div id="profile">
                <div id="photo"><img src="../ico/profile.png" alt="" /></div>
                <div id="name"><span>Administrator</span></div>
            </div>

            <!--Items-->
            <div id="menu-items">
                <div class="item">
                    <a href="#">
                        <div class="icon">
                            <img class="img" src="../ico/concesionario.png" alt="" />
                        </div>
                        <div class="title">Location</div>
                    </a>
                </div>
                <div class="item separator"></div>
                <div class="item">
                    <a href="#">
                        <div class="icon">
                            <img class="img" src="../ico/objetivo.png" alt="" />
                        </div>
                        <div class="title">Clients</div>
                    </a>
                </div>
                <div class="item separator"></div>
                <div class="item">
                    <a href="#">
                        <div class="icon">
                            <img class="img" src="../ico/coche.png" alt="" />
                        </div>
                        <div class="title">Car Details</div>
                    </a>
                </div>
                <div class="item separator"></div>
                <div class="item">
                    <a href="#">
                        <div class="icon">
                            <img class="img" src="../ico/fabrica.png" alt="" />
                        </div>
                        <div class="title">Factories</div>
                    </a>
                </div>
                <div class="item separator"></div>
                <div class="item">
                    <a href="logout.php">
                        <div class="icon">
                            <img class="img" src="../ico/logout.png" alt="" />
                        </div>
                        <div class="title">Logout</div>
                    </a>
                </div>
                <div class="item separator"></div>
            </div>
        </div>
    </section>
    <!--Data-->
    <Section>
        <div class="container">
            <h1 class="title">
                Welcome to Data Administrator
            </h1>
            <div class="separator"></div>
        </div>
        <div class="container">
            <div class="row">
                <h2 style="text-align:center"></h2>
            </div>

            <div class="row">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    New Register
                </button>

                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">NEW REGISTER</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">


                                    <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
                                        <div class="form-group">
                                            <label for="nombre" class="col-sm-2 control-label">Model</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="model" name="model" placeholder="Model" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="description" name="description" placeholder="Description" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="telefono" class="col-sm-2 control-label">Price</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" id="Price" name="price" placeholder="Price">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="estado_civil" class="col-sm-2 control-label">Year</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="estado_civil" name="estado_civil">
                                                    <option>1990</option>
                                                    <option>1991</option>
                                                    <option>1992</option>
                                                    <option>1993</option>
                                                    <option>1994</option>
                                                    <option>1995</option>
                                                    <option>1996</option>
                                                    <option>1997</option>
                                                    <option>1998</option>
                                                    <option>1999</option>
                                                    <option>2000</option>
                                                    <option>2001</option>
                                                    <option>2002</option>
                                                    <option>2003</option>
                                                    <option>2004</option>
                                                    <option>2005</option>
                                                    <option>2006</option>
                                                    <option>2007</option>
                                                    <option>2008</option>
                                                    <option>2009</option>
                                                    <option>2010</option>
                                                    <option>2011</option>
                                                    <option>2012</option>
                                                    <option>2013</option>
                                                    <option>2014</option>
                                                    <option>2015</option>
                                                    <option>2016</option>
                                                </select>
                                            </div>
                                        </div>




                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <br>

                <!<div class="row table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Model</th>
                                <th>Description</th>
                                <th>Year</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!--Slects-->
                            <?php $conn = oci_connect('admin', '12345678', ' (DESCRIPTION =
                                        (ADDRESS = (PROTOCOL = TCP)(HOST = db-oracle.cnio7e9lkqub.us-east-1.rds.amazonaws.com)(PORT = 1521))
                                        (CONNECT_DATA =
                                        (SERVER = DEDICATED)
                                        (SERVICE_NAME = dboracle)     
                                            )
                                            )');
                            if (!$conn) {
                                $e = oci_error();
                                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                            }
                            $delete='<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>';

                            $stid = oci_parse($conn, 'SELECT CARRO_NOMBRE.IDCARRO, CARRO_NOMBRE.MODELO, CARRO_NOMBRE.DESCRIP,CARRO_DETALLES.YEAR, CARRO_DETALLES.PRECIO FROM CARRO_NOMBRE  inner join CARRO_DETALLES on CARRO_NOMBRE.IDCARRO = CARRO_DETALLES.ID');
                            oci_execute($stid);
                            while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                                echo "<tr>\n";
                                    foreach ($row as $item) {
                                    echo "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n"; 
                                    "</tr>";
                                    
                                }
                            
                                echo "</tr>\n";
                            }

                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
        <div>



        </div>



    </Section>



    <script>
        const btn = document.querySelector("#menu-btn");
        const menu = document.querySelector("#sidemenu");
        btn.addEventListener("click", (e) => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle("body-expanded");
        });
    </script>

    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>