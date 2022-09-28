<?php require 'header.php'; ?>
<?php require 'auth.php'; ?>
<?php
utulisateur_connecte();
?>
<body class="bg-light">
<div class="container">
    <div>

        <?php if (est_connecte()): ?>
            <nav class="nav"> <a href="logout.php">
                 <button class="w-100 btn btn-primary btn-lg" type="submit">Deconneter</button>
                </a> </nav>
       <?php endif ?>
    </div>
    <main>
        <div class="py-5 text-center">

            <h2> Bienvenue sur le site de test epitech </h2>

        </div>

        <div class="row g-5">

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Interface bibliothèque pour jouter une carte</span>
                    </h4>
                    <form class="card p-2">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label"> Name </label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>


                        <label for="CompanyName" class="form-label"> Company name <span class="text-muted">(Optional)</span> </label>
                        <input type="text" class="form-control" id="CompanyName" placeholder="" value="">
                        <div class="invalid-feedback">
                            Valid Company  name is Optional.
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label"> Email address <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="Telephonenumber" class="form-label"> Telephone number </label>
                            <input type="tel" class="form-control" id="Telephonenumber" placeholder="0601020304" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Ajouter</button>
                    </form>
                </div>

            <div class="col-md-7 col-lg-8">

                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="Name" class="form-label"> Name </label>
                            <input type="text" class="form-control" id="Name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-7">
                            <label for="CompanyName" class="form-label"> Company name <span class="text-muted">(Optional)</span> </label>
                            <input type="text" class="form-control" id="CompanyName" placeholder="" value="">
                            <div class="invalid-feedback">
                                Valid Company  name is Optional.
                            </div>

                        <div class="col-12">
                            <label for="email" class="form-label"> Email address <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="Telephonenumber" class="form-label"> Telephone number </label>
                            <input type="tel" class="form-control" id="Telephonenumber" placeholder="0601020304" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Enregistrer</button>
                </form>
            </div>
        </div>


    </main>


</div>


</body>
</html>

<?php require 'footer.php'; ?>