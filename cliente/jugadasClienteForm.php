<?php 
include('../backend/phpfunctions/jugadasFunctions.php');
?>
<div class=".container">

    <div class=".row">
        <div class="bheder">
            <h1 style="text-align:center; "> VENTA DE TICKET</h1>
        </div>

    </div>
    <form action="#" method="POST" class="form-grp">
        <div class=".row">

            <div class="papa">
                <div class="bebe">
                    <h2>Selecione Su Loteria</h2>
                    <select name="lotsSelect" id="lotsSelect" class="lotsSelect" place>
                        <option value="">Seleccione una Lotería</option>
                        <?php
                       
                        
                        foreach($todo_loteria as $lotsitem){
                            echo "<option value='strtolower($lotsitem)'>$lotsitem</option>";
                        }
        ?>

                       
                    </select>

                    <select name="SortSelect" id="SortSelect" class="lotsSelect" place>
                        <option selected="selected">Seleccione sorteo </option>
                        <?php

                        
                        
                        
                        foreach($todo_sorteo as $sorteitem){
                            echo "<option value='strtolower($sorteitem)'>$sorteitem</option>";
                        }
        ?>
                    </select>
                    </select>
                </div>





                <div class="bebe">
                    <div class="papa">


                    </div>


                    <div class="col">

                        <div class=".row">
                            <input type="text" class="bebecito" name="jugada1" placeholder="NUMERO A JUGAR""></input>
                        <input type=" text" class="bebecito" name="jugada2" placeholder="NUMERO A JUGAR""></input>
                        <input type=" text" class="bebecito" name="jugada3" placeholder="NUMERO A JUGAR""></input>
                    </div>
                 
                        <div class=" col">

                            <div class=".row">
                                <label for="monto">MONEDA: RD$</label>
                                <input type=" text" class="bebecito" name="monto" placeholder="MONTO""> </input>
                       
                            </div>
                            </div>
                    

                        <input type=" button" class="bebecitoButton" value="Jugar"> </input>
                                <input type=" button" class="bebecitoButton" value="Jugar en Todas"> </input>

                            </div>



                        </div>

                    </div>
                    <div class=" bebe" style="justify-content: flex-end">

                        <input type=" button" class="bebecitoButton" name="jugada2" value="IMPRIMIR JUGADA">
                    </div>


                    <div class=" bebe" style="justify-content: flex-end">
                        <h2 class="font-weight-bold " style=" padding-top: 55px; padding-left: 25px">INSERTAR TABLA ACA
                        </h2>

                    </div>

                </div>
            </div>
    </form>