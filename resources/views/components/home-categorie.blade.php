<div class="home-articles-content">
    <div class="home-articles-content-image">
        <a href="{{ route('articles.show', [$article->categorie->slug, $article->id])}}">
            <img src="{{$article->image}}" alt="">
        </a>
    </div>
    <div class="home-articles-content-infos">
        <h4>{{$article->title}}</h4>
        <div class="home-articles-content-infos-more">
            <span>Par : <a href="{{ route('articles.writer', $article->user->id)}}">{{$article->user->name}}</a></span>
            <span>{{ \Carbon\Carbon::parse($article->when)->toFormattedDateString() }}</span>
        </div>
    </div>
</div>