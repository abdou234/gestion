<div id="name">
      <h2 class="name">Prenom</h2>
      <p><input class="prenom" type="text" name="prenom"></p>
      <h2 class="names">Nom</h2>
      <p><input class="nom" type="text" name="nom"></p>
    </div>
      <h2 class="name">Date de Naissance</h2>
      <p><input class="naissance" type="Date" name="naissance"></p>
      <h2 class="name">Adresse</h2>
      <p><input class="adresse" type="text" name="adresse"></p>
      <h2 class="name">Telephone</h2>
      <p><input class="indi" type="number" name="indi" value="221"></p>
      <p><input class="phone" type="number" name="telephone"></p>
      <h2 class="name">Service</h2>
      <select class="option" name="depar">
        <option disabled="disabled" selected="selected"> Choisissez un service</option>
        <option>cardiologie</option>
        <option>neurologie</option>
        <option>pediatrie</option>
        <option>immunologie</option>
        <option>radiologie</option>
        <option>chirurgie</option>
        <option>pneumologie</option>
        <option>odontologie</option>
        
      </select>
 <h2 class="name">Horaire de rendez vous</h2>
      <p><input class="jour" type="Datetime-local" name="horaire"></p>

      <h2 class="name"></h2>
      <p><input class="boutton" type="submit" name="insert" value="Enregistrer"></p>
</div>
</form>
                                   </div>

                            </div>

                             </div>
                     <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form  action="connexion.php" method="post">
                       
                                <h3  class="register-heading">S'authentifier</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"name="login" placeholder="Username" value="" />
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control"name="password" placeholder="Password" value="" />
                                        </div>
                                       

                                        <input type="submit" class="btnRegister" name="insert" value="Register"/>
                                    </div>

             
                                </div>
                                  
                                
                                <h3 class="dd"> <?php
                               if (isset($_GET['msg'])) {
                                echo htmlspecialchars($_GET['msg']);
                               }
                               ?>
                               </h3> 
                               
                            </form>
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>


            </body>
</html>