<div class="row">
            <div class="col-12">
                <section class="content">
                <?php 
                if (isset($_GET["content"])) {
                    include("./" . $_GET["content"] . ".php");
                } else {
                    include("./home.php");
                }  
                ?>     
               </section>
            </div>
        </div>