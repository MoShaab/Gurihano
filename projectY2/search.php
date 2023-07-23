<?php
include("config.php");
include("classes/SiteResultsProvider.php");

if(isset($_GET["term"])){
    $term = $_GET["term"];
}
else{
    exit("Please enter a search term");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <link rel="stylesheet" href='assets/css/homepage.css'>
    <link rel="stylesheet" href="assets/css/data.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class = "wrapper">
        <div class = "header">
            <div class ="headerContent">
                <div class = "logoContainer">
                    <a href = "rent-search.php">
                    <img src="assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class = "searchContainer">
                  <form action="search.php" method = "GET">
                    <div class = "searchBarContainer">
                         <input class ="searchBox" type="text" name = "term" value = "<?php echo "$term"?>"> 
                        <button class = "searchButton">
                        <img src="assets/images/icons/search.png" alt="">
                        </button>
                    </div>
                       
                  </form>
                </div>
            </div>
           

        </div>
        
        <div class = "links">
                        <a style ="font-size:larger;margin-left: 20px; background-color: yellow; text-decoration:none;"href="http://localhost/RentalBrokerageProject/register/public/register">Register</a>
                        <a style ="font-size:larger;margin-left: 20px;background-color: yellow; text-decoration:none;"href="http://localhost/RentalBrokerageProject/register/public/login">Log in</a>

                        </div>
            
    </div>
    <div class = "container">
    <div class="row">
    <div class = "mainResultsSection col-md-3">
        
    
            <?php
             
                $resultsProvider = new SiteResultsProvider($db);
                $numResults = $resultsProvider-> getNumResults($term);
                echo "<p class = 'resultsCount'> $numResults results found</p>";
                echo $resultsProvider->getResultsHtml(1, 10, $term);
        
                ?>

        </div>
        
        
       
       
        
        
    </div>
    </div>
    
</body>
</html>