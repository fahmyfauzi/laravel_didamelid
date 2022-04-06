<?php

namespace App\Http\Controllers;

use App\Models\Jobs;

use App\Models\Category;
use Illuminate\Support\Str;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;



class JobController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Lowongan Pekerjaan ');
        SEOTools::setDescription('Langkah terbaik awal karirmu Temukan lebih dari 10.000 pekerjaan di situs ini Cari pekerjaan Keuangan Multimedia Teknologi Informasi Pemerintahan Kesehatan Otomotif Rekomendasi Pekerjaan Nilai dirimu dan temukan pekerjaan terbaik untukmu Pekerjaan Terbaru Happiness Hero Paxel Tasikmalaya Jasa Logistik Tasikmalaya Full Time Staff IT Plaza Asia Tasikmalaya Fashion Tasikmalaya Rp2.000.000 – Rp3.500.000 / month Full Time […]');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'JobPosting');
        return view('job.index', [
            'jobs' => Jobs::with(['category', 'company', 'author'])->latest()->filter(request(['search', 'category', 'location', 'type']))->paginate(7)->withQueryString(),
            'categories' => Category::all(),
        ]);
    }
    public function show(Jobs $job)
    {

        SEOMeta::setTitle($job->title);
        SEOMeta::setDescription(Str::limit(strip_tags(html_entity_decode($job->body)), 500, '...'));
        SEOMeta::addMeta('article:published_time', $job->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $job->category->name, 'property');
        SEOMeta::addKeyword(['Kerja', 'Turu', 'Mager']);

        SEOTools::setTitle($job->title);
        SEOTools::setDescription(Str::limit(strip_tags(html_entity_decode($job->body)), 500, '...'));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'JobPosting');

        OpenGraph::setTitle($job->title . ' - ' . $job->company->name)
            ->setDescription(Str::limit(strip_tags(html_entity_decode($job->body)), 500, '...'))
            ->setType('JobPosting')
            ->addImage($job->company->logo)
            ->setArticle([
                'published_time' => $job->created_at,
                'modified_time' => '-',
                'expiration_time' => $job->expiration_date,
                'author' => $job->author->name,
                'section' => $job->category->name,
                'tag' => 'pekerjaan , gawe , damel'
            ]);

        return view('job.show', [
            'categories' => Category::all(),
            'job' => $job,
            'jobs' => Jobs::where('user_id', $job->author->id)->latest()->take(7)->get(),


        ]);
    }
}
