<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Category;
use App\Models\Position;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class WebsiteController extends Controller
{
    public function home()
    {
        $jobs = Job::latest()->limit(4)->get();
        $categories = Category::all();
        $positions = Position::all();
        $pages = Page::all();
        return view('frontend.home', compact('jobs', 'categories', 'positions', 'pages'));
    }

    public function search(Request $request)
    {
        $jobs = Job::where('title', 'like', '%' . $request->search . '%')->get();
        return view('frontend.search', compact('jobs'));
    }

    public function jobs()
    {
        $jobs = Job::get();
        $categories = Category::inRandomOrder()->limit(8)->get();
        return view('frontend.jobs', compact('jobs', 'categories'));
    }

    public function singleJob($slug)
    {
        $job = Job::where('slug', $slug)->first();
        return view('frontend.singleJob', compact('job'));
    }

    public function blogs()
    {
        $blogs = Blog::get();
        return view('frontend.blogs', compact('blogs'));
    }

    public function singleBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend.singleBlog', compact('blog'));
    }

    public function jobCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $jobs = $category->jobs;
        return view('frontend.jobsCategoryList', compact('category', 'jobs'));
    }

    public function allCategory()
    {
        $categories = Category::all();
        return view('frontend.Categories', compact('categories'));
    }


    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function signOut()
    {
        auth()->logout();
        return redirect()->route('web.home');
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);
        Subscribe::create([
            'email' => $request->email,
        ]);

        notyf()->addSuccess('You have been subscribe successfully.');
        return redirect()->back();
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',

        ]);
        Contact::create([
            'firstName' => $request->firstname,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
        ]);
        notyf()->addSuccess('We contact you very soon.');
        return redirect()->back();
    }


    public function singlePage($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.singlePage', compact('page'));
    }

    public function applyStore($slug)
    {
        $job = Job::where('slug', $slug)->first();

        $apply = auth()->user()->apply()->create([
            'job_id' => $job->id,
        ]);
        notyf()->addSuccess('You have been applied successfully.');
        return back();
    }
}
