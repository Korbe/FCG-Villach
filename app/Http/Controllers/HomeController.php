<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $latestPost = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'DESC')
            ->first();

        return Inertia::render('Public/Home', [
            'news' => News::with(['media'])->latest()->take(10)->get(),
            'latestPost' => $latestPost ? [
                'id' => $latestPost->id,
                'title' => $latestPost->title,
                'audio' => $latestPost->getFirstMediaUrl('audio'),
                'published_at' => $latestPost->published_at->format('d.m.Y'),
                'author' => $latestPost->author,
                'photo' => $latestPost->getFirstMediaUrl('photo')
                    ?: 'https://ui-avatars.com/api/?name=' . urlencode($latestPost->author) . '&color=0DB3E9&background=edfbff',
            ] : null,
        ]);
    }

    public function about(Request $request)
    {
        return Inertia::render('Public/About');
    }

    public function events(Request $request)
    {
        return Inertia::render('Public/Events');
    }

    public function donate(Request $request)
    {
        return Inertia::render('Public/Donate');
    }

    public function contact(Request $request)
    {
        return Inertia::render('Public/Contact');
    }

    public function heferlcafe(Request $request)
    {
        return Inertia::render('Public/HeferlCafe');
    }

    public function imprint(Request $request)
    {
        return Inertia::render('Public/Imprint');
    }

    public function privacy(Request $request)
    {
        return Inertia::render('Public/PrivacyPolicy');
    }

    public function blog(Request $request)
    {
        return Inertia::render('Public/Blog', [
            'posts' => Post::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'DESC')
                ->take(4)
                ->get()
                ->transform(function ($post) {
                    return [
                        'id' => $post->id,
                        'title' => $post->title,
                        'audio' => $post->getFirstMediaUrl('audio'),
                        'published_at' => $post->published_at->format('d.m.Y'),
                        'author' => $post->author,
                        'photo' => $post->getFirstMediaUrl('photo')
                            ?: 'https://ui-avatars.com/api/?name=' . urlencode($post->author) . '&color=0DB3E9&background=edfbff',
                    ];
                })
        ]);
    }

    public function archive(Request $request)
    {

        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'DESC')
            ->paginate(5)
            ->through(function ($post, $key) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'audio' => $post->getFirstMediaUrl('audio'),
                    'published_at' => $post->published_at->format('d.m.Y'),
                    'author' => $post->author,
                    'photo' => $post->getFirstMediaUrl('photo')
                        ?: 'https://ui-avatars.com/api/?name=' . urlencode($post->author) . '&color=0DB3E9&background=edfbff',
                ];
            });

        return Inertia::render('Public/BlogArchive', [
            'posts' => $posts
        ]);
    }

    public function postAudioViewed(Post $post)
    {
        $post->viewed = $post->viewed + 1;
        $post->save();

        return redirect()->back();
    }

    public function postAudioCompleted(Post $post)
    {
        $post->completed = $post->completed + 1;
        $post->save();

        return redirect()->back();
    }
}
