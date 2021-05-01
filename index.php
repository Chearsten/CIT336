<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>Acme Home Page</title>
            <style>
            @import url('https://fonts.googleapis.com/css?family=Kalam');
            </style>
            <link rel="stylesheet" href="/acme/css/main.css">
            <meta name="viewport" content="width=device-width">        
    </head>
    
    <body>
        <div class="wrapper"> 
        <header>
           <?php include $_SERVER['DOCUMENT_ROOT'].'/acme/common/header.php'; ?>
        
        </header>
    
        <main>	
            <h1>Welcome to Acme!</h1>
            
            <section id="banner">
            <img src="/acme/images/site/rocketfeature.jpg" alt="coyote on rocket">
                
            <ul>
                <li><h2>Acme Rocket</h2></li>                                                       
                <li>Quick lighting fuse</li>
                <li>NHTSA approved seat belts</li>
                <li>Mobile launch stand included</li>
                <li><a href="#"><img id="bannerbtn" alt="I want it now" src="/acme/images/site/iwantit.gif"></a></li>
            </ul>
            </section>    
            
            <aside>
                <h3>Featured Recipes</h3>
                <table>
                    <tbody>
                        <tr>
                            <td><img src="/acme/images/recipes/bbqsand.jpg" alt="BBQ sandwich picture"></td>
                            <td><img src="/acme/images/recipes/potpie.jpg" alt="Pot Pie picture"></td>
                        </tr>
                        <tr>
                            <td><a href="#" >Pulled Roadrunner BBQ</a></td>
                            <td><a href="#" >Roadrunner Pot Pie</a></td>
                        </tr>
                        <tr>
                            <td><img src="/acme/images/recipes/soup.jpg" alt="Soup picture"></td>
                            <td><img src="/acme/images/recipes/taco.jpg" alt="Taco picture"></td>
                        </tr>
                        <tr>
                            <td><a href="#" >Roadrunner Soup</a></td>
                            <td><a href="#" >Roadrunner Tacos</a></td>
                        </tr>
                    </tbody>
                </table>
            </aside>
            
            <section>
            <h3>Acme Rocket Reviews</h3>
            <ul>
                <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                <li>"That thing was fast! (4/5)</li>
                <li>Talk about fast delivery." (5/5)</li>
                <li>"I didn't ever have to pull the meat apart." (4.5/5)</li>
                <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
            </ul>
            </section>
        </main>
	
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/acme/common/footer.php'; ?>
            <p>Last Updated: <?php echo date('j F, Y', getlastmod()) ?></p>
        </footer>
        </div> <!-- .wrapper -->
   
    </body>
</html>

