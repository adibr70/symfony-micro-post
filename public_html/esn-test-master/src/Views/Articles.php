<?php


namespace EsnTest\Views;

use EsnTest\TestController;

class Articles extends AbstractView
{

    /**
     * Articles Page View
     *
     * @route("articles")
     *
     * @alias("/articles")
     */
    public function articles()
    {
        // We call our test controller for the data we need later in twig.
        $testController = new TestController();

        // And we render the data.
        $this->render('articles.twig', [
            'data_t2' => $testController->getNews(),
            'num_articles' => $testController->countNews()
        ]);

    }

    /**
     * Specific Article Page View
     *
     * @route("/article/{slug}")
     * @param $slug
     */
    public function article($slug)
    {
        // We call our test controller for the data we need later in twig.
        $testController = new TestController();

        // get all news
        $news = $testController->getNews();
        $newsBySlug = array();
        foreach($news as $n) {
            if($n['slug'] == $slug){
                $newsBySlug = $n;
            }
        }
        // And we render the data.
        if($newsBySlug) {
            $this->render('article.twig', [
                'news_by_slug' => $newsBySlug
            ]);
        }else {
            $this->render('404.twig');
        }

    }
}