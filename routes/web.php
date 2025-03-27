<?php

use App\Livewire\Frontend\Faq;
use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Team;
use App\Livewire\Frontend\About;
use App\Livewire\Frontend\Blogs;
use App\Livewire\Frontend\Coming;
use App\Livewire\Frontend\Contact;
use App\Livewire\Frontend\Feature;
use App\Livewire\Frontend\Pricing;
use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\Testimonials;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/blogs', Blogs::class)->name('blogs');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/coming', Coming::class)->name('coming');
Route::get('/faq', Faq::class)->name('faq');
Route::get('/feature',  Feature::class)->name('feature');
Route::get('/pricing', Pricing::class)->name('pricing');
Route::get('/team', Team::class)->name('team');
Route::get('/testimonials', Testimonials::class)->name('testimonials');
