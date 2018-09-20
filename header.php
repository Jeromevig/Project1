    <!-- NAVBAR -->
    <header>
        <div class="container">
            <!-- La barre est crée avec navbar. Le point de rupture (mode mobile) est définit par navbar-expand-* . Remplacer * par sm, md, lg ou xl. -->
            <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
                <!-- Afficher le logo ou la marque avec navbar-brand. -->
                <a class="navbar-brand" href="">Adopt1Wilder</a>
                <!-- Placer ensuite le bouton navbar-toggler et son icône barre navbar-toggler-icon pour le mode mobile. -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Intégrer ensuite les liens de navigations dans un bloc navbar-collapse . -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <!-- Auto-margins :  default (pas de marge automatique), éléments à droite (.mr-auto) et éléments à gauche (.ml-auto) -->
                    <ul class="navbar-nav  mr-auto">
                        <!-- Possibilité d'ajouter la classe active sur une balise <li> -->
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Presentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="students_page.php">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="trainers_page.php">Trainers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="euratech_page.php">EuraTechnologies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form_page.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>