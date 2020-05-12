<section class="row">
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
    <div class="row tabs">
        <div class="col-lg-4">
            <div class="main-rounded-button"><a href="#">Mon panier ({{ Cart::count() }})</a></div>
            <ul class="itemshop-list">
                @foreach($articles as $article)
                    <li class="cursor-pointer @if($articleSelected->id === $article->id) ui-tabs-active ui-state-active @endif" wire:click="setArticleSelected({{ $article->id }})"><a>{{ $article->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-8">
            <div class='tabs-content'>
                <article>
                    <img src="/storage/{{ $articleSelected->image }}" alt="Image">
                    <p wire:click="test">{{ $articleSelected->description }}</p>
                    <div class="main-button">
                        <a
                            class="cursor-pointer"
                            wire:click="ajouterPanier({{ $articleSelected->id }})"
                        >
                            Ajouter au panier ({{ $articleSelected->getPrice() }})
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>