<div>
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
                <h2>Notre <em>Boutique</em></h2>
                <img src="./images/line-dec.png" alt="">
                <p>C'est ici que vous pouvez échanger vos <em style="color:#f6861a" >Points Boutique</em> en échange de lots sur le serveur (Grades, Cosmétiques...)</p>
                <p>
                    <label for="categorie-boutique">Catégorie : </label>
                    <select id="categorie-boutique" wire:model="categorySelected">
                        @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                    </select>
                </p>
            </div>
        </div>
    </div>
    <div class="row tabs" id="{{ $tabId }}">
        <div class="col-lg-4">
            <div class="main-rounded-button"><a href="#">Mon panier</a></div>
            <ul class="itemshop-list">
                @foreach($articles as $article)
                    <li><a href='#tabs-{{ $article->id }}'>{{ $article->title }}<img src="./images/features/server-icon.png" alt=""></a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-8">
            <section class='tabs-content'>
                @foreach($articles as $article)
                    <article id='tabs-{{ $article->id }}'>
                        <img src="/storage/{{ $article->image }}" alt="Image">
                        <h4>{{ $article->title }}</h4>
                        <p>{{ $article->description }}</p>
                        <div class="main-button">
                            <a href="#">Ajouter au panier</a>
                        </div>
                    </article>
                @endforeach
            </section>
        </div>
    </div>
</div>
