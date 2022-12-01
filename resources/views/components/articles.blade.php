<div class="article">
    <img src="{{$article->image}}" alt="">
    <h4>{{$article->title}}</h4>
    <p>{{$article->content}}</p>
    <span>Par : <a href="{{ route('articles.writer', $article->user->id)}}">{{$article->user->name}}</a></span>
    <br>
    <h6>Publié le {{ \Carbon\Carbon::parse($article->created_at)->locale('fr_FR')->isoFormat('LL') }} à {{ \Carbon\Carbon::parse($article->created_at)->locale('fr_FR')->format('H:i') }} , mise à jour à {{ \Carbon\Carbon::parse($article->updated_at)->locale('fr_FR')->format('H:i') }}</h6>
    <span><i class="fa-solid fa-stopwatch"></i> Lecture </span>
</div>