<?php
function getDateDelay($optionText, $maximumInterval = 0, $startAt = 1): string {
    $options = '';
    for ($i = $startAt; $i <= $maximumInterval; $i++) {
        $options .= "
            <option>
                $optionText: $i
            </option>
        ";
    }
    return $options;
};
?>

<hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  id="day">
           // TODO list of day
           <?= getDateDelay('Jours', 31) ?>
       </select>

       <label for="month">Month</label>
       <select  id="month">
           // TODO list of month
           <?= getDateDelay('Mois', 12) ?>
       </select>

         <label for="year">Year</label>
       <select  id="year">
           // TODO list of year 2018, 2019, 2020 --> Bonus : faites le avec une vraie date en PHP, renseignez vous sur la doc
           <?= getDateDelay('Année', 2022, 1990) ?>
       </select>
     </form>
  </body>
</html>