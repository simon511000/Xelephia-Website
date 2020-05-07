<ul class="nav nav-animate">
    <li class="scroll-to-section"><a href="#top" class="active">Jouer</a></li>
    <li class="scroll-to-section"><a href="#presentation">Presentation</a></li>
    <li class="scroll-to-section"><a href="#boutique">Boutique</a></li>
    <li class="scroll-to-section"><a href="#wiki">Wiki</a></li>
    <li class="scroll-to-section"><a href="https://discord.gg/TfWGYXx" target="_blank">Discord</a></li>
    @if(!$connected)
        <li class="scroll-to-section cursor-pointer"><a data-toggle="modal" data-target="#connexionModal">Connexion</a></li>
        <li class="main-button"><a href="#" data-toggle="modal" data-target="#inscriptionModal">Inscription</a></li>
    @else
        <li class="main-button"><a>{{ $user->name }}</a></li>
    @endif
</ul>