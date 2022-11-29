<div class="articles-content">
    <div class="articles-content-image">
        <a href="{{ route('articles.show', [$categorie[$article->categorie_id - 1]->slug, $article->id])}}">
            <img src="{{$article->image}}" alt="">
        </a>
    </div>
    <div class="articles-content-infos">
        <h4>{{$article->title}}</h4>
        <div class="articles-content-infos-more">
            <span>Par : <a href="">{{$article->user->name}}</a></span>
            <span>{{ \Carbon\Carbon::parse($article->when)->toFormattedDateString() }}</span>
        </div>
    </div>
</div>