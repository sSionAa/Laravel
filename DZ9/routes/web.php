<?php

use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Events\NewsHidden;
use App\Jobs\ClearCache;

Route::get('/', function () {
    return view('welcome');
});

Route::get('news/create-test', function () {

    $news = new News();
    ClearCache::dispatch();
    $news->title = 'Test news title';
    $news->body = 'Test news body';
    $news->slug = Str::slug($news->title);
    $news->save();
    return $news;
});

Route::get('/news/{id}/hide', function ($id) {

    $news = News::findOrFail($id);

    $news->hidden = true;
    NewsHidden::dispatch($news);
    $news->save();
    return 'News hidden';
});
