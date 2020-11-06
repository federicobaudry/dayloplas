<?php
    include("conex.php");
    $query="SELECT * FROM `curso`";
    $arl=mysqli_query($conexion,$query);
    echo'<hr class="featurette-divider">';
    while($i = mysqli_fetch_array($arl)):
        if($i[6] == "si"):
            echo"
                <div class='row featurette'>
                    <div class='col-md-7'>
                        <center><h2 class='featurette-heading'>".$i[1]."</h2></center>
                        <p class='lead'>".$i[5]."</p>
                    </div>
                    <div class='col-md-5'>
                        <img src='img/".$i[7]."' class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='500' height='500'></img>
                        <div></br></div>
                        <button class='btn btn-outline-success col-md-12 btn-lg cons'>consultar</button>
                    </div>
                </div>
                <hr class='featurette-divider'>
            ";
        elseif($i[6] == "no"):
            echo"
                <div class='row featurette'>
                    <div class='col-md-7'>
                        <center><h2 class='featurette-heading text-black-50'>".$i[1]."</h2></center>
                        <p class='lead text-secondary'>".$i[5]."</p>
                    </div>
                    <div class='col-md-5'>
                        <img src='img/".$i[7]."' class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='500' height='500' style='opacity: 50%;'></img>
                        <div></br></div>
                        <button class='btn btn-outline-secondary col-md-12 btn-lg' disabled>Cupo completo</button>
                    </div>
                </div>
                <hr class='featurette-divider'>
            ";
        endif;
    endwhile;
?>