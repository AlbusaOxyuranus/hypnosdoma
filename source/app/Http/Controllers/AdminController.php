<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Article;
use App\Contact;
use App\Event;
use App\Info;
use App\LearningQuestion;
use App\Package;
use App\Payment_form;
use App\Rewiew;
use App\SEOPage;
use App\Specialist;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_panel.index');
    }

    public function specialists()
    {
        $specialists = Specialist::all();
        return view('admin_panel.specialist.specialists', compact('specialists'));
    }

    public function packages()
    {
        $packages = Package::all();
        return view('admin_panel.packege.packages', compact('packages'));
    }

    public function rewiews()
    {
        $rewiews = Rewiew::all();
        return view('admin_panel.rewiews.rewiews', compact('rewiews'));
    }

    public function contacts()
    {
        $contacts = Contact::all();
        return view('admin_panel.contacts.contacts', compact('contacts'));
    }

    public function seo()
    {
        $seo_pages = SEOPage::all();
        return view('admin_panel.seo.seo', compact('seo_pages'));
    }

    public function advantages()
    {
        $advantages = Advantage::all();
        return view('admin_panel.advantages.advantages', compact('advantages'));
    }

    public function articles()
    {
        $articles = Article::all();
        return view('admin_panel.articles.articles', compact('articles'));
    }

    public function events()
    {
        $events = Event::all();
        return view('admin_panel.events.events', compact('events'));
    }

    public function payment_forms()
    {
        $payment_forms = Payment_form::all();
        return view('admin_panel.payment_forms.payment_forms', compact('payment_forms'));
    }

    public function infos()
    {
        $infos = Info::all();
        return view('admin_panel.infos.infos', compact('infos'));
    }

    public function learning_questions()
    {
        $learning_questions = LearningQuestion::all();
        return view('admin_panel.learning_questions.learning_questions', compact('learning_questions'));
    }
}
