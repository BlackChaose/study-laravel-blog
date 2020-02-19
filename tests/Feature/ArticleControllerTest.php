<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        factory(\App\Article::class, 10)->create();
        $response = $this->get(route('articles.index'));
        $response->assertStatus(200);
    }

    public function testIndexWithQ()
    {
        [$article1, $article2] = factory(\App\Article::class, 2)->create();
        $response = $this->get(route('articles.index', ['q' => $article1->name]));
        $response->assertStatus(200);
        $response->assertSeeText($article1->name);
        $response->assertDontSeeText($article2->name);
        $response->assertSee(sprintf('value="%s"', e($article1->name)));
        $response->assertDontSeeText($article2->name);
    }

    public function testIndexWithQ2()
    {
        [$article1, $article2] = factory(\App\Article::class, 2)->create();
        $response = $this->get(route('articles.index', ['q' => $article1->name]));
        $response->assertStatus(200);
        $response->assertSeeText($article1->name);
        $response->assertSee(sprintf('value="%s"', e($article1->name)));
        $response->assertDontSeeText($article2->name);
    }
}

