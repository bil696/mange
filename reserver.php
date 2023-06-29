
<?php //include 'config.php'; ?>

<?php

//if(isset($message)){
   //foreach($message as $message){
      //echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
  // };
//};

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        
        <section class = "banner">
                    <h3>Réservation</h3>

                    <form action="code.php" method="POST">
                                 
                         <div class = "form-row md-col-12" >
                            <select name = "table">
                                <option value = "Table-select">Choisir une table</option>
                                <option value = "T1">T1</option>
                                <option value = "T2">T2</option>
                                <option value = "T3">T3</option>
                                <option value = "G22">G22</option>
                                <option value = "G23">G23</option>
                                <option value = "Prestige1">VIP1</option>
                                <option value = "Prestige2">VIP2</option>
                                <option value = "Date1">Date1</option>
                                <option value = "Date2">Date2</option>
                                <option value = "Family">Family</option>
                            </select>
                             
                               <select name = "jour">
                                    <option value = "day-select">jour</option>
                                    <option value = "Lundi">Lundi</option>
                                    <option value = "Mardi">Mardi</option>
                                    <option value = "Mercredi">Mercredi</option>
                                    <option value = "Jeudi">Jeudi</option>
                                    <option value = "Vendredi">Vendredi</option>
                                    <option value = "Samedi">Samedi</option>
                                    <option value = "Dimanche">Dimanche</option>
                            </select>
                            </div>

                            <div class = "form-row">
                                <input type = "text" name="Nom" placeholder="Nom complète">
                                <input type = "tel" name="tel" placeholder="Numero de téléphone">
                            
                            </div>
        
                            <div class = "form-row">
                                <input type = "number" name="n_person" placeholder="Nombre de personne?" min = "2" max="8">
                                <input type=  "time"   name="hour" placeholder="Choisir une heure">
                            </div>
                            <div class = "form-row">
                                 <input type = "submit" name="reserver"  value = "Reserver">
                            </div>  
                            </form>
                            <section id="reservation">
    </form>
  </section>
  <footer>
    <p class="footer_text">Réalisé par <span>Keycegroup</span> | Tous les droits sont réservés.</p>
</footer>
                 
                </div>
                
   </div>   


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    </body>
</html>
