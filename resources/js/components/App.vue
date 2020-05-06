<template>
    

    <div>
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo logo-animate"><img src="../../images/logo-rectangle.png"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav nav-animate">
                            <li class="scroll-to-section"><a href="#top" class="active menu-scroll">Jouer</a></li>
                            <li class="scroll-to-section"><a href="#presentation" class="menu-scroll">Presentation</a></li>
                            <li class="scroll-to-section"><a href="#boutique" class="menu-scroll">Boutique</a></li>
                            <li class="scroll-to-section"><a href="#wiki" class="menu-scroll">Wiki</a></li>
                            <li class=""><a href="https://discord.gg/TfWGYXx" target="_blank">Discord</a></li>
                            <li class="cursorpointer"><a data-toggle="modal" data-target="#connexionModal">Connexion</a></li>
                            <li class="main-button"><a data-toggle="modal" data-target="#inscriptionModal">Inscription</a></li>
                        </ul>
                        <a class='menu-trigger'>
                        <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->
        <!-- ***** Main Banner Area Start ***** -->
        <div class="main-banner" id="top">
            <div class="video-overlay header-text header-animate">
                <div class="caption">
                    <h2>Xelephia</h2>
                    <h6>Découvrez le PvP-Box <em id="reinvente-animate">réinventé</em> !</h6>
                    <div class="main-button scroll-to-section play-animate">
                    <a href="#presentation" id="jouer" data-clipboard-text="play.xelephia.fr">Rejoignez-nous !</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Main Banner Area End ***** -->
        <!-- ***** Page Présentation Start ***** -->
        <section class="section" id="presentation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow zoomIn">
                        <h2>IP : <em>play.xelephia.fr</em></h2>
                        <img src="../../images/line-dec.png" alt="waves">
                        <p>Xelephia est un serveur Minecraft PvP/Box revisitant son mode de jeu en proposant des systèmes inédits tel que l'amélioration progressive de votre stuff grâce au différents ajouts : zone de loot, airdrop, kit évolutif, et plein d'autre inovations à venir...</p>
                    </div>
                    </div>
                    <div class="col-lg-6 wow">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="../../images/features/compas.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Une map</h4>
                                <p>Notre map inédite saura vous faire rester ! Avec ses nombreuses zones aménagées, son spawn aérien et bien plus encore, découvrez-la en venant sur Xéléphia.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="../../images/features/single-player.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>À votre écoute</h4>
                                <p>Que ce soit en jeu ou sur notre Discord, l'équipe de Xéléphia sera toujours ouverte à toute les suggestions, questions et remarques de ses joueurs.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="../../images/features/evolve.png" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Evolution constante</h4>
                                <p>Le serveur est régulièrement mis à jour, et évolue avec tous les retours de notre communauté en ajoutant les fonctionnalités les plus demandées par les joueurs.</p>
                            </div>
                        </li>
                    </ul>
                    </div>
                    <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="../../images/features/server-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Des fonctionnalités</h4>
                                <p>Vous voulez des fonctionnalités ? On propose des kits inédits, un système de capture de zones pour obtenir des loots et encore d'autres choses à découvrir sur le serveur !</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="../../images/features/comunauty.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Une communauté</h4>
                                <p>Venez découvrir notre map inédite, et ses différentes zones aménagées tel que : la Grotte, le Tigre, le Village et plein d'autres encore...</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="../../images/features/bukkit.png" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Plugin personalisé</h4>
                                <p>Chez nous, on ne fait pas comme les autres ! Toutes les fonctionnalités disponibles en jeu sont créées par nos développeurs exclusivement pour vous.</p>
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Page Présentation End ***** -->
        <!-- ***** Page DON Start ***** -->
        <section class="section" id="donation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Envie de soutenir <em>Xelephia</em> ?</h2>
                        <p>Vous pouvez soutenir <em>Xelephia</em>, par un don en échange de <em>POINTS BOUTIQUE</em> dépensable dans notre boutique.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Faire un DON</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Page DON End ***** -->
        <!-- ***** Notre Boutique Start ***** -->
        <section class="section" id="boutique">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Notre <em>Boutique</em></h2>
                        <img src="../../images/line-dec.png" alt="">
                        <p>C'est ici que vous pouvez échanger vos <em style="color:#f6861a" >Points Boutique</em> en échange de lots sur le serveur (Grades, Cosmétiques...)</p>
                    </div>
                    </div>
                </div>
                <div class="row" id="tabs">
                    <div class="col-lg-4">
                    <div class="main-rounded-button"><a href="#">Mon panier</a></div>
                    <ul class="itemshop-list">
                        <li><a href='#tabs-1'>Article N°1<img src="../../images/features/server-icon.png" alt=""></a></li>
                        <li><a href='#tabs-2'>Article N°2<img src="../../images/features/server-icon.png" alt=""></a></li>
                        <li><a href='#tabs-3'>Article N°3<img src="../../images/features/server-icon.png" alt=""></a></li>
                    </ul>
                    </div>
                    <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="https://via.placeholder.com/730x250" alt="Image">
                            <h4>Article N°1</h4>
                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                            <div class="main-button">
                                <a href="#">Ajouter au panier</a>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="https://via.placeholder.com/730x250" alt="Second Training">
                            <h4>Article N°2</h4>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <div class="main-button">
                                <a href="#">Ajouter au panier</a>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="https://via.placeholder.com/730x250" alt="Second Training">
                            <h4>Article N°3</h4>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <div class="main-button">
                                <a href="#">Ajouter au panier</a>
                            </div>
                        </article>
                    </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Notre Boutique End ***** -->
        <!-- ***** Notre Wiki Starts ***** -->
        <section class="section" id="wiki">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>wiki <em>xelephia</em></h2>
                        <img src="../../images/line-dec.png" alt="">
                        <p>Vous trouverez ici toutes les informations au sujet des systèmes du serveur : loots disponibles, zones de loot, kits spécifiques...</p>
                    </div>
                    </div>
                </div>
                <div class="row wiki-container">
                    <div class="col-lg-4">
                    <div class="wiki-item">
                        <div class="image-thumb">
                            <img src="https://via.placeholder.com/290x220" alt="">
                        </div>
                        <div class="down-content">
                            <span>Item catégorie</span>
                            <h4>Item name</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="wiki-item">
                        <div class="image-thumb">
                            <img src="https://via.placeholder.com/290x220" alt="">
                        </div>
                        <div class="down-content">
                            <span>Item catégorie</span>
                            <h4>Item name</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="wiki-item">
                        <div class="image-thumb">
                            <img src="https://via.placeholder.com/290x220" alt="">
                        </div>
                        <div class="down-content">
                            <span>Item catégorie</span>
                            <h4>Item name</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="wiki-item">
                        <div class="image-thumb">
                            <img src="https://via.placeholder.com/290x220" alt="">
                        </div>
                        <div class="down-content">
                            <span>Item catégorie</span>
                            <h4>Item name</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="wiki-item">
                        <div class="image-thumb">
                            <img src="https://via.placeholder.com/290x220" alt="">
                        </div>
                        <div class="down-content">
                            <span>Item catégorie</span>
                            <h4>Item name</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="wiki-item">
                        <div class="image-thumb">
                            <img src="https://via.placeholder.com/290x220" alt="">
                        </div>
                        <div class="down-content">
                            <span>Item catégorie</span>
                            <h4>Item name</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Notre Wiki Ends ***** -->
        <!-- ***** Footer Start ***** -->
        <footer class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <p>
                        Copyright &copy; 2020 Xelephia - CGU/CGV
                        <!--- Designé par <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a>-->
                        - Developpé par <a rel="nofollow" href="https://github.com/Octanne" class="tm-text-link" target="_parent">Octanne</a>
                        &amp; <a rel="nofollow" href="https://github.com/simon511000" class="tm-text-link" target="_parent">simon511000</a>
                    </p>
                    </div>
                </div>
            </div>
        </footer>
        <connexion-modaln />
        <inscription-modal />
    </div>
</template>
<script>
import ConnexionModal from './ConnexionModal';
import InscriptionModal from './InscriptionModal';
export default {
    components: {
        ConnexionModal,
        InscriptionModal
    }
}
</script>