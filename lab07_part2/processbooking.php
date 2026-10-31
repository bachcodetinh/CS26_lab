<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php     
    // Name
    if (isset($_POST["firstname"]))
    {
        $firstname = $_POST["firstname"];
    }
    else
    {
        $firstname = "";
    }
        

    if (isset($_POST["lastname"]))
    {
        $lastname = $_POST["lastname"];
    }
    else
        $lastname = "";

    echo "<p>Welcome $firstname $lastname.</p>";
    // Age
    if (isset($_POST["age"])) 
    {
        $age = $_POST["age"];
        echo "<p>Age: $age.</p>";
    }
    else 
        $age = "";
    
    // Species
    if (isset($_POST["species"]))
    {
        $species = $_POST["species"];
        switch ($species) 
        {
            case "M":
                $species_name = "Human";
                break;
            case "D":
                $species_name = "Dwarf";
                break;
            case "E":
                $species_name = "Elf";
                break;
            case "H":
                $species_name = "Hobbit";
                break;
        }
        echo "<p>Species: $species_name.</p>";
    } 
    else
        $species = "";
    
    // Booking
    if (isset($_POST["day"]))
    {
        $booking = array();
        for ($i = 0; $i < count($_POST["day"]); $i++)
        {
            $booking[] = $_POST["day"][$i];
        }
        $booking_text = implode(" and ", $booking);
        echo "<p>Your booking is $booking_text.</p>";
    }
    else
    {
        $booking = array();
        echo "<p>No booking selected.</p>";
    }

    // Species
    if (isset($_POST["food"]))
    {
        $meal = $_POST["food"];
        switch ($species) 
        {
            case "none":
                $meal = "None";
                break;
            case "lembas":
                $meal = "Lembas";
                break;
            case "mushrooms":
                $meal = "Mushrooms";
                break;
            case "ent":
                $meal = "Ent Draft";
                break;
            case "ent":
                $meal = "Ent Draft";
                break;
        }
        echo "<p>Meal preference: $meal.</p>";
    } 
    else
        $meal = "";

    // Date
    if (isset($_POST["bookday"])) 
    {
        $date = $_POST["bookday"];
        echo "<p>Your booking day is $date.</p>";
    }
    else 
        $date = "";

    // Number of travellers
    if (isset($_POST["partysize"])) 
    {
        $size = $_POST["partysize"];
        echo "<p>Number of traveller: $size.</p>";
    }
    else 
        $size = "";
?>
</body>
</html>