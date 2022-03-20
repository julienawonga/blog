<?php 

use geekscity\Database\Db;
use geekscity\Table\PostTable;

if(isset($_POST['submit'])){
     $pdo = Db::getInstance();
     $post = new PostTable($pdo);
     $post->CreatePost($_POST['title'], "mon grand", $_POST['myTextarea'], 8);


}

?>
<!-- MAIN -->
<div class="main">
     <!-- MAIN CONTENT -->
     <div class="main-content">
          <div class="container-fluid">
                    <form style="display: flex; flex-direction: column;" method="GET">
                         <!-- Text input -->
                         <div class="mb-5">
                              <label class="form-label" for="form6Example3" style="font-size: 2rem;">Titre</label>
                              <input type="text" id="form6Example3" class="form-control" style="width: 100%; height: 40px;" name="title"/>
                         </div>

                          <!-- Selection -->
                          <div class="mb-5">
                              <label class="form-label" for="form6Example4" style="font-size: 2rem;">Selection de la catégory</label></br>
                              <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 100%; height: 40px;">
                                   <option selected>Open this select menu</option>
                                   <option value="1">One</option>
                                   <option value="2">Two</option>
                                   <option value="3">Three</option>
                              </select>
                         </div>

                         <!-- Text input -->
                         <div class="mb-5">
                              <label class="form-label" for="form6Example4" style="font-size: 2rem;">Image brand</label>
                              <input type="file" id="form6Example4" class="form-control" />
                         </div>

                         <!-- Message input -->
                         <div class="mb-5">
                              <label class="form-label" for="form6Example7" style="font-size: 2rem;">Contenu</label>
                              <textarea class="form-control" name="myTextarea" id="myTextarea" rows="4"></textarea>
                         </div>

                         <!-- Submit button -->
                         <button type="submit" class="btn btn-primary btn-block my-5" style="width: 100px;">Publier</button>
               </form>
          </div>
     </div>
     <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->